<?php

require_once "controllers/templates.controller.php";
require_once "controllers/clients.controller.php";
require_once "controllers/users.controller.php";
require_once "controllers/sales.controller.php";
require_once "controllers/categories.controller.php";
require_once "controllers/products.controller.php";

require_once "models/categories.models.php";
require_once "models/products.models.php";
require_once "models/sales.models.php";
require_once "models/users.models.php";

$template = new ControllerTemplate();
$template->CtrlTemplate();
