<?php
include "../shared/head.php";
include "../shared/nav.php";
include "../general/configDatabase.php";
include "../general/function.php";

$select ="SELECT * FROM admins "; 
$s=mysqli_query($conn,$select);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete=" DELETE FROM admins WHERE id =$id";
    $d =mysqli_query($conn,$delete);
    header("location: /start/managers/listAdm.php");
}

enter();
?>
 
<div class="home">
    <h1 class="text-center text-info display-1 p-5">List Of Your Admins</h1>
    <div class="container col-6">
        <div class="card">
            <div class="card-body">
               <table class="table">
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>password</th>
                       <th>Action</th>
                   </tr>
                   <?php foreach($s as $data) { ?>
                        <tr>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['password'] ?></td>
                            <td>
                                <a href="listAdm.php?delete=<?php echo $data['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                   <?php }?>
               </table>
            </div>
        </div>
    </div>
    </div>
    <?php include "../shared/script.php"; ?>