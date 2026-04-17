<?php

function melodicaAutoload($className) {
    static $classes;

    # Class definitions
    $classes ??= [
    ];

    $class = $classes[$className];

    # Checks if the class file exists. 
    if (isset($class)) {
        include $class;
        return;
    }
}

# Add function to autoload
spl_autoload_register('melodicaAutoload');