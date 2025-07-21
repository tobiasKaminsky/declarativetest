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
class ApiController extends OCSController
{
	/**
	 * An example API endpoint
	 *
	 * @return DataResponse<Http::STATUS_OK, array{message: string}, array{}>
	 *
	 * 200: Data returned
	 */
	#[NoAdminRequired]
	#[ApiRoute(verb: 'GET', url: '/api')]
	public function index(): DataResponse
	{
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
	public function all(): JSONResponse
	{
		return new JSONResponse(
			[
				'version' => 0.1,
				'root' => [
					"orientation" => "vertical",
					"rows" => [
						[
							"children" => [
								[
									'Button' => [
										'label' => "Submit",
										'type' => "primary",
									],
									'Image' => [
										'url' => "/core/img/logo/logo.png"
									],
									[
										"element" => "Text",
										"text" => "Hello World!"
									],
								]
							]
						]
					]
				]
			]
		);
	}

	/**
	 * First version
	 *
	 * @return JSONResponse
	 *
	 * 200: Data returned
	 */
	#[NoAdminRequired]
	#[ApiRoute(verb: 'GET', url: '/version1')]
	public function version1(): JSONResponse
	{
		return new JSONResponse(
			[
				'version' => 0.1,
				'root' => [
					"orientation" => "vertical",
					"rows" => [
						[
							"children" => [
								[
									"element" => "Button",
									"type" => "primary",
									"label" => "Submit"
								],
								[
									"element" => "Button",
									"type" => "secondary",
									"label" => "Cancel"
								]
							]
						],
						[
							"children" => [
								[
									"element" => "Text",
									"text" => "Hello World!"
								],
								[
									"element" => "Image",
									"url" => "/core/img/logo/logo.png"
								]
							]
						]
					]
				]
			]);
	}

	/**
	 * Dummy new deck board
	 *
	 * @return JSONResponse
	 *
	 * 200: Data returned
	 */
	#[NoAdminRequired]
	#[ApiRoute(verb: 'GET', url: '/newDeckBoard')]
	public function newDeckBoard(): JSONResponse
	{
		return new JSONResponse(
			[
				'version' => 0.1,
				'root' => [
					"orientation" => "vertical",
					"rows" => [
						[
							"children" => [
								[
									"element" => "Text",
									"text" => "Create Deck Board!"
								],
							]
						]
					]
				]
			]);
	}
}
