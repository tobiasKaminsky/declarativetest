<?php

declare(strict_types=1);

/**
 * SPDX-FileCopyrightText: 2025 Nextcloud GmbH and Nextcloud contributors
 * SPDX-License-Identifier: AGPL-3.0-or-later
 */

namespace OCA\DeclarativeTest;

use OCP\Capabilities\ICapability;

class Capabilities implements ICapability {
	/**
	 * @return array{files: array{comments: bool}}
	 */
	public function getCapabilities(): array {
		return [
			'declarativeui' => [
				'context-menu' => [
					["List all UI elements", "/ocs/v2.php/apps/declarativetest/all"]
				],
			]
		];
	}
}
