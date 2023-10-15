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

                        <form action="ans2.php" method="POST">
                            
                        <h1 class="head" style="text-align: center;"> Arrays-functions and Graphics  </h1><br> <br>
                               
                                <input type="hidden" name="que1" value="1) The ____________ function flips/exchanges all keys with their associated values in an array.">1) The ____________ function flips/exchanges all keys with their associated values in an array. </input> <br><br>
                                <input type="radio" name="ans1" value="a) array_flip() " /> a) array_flip() <br> 
                                <input type="radio" name="ans1" value="b) array()" /> b) array() <br>
                                <input type="radio" name="ans1" value="c) array_register() " /> c) array_register() <br>
                                <input type="radio" name="ans1" value="d) flip()" /> d) flip() <br><br><br>
                                <input type="hidden" name="right1" value="a) array_flip() " />
                                
                                <input type="hidden" name="que2" value="2) To randomly shuffle all the character of a string,______ method is required. "> </input>2) To randomly shuffle all the character of a string,______ method is required. <br><br>
                                <input type="radio" name="ans2" value=" a)  Str_shuffle() " /> a) Str_shuffle() <br> 
                                <input type="radio" name="ans2" value=" b)  Str_split() " /> b) Str_split()  <br>
                                <input type="radio" name="ans2" value=" c) shuffle()  " /> c) shuffle()  <br>
                                <input type="radio" name="ans2" value=" d) split()" /> d) split() <br><br><br>
                                <input type="hidden" name="right2" value=" a) Str_shuffle() " /> 


                                <input type="hidden" name="que3" value="3) The_________________ function is used to convert string into a number."> </input> 3) The_________________ function is used to convert string into a number. <br><br>
                                <input type="radio" name="ans3" value=" a) number()   " /> a) number()  <br> 
                                <input type="radio" name="ans3" value=" b) number_format ()" /> b) number_format () <br>
                                <input type="radio" name="ans3" value=" c) toString() " /> c) toString() <br>
                                <input type="radio" name="ans3" value=" d) string()" /> d) string() <br><br><br>
                                <input type="hidden" name="right3" value=" b) number_format () " />



                                <input type="hidden" name="que4" value=" 4) The ________________ function to extract data from arrays and store it in variables."> </input> 4) The ________________ function to extract data from arrays and store it in variables.<br><br>
                                <input type="radio" name="ans4" value=" a)  push()  " /> a)push()<br> 
                                <input type="radio" name="ans4" value=" b) retrive() " /> b) retrive() <br>
                                <input type="radio" name="ans4" value=" c)  extract()  " /> c) extract() <br>
                                <input type="radio" name="ans4" value=" d) fetch() " /> d) fetch() <br><br><br>
                                <input type="hidden" name="right4" value=" c)  extract()  " />




                                <input type="hidden" name="que5" value=" 5) Following is not sorting methods w.r.t. an array: "> 5) Following is not sorting methods w.r.t. an array: </input> <br><br>
                                <input type="radio" name="ans5" value=" a)  rsort()  " /> a) rsort() <br> 
                                <input type="radio" name="ans5" value=" b) ksort() " /> b) ksort() <br>
                                <input type="radio" name="ans5" value=" c)  arsort()  " /> c) arsort() <br>
                                <input type="radio" name="ans5" value=" d) fsort() " /> d) fsort() <br><br><br>
                                <input type="hidden" name="right5" value=" d) fsort() " />


                                <input type="hidden" name="que6" value=" 6) ___________________rounds fractions up. "> </input> 6)  ___________________rounds fractions up. <br><br>
                                <input type="radio" name="ans6" value=" a)  ceil() " /> a) ceil() <br> 
                                <input type="radio" name="ans6" value=" b)  floor() " /> b) floor() <br>
                                <input type="radio" name="ans6" value=" c) abs()  " /> c) abs()  <br>
                                <input type="radio" name="ans6" value=" d) none of the above " /> d) none of the above <br><br><br>
                                <input type="hidden" name="right6" value=" c) ceil() " />




                                <input type="hidden" name="que7" value=" 7) The ________________ function to create array from given variables."> 7) The ________________ function to create array from given variables. </input> <br><br>
                                <input type="radio" name="ans7" value=" a) compact()" /> a) compact()  <br> 
                                <input type="radio" name="ans7" value=" b) retrive()" /> b) retrive()  <br>
                                <input type="radio" name="ans7" value=" c) extract()   " /> c) extract() <br>
                                <input type="radio" name="ans7" value=" d) fetch() " /> d) fetch() <br><br><br>
                                <input type="hidden" name="right7" value=" a) compact() " />


                                <input type="hidden" name="que8" value=" 8) The __________ function is used to remove element from the array.  "> </input> 8) The __________ function is used to remove element from the array.  <br><br>
                                <input type="radio" name="ans8" value=" a) unset()" /> a) unset()  <br> 
                                <input type="radio" name="ans8" value=" b) destroy() " /> b) destroy() <br>
                                <input type="radio" name="ans8" value=" c) unregister()" /> c) unregister()  <br>
                                <input type="radio" name="ans8" value=" d) delete()" /> d) delete() <br><br><br>
                                <input type="hidden" name="right8" value=" a) unset()" />



                                <input type="hidden" name="que9" value=" 9) The compact() function creates __________________array"> </input> 9) The compact() function creates __________________array<br><br>
                                <input type="radio" name="ans9" value=" a) Indexed array " /> a) Indexed array <br> 
                                <input type="radio" name="ans9" value=" b) Multidimentional Array" /> b) Multidimentional Array  <br>
                                <input type="radio" name="ans9" value=" c) Associative array  " /> c) Associative array <br>
                                <input type="radio" name="ans9" value=" d) None of the above " /> d) None of the above <br><br><br>
                                <input type="hidden" name="right9" value=" c) Associative array  " />




                                <input type="hidden" name="que10" value=" 10) Which function will return true if a variable is an array or false if it is not?"> </input> 10) Which function will return true if a variable is an array or false if it is not? <br><br>
                                <input type="radio" name="ans10" value=" a)  this_array()  " /> a) this_array()  <br> 
                                <input type="radio" name="ans10" value=" b) is_array() " /> b) is_array() <br>
                                <input type="radio" name="ans10" value=" c) do_array()  " /> c) is_array() <br>
                                <input type="radio" name="ans10" value=" d) in_array() " /> d) in_array() <br><br><br>
                                <input type="hidden" name="right10" value=" b) is_array() " />


                            <form action="result2.php">
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