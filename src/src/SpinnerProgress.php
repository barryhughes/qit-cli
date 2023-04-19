<?php

namespace QIT_CLI;

use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * This package is ported from https://github.com/icanhazstring/symfony-console-spinner
 * All credits to the maintainers of that repository.
 * Available in Packagist under the name `icanhazstring/symfony-console-spinner`
 */
class SpinnerProgress {
	private const CHARS = [ '⠏', '⠛', '⠹', '⢸', '⣰', '⣤', '⣆', '⡇' ];

	/**
	 * @var ProgressBar
	 */
	private $progressBar;
	/**
	 * @var int
	 */
	private $step;

	public function __construct( OutputInterface $output, int $max = 0 ) {
		$this->progressBar = new ProgressBar( $output->section(), $max );
		$this->progressBar->setBarCharacter( '✔' );
		$this->progressBar->setFormat( '%bar%  %message%' );
		$this->progressBar->setBarWidth( 1 );
		$this->progressBar->setRedrawFrequency( 31 );

		$this->step = 0;
	}

	public function advance( int $step = 1 ): void {
		$this->step += $step;
		$this->progressBar->setProgressCharacter( self::CHARS[ $this->step % 8 ] );
		$this->progressBar->advance( $step );
	}

	public function setMessage( string $message ): void {
		$this->progressBar->setMessage( $message, 'message' );
	}

	public function start(): void {
		for ( $i = 0; $i < 100; $i ++ ) {
			usleep( 1000 );
			$this->advance();
		}
	}

	public function finish(): void {
		$this->progressBar->finish();
	}

	public function getProgressBar(): ProgressBar {
		return $this->progressBar;
	}
}