<?php


include "core/modules/".Module::$module."/model/Lot.php";

include "core/modules/".Module::$module."/view/layout.php";






session_start();
ob_start();

Module::loadLayout("index");

?>