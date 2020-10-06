<?php 
    include('validation.php') ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ToDoList</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.css">
    <link rel="icon" href="images/journal.png">
</head>
<body>
    <div class="block_bg">
        <div class="logo"><a href="index.php">My ToDoList</a></div>
        <div id="content" class="col-xl-4 col-lg-6 col-md-7 col-11">
            <form class="block_form"  method="post">
                <h1>Login</h1>
                <div class="list_input">
                    <label class="label_email" for="email">Email:</label>
                    <input type="email" name="email" class="block_input" id="block_email">
                </div>
                <div class="list_input">
                    <label class="label_password" for="password">Password:</label>
                    <input type="text" name="password" class="block_input" id="block_password">
                </div>
                <p class="msg-alert mt-40px" >請先登錄帳號</p>
                <input type="submit" name="submit" class="block_submit" value="sign in">
                <p class="text-center m-10px">or</p>
                <p class="msg-alert" >還沒有註冊帳號嗎?</p>
                <button class="block_register"><a href="register.php">Register yout account</a></button>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>