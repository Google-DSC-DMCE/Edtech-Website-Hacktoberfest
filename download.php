<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Download</title>
</head>
<body>
    

<?php

if (isset($_POST['cbtn1'])) {
    

header("Content-type: application/pdf"); 
header("Content-Disposition: inline; filename=filename.pdf");
readfile("files\Unit-I Expressions and control statements in PHP Final_edited .pdf");

}


elseif (isset($_POST['cbtn2'])) {
    

    header("Content-type: application/pdf"); 
    header("Content-Disposition: inline; filename=filename.pdf");
    readfile("files\Unit-II Arrays-functions and Graphics final_edited (1).pdf");
    
    }





elseif (isset($_POST['cbtn3'])) {
    

        header("Content-type: application/pdf"); 
        header("Content-Disposition: inline; filename=filename.pdf");
        readfile("files\Unit-III Apply Object Oriented_Concepts in _PHP_edited (1).pdf");
        
        }






elseif (isset($_POST['cbtn4'])) {
    

        header("Content-type: application/pdf"); 
        header("Content-Disposition: inline; filename=filename.pdf");
        readfile("files\Unit-IV Creating and validating forms_edited.pdf");
        
        }




elseif (isset($_POST['cbtn5'])) {
    

        header("Content-type: application/pdf"); 
        header("Content-Disposition: inline; filename=filename.pdf");
        readfile("files\Unit-V Database Operations.pdf");
                
    }


            
                

?>


<?php


if (isset($_POST['btn1'])) {
    

    header("Content-type: application/pdf"); 
    header("Content-Disposition: inline; filename=filename.pdf");
    readfile("files\phpExp-1.pdf");
    
    }
    
    
    elseif (isset($_POST['btn2'])) {
        
    
        header("Content-type: application/pdf"); 
        header("Content-Disposition: inline; filename=filename.pdf");
        readfile("files\phpExp-2.pdf");        
        }
    
    
    
    
    
    elseif (isset($_POST['btn3'])) {
        
    
            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\phpExp-3.pdf");            
            }
    
    
    
    
    
    
    elseif (isset($_POST['btn4'])) {
        
    
            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\phpExp-4.pdf");            
            }
    
    
    
    
    elseif (isset($_POST['btn5'])) {
        
    
            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\phpExp-5.pdf");                    
        }

        




        if (isset($_POST['btn6'])) {
    

            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\phpExp-6.pdf");            
            }
            
            
            elseif (isset($_POST['btn7'])) {
                
            
                header("Content-type: application/pdf"); 
                header("Content-Disposition: inline; filename=filename.pdf");
                readfile("files\phpExp-7.pdf");                
                }
            
            
            
            
            
            elseif (isset($_POST['btn8'])) {
                
            
                    header("Content-type: application/pdf"); 
                    header("Content-Disposition: inline; filename=filename.pdf");
                    readfile("files\phpExp-8.pdf");                    
                    }
            
            
            
            
            
            
            elseif (isset($_POST['btn9'])) {
                
            
                    header("Content-type: application/pdf"); 
                    header("Content-Disposition: inline; filename=filename.pdf");
                    readfile("files\phpExp-9.pdf");                    
                    }
            
            
            
            
            elseif (isset($_POST['btn10'])) {
                
            
                    header("Content-type: application/pdf"); 
                    header("Content-Disposition: inline; filename=filename.pdf");
                    readfile("files\phpExp-10.pdf");                            
                }

                
                if (isset($_POST['btn11'])) {
    

                    header("Content-type: application/pdf"); 
                    header("Content-Disposition: inline; filename=filename.pdf");
                    readfile("files\phpExp-11.pdf");                    
                    }
                    
                    
                    elseif (isset($_POST['btn12'])) {
                        
                    
                        header("Content-type: application/pdf"); 
                        header("Content-Disposition: inline; filename=filename.pdf");
                        readfile("files\phpExp-12.pdf");                        
                        
                    
                    }
                    
                    
                    
                    
                    
                    elseif (isset($_POST['btn13'])) {
                        
                    
                            header("Content-type: application/pdf"); 
                            header("Content-Disposition: inline; filename=filename.pdf");
                            readfile("files\phpExp-13.pdf");                            
                            
                        
                        }
                    
                    
                    
                    
                    
                    
                    elseif (isset($_POST['btn14'])) {
                        
                    
                            header("Content-type: application/pdf"); 
                            header("Content-Disposition: inline; filename=filename.pdf");
                            readfile("files\phpExp-14.pdf");                            
                            
                        
                        }
                    
                    
                    
                    
                    elseif (isset($_POST['btn15'])) {
                        
                    
                            header("Content-type: application/pdf"); 
                            header("Content-Disposition: inline; filename=filename.pdf");
                            readfile("files\phpExp-15.pdf");                                    
                        }
                    

?>




<?php

/*project card */    

if (isset($_POST['prbtn'])) {
    

    header("Content-type: application/zip"); 
    header("Content-Disposition: inline; filename=project1.zip");
    readfile("files\project1.zip");
    
    }
    
    
    elseif (isset($_POST['btn2'])) {
        
    
        header("Content-type: application/pdf"); 
        header("Content-Disposition: inline; filename=filename.pdf");
        readfile("files\project2.pdf");        
        }
    
    
    
    
    
    elseif (isset($_POST['btn3'])) {
        
    
            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\project3.pdf");            
            }
    
    
    
    
    
    
    elseif (isset($_POST['btn4'])) {
        
    
            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\project4.pdf");            
            }
    
    
    
    
    elseif (isset($_POST['btn5'])) {
        
    
            header("Content-type: application/pdf"); 
            header("Content-Disposition: inline; filename=filename.pdf");
            readfile("files\project5.pdf");                    
        }

?>


</body>
</html>








