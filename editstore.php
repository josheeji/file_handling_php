<?php
validateRequest();

function updateStudent(){
    
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
            $text = "\n".implode(",", $_POST);
            fwrite($file, $text);
        }else{
            fwrite($file, $text);
        }
    }
    
    fclose($file);
    fclose($file_original);
    unlink("student.txt");
    rename("student-temp.txt","student.txt");
    header("Location: index.php?".http_build_query(["message"=>"Student changed  successfully."]));
}
function validateRequest(){
    $name = $address = $id = $class = $gender = "";
$errors= [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])){
        $errors ['name'] = "Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }
    if (empty ($_POST["address"])){
        $errors['address']= "Address is required";
    }else{
        $address = test_input($_POST['address']);
    }

    if (empty($_POST["id"])){
        $errors ['id'] = "ID is required";
    }else{
        $id = test_input($_POST["id"]);
    }

    if (empty($_POST["class"])){
        $errors ['class']= "Class is required";
    }else{
        $class =   $class = test_input($_POST["class"]);
    }
   
 
 }
 if(count($errors)){
     //if there is any error then the page will redirect
    header("Location: editstudent.php?".http_build_query(["errors"=>$errors]));

 }
 //if there is no errors
 updateStudent();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>










?>