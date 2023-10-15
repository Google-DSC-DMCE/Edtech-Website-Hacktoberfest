<?php
session_start();
$con = mysqli_connect("localhost","root","","notes");

if(isset($_POST['save_radio']))
{
    


    $que  = $_POST['que1'];
    $ans  = $_POST['ans1'];
    $rig  = $_POST['right1'];
    $que_query = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que','$ans','$rig')";
    $que_query_run = mysqli_query ($con, $que_query);



    $que2  = $_POST['que2'];
    $ans2  = $_POST['ans2'];
    $rig2  = $_POST['right2'];
    $que_query2 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que2','$ans2','$rig2')";
    $que_query_run2 = mysqli_query ($con, $que_query2);



    $que3  = $_POST['que3'];
    $ans3  = $_POST['ans3'];
    $rig3  = $_POST['right3'];
    $que_query3 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que3','$ans3','$rig3')";
    $que_query_run3 = mysqli_query ($con, $que_query3);


    $que4  = $_POST['que4'];
    $ans4  = $_POST['ans4'];
    $rig4  = $_POST['right4'];
    $que_query4 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que4','$ans4','$rig4')";
    $que_query_run4 = mysqli_query ($con, $que_query4);



    $que5  = $_POST['que5'];
    $ans5  = $_POST['ans5'];
    $rig5  = $_POST['right5'];
    $que_query5 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que5','$ans5','$rig5')";
    $que_query_run5 = mysqli_query ($con, $que_query5);



    $que6  = $_POST['que6'];
    $ans6  = $_POST['ans6'];
    $rig6  = $_POST['right6'];
    $que_query6 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que6','$ans6','$rig6')";
    $que_query_run6 = mysqli_query ($con, $que_query6);



    $que7  = $_POST['que7'];
    $ans7  = $_POST['ans7'];
    $rig7  = $_POST['right7'];
    $que_query7 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que7','$ans7','$rig7')";
    $que_query_run7 = mysqli_query ($con, $que_query7);



    $que8  = $_POST['que8'];
    $ans8  = $_POST['ans8'];
    $rig8  = $_POST['right8'];
    $que_query8 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que8','$ans8','$rig8')";
    $que_query_run8 = mysqli_query ($con, $que_query8);



    $que9  = $_POST['que9'];
    $ans9  = $_POST['ans9'];
    $rig9  = $_POST['right9'];
    $que_query9 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que9','$ans9','$rig9')";
    $que_query_run9 = mysqli_query ($con, $que_query9);



    $que10  = $_POST['que10'];
    $ans10  = $_POST['ans10'];
    $rig10  = $_POST['right10'];
    $que_query10 = "INSERT INTO demo2 (que,ans,rig) VALUES ('$que10','$ans10','$rig10')";
    $que_query_run10 = mysqli_query ($con, $que_query10);



    


   

    /*$ans  = $_POST['ans1'];
    $query = "INSERT INTO demo (ans) VALUES ('$ans')";
    $query_run = mysqli_query ($con, $query);

    $ans2  = $_POST['ans2'];
    $query2 = "INSERT INTO demo (ans) VALUES ('$ans2')";
    $query_run2 = mysqli_query ($con, $query2);


    $ans3  = $_POST['ans3'];
    $query3 = "INSERT INTO demo (ans) VALUES ('$ans3')";
    $query_run3 = mysqli_query ($con, $query3);


    $ans4  = $_POST['ans4'];
    $query4 = "INSERT INTO demo (ans) VALUES ('$ans4')";
    $query_run4 = mysqli_query ($con, $query4);

    $ans5  = $_POST['ans5'];
    $query5 = "INSERT INTO demo (ans) VALUES ('$ans5')";
    $query_run5 = mysqli_query ($con, $query5);

    $ans6  = $_POST['ans6'];
    $query6 = "INSERT INTO demo (ans) VALUES ('$ans6')";
    $query_run6 = mysqli_query ($con, $query6);


    $ans7  = $_POST['ans7'];
    $query7 = "INSERT INTO demo (ans) VALUES ('$ans7')";
    $query_run7 = mysqli_query ($con, $query7);


    $ans8  = $_POST['ans8'];
    $query8 = "INSERT INTO demo (ans) VALUES ('$ans8')";
    $query_run8 = mysqli_query ($con, $query8);


    $ans9  = $_POST['ans9'];
    $query9 = "INSERT INTO demo (ans) VALUES ('$ans9')";
    $query_run9 = mysqli_query ($con, $query9);


    $ans10  = $_POST['ans10'];
    $query10 = "INSERT INTO demo (ans) VALUES ('$ans10')";
    $query_run10 = mysqli_query ($con, $query10);*/




    
    
    

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: result2.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: result2.php");
    }
}
?>