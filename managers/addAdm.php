<?php
include "../shared/head.php";
include "../shared/nav.php";
include "../general/configDatabase.php";
include "../general/function.php";

if(isset($_POST['add'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $insert ="INSERT INTO `admins` VALUES(NULL ,'$name','$password') "; 
    $i=mysqli_query($conn,$insert);
    testMessage($i ,"insert");

}

if($_SESSION['admin']=='yousefayman'){
}else{
    header("location: /start/managers/listAdm.php");
}

?>
 

<div class="home">
<h1 class="text-center text-info display-1 p-5">Add Admin Page</h1>

<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="">Admin User</label>
                    <input type="" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Admin Password</label>
                    <input type="" name="password" class="form-control">
                </div>
               
               
                <button class="btn btn-info" name="add">Send Data</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php include "../shared/script.php"; ?>