<?php include('database_config.php') ?>
<?php
    $connection = new mysqli($config['server'], $config['username'], $config['password'], $config['database']);
    if($connection->connect_error){
        die('Connection failed: ' . $connection->connect_error);
    }