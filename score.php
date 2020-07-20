<?php
    require_once "conn.php";
?>
<html>
    <head>
        <title>Vedavyasa Scholarship </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href = "style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #add8e6;">
      <div class="container-fluid">
        <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
    <img src="vvvit.jpg" width="250" height="80" alt="">
  			</a>
          
        </nav>
        <div class="jumbotron">
 
<?php
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phn = $_POST['mob'];
    $ph = $_POST['physics'];
    $ch = $_POST['chemistry'];
    $ma = $_POST['maths'];
    $cs = $_POST['cse'];
    $la = $_POST['lang'];
    $eng = $_POST['eng'];
    $avg = ($ph + $ch + $ma + $cs + $la + $eng )/1200 ;
    $avgpcm = ($ph + $ch + $ma )/600;

    $query = "INSERT INTO student (name,email,phno,phy,che,ma,lang,eng,cse,avg,avgpcm)"."VALUES (:name,:eml,:phno,:phy,:ch,:mat,:lan,:en,:cse,:avg,:avgpcm);";
    $statement = $db->prepare($query); 
    $statement->execute(  
        array(  
             'name'     =>     $_POST["name"],
             'eml'     =>    $_POST["email"],
             'phno'     =>    $_POST["mob"],
             'phy'     =>     $_POST["physics"],
             'ch'     =>     $_POST["chemistry"],
             'mat'     =>     $_POST["maths"],
             'lan'     =>     $_POST["cse"],
             'en'     =>     $_POST["lang"],
             'cse'     =>     $_POST["eng"],
             'avg'     =>     $avg,
             'avgpcm'     =>     $avgpcm
            
        )  
   ); 

    	echo "Your Total percentage :".(round($avg *100,2) ."%");
		echo ("<br>Your Total percentage for PCM ".round($avgpcm*100,2)."%");
    	if($avgpcm > 0.9 ){
      	
     
        echo "<br>Sucesfully eligible for 100% fee scholarship on tution fee inorder to claim contact :9061212493 /9496845687 /9446565077 / 9567593304<br> <a href=index.html>Go Back</a>";
    }

   	 	elseif($avgpcm > 0.85){
        echo "<br> you are succesfully eligible for 55% fee scholarship on tution fee inorder to claim contact :9061212493 /9496845687 /9446565077 / 9567593304<br> <a href=index.html>Go Back</a>";
    }
    	elseif($avgpcm > 0.80){
        echo "<br> you are succesfully eligible for 50% fee scholarship on tution fee inorder to claim contact :9061212493 /9496845687 /9446565077 / 9567593304<br> <a href=index.html>Go Back</a>";
    }
    	elseif($avgpcm > 0.75){
        echo "<br> you are succesfully eligible for 40% fee scholarship on tution fee inorder to claim contact :9061212493 /9496845687/9446565077 / 9567593304 <br> <a href=index.html>Go Back</a>";
    }
    	elseif($avg > 0.7){
        echo "<br> you are succesfully eligible for 30% fee scholarship on tution fee inorder to claim contact :9061212493 /9496845687/9446565077 / 9567593304<br> <a href=index.html>Go Back</a>";
    }
    	elseif($avg > 0.6){
        echo "<br> you are succesfully eligible for 20% fee scholarship on tution fee inorder to claim contact :9061212493 /9496845687/9446565077 / 9567593304<br> <a href=index.html>Go Back</a>";
    }
    	else{
        echo "<br>To Know about fees you can feel free to contact us Contact :9061212493 /9496845687 /9446565077 / 9567593304<br><a href=index.html>Go Back</a> ";
    } 
      
?>
        </div>
        </div>
    </body>
</html>