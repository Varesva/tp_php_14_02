<?php

function MonOrm(){
    $conn = new mysqli('localhost', 'root', 'root');

    if ($conn->connect_error)
      die(sprintf('Unable to connect to the database. %s', $conn->connect_error));
    require "SimpleOrm.class.php";
    SimpleOrm::useConnection($conn, 'db_tp_14_02');
    }