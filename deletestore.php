<?php
deleteStudent();
function deleteStudent(){
    
    $file = fopen("student-temp.txt",'a+');
    $file_original = fopen("student.txt",'r');
    //this function read the 1st line of the file and move cursor down
    fgets($file_original);
    $student = [];
    while(!feof($file_original )) {
        // this function read the one line and move cursor down, that line is always in stinrg format
        $text= fgets($file_original);
        // this converts string into array
        $tempStudent= explode(",",$text);
        //this conditon checks whether the record is to be chnaged or not, if records need to be changed then insert new updated records
        if($tempStudent[2]==$_GET['id']){
           
        }else{
            fwrite($file, $text);
        }
    }
    
    fclose($file);
    fclose($file_original);
    unlink("student.txt");
    rename("student-temp.txt","student.txt");
    header("Location: index.php?".http_build_query(["message"=>"Student has been deleted successfully."]));
}


?>