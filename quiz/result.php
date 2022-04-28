<?php
        if (!empty($_POST)) {
            $totalCorrect = 0;
            $answer1 = $_POST['q1a'];
            $answer2 = $_POST['q2a'];
            $answer3 = $_POST['q3a'];
            $answer4 = $_POST['q4a'];
            $answer5 = $_POST['q5a'];
           
                        
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
        
        }
?>
<html>

<head>
	<meta charset=UTF-8" />
	
	<title>Results page</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
     <!-- Bootstrap core CSS (works only if you have downloaded Bootstrap; if not, paste over from a Bootstrap website) -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- Custom styles for this template -->
<link href="\quiz\style.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alef&family=Architects+Daughter&family=Barlow:wght@100&family=Fugaz+One&family=Monoton:wght@400&family=Rock+Salt&display=swap" rel="stylesheet">

</head>

<body>


    
<div class="quiztitle jumbotron jumbotron-fluid ">
        <div class="container">
            <h1 class="display-4"> Blackpink Quiz Results! </h1>
            </div>
    </div>

    <div class="card titlebox" style="width: 18rem;">
  <img src="\quiz\jsimg.jpg" class="card-img-top" alt="...">
  <div class="card-body">
   <p class ="titledesc">Here is your score! 
   <?php {
    echo "<div id='results'>You managed to get $totalCorrect / 5 correct!</div>";
       }
    ?></p>
  </div>
</div>

    


        <div class="qdiv">
            <p class = "qpara">Blackpink's Debut Date <br>
            <?php 
            if ($answer1 == "B") {  
                echo"Yes That is Absolutely correct! Blackpink's debut date is on the August 8 2016 !.";
            } else {
                echo"Hmm that is Incorrect... Blackpink's debut date is on the August 8 2016  <br>";
                echo"Option B is the correct Answer!";
            }

            ?>
            </p>

        </div>

        <div class="qdiv">
            <p class = "qpara">Blackpink's Debut Song <br>
            <?php 
            if ($answer2 == "A") {  
                echo"Yes That is Absolutely correct! Blackpink's debut song is on the Boombayah !!.";
            } else {
                echo"Hmm that is Incorrect... Blackpink's debut song is Boombayah <br>"; 
                echo"Option A is the correct Answer!";
            }
            
            ?>
            </p>
        </div>


        <div class="qdiv">
            <p class = "qpara">Blackpink's Catchphrase <br>
            <?php 
            if ($answer3 == "B") {  
                echo"Yes That is Absolutely correct! Blackpink's catchphrase is Blackpink in your area!!!.";
            } else {
                echo"Hmm that is Incorrect... Blackpink's catchphrase is Blackpink in your area  <br>";
                echo"Option B is the correct Answer!";
            }
            
            ?>
            </p>
        </div>


        <div class="qdiv">
            <p class = "qpara">The Drama Jisoo Starred in<br>
            <?php 
            if ($answer4 == "A") { 
                echo"Yes That is Absolutely correct! Jisoo starred in Snowdrop!!! .";
            } else {
                echo"Hmm that is Incorrect... Jisoo starred in Snowdrop  <br>";
                echo"Option A is the correct Answer!";
            }
            
            ?>
            </p>
        </div>

        
        <div class="qdiv">
            <p class = "qpara">The Number of cats Lisa has<br>
            <?php 
            if ($answer5 == "C") { 

                echo"Yes That is Absolutely correct! Lisa has 5 cats!!! .";
            } else {
                echo"Hmm that is Incorrect... Lisa has 5 cats (Leo, Luca, Lily, Louis and Lego)  <br>";
                echo"Option C is the correct Answer!";
            }
            
            ?>
            </p>
        </div>


	
	</div>

</body>

</html>