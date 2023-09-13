<?php
session_start();

$c = $_GET['c'] ?? 'emp';
$a = $_GET['a'] ?? 'index';

$str = ucfirst($c) . "Controller";

require "controller/$str.php";

require 'config.php';
require 'connectDB.php';

require 'model/Emp.php';
require 'model/EmpRepository.php';

require 'model/Dep.php';
require 'model/DepRepository.php';

require 'model/Customer.php';
require 'model/CustomerRepository.php';

$controller = new $str;
$controller->$a();
