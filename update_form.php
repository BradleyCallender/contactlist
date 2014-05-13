<?php
try {
    include 'libs/db_connect.php';
	
    $query = "select 
                id, firstname, lastname, email, social 
            from 
               contacts
            where 
                id = ? 
            limit 0,1";
            
    $stmt = $con->prepare( $query );

    $stmt->bindParam(1, $_REQUEST['user_id']);

    if($stmt->execute()){
    
   
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
		
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $social = $row['social'];
        
    }else{
        echo "Unable to read record.";
    }
}


catch(PDOException $exception){
    echo "Error: " . $exception->getMessage();
}
?>

<form id='updatecontactform' action='#' method='post' border='0'>
    <table>
        <tr>
            <td class="labelcolor">Firstname</td>
            <td><input type='text' name='firstname' value='<?php echo $firstname; ?>' required /></td>
        </tr>
        <tr>
            <td class="labelcolor">Lastname</td>
            <td><input type='text' name='lastname' value='<?php echo $lastname;  ?>' required /></td>
        </tr>
        <tr>
            <td class="labelcolor">Email</td>
            <td><input type='text' name='email'  value='<?php echo $email;  ?>' required /></td>
        </tr>
        <tr>
            <td class="labelcolor">Social</td>
            <td><input type='text' name='social' value='<?php echo $social;  ?>' required/></td>
        <tr>
            <td></td>
            <td>

                <input type='hidden' name='id' value='<?php echo $id ?>' />
                <input type='submit' value='Update Contact' class='savebutton savetick' />
                
            </td>
        </tr>
    </table>
</form>
