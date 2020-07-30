<?php

require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

use App\Controllers\AdminController;

AdminController::show();