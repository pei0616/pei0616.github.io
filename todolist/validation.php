<?php
    session_start();
    include('connection.php');
    
    $passwordEx='/^((?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/';
    //註冊
    if($_POST['submit']==='sign up'){
        $birthdayEx='/^\d{4}\/([0][1-9]|[1][1-2])\/([0][1-9]|[12][0-9]|[3][0-1])$/';
        //包含一個大小寫字母跟1個數字，至少8位數以上
        //$passwordEx='/^((?=.*[0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/';
        if(empty($_POST['name'])||empty($_POST['birth'])||empty($_POST['email'])||empty($_POST['password'])){
            $error="以上項誤為必填";
        }else{
            if(!preg_match($birthdayEx,$_POST['birth']))
                $errorBirthday="請輸入yyyy/mm/dd的格式";
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                $errorEmail="請輸入正確的信箱格式";
            if(!preg_match($passwordEx,$_POST['password'])){
                $errorPassword="必須包含一個大小寫字母及數字";}
            elseif(strlen($_POST['password'])<8){
                $errorPassword="請輸入至少8為字符";
            }
               
        }
        
        if(!($errorBirthday||$errorEmail||$errorPassword)){
            //在數據庫裡檢查用戶是否存在
            //mysqli_real_escape_string 刪除不必要的字符，防止駭客得取密碼
            $query = "SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND password='".md5(md5($_POST['email']).$_POST['password'])."'";
            $result = mysqli_query($link,$query);
            $results = mysqli_num_rows($result);
            
            if($results) $error="<div class='msg-error'><a href='todolist/index.php'>the email address has already registered. Do you want to login in?</a></div>";
            else{
                $query = "INSERT INTO user (name,birthday,gender,email,password) VALUES('".$_POST['name']."','".$_POST['birth']."','".$_POST['gender']."','".mysqli_real_escape_string($link,$_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
                //md5(md5($_POST['email']).$_POST['password'])讓密碼更不容易被駭客破解
                mysqli_query($link,$query);
                $success="You have been signed up.You can login to edit your to-do list.";
                $_SESSION['id'] = mysqli_insert_id($link);
            }
           
        }

    }
    //登入
    elseif($_POST['submit']==='sign in'){
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
                $errorEmail="請輸入正確的信箱格式";
        if(!preg_match($passwordEx,$_POST['password'])){
            $errorPassword="必須包含一個大小寫字母及數字";}
        elseif(strlen($_POST['password'])<8){
            $errorPassword="密碼至少8為字符";
        }else{
            //檢查資料庫是否有此資料
             $query = "SELECT * FROM user WHERE email='".mysqli_real_escape_string($link,$_POST['email'])."' AND password='".md5(md5($_POST['email']).$_POST['password'])."'";
             $result=mysqli_query($link,$query);
             $row=mysqli_fetch_array($result);
             if($row){
                 $_SESSION['id']=$row['id'];
                 header('Location:home.php');
             }else{
                 $error="帳號或密碼錯誤";
             }
            
        }
    }
  
?>
