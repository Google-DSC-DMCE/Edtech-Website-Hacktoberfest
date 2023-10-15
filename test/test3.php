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

                        <form action="ans3.php" method="POST">
                            
                        <h1 class="head" style="text-align: center;"> Apply Object Oriented Concepts in PHP  </h1><br> <br>
                               
                                <input type="hidden" name="que1" value="1) What is object cloning?">1) What is object cloning? </input> <br><br>
                                <input type="radio" name="ans1" value="a)  the process to create a copy of an object" /> a) the process to create a copy of an object <br> 
                                <input type="radio" name="ans1" value="b)  the process to delete a copy of an object" /> b) the process to delete a copy of an object <br>
                                <input type="radio" name="ans1" value="c)  the process to join two objects" /> c) the process to join two objects <br>
                                <input type="radio" name="ans1" value="d) the process to create a copy of class" /> d) the process to create a copy of class <br><br><br>
                                <input type="hidden" name="right1" value="a) the process to create a copy of an object" />
                                
                                <input type="hidden" name="que2" value="2)In function overriding, both parent and child classes should have ----function name and number of arguments "> </input>2) In function overriding, both parent and child classes should have ----function name and number of arguments <br><br>
                                <input type="radio" name="ans2" value=" a) different  " /> a) different <br> 
                                <input type="radio" name="ans2" value=" b)  same " /> b) same  <br>
                                <input type="radio" name="ans2" value=" c)  both a and b " /> c)  both a and b  <br>
                                <input type="radio" name="ans2" value=" d) none of these " /> d) none of these <br><br><br>
                                <input type="hidden" name="right2" value=" b) both a and b " /> 


                                <input type="hidden" name="que3" value="3) _________ is a PHP class which allows to generate PDF files with PHP code. "> </input> 3) _________ is a PHP class which allows to generate PDF files with PHP code. <br><br>
                                <input type="radio" name="ans3" value=" a) FPDF  " /> a) FPDF  <br> 
                                <input type="radio" name="ans3" value=" b) fpdf " /> b) fpdf <br>
                                <input type="radio" name="ans3" value=" c) PDF " /> c) PDF <br>
                                <input type="radio" name="ans3" value=" d) none of the above " /> d) none of the above <br><br><br>
                                <input type="hidden" name="right3" value=" a) FPDF " />



                                <input type="hidden" name="que4" value=" 4) Interface support ____________ inheritance "> </input> 4) Interface support ____________ inheritance  <br><br>
                                <input type="radio" name="ans4" value=" a)  single " /> a) single <br> 
                                <input type="radio" name="ans4" value=" b) multiple " /> b) multiple <br>
                                <input type="radio" name="ans4" value=" c) hybrid " /> c) hybrid <br>
                                <input type="radio" name="ans4" value=" d) multilevel " /> d) multilevel <br><br><br>
                                <input type="hidden" name="right4" value=" b) multiple " />




                                <input type="hidden" name="que5" value=" 5) can use string to recreate the original variable values i.e. converts actual data from serialized data. "> 5) can use string to recreate the original variable values i.e. converts actual data from serialized data. </input> <br><br>
                                <input type="radio" name="ans5" value=" a) unserialize()  " /> a) unserialize() <br> 
                                <input type="radio" name="ans5" value=" b) reserialize() " />  b) reserialize() <br>
                                <input type="radio" name="ans5" value=" c) serializeagain()   " /> c) serializeagain()  <br>
                                <input type="radio" name="ans5" value=" d) serialize() " /> d) serialize() <br><br><br>
                                <input type="hidden" name="right5" value=" a)  unserialize()  " />


                                <input type="hidden" name="que6" value=" 6) _______________ is a technique used by programmers to preserve their working data in a format that can later be restored to its previous form. "> </input> 6)  _______________ is a technique used by programmers to preserve their working data in a format that can later be restored to its previous form. <br><br>
                                <input type="radio" name="ans6" value=" a) Cloning " /> a) Cloning <br> 
                                <input type="radio" name="ans6" value=" b) Introspection " /> b) Introspection <br>
                                <input type="radio" name="ans6" value=" c) Serialization  " /> c) Serialization  <br>
                                <input type="radio" name="ans6" value=" d) serial " /> d) serial <br><br><br>
                                <input type="hidden" name="right6" value=" c) Serialization " />




                                <input type="hidden" name="que7" value=" 7) Which keyword is used to refer to properties or methods within the class itself? "> 7) Which keyword is used to refer to properties or methods within the class itself? </input> <br><br>
                                <input type="radio" name="ans7" value=" a) private  " /> a) private  <br> 
                                <input type="radio" name="ans7" value=" b) public " /> b) public  <br>
                                <input type="radio" name="ans7" value=" c) protected " /> c) protected <br>
                                <input type="radio" name="ans7" value=" d) $this " /> d) $this  <br><br><br>
                                <input type="hidden" name="right7" value=" d) $this  " />


                                <input type="hidden" name="que8" value=" 8) A cookie is created with the __________ function. "> </input> 8) A cookie is created with the __________ function.  <br><br>
                                <input type="radio" name="ans8" value=" a)  setcookie()   " /> a) setcookie()  <br> 
                                <input type="radio" name="ans8" value=" b) getcookie() " /> b) getcookie() <br>
                                <input type="radio" name="ans8" value=" c)  putcookie() " /> c) putcookie()   <br>
                                <input type="radio" name="ans8" value=" d) cookie() " /> d) cookie() <br><br><br>
                                <input type="hidden" name="right8" value=" a) setcookie()  " />



                                <input type="hidden" name="que9" value=" 9) In PHP function overloading is done with the help of magic function _____ "> </input> 9) In PHP function overloading is done with the help of magic function _____ "  <br><br>
                                <input type="radio" name="ans9" value=" a) overload() " /> a) overload()  <br> 
                                <input type="radio" name="ans9" value=" b) overlap() " /> b) overlap()  <br>
                                <input type="radio" name="ans9" value=" c) call() " /> c) call() <br>
                                <input type="radio" name="ans9" value=" d) sleep() " /> d) sleep() <br><br><br>
                                <input type="hidden" name="right9" value=" c) call() " />




                                <input type="hidden" name="que10" value=" 10) FPDF is a class where F stands for ___________."> </input> 10) FPDF is a class where F stands for ___________. <br><br>
                                <input type="radio" name="ans10" value=" a) file  " /> a) file  <br> 
                                <input type="radio" name="ans10" value=" b) free " /> b) free <br>
                                <input type="radio" name="ans10" value=" c) format " /> c) format <br>
                                <input type="radio" name="ans10" value=" d) none of the above " /> d) none of the above <br><br><br>
                                <input type="hidden" name="right10" value=" b) free " />


                                <form action="result3.php">
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