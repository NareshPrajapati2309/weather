<html>
	<body>
	<form method="post">
		<input type="text" name="f1" required>
		<input type="submit" value="See the value in Cookie" name="s">
	</form>
	</body>
</html>
<?php
	if(isset($_POST["s"])){
		$name=$_POST['f1'];
		
		echo "Value using :"."<br>";
		echo "___________________"."<br>";
		echo "Normal PHP variable :";
		echo "<i>".$name."</i>"."<br>";
		
		time() + 3600*24;
		setcookie("text",$name,time()+86400*30,"/");	

		echo "PHP Cookie :";
		echo "<i>".$_COOKIE["text"]."</i>";
	}
?>