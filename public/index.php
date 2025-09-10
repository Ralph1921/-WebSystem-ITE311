<?php

/**
 * CodeIgniter 4 Bootstrap 3 Public Index
 */

// Path to the system folder
define('SYSTEMPATH', realpath('../system') . DIRECTORY_SEPARATOR);

// Path to the application folder
define('APPPATH', realpath('../app') . DIRECTORY_SEPARATOR);

// Path to the writable folder
define('WRITEPATH', realpath('../writable') . DIRECTORY_SEPARATOR);

// Load the CodeIgniter bootstrap file
require SYSTEMPATH . 'CodeIgniter.php';
