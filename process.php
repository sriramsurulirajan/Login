<?php
   $username =$_GET ['username'];
   $password =$_GET ['password'];

   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysql_real_escape_string($username);
   $password = mysql_real_escape_string($password);

   mysql_connect("localhost","root","");
   mysql_select_db("login");

   $result = mysql_query("SELECT * FROM users WHERE username = '$username' and password = '$password'")
                  or die ("failed".mysql_error());
    $row   = mysql_fetch_array($result);
    if ($row['username'] == $username && $row['password'] == $password)
{
    echo "login success!!!".$row['username'];
}
else
{
    echo"failed";
}
?>