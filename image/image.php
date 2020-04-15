<?php
//echo "<pre>";
//print_r($_FILES['image']);
if(isset($_POST['btn'])){
    $directory = 'storage/';
    $image_name = $_FILES['image']['name'];
    $image = $directory.$image_name;
    move_uploaded_file($_FILES['image']['tmp_name'],$image);
}


?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="btn">
</form>
