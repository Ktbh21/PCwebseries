<?php

if (!empty($_POST)) {
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Quiz</title>

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
            <h1 class="display-4"> Blackpink Quiz Page </h1>
            <p class ="titledesc">Hey There!!! Here's a simple quiz on the group that the world is currently paying attention to! <br><br></p>

        </div>
    </div>


    <form action="result.php <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="quiz">
        <div class="form-group">
            <div class="container quizqn">
                <div class="row">
                    <div class="col-xl">
                        <h3>Blackpink's Debut Date</h3>


                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="q1a" id="q1aans" value="A" required />
                            <label class="form-check-label" for="q1aans">A) August 16 2018 </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1a" id="q1bans" value="B" />
                            <label class="form-check-label" for="q1bans">B) August 8 2016 </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1a" id="q1cans" value="C" />
                            <label class="form-check-label" for="q1cans">C) August 8 2018 </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q1a" id="q1dans" value="D" />
                            <label class="form-check-label" for="q1dans">D) August 16 2016 </label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container quizqn">
                <div class="row">
                    <div class="col-xl">

                        <h3>Blackpink's Debut Song</h3>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2a" id="q2aans" value="A" required />
                            <label class="form-check-label" for="question-2-answers-A">A) Boombayah </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2a" id="q2bans" value="B" />
                            <label class="form-check-label" for="question-2-answers-B">B) Whistle </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2a" id="q2cans" value="C" />
                            <label class="form-check-label" for="question-2-answers-C">C) Kill This Love </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q2a" id="q2dans" value="D" />
                            <label class="form-check-label" for="question-2-answers-D">D) Playing With Fire </label>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container quizqn">
                <div class="row">
                    <div class="col-xl">

                        <h3>The iconic phrase that all Blinks know</h3>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3a" id="q3aans" value="A" required />
                            <label class="form-check-label" for="question-3-answers-A">A) Blackpink! </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3a" id="q3bans" value="B" />
                            <label class="form-check-label" for="question-3-answers-B">B) Blackpink in your area </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3a" id="q3cans" value="C" />
                            <label class="form-check-label" for="question-3-answers-C">C) Boombayah </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q3a" id="q3dans" value="D" />
                            <label class="form-check-label" for="question-3-answers-D">D) Blackpink in the area </label>
                        </div>

                    </div>
                </div>
            </div>


            <div class="container quizqn">
                <div class="row">
                    <div class="col-xl">

                        <h3>The Drama Jisoo Starred in</h3>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4a" id="q4aans" value="A" required />
                            <label class="form-check-label" for="question-4-answers-A">A) Snowdrop </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4a" id="q4bans" value="B" />
                            <label class="form-check-label" for="question-4-answers-B">B) Rookie Cops </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4a" id="q4cans" value="C" />
                            <label class="form-check-label" for="question-4-answers-C">C) All of us are dead </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q4a" id="q4dans" value="D" />
                            <label class="form-check-label" for="question-4-answers-D">D) My Name </label>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container quizqn">
                <div class="row">
                    <div class="col-xl">

                        <h3>Number of Cats Lisa has</h3>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5a" id="q5aans" value="A" required />
                            <label class="form-check-label" for="question-5-answers-A">A) 3 cats </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5a" id="q5bans" value="B" />
                            <label class="form-check-label" for="question-5-answers-B">B) 4 cats </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5a" id="q5cans" value="C" />
                            <label class="form-check-label" for="question-5-answers-C">C) 5 cats </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="q5a" id="q5dans" value="D" />
                            <label class="form-check-label" for="question-5-answers-D">D) 6 cats </label>
                        </div>

                    </div>
                </div>
                <div class="container btn">

                    <input class="btn submitbtn btn-primary" type="submit" value="Submit" class="submitbtn" />
                </div>
            </div>


        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>