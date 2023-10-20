<?php
namespace MVC\Controllers;

require_once __DIR__ . '/../models/ModuleModel.php';

use MVC\Models\ModuleModel;

class ModuleController {
    private $model;

    public function __construct() {
        $this->model = new ModuleModel();
    }

    public function index() {
        $modules = $this->model->getAllModules();
        require __DIR__ . '/../views/ModuleView.php';
    }
}
