<?php

# Global config
define('BASE_PATH', dirname(__DIR__) . '/');
# Folders
define('CORE_PATH', BASE_PATH . 'core/');
define('APP_PATH', BASE_PATH . 'app/');
define('PUBLIC_PATH', BASE_PATH . 'public/');

# Calls the autoload class 
require_once CORE_PATH . 'melodica/autoload.php';
