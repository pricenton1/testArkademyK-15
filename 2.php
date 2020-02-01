<?php
//membuat validasi username 
$_POST['username'] = 'xANTONx';
$username=$_POST['username'];
if (!preg_match('/^[x][A-Z]{4,7}[x]$/',$username)) 
{
  echo "username invalid<br>";
}
else
{
  echo "username valid<br>";
}


//membuat validasi password 
$_POST['password'] = 'kick2XXX!';
$password=$_POST['password'];
if (!preg_match('/^([a-z0-9])+[A-Z]{3}\!$/',$password)) 
{
  echo "password invalid<br>";
}
else
{
  echo "password valid<br>";
}

?>
