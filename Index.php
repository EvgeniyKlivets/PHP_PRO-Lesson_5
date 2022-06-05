<?php
spl_autoload_register(function ($class_name) {
    $class_name = '/' . str_replace('\\', '/', $class_name);
    $blue = __DIR__ . $class_name . '.php';
    if (file_exists($blue)) {
        require_once $blue;
    } else {
        die("file haven't");
    }
});

/*use App\Models\User;
use App\Models\Product;
use App\Models\Order;*/

use Models\User;
use Models\Product;
use Models\Order;

use App\Http\Helpers\ImageHelper;

use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\OrdersControllers;
use App\Http\Controllers\Admin\DashboardController;

$User = new User();
$Product = new Product();
$Order = new Order();

$ImageHelper = new ImageHelper();

$MainController = new MainController();
$OrdersControllers = new OrdersControllers();
$DashboardController = new DashboardController();
