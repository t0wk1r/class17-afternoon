<?php
require_once("config.php");

$name = isset($_POST["uname"]) ?$_POST["uname"] : NULL;
$email = isset($_POST["email"]) ?$_POST["email"] : NULL;
$pass = isset($_POST["pass"]) ?$_POST["pass"] : NULL;

if(isset($_POST["sub"])){
    if(empty($name)){
        $ttt =  "need Data";
    }elseif(isset($_POST["sub"])){
        $sql = "INSERT INTO userperson(fullname,email,pass) VALUES('$name','$email','$pass')";
    
    $result = mysqli_query($conn,$sql);
    
    if($result == TRUE){
       echo "Data gone" ;
    }else{
        echo "Error". mysqli_error($conn);
    }
    }
}



?>

<form action="?" method="post">
    <label>Full Name :</label><br>
    <input type="text" name="uname" ><br>
    <?php if(isset($ttt)){
        echo $ttt."<br>";
    }?>
    <label>Email :</label><br>
    <input type="email" name="email" ><br>
    <label>Password :</label><br>
    <input type="password" name="pass" ><br>
    <input type="submit" value="Click Me" name="sub">
    



</form>

