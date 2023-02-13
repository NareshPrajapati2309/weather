<?php
        $servername = "localhost";
        $user = "root";
        $pwd = "";
        $database = "query";

        // create a connection
        $conn = mysqli_connect($servername, $user, $pwd, $database);

        // Die if connection was not successful
        if (!$conn){
            die("Sorry we failed to connect: ". mysqli_connect_error());
        }

        $sql = "select * from users";
	
        $query = mysqli_query($conn,$sql);
        
        $num = mysqli_num_rows($query);
        echo $num;
        echo " records found in the DataBase<br>";
        
	    if( mysqli_num_rows($query) > 0 ){
        
	    	echo "<table border='1' >";
	    	while( $result = mysqli_fetch_assoc($query)){
	    		echo "<tr><td>".$result["name"]. "</td><td> ".$result["address"]."</td><td>".$result["email"]."</td><td>".$result["number"]."</td></tr>";
	    	}
	    	echo "</table>";
	    }
?>