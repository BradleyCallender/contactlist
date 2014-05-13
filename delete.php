<?php
include 'libs/db_connect.php';

try {

    $query = "DELETE FROM contacts WHERE id = ?";
    $stmt = $con->prepare($query);
    $stmt->bindParam(1, $_POST['id']);
    
    if($stmt->execute()){
        echo "Contact was deleted.";
    }else{
        echo "Unable to delete contact.";
    }
    
}

catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>