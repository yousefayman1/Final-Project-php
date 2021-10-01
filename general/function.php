<?php 


function testMessage ($condation,$mess){
    if($condation){
        echo"<div class='alert alert-info'>
        $mess is True
        </div>";
    }else{
        echo"<div class='alert alert-danger'>
        $mess is False
        </div>";
    }
}

function enter(){
    if($_SESSION['admin']){
    }else{
        header("location: /start/admin/login.php");
    }
}

?>