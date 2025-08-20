<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2025 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace OCA\DeclarativeTest;

use OCP\Capabilities\ICapability;

class Capabilities implements ICapability
{
	/**
	 * @return array{files: array{comments: bool}}
	 */
	public function getCapabilities(): array
	{
		return [
			'declarativeui' => [
				"hooks" => [
					[
						"type" => "context-menu",
						"endpoints" => [
							["name" => "List all UI elements", "url" => "/ocs/v2.php/apps/declarativetest/all"],
							["name" => "First version", "url" => "/ocs/v2.php/apps/declarativetest/version1"],
							["name" => "Convert to PDF", "url" => "/ocs/v2.php/apps/declarativetest/convertFile/123123", "filter" => "image/"],
							["name" => "Create transcript", "url" => "/ocs/v2.php/apps/declarativetest/version1", "filter" => "audio/", "android_icon" => "file_sound"],
							["name" => "Create zip file", "url" => "/ocs/v2.php/apps/file_zip/zip/1231123", "android_icon" => "file_zip", "ios_icon" => "zip", "desktop_icon" => "zip"],
							["name" => "Unzip", "url" => "/ocs/v2.php/apps/declarativetest/version1", "filter" => "application/zip", "android_icon" => "file_zip"],
						]
					],
					[
						"type" => "create-new",
						"endpoints" => [
							["name" => "Deck board", "url" => "/ocs/v2.php/apps/declarativetest/newDeckBoard"],
							["name" => "New Contact", "url" => "/ocs/v2.php/apps/declarativetest/newContact", "android_icon" => "file_vcard"],
						]
					],
				]
			]
		];
	}
}
