<?php

namespace QIT_CLI\Commands\Environment;

use QIT_CLI\Environment;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RemoveEnvironment extends Command {
	protected static $defaultName = 'env:remove'; // phpcs:ignore WordPress.NamingConventions.ValidVariableName.PropertyNotSnakeCase

	/** @var Environment $environment */
	protected $environment;

	public function __construct( Environment $environment ) {
		$this->environment = $environment;
		parent::__construct();
	}

	protected function configure() {
		$this
			->setDescription( 'Removes an environment that had been previously configured. This is a non-destructive action that does not remove any data in remote servers.' )
			->addArgument( 'environment', InputArgument::REQUIRED, 'The environment to remove.' );
	}

	protected function execute( InputInterface $input, OutputInterface $output ): int {
		$environment = $input->getArgument( 'environment' );

		try {
			$this->environment->remove_environment( $environment );
		} catch ( \InvalidArgumentException $e ) {
			$output->writeln( sprintf( '<comment>%s</comment>', $e->getMessage() ) );

			return Command::FAILURE;
		} catch ( \RuntimeException $e ) {
			$output->writeln( sprintf( '<comment>%s</comment>', $e->getMessage() ) );

			return Command::SUCCESS;
		}

		$output->writeln( "<info>Environment '$environment' unset successfully.</info>" );

		return Command::SUCCESS;
	}
}
