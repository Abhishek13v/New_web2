<?php
$name=trim(string: $_POST["name"]);
$phone=trim(string: $_POST["phone"]);
$email=trim(string: $_POST["email"]);
$errors=array();
if(empty($name))
{
    $errors[]="name is required";
}
if(empty($phone))
{
    $errors[]="phone no. is required";
}
if(empty($email))
{
    $errors[]="email is required";
}
if(!empty($errors))
{
    echo"<h3>Form error</h3>";
    echo"<ul>";

    foreach($errors as $error){
        echo"<li> $error </li>";
}
echo"</ul>";}
else{
    echo"<h3> form submitted sucessfully</h3>";
    echo"name:$name<br>";
    echo"phone:$phone<br>";
    echo"email:$email<br>";
}
?>
