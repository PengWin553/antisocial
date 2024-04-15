<?php
include("../dbconnect.php");

$postid = $_POST['postid'];
$userid = $_POST['userid'];
$commenttext = $_POST['commenttext'];

$query = "INSERT INTO post(user_id, content)
          VALUE (:userid, :content)";
$stmt = $connection->prepare($query);
$stmt->bindParam(':userid',$userid);
$stmt->bindParam(':content',$content);
$res = $stmt->execute();

if ($res) {
    echo json_encode(['res' => 'success']);
} else {
    echo json_encode(['res' => 'error']);
}
?>