<?php
//require_once('/var/www/malchin/config/ProjectConfiguration.class.php');
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');


$configuration = ProjectConfiguration::getApplicationConfiguration('front', 'prod', false);
define('WP_DEBUG', false);
error_reporting(E_ALL & ~E_DEPRECATED);
sfContext::createInstance($configuration)->dispatch();
