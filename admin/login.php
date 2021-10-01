<?php
include "../shared/head.php";
include "../shared/nav.php";
include "../general/configDatabase.php";
include "../general/function.php";


if(isset($_POST['login'])){
    $user =$_POST ['user'];
    $password =$_POST ['password'];
    $select ="SELECT * FROM admins WHERE name = '$user' and password = '$password' ";
    $s = mysqli_query($conn, $select);
    $num = mysqli_num_rows($s);
    if($num >0){
        $_SESSION['admin']=$user;
        header("location: /start/managers/listAdm.php");

    }else{
        echo "false admin";
    }
}

print_r($_SESSION);

?>
 
 

<h1 class="text-center text-info display-1 p-5">Welcome at login page</h1>

<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST"> 
                <div class="form-group">
                    <label>User Name</label>
                    <input type ="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type ="text" name="password" class="form-control">
                </div>
                <button class="btn btn-info" name="login">login</button>
            </form>
        </div>
    </div>
</div>

<?php include "../shared/script.php"; ?>