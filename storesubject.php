<?php
validateRequest();
function createsubject(){
    
    $file = fopen("subject.txt",'a+');
    $text = "\n".implode(",", $_POST);
    fwrite($file, $text);
    fclose($file);
    
    header("Location: subject.php?".http_build_query(["message"=>"Subject has been created succefully."]));
    
}
function validateRequest(){
$s_id = $s_name = $pr_fm = $pr_pm = $th_fm = $tr_pm= "";
$errors= [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["s_id"])){
        $errors ['s_id'] = "subject id is required";
    }else{
        $s_id = test_input($_POST["s_id"]);
    }
    if (empty($_POST["s_name"])){
        $errors ['s_name'] = "Subject name is required";
    }else{
        $s_name = test_input($_POST["s_name"]);
    }

    if (empty ($_POST["pr_fm"])){
        $errors['pr_fm']= "Practicle full marsks is required";
    }else{
        $pr_fm = test_input($_POST['pr_fm']);
    }

    if (empty ($_POST["pr_pm"])){
        $errors['pr_pm']= "Practicle pass marsks is required";
    }else{
        $pr_pm = test_input($_POST['pr_pm']);
    }

    if (empty ($_POST["th_fm"])){
        $errors['th_fm']= "Theory full marsks is required";
    }else{
        $th_fm = test_input($_POST['th_fm']);
    }

    
    if (empty ($_POST["tr_pm"])){
        $errors['tr_pm']= "Theory pass marsks is required";
    }else{
        $tr_pm = test_input($_POST['tr_pm']);
    }
   
 
 }
 if(count($errors)){
    header("Location: addsubject.php?".http_build_query(["errors"=>$errors]));
 
 }
 else{
    createsubject();
 }
}
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>