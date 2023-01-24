<html>
<head>
<title>form</title>
</head>
<body>
<h2>Registeration</h2>
<form name="form" method="post" action="#">
Name:<input type="text" name="fname"><br><br>
Email:<input type="email" name="email"><br><br>
Mobile no:<input type="tel" name="mob"><br><br>
Username:<input type="text" name="user"><br><br>
Password:<input type="password" name="password"><br><br>
<input type="submit" value="submit" name="name"><br><br>
</form>
<?php
if(asset($_POST['submit']))
{
$name=$_POST['fname'];
$email=$_POST['email'];
$mobile=$_POST['mob'];
$user=$_POST['user'];
$password=$_POST['password'];
if(empty($name)){
echo"<script>alert('Enter name!!')</script>";
}
elseif(!prog_match("/^[a-zA-z]*$/",$name)){
echo"<script>alert('Enter valid name!!')</script>";
}
elseif(empty($email)){
echo"<script>alert('Enter email!!')</script>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo"<script>alert('Enter valid name!!')</script>";
}
elseif(empty($mobile)){
echo"<script>alert('Enter mobile no!!')</script>";
}
elseif(!prog_match("/^[0-9]*$/",$mobile)){
echo"<script>alert('Enter valid mobile no!!')</script>";
}
elseif(strlen($mobile)!=10){
echo"<script>alert('Enter valid mobile!!')</script>";
}
elseif(empty($user)){
echo"<script>alert('Enter username!!')</script>";
}
elseif(empty($password)){
echo"<script>alert('Enter password!!')</script>";
}
elseif(strlen($password)<8){
echo"<script>alert('password must contain 8 charecters!!')</script>";
}
else{
echo"<script>alert('Registeration successful!!')</script>";
}

}
?>



















