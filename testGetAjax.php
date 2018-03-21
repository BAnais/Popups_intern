<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "test11";
try
        {
            // Create connection to MYSQL database
            // Fourth true parameter will allow for multiple connections to be made
            $db_connection = mysql_connect ($host, $user, $password, true);
            mysql_select_db ($database);
            if (!$db_connection)
            {
                throw new Exception('MySQL Connection Database Error: ' . mysql_error());
                $co = false;
            }
            else
            {
                $co = true;
            }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }

echo json_encode(array('name'=> 'John', 'time'=> '2pm', 'co' => $co));
 ?>
