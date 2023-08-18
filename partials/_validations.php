<?php

session_start();
require_once("db.php");
if (empty($_SESSION['id_user'])) {
    header("location: index");
    exit();
} else {
    $id_user = $_SESSION['id_user'];
}


$name = $email = $lastname = $profileimage = $headerimage = $birthday = $degree = $phone = $countryname = $placeofbirth = $gender = "";

$sql = "SELECT * FROM users WHERE id_user= $id_user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $lastname = $row['last_name'];
        $birthday =  $row['birthday'];
        $profileimage = $row['profile_image'];
        $headerimage = $row['header_image'];
        $gender =  $row['gender'];
    }
}

function validationPostImage($image_data){
    $response = array();
    $response['status']= true;

        if(!$image_data['name']){
            $response['msg']='no image is selected';
            $response['stastus']=false;
            $response['field']='post_img';

        }
        if($image_data['name']){
            $image = basename($image_data['name']);
            $type = strtolower(pathinfo($image,PATHINFO_EXTENSION));
            $size = $image_data['size']/1000;

            if($type!='jpg' && $type!='jpeg' && $type!='png'){
                $response['msg']="invalid file type";
                $response['statu']= false;
                $response['field'] ='profile';
            }
            if($size>1000){
                $response['msg'] ="upload image less then 1 mb";
                $response['statu']= false;
                $response['field'] ='profile';
            }
        }
        return $response ;
}
