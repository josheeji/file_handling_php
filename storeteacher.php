<?php
validateRequest();

function createTeacher(){ 
    $file = fopen("teacher.txt",'a+');
    $text = "\n".implode("",$_POST);
    fwrite($file, $text);
    fclose($file);
    header("Location: teachersindex.php?".http_build_query(["message"=> "teacher has been created successfully."]));

}

function validateRequest(){
$name= $address= $email= $gender= $post= $salary= $contact= "";
$errors=[];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['name'])){
        $errors['name']="Name is required";
        }else{
            $name = test_input($_POST['name']);
        }
}
    if(empty($_POST['address'])){
        $errors['address']= "Address is Required";
    }else{
        $address = test_input($_POST['address']);
    }

    if(empty($_POST['email'])){
        $errors['emali']= "Email is required with @gmail.com";
    }else{
        $name = test_input($_POST['email']);
    }
    if(empty($_POST['gender'])){
        
    }
    if(empty($_POST['post'])){
        $errors['post'] = "Poat is required";
    }else{
        $post = test_input($_POST['post']);
    }
    if(empty($_POST['salary'])){
        $errors['salary'] = "Salary is required";
    }else{
        $salary = test_input($_POST['post']);
    }
    if(empty($_POST['contact'])){
        $errors['contact'] = "contact is required";
    }else{
        $contact = test_input($_POST['contact']);
    }

    if(count($errors)){
        //if there is any error then the page will redirect
       header("Location: addteachers.php?".http_build_query(["errors"=>$errors]));
    }
    createTeacher();
}
    function test_input($data){
        $data = trim($data);
        $data =  stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>