<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic PHP</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h2>Basic PHP</h2>

<header>
  <h2>Header Section</h2>
</header>

<section>
  <nav>
    <!--<ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>-->
  </nav>
  
  <article>
    <h1></h1>
	<div class="phpcoding">
		<!--PHP Variable
		<?php
		
			$a=10;
			$b=20;
			$sum=$a+$b;
			$value="php variable";
			echo $value;
			echo "</br>";
			echo "The sum of a and b is= ".$sum;
			var_dump($value); 
		?>--> 
		<!--PHP datatypes
		<p>String, Integer, Float, Boolean,Array, Object, Null, Resource,  </p>
		#Object
		<?php
			Class student{
				function department(){
					return "physics";
				}
				function details(){
					echo $this->department();
				}
			}
		    $st= new student();
			$st->details();
		?>
	PHP Strings:
		<?php
		    $x="php strings";
			$y="counting strings";
			echo strlen($x);
			echo "</br>";
			echo str_word_count($y);
			echo "</br>";
			echo strpos($x, "strings");
			echo "</br>";
			echo str_replace("counting", "uncount", $y);
		?>
		PHP Constants
		<?php
		    //define(name,value, case-insensitive/sensitive);
			define("VALUE","I'm Learning php");
			//echo VALUE;
			//define("VALUE","I'm Learning php", true);
			function learnPHP(){
				
				echo VALUE; 
			
			}
			
			learnPHP();
		?>
		Arithmetic operator:
	    <?php
		    $x=10;
		    $y=8;
		
		    echo $x+$y;
		    echo "</br>";
		    echo $x-$y;
		    echo "</br>";
		    echo $x*$y;
		    echo "</br>";
		    echo $x/$y;
		    echo "</br>";
		    echo $x%$y;
		?>
		Assingment operator:
		<?php
		    $x = 202;  
            //$x += 100;
            //$x -= 100;
            //$x *= 100;
            //$x /= 100;
            $x %= 100;
            echo $x;
			echo "</br>";
	    ?>
		Comparison Operator: 
		<?php
		     $x=10;
		     $y=15;
			//$y="10";
			//var_dump($x==$y);
			//var_dump($x===$y);
			var_dump($x>$y);
		?>
		LOgical Operator: 
		
		<?php
		
		
			$x=2;
			$y=5;
			
			/*if($x==2 && $y==5){
				echo "This is the way:";
			}
			else{
				echo "Nothing";
			}
			
			if($x==2 or $y==3){
				echo "This is the way:";
			}
			else{
				echo "Nothing";
			}*/
		    
			if($x==2 xor $y==5){
				echo "This is the way:";
			}
			else{
				echo "Nothing";
			}
		?>
		
		String Operator:
		<?php
		    $x="Javascript";
			$y="+php";
			$x.=$y;
			//$z=$x. $y;
			//echo $z;
			echo $x; 
		?>
		Array Operator: 
		<?php
		   $x=array(
		      "a"=>"Dhaka",
			  "b"=>"Sylhet"
		   );
		   
		   $y=array(
		      "c"=>"Rajshahi",
			  "d"=>"Commila"
		   );
		   
		   //var_dump($x+$y);
		   var_dump($x==$y);
		   //var_dump($x!=$y); //not equal operator
		   //var_dump($x===$y);  //identical operator
		   ?>
		   PHP COnditional Statements:
		   <?php
		   
		   
		       $x=10;
			   
			   if($x>12){
				   echo "Go";
			   }
		       elseif($x<11){
				   echo "Went";
			   }
			   else{
				   echo "wrong";
			   }
		   ?>
		   Switch case:
		   <?php
		   
		   
				$x="php";
				
				switch($x){
                     case "hmtl":
					 echo "print out here";
					 break;
					 
					 case "css":
					 echo "print out here";
					 break;
					 
					 case "js":
					 echo "print out here";
					 break;
					 
					 case "php":
					 echo "print out here";
					 break;
					 
					 default:
					 echo "Wrong";
					 }
		   ?>
		   While Loop:
		   <?php
		      /* $x=2;
			  while($x<=10){
                 echo "The Number is : $x </br>";				 
				 $x++;
				  
			  }*/
			  
			  $x=5;
			  do{
				  echo "The Number is : $x </br>";		 //do-while		 
				 $x++; 
			  }while($x<=10)
		   ?>
	      For-Loop
	      <?php
		       for($i=0;$i<=10;$i++){
				  echo "The number is : $i </br>";
			  }
		  ?>-->
		  For Each loop: 
		  <?php
		  
		  
		       /*$colors=array("red", "blue", "green");
			   foreach($colors as $color){
				   
				   echo "</br> $color  </br>";
			   }*/
			   $User = array(
                    'name' => 'Bob',
                    'email' => 'bob@example.com',
                    'age' => 200
              );
			  foreach ($User as $key => $value) {
                       echo $key.' is '.$value.'<br />';
              }
		  
		  
		  ?>
		   
		
		
		
	</div>

		
 </article>
</section>

<footer>
	<h2>Footer Section</h2>
</footer>

</body>
</html>
