<?php
session_start();
    $a = $_POST["text"];
    $index = 0;
    if (!isset($_SESSION["add"])) {
        $_SESSION["add"] = array();  
    }
    if($a != ""){
    
    array_push($_SESSION['add'], $a);
    $index++;
   
    }  
    print_r($_SESSION["add"][$index]);
     

    
if(!isset($_POST['checkbox'])){
    $_SESSION["dataC"] = array();
}
$c = $_SESSION["add"][$index];
if($c != ""){
    

array_push($_SESSION['dataC'],$c);
$index++;
}


    
    

?>
<!DOCTYPE html>

<html>
    <head>
        <title>TODO List</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <form action="" method="POST">
            <p>
                <input id="new-task" type="text" name="text">
                <input type="submit" value="Add" name="add">
            </p>
    
            <h3>Todo</h3>
            <ul id="incomplete-tasks">
                <?php
                foreach($_SESSION["add"] as $key => $val){
                        echo '<li><input type="checkbox" name='.$index.'><label>' .$val. '</label><button class="edit" name="edit">Edit</button><button class="delete" name="delete">Delete</button></li>';
}
                ?>
            </ul>
            </form>
            
            <form action="" method="POST">
            <h3>Completed</h3>
            <ul id="completed-tasks">
            <?php
            foreach($_SESSION["dataC"] as $key => $val1){
                echo '<li><input type="checkbox" checked><label>' .$_SESSION["add"][$index]. '</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>';
            }
            ?>
                </ul>
        </form>
            
        </div>
    </body>
</html>