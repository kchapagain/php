<?php
/*
        File information
        File Name: function.php
        Description: Contains php functions for the puropse of Lab work 2
        Created by : Kamal Chapagain
        Created on: 07/03/2015
*/

//function to read files form directory and add them in an array
    
function readFileFromDir($dirName){    
    
    //dir to read image from 
    
    $dir = $dirName;
    //$dir = "../images/";
    
    $images = array();
    
    $i = 0; //index for array



        //check to see if directory is present  
        //Open a directory, and read its contents
            if (is_dir($dir)){
                
                //opend dir
                if ($dh = opendir($dir)){
   
                     while (($file = readdir($dh)) !== false){
                         
                           $parts = explode('.', $file); //seperate file name and extension

                            $extension = array_pop($parts); //get file extention
                            
                            //check the extension
                            if( $extension == 'png'){
                                
                               //display only if file is .png
                                    echo  $file ."[" .$i. " ] <br>" ;
                                    
                                    $images[$i] = $file; //add element to array 
                                    
                                    $i++; //increase array element by 1
                                
                            }//end if

                    }//end while
                    
                    //close dir
                    closedir($dh);
                }//end reading dir
                
            }//end if
            
            else {
                echo "No Dir found";
            }
}//end function

readFileFromDir("../images/");