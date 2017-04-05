<?php
    
//excution file perl
    if(isset($_POST['file']))
    {
    
        $imagefile = $_POST['file'];




$x= system(" python recherche.py $imagefile ");


	        
      


    }
    
    


?>
