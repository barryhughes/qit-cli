<?php

use lucatume\DI52\Container;
use QIT_CLI\App;
use QIT_CLI\Commands\CreateRunCommands;
use QIT_CLI\Commands\DevModeCommand;
use QIT_CLI\Commands\GetCommand;
use QIT_CLI\Commands\ListCommand;
use QIT_CLI\Commands\WooExtensionsCommand;
use QIT_CLI\Config;
use QIT_CLI\Environment;
use QIT_CLI\IO\Input;
use QIT_CLI\IO\Output;
use QIT_CLI\TestTypes;
use Stecman\Component\Symfony\Console\BashCompletion\CompletionCommand;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/helpers.php';

// Initialize DI container.
$container = new Container();
App::setContainer( $container );
$container->singleton( Config::class );

// Initialize Console.
$application = new class( 'Quality Insights Toolkit CLI', '@QIT_CLI_VERSION@' ) extends Application {
	// Expose protected method.
	// phpcs:ignore Generic.CodeAnalysis.UselessOverridingMethod.Found
	public function configureIO( InputInterface $input, OutputInterface $output ) {
		parent::configureIO( $input, $output );
	}

	public function getDefaultCommands() {
		return array_merge(
			parent::getDefaultCommands(),
			[ new CompletionCommand() ]
		);
	}
};
$application->setAutoExit( true );
$application->setCatchExceptions( true );
$application->find( 'completion' )->setHidden( true );
$application->find( 'list' )->setHidden( true );

// Define a global input/output for convenience.
$container->singleton( Input::class, function () {
	return new ArgvInput();
} );
$container->singleton( Output::class, function () {
	return new ConsoleOutput();
} );
$application->configureIO( $container->make( Input::class ), $container->make( Output::class ) );

$container->setVar( 'doing_autocompletion', stripos( (string) $container->make( Input::class ), '_completion' ) !== false );

$env = App::make( Environment::class );

// Global commands.
$application->add( $container->make( DevModeCommand::class ) );

// Partner commands.
$application->add( $container->make( \QIT_CLI\Commands\Partner\AddPartner::class ) );

// Only show option to Remove Partner if there are Partners to remove.
if ( count( $env->get_configured_environments( true ) ) > 0 ) {
	$application->add( $container->make( \QIT_CLI\Commands\Partner\RemovePartner::class ) );
}

// Only show option to Switch to another partner if there are more than one Partner.
if ( count( $env->get_configured_environments( true ) ) > 1 ) {
	$application->add( $container->make( \QIT_CLI\Commands\Partner\SwitchPartner::class ) );
}

// Dev commands.
if ( $env->is_development_mode() ) {
	$application->add( $container->make( \QIT_CLI\Commands\Environment\AddEnvironment::class ) );

	// Only show options to remove and see the current environment if there's at least one environment added.
	if ( $env->get_configured_environments( false ) > 0 ) {
		$application->add( $container->make( \QIT_CLI\Commands\Environment\RemoveEnvironment::class ) );
		$application->add( $container->make( \QIT_CLI\Commands\Environment\CurrentEnvironment::class ) );
	}

	// Only show option to Switch to another environment if there are more than one environment.
	if ( $env->get_configured_environments( false ) > 1 ) {
		$application->add( $container->make( \QIT_CLI\Commands\Environment\SwitchEnvironment::class ) );
	}

	if ( $env->is_partner_environment() ) {
		$application->add( $container->make( \QIT_CLI\Commands\Partner\SetManagerCommand::class ) );
	}
}

// Commands that require initialization.
if ( $container->make( Config::class )->is_initialized() ) {
	App::make( \QIT_CLI\ManagerSync::class )->maybe_sync();

	// Dynamically create commands to run tests, based on Schema fetched from Manager REST API.
	$container->make( CreateRunCommands::class )->register_run_commands( $application );

	// List tests runs.
	$application->add( $container->make( ListCommand::class ) );

	// Get a single test run.
	$application->add( $container->make( GetCommand::class ) );

	// List the Woo Extensions the user can run tests against.
	$application->add( $container->make( WooExtensionsCommand::class ) );
}

if ( $container->make( Output::class )->isVerbose() ) {
	$container->make( Output::class )->writeln( sprintf( '<info>QIT Environment: %s</info>', $container->make( Environment::class )->get_current_environment() ) );
}

// Handle CLI request.
$application->run();
