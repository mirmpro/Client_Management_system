<?php
include "vendor/autoload.php";
use App\classes\Client;
$client = new client();

$result = $client->index();
if(isset($_GET['delete'])){
    $client->delete($_GET['id']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Client Management</title>
    <style>
        .display{
            text-align: center;
            color: forestgreen;
            font-family: Algerian;
            font-size: 50px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="display">Client Management system</h4>
            <div><h5 style="text-align: center; color: chartreuse"><?php if(isset($_GET['message'])){echo $_GET['message'];
                } ?></h5></div>
            <div class="card">
                <div class="card-header">
                    Clients
                    <a class="btn btn-success float-right" href="create.php">Add a Client</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Rate</th>
                            <th scope="col">Task</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $s_no = 1 ?>
                        <?php while ($clients = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <th scope="row"><?php echo $s_no++?></th>
                            <td><img src="<?php echo $clients['image'] ?>" height="50"> </td>
                            <td><?php echo $clients['client_name']?></td>
                            <td><?php echo $clients['email']?></td>
                            <td><?php echo $clients['phone']?></td>
                            <td><?php echo $clients['rate']?></td>
                            <td><?php echo $clients['task']?></td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="edit.php?id=<?php echo $clients['id']?>">Edit</a>
                                <a class="btn btn-warning btn-sm" href="?delete&id=<?php echo $clients['id']?>" onclick="return confirm('Are you sure?')">Delete</a>

                            </td>
                        </tr>
                        <?php } ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
