<?php
  $message = '';
  $connection = mysqli_connect("localhost", "maki", "team3", "product");

  if (mysqli_connect_errno())
    echo 'Failed to connect to the MySQL server: '. mysqli_connect_error();
  else
	$message = 'Connection is OK';
?>