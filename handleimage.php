<?php 
if(isset($_POST['submit'])){

$image =$_FILES['image'];
$tmpName=$image['tmp_name'];
$name=$image['name'];

$ext=pathinfo($name,PATHINFO_EXTENSION);
// echo $ext;
$imageName=$_POST['imageName'];
$newName=$imageName.".".$ext;
// echo $newName;


move_uploaded_file($tmpName,"upload/$name");
}
$imgs= array_diff(scandir("upload/"),[".",".."]);
// var_dump($imgs);
foreach($imgs as $img){

    echo "<img src='upload/$img'> <br>" ;
    echo  " <a href='upload/$img'  download >download </a>";
}

?>