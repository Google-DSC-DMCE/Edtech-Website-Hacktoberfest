<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mock Test</title>
    <link href="tcss/test.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="overflow-y: scroll;">
    <div class="bgimg" style="height: 2250px;">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card">
                    
                    <div class="card-body">

                        <form action="ans.php" method="POST">
                            
                        <h1 class="head" style="text-align: center;"> Expressions and control statements in PHP  </h1><br> <br>
                               
                                <input type="hidden" name="que1" value="1) Which in-built function will add a value to the end of an array?">1) Which in-built function will add a value to the end of an array? </input> <br><br>
                                <input type="radio" name="ans1" value="a) array_unshift()" /> a) array_unshift() <br> 
                                <input type="radio" name="ans1" value="b) into_array()" /> b) into_array() <br>
                                <input type="radio" name="ans1" value="c) inend_array()" /> c) inend_array() <br>
                                <input type="radio" name="ans1" value="d) array_push()" /> d) array_push() <br><br><br>
                                <input type="hidden" name="right1" value="d) array_push()" />
                                
                                <input type="hidden" name="que2" value="2) Why PHP is called loosely Typed Language? "> </input>2) Why PHP is called loosely Typed Language? <br><br>
                                <input type="radio" name="ans2" value=" a) In PHP, a variable does not need to be declared before adding a value to it. " /> a) In PHP, a variable does not need to be declared before adding a value to it. <br> 
                                <input type="radio" name="ans2" value=" b) In PHP, a variable need to be declared before adding a value to it. " /> b) In PHP, a variable need to be declared before adding a value to it.  <br>
                                <input type="radio" name="ans2" value=" c) Both of above  " /> c) Both of above  <br>
                                <input type="radio" name="ans2" value=" d) None " /> d) None <br><br><br>
                                <input type="hidden" name="right2" value=" a) In PHP, a variable does not need to be declared before adding a value to it. " /> 


                                <input type="hidden" name="que3" value="3) How should we add a single line comment in our PHP code? "> </input> 3) How should we add a single line comment in our PHP code? <br><br>
                                <input type="radio" name="ans3" value=" a) /?  " /> a) /?  <br> 
                                <input type="radio" name="ans3" value=" b) // " /> b) // <br>
                                <input type="radio" name="ans3" value=" c) * " /> c) * <br>
                                <input type="radio" name="ans3" value=" d) /* */ " /> d) /* */ <br><br><br>
                                <input type="hidden" name="right3" value=" b) // " />



                                <input type="hidden" name="que4" value=" 4) _________ is a way to convert one data type variable into the different data type.  "> </input> 4) _________________ is a way to convert one data type variable into the different data type.  <br><br>
                                <input type="radio" name="ans4" value=" a) Typelasting " /> a) Typelasting <br> 
                                <input type="radio" name="ans4" value=" b) Typecasting " /> b) Typecasting <br>
                                <input type="radio" name="ans4" value=" c) Typeplasting " /> c) Typeplasting <br>
                                <input type="radio" name="ans4" value=" d) Typetext " /> d) Typetext <br><br><br>
                                <input type="hidden" name="right4" value=" b) Typecasting " />




                                <input type="hidden" name="que5" value=" 5) What does PHP stand for? "> 5) What does PHP stand for? </input> <br><br>
                                <input type="radio" name="ans5" value=" a) PHP Hyper Markup Processor " /> a) PHP Hyper Markup Processor <br> 
                                <input type="radio" name="ans5" value=" b) Hypertext Preprocessor " /> b) Hypertext Preprocessor <br>
                                <input type="radio" name="ans5" value=" c) Pretext Hyper text Processor  " /> c) Pretext Hypertext Processor  <br>
                                <input type="radio" name="ans5" value=" d) Preprocessor Home Page " /> d) Preprocessor Home Page <br><br><br>
                                <input type="hidden" name="right5" value=" b) Hypertext Preprocessor " />


                                <input type="hidden" name="que6" value=" 6) PHP 7 has introduced a new kind of operator called _______________________ operator. "> </input> 6) PHP 7 has introduced a new kind of operator called _______________________ operator. <br><br>
                                <input type="radio" name="ans6" value=" a) Increment " /> a) Increment <br> 
                                <input type="radio" name="ans6" value=" b) Flagship " /> b) Flagship <br>
                                <input type="radio" name="ans6" value=" c) Spaceship  " /> c) Spaceship  <br>
                                <input type="radio" name="ans6" value=" d) Spacefull " /> d) Spacefull <br><br><br>
                                <input type="hidden" name="right6" value=" c) Spaceship " />




                                <input type="hidden" name="que7" value=" 7) PHP files have a default file extension of_______. "> 7) PHP files have a default file extension of_______. </input> <br><br>
                                <input type="radio" name="ans7" value=" a) .html  " /> a) .html  <br> 
                                <input type="radio" name="ans7" value=" b) .xml " /> b) .xml  <br>
                                <input type="radio" name="ans7" value=" c) .php  " /> c) .php <br>
                                <input type="radio" name="ans7" value=" d) .ph " /> d) .ph <br><br><br>
                                <input type="hidden" name="right7" value=" c) .php  " />


                                <input type="hidden" name="que8" value=" 8) The variables declared within a function are called ______ variables.  "> </input> 8) The variables declared within a function are called ______ variables.  <br><br>
                                <input type="radio" name="ans8" value=" a) global  " /> a) global  <br> 
                                <input type="radio" name="ans8" value=" b) safe " /> b) safe <br>
                                <input type="radio" name="ans8" value=" c) local  " /> c) local  <br>
                                <input type="radio" name="ans8" value=" d) scope " /> d) scope <br><br><br>
                                <input type="hidden" name="right8" value=" c) local  " />



                                <input type="hidden" name="que9" value=" 9) Which of the functions is used to sort an array in descending order?  "> </input> 9) Which of the functions is used to sort an array in descending order?  <br><br>
                                <input type="radio" name="ans9" value=" a) sort() " /> a) sort()  <br> 
                                <input type="radio" name="ans9" value=" b) asort() " /> b) asort()  <br>
                                <input type="radio" name="ans9" value=" c) rsort() " /> c) rsort() <br>
                                <input type="radio" name="ans9" value=" d) dsort() " /> d) dsort() <br><br><br>
                                <input type="hidden" name="right9" value=" c) rsort() " />




                                <input type="hidden" name="que10" value=" 10) Which amoung the following is compound data type? "> </input> 10) Which amoung the following is compound data type? <br><br>
                                <input type="radio" name="ans10" value=" a) Integer  " /> a) Integer  <br> 
                                <input type="radio" name="ans10" value=" b) Float " /> b) Float <br>
                                <input type="radio" name="ans10" value=" c) String " /> c) String <br>
                                <input type="radio" name="ans10" value=" d) Object " /> d) Object <br><br><br>
                                <input type="hidden" name="right10" value=" d) Object " />


                                <form action="result.php">
                                   <button id="cbtn" type="submit" name="save_radio" class="btn btn-primary" style="background-color: black; margin-left: 550px;" > Submit </button>
                                </form>
                               
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>