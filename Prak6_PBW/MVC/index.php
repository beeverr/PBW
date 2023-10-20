<?php
require_once __DIR__ . '/controllers/ModuleController.php';

use MVC\Controllers\ModuleController;

$controller = new ModuleController();
$controller->index();
