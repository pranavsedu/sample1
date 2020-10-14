<!DOCTYPE html> 

<html> 

<head> 

 <title>Program 5.3 by Pranav</title>

 </head> 

 <body align="center"> 

  Program 5.3 pg.no.62<br>by Pranav Rajeevan

   <br> <hr>

 <?php 

 $a= 20;

 $c= 15;

 function myFunction(){

 				$b= 10; 								global $c;

 												echo "<p>value of 'a' inside this function is: $a </p>";

 																echo "<p>value of 'b' inside this function is: $b </p>";

 																				echo "<p>value of 'c' inside this function is: $c </p>";

 																								}

 																								myFunction();

 																								echo "<hr>";

 																								echo "<p>value of 'a' outside of function is: $a</p>";

 																								echo "<p>value of 'b' outside of function is: $b</p>";

 																								echo "<p>value of 'c' outside of function is: $c</p>";

?> 

</body> 

</html>
