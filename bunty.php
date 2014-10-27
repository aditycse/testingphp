<?php //filename:bunty.php ?>
<html>
    <head>
        <title>test</title>
    </head>
    <body>
        <form method="post" action='bunty.php'>
            <label>Name</label>
            <input type="text" value='' name="name"/></br>
            <label>Password</label>
            <input type='password' value='' name="passwd"/></br>
            <input type='submit' value='login'/>
        </form>
    </body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    //echo "<pre>";
    //print_r($_SERVER);
    if(empty($_POST['name']) || empty($_POST['passwd'])){
        echo "Please Fill details";
    }else{
        echo "Thanks for Required Info !!";
    }
}else{
    echo "Error Try Again !!";
}
?>

