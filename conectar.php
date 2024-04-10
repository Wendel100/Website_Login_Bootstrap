<?php
if($_SERVER['request_method']=='post'){
    $email =$_POST['email'];
    echo($email);
}
?>