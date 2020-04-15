<?php 

namespace App\classes;

class Client{

    public function index(){

        $sql = "SELECT * FROM clients";

        $result = mysqli_query(Database::db(),$sql);
        if($result){
            return $result;

        }

        else{
            die('Query Problem'.mysqli_error(Database::db()));
        }
    }

    public function insert(){
        $directory = 'image/storage/';
        $image_name = $_FILES['image']['name'];
        $image = $directory.$image_name;
        move_uploaded_file($_FILES['image']['tmp_name'],$image);

        $sql = "INSERT INTO clients(image, client_name, email, phone, task, rate, deliverydate) VALUES ('$image','$_POST[client_name]', '$_POST[email]', '$_POST[phone]', '$_POST[task]', '$_POST[rate]', '$_POST[deliverydate]')";

        if(mysqli_query(Database::db(),$sql)){
            header('location:index.php?message=Client has been Added.');
        }

        else{
            die('Query Problem'.mysqli_error(Database::db()));
        }
        
        

    }

    public function edit($id){
        $link = mysqli_connect('localhost', 'root', '', 'clientmanagment');
        $sql = "SELECT * FROM clients WHERE id='$id'";

        $result = mysqli_query(Database::db(),$sql);

        if($result){
            return $result;

        }

        else{
            die('Query Problem'.mysqli_error(Database::db()));
        }
    }

    public function update($id){
        $link = mysqli_connect('localhost', 'root', '', 'clientmanagment');

        $sql = "UPDATE clients SET client_name='$_POST[client_name]', email='$_POST[email]', phone='$_POST[phone]', task='$_POST[task]', rate='$_POST[rate]', deliverydate='$_POST[deliverydate]' WHERE id='$id'";
        if(mysqli_query($link,$sql)){
           header('location:index.php?message=Updated Successfully .');
        }

        else{
            die('Query Problem'.mysqli_error(Database::db()));
        }
    }

    public function delete($id){
        $link = mysqli_connect('localhost', 'root', '', 'clientmanagment');
        $sql = "DELETE FROM clients WHERE id ='$id' ";

        if(mysqli_query(Database::db(),$sql)){
            header('location:index.php?message=Deleted Successfully');
        }

        else{
            die('Query Problem'.mysqli_error(Database::db()));
        }

    }
}