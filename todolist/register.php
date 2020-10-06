<?php include('validation.php') ?>
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
            <form class="block_form " method="post">
                <h1>Register</h1>
                <div class="list_input">
                    <label class="label_name" for="name">Name:</label>
                    <input type="text" name="name" class="block_input" id="block_name">
                </div>
                 <!--跳錯誤訊息-->
                   <?php echo "<div class='msg-error'>".addslashes($errorName)."</div>" ?>
                <div class="list_input">
                    <label class="label_birth" for="birth">Birthday:</label>
                    <input type="text" name="birth" class="block_input" id="block_birth" placeholder="YYYY/MM/DD">
                    
                </div>
                <!--跳錯誤訊息-->
                    <?php echo "<div class='msg-error'>".addslashes($errorBirthday)."</div>" ?>
                <div class="list_input">
                    <label class="label_gender" for="gender">gender</label>
                    <select class="block_input">
                        <option>male</option>
                        <option>female</option>
                    </select>
                </div>
                <div class="list_input">
                    <label class="label_email" for="email">Email:</label>
                    <input type="email" name="email" class="block_input" id="block_email">
                    
                </div>
                <!--跳錯誤訊息-->
                    <?php echo "<div class='msg-error'>".addslashes($errorEmail)."</div>" ?>
                <div class="list_input">
                    <label class="label_password" for="password">Password:</label>
                    <input type="text" name="password" class="block_input " id="block_password" >
                </div>
                <p class="msg-notice">↑至少8位數以上，包含一個大小寫字母及數字↑</p>
                <!--跳錯誤訊息-->
                <?php echo "<div class='msg-error'>".addslashes($errorPassword)."</div>" ?>
                <input type="submit" class="block_submit" value="sign up">
                <?php 
                if($error){
                    echo "<div class='msg-error'>".addslashes($error)."</div>" ;
                }else{
                    echo "<div class='msg-success'>".addslashes($success)."</div>";
                }   
                ?>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>