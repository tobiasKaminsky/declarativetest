<?php

declare(strict_types=1);

namespace OCA\DeclarativeTest\Controller;

use OCP\AppFramework\Http;
use OCP\AppFramework\Http\Attribute\ApiRoute;
use OCP\AppFramework\Http\Attribute\NoAdminRequired;
use OCP\AppFramework\Http\DataResponse;
use OCP\AppFramework\Http\JSONResponse;
use OCP\AppFramework\OCSController;

/**
 * @psalm-suppress UnusedClass
 */
class ApiController extends OCSController {
	/**
	 * An example API endpoint
	 *
	 * @return DataResponse<Http::STATUS_OK, array{message: string}, array{}>
	 *
	 * 200: Data returned
	 */
	#[NoAdminRequired]
	#[ApiRoute(verb: 'GET', url: '/api')]
	public function index(): DataResponse {
		return new DataResponse(
			['message' => 'Hello world!']
		);
	}

	/**
	 * List all UI elements
	 *
	 * @return JSONResponse
	 *
	 * 200: Data returned
	 */
	#[NoAdminRequired]
	#[ApiRoute(verb: 'GET', url: '/all')]
	public function all(): JSONResponse {
		return new JSONResponse(
			[
				'Button' => [
					'label' => "Submit",
					'type' => "primary",
				],
				'Image' => [
					'url' => "/core/img/logo/logo.png"
				]
			]
		);
	}
}
