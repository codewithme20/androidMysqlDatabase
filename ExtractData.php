<?php
define('DB_HOST','localhost');
define('DB_USER','id12350809_codewithme20');
define('DB_PASS','codewithme20');
define('DB_NAME','id12350809_user');

$conn=new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(myawli_connect_errno()){
    echo "Failed to connect";
    die();
}
$qry=$conn->prepare("select * from user");
$qry->execute();
$qry->bind_result($username,$email);
$data=array();

while($qry->fetch()){
    $temp=array();
    $temp['username']=$username;
    $temp['email']=$email;
    array_push($data,$temp);
}

echo json_encode($data);
?>