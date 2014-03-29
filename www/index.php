<?php
define("START_MEMORY",memory_get_usage(false));
define("START_TIME",microtime( true ));
chdir(dirname(__DIR__));                        // Everything is called from here (www)
define("SITE_ROOT",__DIR__);                    // Define the Site Root - so the www can be located
include_once 'autoload.php';                    // Get the autoloader
new Sketch\Sketch(include_once("config.php"));  // Start Sketch