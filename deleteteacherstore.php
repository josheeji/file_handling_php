<?php
deleteteacher();
function deleteteacher(){
    
    $file = fopen("teacher-temp.txt",'a+');
    $file_original = fopen("teacher.txt",'r');
    //this function read the 1st line of the file and move cursor down
    fgets($file_original);
    $teacher = [];
    while(!feof($file_original )) {
        // this function read the one line and move cursor down, that line is always in stinrg format
        $text= fgets($file_original);
        // this converts string into array
        $tempteacher= explode(",",$text);
        //this conditon checks whether the record is to be chnaged or not, if records need to be changed then insert new updated records
        if($tempteacher[0]==$_GET['id']){
           
        }else{
            fwrite($file, $text);
        }
    }
    
    fclose($file);
    fclose($file_original);
    unlink("teacher.txt");
    rename("teacher-temp.txt","teacher.txt");
    header("Location: tindex.php?".http_build_query(["message"=>"teacher has been deleted successfully."]));
}


?>