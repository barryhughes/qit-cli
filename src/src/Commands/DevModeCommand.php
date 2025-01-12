<?php

namespace QIT_CLI\Commands;

use QIT_CLI\Config;
use QIT_CLI\Environment;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DevModeCommand extends Command {
	protected static $defaultName = 'dev'; // phpcs:ignore WordPress.NamingConventions.ValidVariableName.PropertyNotSnakeCase

	/** @var Environment $environment */
	protected $environment;

	public function __construct( Environment $environment ) {
		$this->environment = $environment;
		parent::__construct();
	}

	protected function configure() {
		$this
			->setDescription( 'Enabled QIT CLI development mode.' )
			->setHidden( true );
	}

	protected function execute( InputInterface $input, OutputInterface $output ): int {
		if ( Config::is_development_mode() ) {
			$output->writeln( '<info>QIT CLI is already in development mode.</info>' );

			return Command::SUCCESS;
		}

		Config::set_development_mode( true );

		$output->writeln( '<info>Enabled QIT CLI development mode.</info>' );

		return Command::SUCCESS;
	}
}
