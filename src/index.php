<?php
session_start();

    if (!isset($_SESSION["add"])) {
        $_SESSION["add"] = array();  
    }
    array_push($_SESSION['add'], $_GET["text"]);

   
    

    

?>
<!DOCTYPE html>

<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" rel="stylesheet">
    </head>text=
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <form action="" method="get">
            <p>
                <input id="new-task" type="text" name="text">
                <input type="submit" value="Add" name="add">
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <!-- <li><input type="checkbox"><label> </label><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <li><input type="checkbox"><label>Go Shopping</label><input type="text" value="Go Shopping"><button class="edit">Edit</button><button class="delete">Delete</button></li> -->
                <div>
                <?php
                foreach($_SESSION["add"] as $key => $val){
                    echo $val;

                }
                ?>
                <input type="button" value="Edit">
                <input type="button" value="Delete">
            </ul>
            </div>
    
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>
            </form>
        </div>
    
    </body>
</html>