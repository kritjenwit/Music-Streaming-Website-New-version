<?php 

    session_start();
    include "../encrypt-decrypt.php";
    $conn = new mysqli("localhost","root","","project");

    $curr_pass = $conn->real_escape_string($_POST['curr_pass']);
    $new_pass = $conn->real_escape_string($_POST['new_pass']);
    $re_new_pass = $conn->real_escape_string($_POST['re_new_pass']);

    $curr_pass = convert_string('e',$curr_pass);
    $new_pass = convert_string('e',$new_pass);
    $re_new_pass = convert_string('e',$re_new_pass);


    $get_pass = $conn->query("SELECT * from encrypt_userinfo where email = '".$_SESSION['encrypt_email']."' ");
    if ($get_pass->num_rows){
        $data = $conn->query("SELECT * from encrypt_userinfo");
        while ($row = $data->fetch_assoc()){
            if($curr_pass == $row['password']){
                if($new_pass == $re_new_pass){
                    $pass_change = $conn->query("UPDATE encrypt_userinfo set password = '$new_pass' where email = '".$_SESSION['encrypt_email']."' ");
                    $_SESSION['msg']='<div class="alert alert-success"><strong>Success!</strong> Your data have been change.</div>';
                    header("Location: ../../profile/profile.php");
                }else{
                    $_SESSION['msg']='<div class="alert alert-danger"><strong>Error!</strong> Please New password and Repeat Password correctly.</div>';
                }
            }else{
                $_SESSION['msg']='<div class="alert alert-danger"><strong>Error!</strong> Incorrect of Current Password.</div>';
            }
        }
        
    }

?>