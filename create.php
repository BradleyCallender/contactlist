<?php
include 'libs/db_connect.php';

try{

    $query = "INSERT INTO contacts SET firstname = ?, lastname = ?, email = ?, social  = ?";

    $stmt = $con->prepare($query);

    $stmt->bindParam(1, $_POST['firstname']);

    $stmt->bindParam(2, $_POST['lastname']);

    $stmt->bindParam(3, $_POST['email']);

    $stmt->bindParam(4, $_POST['social']);

    if($stmt->execute()){
        echo "Contact was created.";
    }else{
        echo "Unable to created Contact.";
    }
}

catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>