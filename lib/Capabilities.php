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
							["name" => "Convert to PDF", "url" => "/ocs/v2.php/apps/declarativetest/version1", "filter" => "image/"],
							["name" => "Create transcript", "url" => "/ocs/v2.php/apps/declarativetest/version1", "filter" => "audio/"],
							["name" => "Create zip file", "url" => "/ocs/v2.php/apps/declarativetest/version1"],
						]
					],
					[
						"type" => "create-new",
						"endpoints" => [
							["name" => "Deck board", "url" => "/ocs/v2.php/apps/declarativetest/newDeckBoard"],
							["name" => "New Contact", "url" => "/ocs/v2.php/apps/declarativetest/newContact"],
						]
					],
				]
			]
		];
	}
}
