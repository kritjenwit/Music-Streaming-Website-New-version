<?php
    session_start();
    include "../encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");

    $fname = $conn->real_escape_string($_POST['firstname']);
    $lname = $conn->real_escape_string($_POST['lastname']);

    //encrypt data

    $encrypt_fname = convert_string('e',$fname);
    $encrypt_lname = convert_string('e',$lname);

    // check the data if exist

    $data = $conn->query("SELECT * from encrypt_userinfo where email= '".$_SESSION['encrypt_email']."' ");
    if($data->num_rows > 0){
        $edit1 = $conn -> query("UPDATE encrypt_userinfo set firstname = '$encrypt_fname' , lastname='$encrypt_lname' where email= '".$_SESSION['encrypt_email']."' ");
        $_SESSION['msg']='<div class="alert alert-success"><strong>Success!</strong> Your data have been change.</div>';
        header("Location: ../../profile/profile.php");
    }else{
        $_SESSION['msg']='<div class="alert alert-danger"><strong>Erroe!</strong> Cannot shange your data.</div>';

    }

?>
