<?php
session_start();
include('conn.php');
session_start();
$id=$_SESSION['id'];
$rating=$_POST['rating'];
$trackingid=$_POST['trackingid'];
$canteenname=$_POST['canteenname'];

$check = "select * order_$canteenname where id = $trackingid ;";
if($result = $conn->query($check)) {
    while ($r = $result->fetch_assoc()) {
        $itemid = $r['itemid'];
        $studentid = $r['student_id'];
        $orderid = $r['orderid'];
        $sql = "insert into feedback_$canteenname(trackingid, itemid, orderid, studentid, rating, check)
         values('$trackingid','$itemid','$orderid','$studentid',$rating,'1' ) ;";
         if ($conn->query($sql)) {
            echo true;
     }
     else {
       echo false ;
     } 
    }}
    $conn->close();
    ?>