<?php
// require 'connection.php';

if (isset($_POST["submit"]) && isset($_FILES["image"])) {
include "connection.php";
echo "<pre>";
print_r($_FILES["image"]);
echo "</pre>";

$img_name=$_FILES["image"]['name'];
$img_size=$_FILES["image"]['size'];
$tmp_name=$_FILES["image"]['tmp_name'];
$error=$_FILES["image"]['error'];

if($error===0){
    if($img_size>125000){
        $em="image too large";
        header("Location: index.php?error=$em");
    }
    else{
        $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);

        $allowes_exs=array("jpg","jpeg","png");
        if(in_array($img_ex_lc,$allowes_exs)){
            $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path='upload/'.$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);

            $sql= "insert into image(id,name,image) values()";
        }
        else{
            $em="unknown error";
            header("Location: index.php?error=$em");
        }
    }
}
else{
    $em="unknown error";
    header("Location: index.php?error=$em");
}

}
else{
    // header("Location:index.php");
    echo"failed";
}

?>