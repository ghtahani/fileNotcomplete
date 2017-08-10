<?php
 function con(){
$db_name="training";
$user="root";
$pass="";
$ser="localhost";
$cons=mysqli_connect($ser,$user,$pass,$db_name)or die("NOT CONNECTION");}

function supdata()
{
	 
    // This is a prepared statement, not necessary with this simple query with no variables, but anyway...
    $sql = $conn->prepare("select supFName, OfficeNO FROM supervisor") ; 
    
    // Execute the query, if there were variables, they could be bound within the brackets
    $sql->execute() ;
	
	
}

?>

<table>
    <thead>
        <tr>
            <th>This</th>
            <th>That</th>
       
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php 
		supdata();
		while( $row = $sql->fetch()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['supFName']; ?></td>
            <td><?php echo $row['OfficeNO']; ?></td>
          
        </tr>
        <?php endwhile ?>
    </tbody>
</table>