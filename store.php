
<?php

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
    if (empty($_POST["gender"])){
        $errors ['gender'] = "Gender is requires";
    }else{
        $gender = test_input($_POST["gender"]);
    }
 
 }
 if(count($errors)){
    header("Location: addStudent.php?".http_build_query(["errors"=>$errors]));

 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>





