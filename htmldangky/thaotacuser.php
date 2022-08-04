<?php

	require_once("../htmlnew/library.php");
    if(isset($_REQUEST['texta']) && isset($_REQUEST['textb'])){
       
        $check=ktdangnhap();
        if($check==1){
            header("location: ../admhtml/adm.php?check=1");
        }else{
            header("location: from1.php?fault=1");
        }
    }

    function ktdangnhap(){
        $conn=connectDB();
        $sql1="select * from user where username='".$_REQUEST['texta']."'";
        $sql2="select * from user where userpassword='".$_REQUEST['textb']."'";
        $result=$conn->query($sql1);
        $row=$result->fetch_assoc();
        if($row!=null){
            $result=$conn->query($sql2);
            $row=$result->fetch_assoc();
            if($row!=null){
                return 1;
            }
            else{
                return 0;
            }
        }else{
            return 0;
        }
    }

?>
