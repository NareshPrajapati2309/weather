<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <form id="form" method="POST" action="register.php">
            <h2 style="text-align: center;"> Registration form </h2>
            <p>Register your details</p>
            Name--<input type="text" placeholder="User name" name="uname"> 
            <br/>
            Address--<textarea rows="3" cols="15" placeholder="Address" name="add"></textarea>
            <br/>
            Email--<input type="email" placeholder="Gmail" name="mail">
            <br/>
            Mobile number--<input type="number" placeholder="+91 0123456789" minlength="12" maxlength="12" name="number">
            <br/>
            <input type="submit" value="store data" id = "sbtbtn">
        </form>
    </body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST["uname"];
        $add = $_POST["add"];
        $mail = $_POST["mail"];
        $num = $_POST["number"];

        // connecting to the database
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
        else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `users` (`name`, `address`, `email`, `number`) VALUES ('$name', '$add', '$mail','$num')";
        $result = mysqli_query($conn, $sql);
        }
    }
?>