<?php
include("../dbconnect.php");

try {
    $query = "SELECT post.*, users.fullname 
              FROM post 
              INNER JOIN users ON post.user_id = users.user_id 
              ORDER BY post.post_id DESC";
    $statement = $connection->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
} catch (PDOException $th) {
    echo json_encode(['error' => $th->getMessage()]);
}
?>
