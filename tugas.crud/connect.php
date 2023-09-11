<?php
            $database = "db_users";
            $server = "localhost";
            $user = "root";
            $password = ""; 

            $conn = new mysqli($server,$user,$password,$database);
            // Check connection
            if ($conn -> connect_error) {
              die( "Failed to connect to MySQL: " . $conn -> connect_error);
            }
?> 