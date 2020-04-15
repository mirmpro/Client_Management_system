<?php

include "vendor/autoload.php";

use App\classes\Client;

$client = new client();

if (isset($_POST['btn'])) {
    $client->insert();
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

    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="offset-3 col-md-6">
            <h4 class="d-flex justify-content-center">Clinet Managment system</h4>
            <div class="card">
                <div class="card-header">
                    Add Clients
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <lable>Image: </label>
                                <input type="file" name="image" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Name: </label>
                                <input type="text" name="client_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Email: </label>
                                <input type="text" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Phone: </label>
                                <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <lable>Task: </label>
                                <input type="text" name="task" class="form-control">
                        </div>

                        <label>Rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">$</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" name="rate">
                        </div>

                        <div class="form-group">
                            <lable>Delivery Date: </label>
                                <input type="date" name="deliverydate" class="form-control">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="btn" class="btn btn-primary">Add Client Now!</button>
                            <a class="btn btn-primary" href="index.php">Back</a>
                        </div>

                    </form>
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
