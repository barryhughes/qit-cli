<?php

namespace QIT_CLI;

use QIT_CLI\Exceptions\DoingAutocompleteException;

class RequestBuilder implements \JsonSerializable {
	/** @var string $url */
	protected $url;

	/** @var string $method */
	protected $method = 'GET';

	/** @var array<scalar> $post_body */
	protected $post_body = [];

	/** @var array<int, mixed> $curl_opts */
	protected $curl_opts = [];

	/** @var array<int> */
	protected $expected_status_codes = [ 200 ];

	public function __construct( string $url = '' ) {
		$this->url = $url;
	}

	/**
	 * @param string $url The URL to send the request to.
	 *
	 * @return $this
	 */
	public function with_url( string $url ): self {
		$this->url = $url;

		return $this;
	}

	/**
	 * @param string $method The HTTP method. Defaults to "GET".
	 *
	 * @return $this
	 */
	public function with_method( string $method ): self {
		$this->method = $method;

		return $this;
	}

	/**
	 * @param array<scalar> $post_body Optionally set curl's post_body.
	 *
	 * @return $this
	 */
	public function with_post_body( array $post_body ): self {
		$this->post_body = $post_body;

		return $this;
	}

	/**
	 * @param array<int, mixed> $curl_opts Optionally set curl's curl_opts.
	 *
	 * @return $this
	 */
	public function with_curl_opts( array $curl_opts ): self {
		$this->curl_opts = $curl_opts;

		return $this;
	}

	/**
	 * @param array<int> $expected_status_codes Optionally set expected response status code.
	 *
	 * @return $this
	 */
	public function with_expected_status_codes( array $expected_status_codes ): self {
		$this->expected_status_codes = $expected_status_codes;

		return $this;
	}

	public function request(): string {
		if ( empty( $this->url ) ) {
			throw new \LogicException( 'URL cannot be empty.' );
		}

		// Early bail: Do not make remote requests when doing completion.
		if ( App::getVar( 'doing_autocompletion' ) ) {
			throw new DoingAutocompleteException();
		}

		$curl = curl_init();

		$curl_parameters = [
			CURLOPT_URL            => $this->url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
		];

		$this->post_body['client'] = 'qit_cli';

		// Is this a CD Manager request?
		if ( strpos( $this->url, get_manager_url() ) === 0 ) {
			$this->post_body['cd_secret'] = App::make( Auth::class )->get_auth();
		}

		switch ( $this->method ) {
			case 'GET':
				// no-op.
				break;
			case 'POST':
				$curl_parameters[ CURLOPT_POST ]       = true;
				$curl_parameters[ CURLOPT_POSTFIELDS ] = $this->post_body;
				break;
			default:
				$curl_parameters[ CURLOPT_CUSTOMREQUEST ] = $this->method;
				break;
		}

		if ( ! empty( $this->curl_opts ) ) {
			$curl_parameters = array_replace( $curl_parameters, $this->curl_opts );
		}

		curl_setopt_array( $curl, $curl_parameters );
		$result = curl_exec( $curl );

		$response_status_code = curl_getinfo( $curl, CURLINFO_HTTP_CODE );

		if ( ! in_array( $response_status_code, $this->expected_status_codes, true ) ) {
			throw new \Exception(
				sprintf(
					'Expected return status code(s): %s. Got return status code: %s. Error message: %s',
					implode( ', ', $this->expected_status_codes ),
					$response_status_code,
					$result
				),
				$response_status_code
			);
		}

		curl_close( $curl );

		return $result;
	}

	/**
	 * @return array<mixed> The array version of this class.
	 */
	public function to_array(): array {
		return [
			'url'                   => $this->url,
			'method'                => $this->method,
			'post_body'             => $this->post_body,
			'curl_opts'             => $this->curl_opts,
			'expected_status_codes' => $this->expected_status_codes,
		];
	}

	public function jsonSerialize() {
		return $this->to_array();
	}
}
