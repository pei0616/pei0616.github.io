<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My ToDoList</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Pacifico&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="icon" href="images/journal.png">
</head>
<body>
    <div class="block_bg">
        <div class="logo"><a href="index.php">My ToDoList</a></div>
        <div id="content" class="col-xl-4 col-lg-5 col-md-6 col-9">
            <form id="block_home" class="block_form " method="post">
                <h1>Todo list</h1>
                <div class="input_list ">
                    <div class="input_list-l">
                        <input type="text" class="input_text" placeholder="Add new items..." >
                        <input type="text"  class="input_date selector" name="date" placeholder="date..." autocomplete="off">
                    </div>
                    <div class="input_list-r">
                        <button class="addBtn" type="button"></button>
                    </div>
                </div>
                <div class="items_list">
                    <div class="row mx-auto">
                        <div class="block_item col-9">to-do</div>
                        <div class="block_item col-3">Status</div>
                    </div>
                </div>
                <ul class="myList" id="list">
                </ul>
                <input type="submit" value="儲存" name="submit" id="save">
            </form>
            <div id="msg"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script>
        $( function() {
          $( ".selector" ).datepicker({
                dateFormat: "yy/mm/dd"
            });
        } );
    </script>
    <script type="text/javascript" src="js/home.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>