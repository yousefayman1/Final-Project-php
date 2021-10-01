# Trimuph hotel
======== admin panel =========
customers
id number personal id  room_id
admins
rooms

//////
<div class="container col-6">
    <div class="card">
        <div class="card-body">
            <form method="POST">
                <div class="form-group">
                    <label >customer name</label>
                    <input type="text" name="cusName" placeholder="name" class="form-control">
                </div>
                <div class="form-group">
                    <label >customer address</label>
                    <input type="text" name="addName" placeholder="address" class="form-control">
                </div>
                if (isset ($_GET['update']))
                <button name="send" class="btn btn-info btn-block " > send data </button>
                <button name="update" class="btn btn-info btn-block " > update data </button>
            </form>         
        </div>
    </div>
</div>
<div class="container col-6">
    <div class="card">
        <div class="card-body"> 
            <table class="table"> 
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                <?php foreach($alldata as $data ){ ?>
                    <tr>
                        <th><?php echo $data['id'] ?></th>
                        <th><?php echo $data['name'] ?></th>
                        <th><?php echo $data['address'] ?></th>
                        <th><a href="index.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">DELETE</a> 
                        <a href="index.php?update=<?php echo $data['id'] ?>" class="btn btn-danger">edit</a> </th>
                    </tr>
                <?php } ?>
            </table>
        </div>    
    </div>
</div>