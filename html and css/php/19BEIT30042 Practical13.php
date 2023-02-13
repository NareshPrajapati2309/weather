<?php

 
	function Primenumber($n)
	{
	
		for($i=2;$i<=($n/2);$i++)
		{
			
			if($n%$i==0)
			{
				return 0;
			}
		
		}
		return 1;
	
	}
	
	$x= Primenumber(4);
	
	if($x==0) {
	echo"The number is a prime number";
    }
	else{
	echo"The number is not a prime number"
    }
?>