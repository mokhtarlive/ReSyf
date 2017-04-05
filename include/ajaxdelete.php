<?php
    
//excution file perl
    if(isset($_POST['file']))
    {try {
$files = glob('/home/janhaoum/public_html/Gala/out/*'); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
    
        $imagefile = $_POST['file'];
       
      copy('/home/janhaoum/public_html/frfacile/server/php/files/'.$imagefile , '/home/janhaoum/public_html/Gala/out/'.$imagefile);

  $x= system( "perl -w /home/m2_idl/documents/Toolkit/pipeline.test.Anatext.pl  --inputDir /home/janhaoum/public_html/Gala/out/ --outputDir /home/janhaoum/public_html/Gala/out/");


	        
        } catch (Exception $e) {
        echo "false";
}

    }
    
    

    if(isset($_POST['json']))
    {try {
	//cree json
        $imagefile = $_POST['json'];
$fichier='/home/janhaoum/public_html/Gala/out/'.$imagefile.'.para.ttg.json';
$homepage = fread(fopen($fichier, "r"), filesize($fichier)); 
//$homepage = file_get_contents('/home/m2_idl/public_html/NiceAdmin/server/php/files/'.$imagefile.'.para.ttg.json');
$parsed_json = json_decode($homepage,true);
		//~ $vocIncrease= $parsed_json['vocIncrease'];
		//~ $featuresStats= $parsed_json['featuresStats'];
		//~ $VER= $parsed_json['VER'];
		//~ $coocFrequencies= $parsed_json['coocFrequencies'];
		//~ $globalStats= $parsed_json['globalStats'];
		//~ $repeatedSegments= $parsed_json['repeatedSegments'];
		//~ $occFrequencies= $parsed_json['occFrequencies'];
		//~ $max = sizeof($globalStats);
		echo $homepage;
	//~ 
	//~ 
	//~ 
	//~ 
		//~ 
			 //~ foreach($globalStats as $key=>$value){
			//~ 
				 //~ echo $key;
				//~ echo $value."\n";
				//~ 
			
	
			//	}
		


        
        } catch (Exception $e) {
        echo "false";
}

    }

?>
