<?php
include "../shared/head.php";
include "../shared/nav.php";
include "../general/configDatabase.php";
include "../general/function.php";

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $num=$_POST['num'];
    $nationalId=$_POST['nationalId'];
    $roomId=$_POST['roomId'];
    $insert ="INSERT INTO `customers` VALUES(NULL ,'$name', '$num','$nationalId','$roomId') "; 
    $m=mysqli_query($conn,$insert);
    testMessage($m ,"insert");
}

$select ="SELECT * from `rooms`"; 
$s=mysqli_query($conn,$select);


?>
 
 
<div class="home">
<h1 class="text-center text-info display-1 p-5">Welcome at reservation page</h1>

<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label for="">Visitor Name</label>
                    <input type="" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Visitor Number</label>
                    <input type="" name="num" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">National Id</label>
                    <input type="" name="nationalId" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Room type</label> 
                    <select name="roomId" class="form-control">
                        <?php foreach($s as $data){?>
                            <option value="<?php echo $data['id'] ?>">
                                <?php echo $data['roomType']?>
                            </option>
                        <?php }?>
                    </select>
                </div>
               
                <button class="btn btn-info" name="send">Send Data</button>
            </form>
        </div>
    </div>
</div>
</div>
<?php include "../shared/script.php"; ?>