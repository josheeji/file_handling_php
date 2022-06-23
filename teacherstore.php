<?php

validateRequest();

function createteacher(){
    
    $file = fopen("teacher.txt",'a+');
    $text = "\n".implode(",", $_POST);
    fwrite($file, $text);
    fclose($file);
    header("Location: tindex.php?".http_build_query(["message"=>"teacher has been created succefully."]));
}
function validateRequest(){
   $id= $name= $address =$post = $gender = $gmail =$contact= "";
$errors= [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])){
        $errors ['id'] = "id is required";
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
        $errors ['post'] = "Post is required";
    }else{
        $post = test_input($_POST["post"]);
    }

    if (empty($_POST["gender"])){
        $errors ['class']= "gender is required";
    }else{
        $gender = test_input($_POST["gender"]);
    }

     if (empty($_POST["gmail"])){
        $errors ['gmail'] = "gmail is required";
     }else{
        $gmail = test_input($_POST["gmail"]);
    }

    if (empty($_POST["contact"])){
        $errors ['contact'] = "Contact is required";
    }else{
        $contact = test_input($_POST["contact"]);
    }
   
 
 }
 if(count($errors)){
    header("Location: addTeacher.php?".http_build_query(["errors"=>$errors]));

 }

else{
   //if there is no errors
   createteacher();
}

}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>