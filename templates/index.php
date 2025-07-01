<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\DeclarativeTest\AppInfo\Application::APP_ID, OCA\DeclarativeTest\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\DeclarativeTest\AppInfo\Application::APP_ID, OCA\DeclarativeTest\AppInfo\Application::APP_ID . '-main');

?>

<div id="declarativetest"></div>
