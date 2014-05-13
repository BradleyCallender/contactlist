<?php
include 'libs/db_connect.php';
 
$query = "SELECT id, firstname, lastname, email, social FROM contacts ORDER BY id desc";
$stmt = $con->prepare( $query );
$stmt->execute();

$num = $stmt->rowCount();

if($num>0){ 

    echo "<table id='tfhover' class='tftable' border='1'>";
    
        echo "<tr>";
            echo "<th>Firstname</th>";
            echo "<th>Lastname</th>";
			echo "<th>Email</th>";
			echo "<th><span class='socialogo'></span>Social Account</th>";
            echo "<th style='text-align:center;'>Edit/ Remove Contact</th>";
        echo "</tr>";
        
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            
            extract($row);
            
            
            echo "<tr>";
                echo "<td>{$firstname}</td>";
                echo "<td>{$lastname}</td>";
				echo "<td  title='Click to send {$firstname} an email.' class='tooltip'><a  class='emailtext' href='mailto:{$email}'>{$email}</a></td>";
				echo "<td> {$social}</td>";
                echo "<td style='text-align:center;'>";
                   
                    echo "<div class='userId'>{$id}</div>";
                    
					echo "<div title='Add {$firstname} to favorites.' class='addtofavs'></div>";
					
                    
                    echo "<div class='editBtn editbutton editpen'>Edit/Update Contact</div>";
                    
                    
                    echo "<div class='deleteBtn deletebutton deletex'>Remove Contact</div>";
					
					
                echo "</td>";
            echo "</tr>";
        }
        
    echo "</table>";
    
}

else{
    echo "<div class='noneFound'>No contacts found.</div>";
}

?>