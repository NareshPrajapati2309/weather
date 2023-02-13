<html>
	<body>
	<form method="post">
		<input type="text" name="f1" required>
		<input type="submit" value="See the value in Session" name="s">
	</form>
	</body>
</html>

<?php
	if(isset($_POST["s"])){
		session_start();
		$name=$_POST['f1'];
		
		echo "Value using :"."<br>";
		echo "___________________"."<br>";
		echo "Normal PHP variable :";
		echo "<i>".$name."</i>"."<br>";
		
		$_SESSION["text"]= $name;
		
		echo "PHP Session :";
		echo "<i>".$_SESSION["text"]."</i>";
	}
?>