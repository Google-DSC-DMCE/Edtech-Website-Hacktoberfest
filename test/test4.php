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

                        <form action="ans4.php" method="POST">
                            
                        <h1 class="head" style="text-align: center;"> Creating and Validating forms  </h1><br> <br>
                               
                                <input type="hidden" name="que1" value="1) To remove all global session variables and destroy the session,use____________">1) To remove all global session variables and destroy the session,use____________ </input> <br><br>
                                <input type="radio" name="ans1" value="a) unset()" /> a) unset() <br> 
                                <input type="radio" name="ans1" value="b) session_destroy()" /> b) session_destroy() <br>
                                <input type="radio" name="ans1" value="c) delete()" /> c) delete() <br>
                                <input type="radio" name="ans1" value="d) sleep()" /> d) sleep() <br><br><br>
                                <input type="hidden" name="right1" value="b) session_destroy()" />
                                
                                <input type="hidden" name="que2" value="2) Which one of the following methods is responsible for sending the query to the database? "> </input>2) Which one of the following methods is responsible for sending the query to the database? <br><br>
                                <input type="radio" name="ans2" value=" a) query() " /> a) query() <br> 
                                <input type="radio" name="ans2" value=" b) send_query() " /> b) send_query() <br>
                                <input type="radio" name="ans2" value=" c) sendquery() " /> c) sendquery()  <br>
                                <input type="radio" name="ans2" value=" d) query_send() " /> d) query_send() <br><br><br>
                                <input type="hidden" name="right2" value=" a) query() " /> 


                                <input type="hidden" name="que3" value="3) URL is used to specify the location, which helps browser understand where to send the data on server mentioned in the ________ attribute of a form. "> </input> 3) URL is used to specify the location, which helps browser understand where to send the data on server mentioned in the ________ attribute of a form. <br><br>
                                <input type="radio" name="ans3" value=" a) name  " /> a) name  <br> 
                                <input type="radio" name="ans3" value=" b) id " /> b) id <br>
                                <input type="radio" name="ans3" value=" c) action " /> c) action <br>
                                <input type="radio" name="ans3" value=" d) value " /> d) value <br><br><br>
                                <input type="hidden" name="right3" value=" c) action " />



                                <input type="hidden" name="que4" value=" 4) _____ is used to make the user select single choice from a number of available choices. "> </input> 4) _____ is used to make the user select single choice from a number of available choices.  <br><br>
                                <input type="radio" name="ans4" value=" a) Textbox " /> a) Textbox <br> 
                                <input type="radio" name="ans4" value=" b) Radio Button " /> b) Radio Button <br>
                                <input type="radio" name="ans4" value=" c) Textarea " /> c) Textarea <br>
                                <input type="radio" name="ans4" value=" d) List " /> d) List <br><br><br>
                                <input type="hidden" name="right4" value=" b) Radio Button " />




                                <input type="hidden" name="que5" value=" 5) A session is started with the ___________ function. "> 5) A session is started with the ___________ function. </input> <br><br>
                                <input type="radio" name="ans5" value=" a) session_go() " /> a) session_go() <br> 
                                <input type="radio" name="ans5" value=" b) session_start() " /> b) session_start() <br>
                                <input type="radio" name="ans5" value=" c) session_ready() " /> c) session_ready() <br>
                                <input type="radio" name="ans5" value=" d) session_ready() " /> d) session_ready() <br><br><br>
                                <input type="hidden" name="right5" value=" b) session_start " />


                                <input type="hidden" name="que6" value=" 6) ________ is used to select one or more options from available options displayed for selection. "> </input> 6) ________ is used to select one or more options from available options displayed for selection. <br><br>
                                <input type="radio" name="ans6" value=" a) Check Box  " /> a) Check Box <br> 
                                <input type="radio" name="ans6" value=" b) Radio Button " /> b) Radio Button <br>
                                <input type="radio" name="ans6" value=" c) Textarea  " /> c) Textarea  <br>
                                <input type="radio" name="ans6" value=" d)  List " /> d) Spacefull <br><br><br>
                                <input type="hidden" name="right6" value=" d) List " />




                                <input type="hidden" name="que7" value=" 7) GET has limits on the amount of information to send. "> 7) GET has limits on the amount of information to send. </input> <br><br>
                                <input type="radio" name="ans7" value=" a) 1  " /> a) 1 <br> 
                                <input type="radio" name="ans7" value=" b) 0 " /> b) 0  <br>
                                <input type="radio" name="ans7" value=" c) 01  " /> c) 01 <br>
                                <input type="radio" name="ans7" value=" d) 00 " /> d) 00 <br><br><br>
                                <input type="hidden" name="right7" value=" a) 1 " />


                                <input type="hidden" name="que8" value=" 8) To fetch one row at a time, __________method is used to fetched each row entirety at a time."> </input> 8) The variables declared within a function are called ______ variables.  <br><br>
                                <input type="radio" name="ans8" value=" a) fetch_assoc() " /> a) fetch_assoc() <br> 
                                <input type="radio" name="ans8" value=" b) fetch() " /> b) fetch() <br>
                                <input type="radio" name="ans8" value=" c) fetch_array() " /> c) fetch_array() <br>
                                <input type="radio" name="ans8" value=" d) fetch_row() " /> d) fetch_row() <br><br><br>
                                <input type="hidden" name="right8" value=" c) fetch_array()  " />



                                <input type="hidden" name="que9" value=" 9) Use the .............. to delete the data inside the table, and not the table itself?  "> </input> 9) Use the .............. to delete the data inside the table, and not the table itself?  <br><br>
                                <input type="radio" name="ans9" value=" a) DROP TABLE " /> a) DROP TABLE <br> 
                                <input type="radio" name="ans9" value=" b) DELETE TABLE " /> b) DELETE TABLE  <br>
                                <input type="radio" name="ans9" value=" c) TRUNCATE TABLE " /> c) TRUNCATE TABLE <br>
                                <input type="radio" name="ans9" value=" d) REMOVE TABLE " /> d) REMOVE TABLE <br><br><br>
                                <input type="hidden" name="right9" value=" b) DELETE TABLE " />




                                <input type="hidden" name="que10" value=" 10) To remove all global session variables and destroy the session, use____________ "> </input> 10) To remove all global session variables and destroy the session, use____________ <br><br>
                                <input type="radio" name="ans10" value=" a) session_unset() " /> a) session_unset()  <br> 
                                <input type="radio" name="ans10" value=" b) destroy() " /> b) destroy() <br>
                                <input type="radio" name="ans10" value=" c) delete() " /> c) delete() <br>
                                <input type="radio" name="ans10" value=" d) sleep() " /> d) sleep() <br><br><br>
                                <input type="hidden" name="right10" value=" a) session_unset " />


                                <form action="result4.php">
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