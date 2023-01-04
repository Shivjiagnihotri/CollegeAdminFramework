<?php
      $dbhost='localhost';
      $dbuser='root';
      $dbpass="";
      $dbdbname='college administration framework';


    if (!$connn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
      {
die("failed to connect!");
      }