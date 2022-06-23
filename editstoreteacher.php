<?php
validateRequest();

function updateteacher(){
    
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
            $text = "\n".implode(",", $_POST);
            fwrite($file, $text);
        }else{
            fwrite($file, $text);
        }
    }    
    fclose($file);
    fclose($file_original);
    unlink("teahcer.txt");
    rename("teacher-temp.txt","teahcer.txt");
    header("Location: tindex.php?".http_build_query(["message"=>"teacher updated successfully."]));
}
function validateRequest(){
    $id = $name = $address = $post =  $gender = $gmail = $contact= "";
$errors= [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["id"])){
        $errors ['id'] = "ID is required";
    }else{
        $id = test_input($_POST["id"]);
    }

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

    if (empty($_POST["post"])){
        $errors ['post'] = "post is required";
    }else{
        $post = test_input($_POST["post"]);
    }

    if (empty($_POST["gender"])){
        $errors ['gender']= "gender is required";
    }else{
        $gender =   $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["gmail"])){
        $errors ['gmail']= "gmail is required";
    }else{
        $gmail =   $gmail = test_input($_POST["gmail"]);
    }
    if (empty($_POST["contact"])){
        $errors ['contact']= "contact is required";
    }else{
        $contact =   $contact = test_input($_POST["contact"]);
    }
 }
 if(count($errors)){
     //if there is any error then the page will redirect
    header("Location: editteacher.php?".http_build_query(["errors"=>$errors]));

 }
 //if there is no errors
 updateteacher();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
