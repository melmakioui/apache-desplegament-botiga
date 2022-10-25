<?php

class Connexio
{

  public static function connect()
  {

    $conn = new mysqli('localhost', 'root', 'Manacor123-', 'myDB');

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
  }
}
