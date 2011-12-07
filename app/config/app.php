<?php

return array(
    'title' => 'Pretty Awesome Blog',
    'titleSeparator' => ' / ',
    
    'db' => array(
        'host' => 'localhost',
        'username' => 'root',
        'password' => '1',
        'dbname' => 'projects_pab',
        'driver_options' => array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    )
);
