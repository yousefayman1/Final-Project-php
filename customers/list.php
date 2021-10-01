<?php
include "../shared/head.php";
include "../shared/nav.php";
include "../general/configDatabase.php";
include "../general/function.php";

$select ="SELECT customers.id ,customers.name ,customers.num ,customers.nationalId,rooms.roomType FROM customers JOIN rooms ON customers.roomID =rooms.id"; 
$s=mysqli_query($conn,$select);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete=" DELETE FROM customers WHERE id =$id";
    $d =mysqli_query($conn, $delete);
    header("location: /start/customers/list.php");
}

enter();
?>
 
 
<div class="home">
    <h1 class="text-center text-info display-1 p-5">Welcome at reservation page<br>list of your old reservations
    </h1>
    <div class="container col-6">
        <div class="card">
            <div class="card-body">
               <table class="table">
                   <tr>
                       <th>ID</th>
                       <th>Name</th>
                       <th>phone numbers</th>
                       <th>National Id</th>
                       <th>Room Type</th>
                       <th>Action</th>
                   </tr>
                   <?php foreach($s as $data) { ?>
                        <tr>
                            <td><?php echo $data['id'] ?></td>
                            <td><?php echo $data['name'] ?></td>
                            <td><?php echo $data['num'] ?></td>
                            <td><?php echo $data['nationalId'] ?></td>
                            <td><?php echo $data['roomType'] ?></td>
                            <td>
                                <a href="list.php?delete=<?php echo $data['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                   <?php }?>
               </table>
            </div>
        </div>
    </div>
    </div>
    <?php include "../shared/script.php"; ?>