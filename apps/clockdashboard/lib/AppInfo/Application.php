<?php
// Developed using nextcloud dashboard tutorial
// https://cloud.nextcloud.com/s/iyNGp8ryWxc7Efa?path=/ 
declare(strict_types=1);

namespace OCA\ClockDashboard\AppInfo;

use OCA\ClockDashboard\Dashboard\ClockWidget;
use OCP\AppFramework\App;
use OCP\AppFramework\Bootstrap\IBootContext;
use OCP\AppFramework\Bootstrap\IBootstrap;
use OCP\AppFramework\Bootstrap\IRegistrationContext;

class Application extends App implements IBootstrap {
	public const APP_ID = 'clockdashboard';

	/** @psalm-suppress PossiblyUnusedMethod */
	public function __construct(array $urlParams = []) {
		parent::__construct(self::APP_ID, $urlParams);
	}

	public function register(IRegistrationContext $context): void {
		$context->registerDashboardWidget(ClockWidget::class);
	}

	public function boot(IBootContext $context): void {
	}
}
