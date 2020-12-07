<?php

//Including Database configuration file.

include_once("php/config.php");

//Getting value of "search" variable from "script.js".

if (isset($_POST['search'])) {

//Search box value assigning to $Name variable.

   $Name = $_POST['search'];

//Search query.

   $Query = "SELECT places FROM tours WHERE places LIKE '%$Name%' LIMIT 5";

//Query execution

   $ExecQuery = mysqli_query($conn, $Query);

//Creating unordered list to display result.

   echo '

<ul>

   ';

   //Fetching result from database.

   while ($Result = mysqli_fetch_array($ExecQuery)){

       
echo' 
   <li style="color: white;" onclick="fill('.$Result['Name'].')">

   <a>';

   
  echo $Result['Name'];

echo   '</li></a>

   <!-- Below php code is just for closing parenthesi

  



</ul>';
}}
?>