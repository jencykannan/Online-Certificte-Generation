<!DOCTYPE html>
<html>
<head>
<title>admin</title>
<style>
body{
margin: 0;
padding: 0;
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
font-family: 'Jost', sans-serif;
background-image:url("https://img.freepik.com/free-photo/abstract-luxury-blur-dark-grey-black-gradient-used-as-background-studio-wall-display-your-products_1258-54743.jpg?w=360");
background-size:cover;}

.main{
width: 350px;
height: 400px;
background: red;
overflow: hidden;
background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
border-radius: 10px;
box-shadow: 5px 20px 50px #000;
background-color:black;
}
#chk{
display: none;
}
.signup{
position: relative;
width:100%;
height: 100%;

}
label{
color: orange;
font-size: 2.3em;
justify-content: center;
display: flex;
margin: 60px;
font-weight: bold;
cursor: pointer;
transition: .5s ease-in-out;
}
input,select{
width: 60%;
height: 20px;
background: #e0dede;
justify-content: center;
display: flex;
margin: 20px auto;
padding: 10px;
border: none;
outline: none;
border-radius: 5px;
}
button{
width: 60%;
height: 40px;
margin: 10px auto;
justify-content: center;
display: block;
color: black;
background:orange;
font-size: 1em;
font-weight: bold;
margin-top: 20px;
outline: none;
border: none;
border-radius: 5px;
transition: .2s ease-in;
cursor: pointer;
}

.login{
height: 500px;
background: orange;
border-radius:5px
transform: translateY(-180px);
transition: .8s ease-in-out;
}
.login label{
color: black;

}
.l{color:orange;background-color:black;}


    </style>

</head>
<body>
<div class="main">  
<input type="checkbox" id="chk" aria-hidden="true">
<div class="login">
<form method="post">
<label for="chk" aria-hidden="true">Login</label>

<input type="text" name="em" placeholder="name" required="">
<input type="password" name="pa" placeholder="Password" required="">
<button class="l" name="log">Login</button>
</form>
</div>
</div>
</div>
</body>
</html>




<?php
error_reporting(E_ALL & ~E_WARNING);
include'db.php';
$e=$_POST["em"];
$p=$_POST["pa"];
$select="select* from ad where email='$e' and password='$p'";
$query=mysqli_query($con,$select);
if (isset($_POST["log"])){
if(mysqli_num_rows($query)>0)


$fetch=mysqli_fetch_assoc($query);
if ($fetch['email']==$e && $fetch['password']==$p)
{
    
    header("Location:ac.php");
}

else{
    echo"<script>alert('login failed')</script>";
}
}
mysqli_free_result($query);
mysqli_close($con);



?>