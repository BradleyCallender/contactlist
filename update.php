<?php
include 'libs/db_connect.php';

try{

    $query = "update 
                contacts 
            set 
                firstname = :firstname, 
                lastname = :lastname, 
                email = :email, 
                social = :social
            where
                id = :id";

    $stmt = $con->prepare($query);

    $stmt->bindParam(':firstname', $_POST['firstname']);
    $stmt->bindParam(':lastname', $_POST['lastname']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':social', $_POST['social']);

    $stmt->bindParam(':id', $_POST['id']);

    if($stmt->execute()){
        echo "contact was updated.";
    }else{
        echo "Unable to update contact.";
    }

}

catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>