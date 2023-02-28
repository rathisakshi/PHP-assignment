<?php
$email = "sakshi.rathi@sigmainfo.net";
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    Echo "This email address is valid";
}
else{
    echo"This email address is invalid";
}
?>

