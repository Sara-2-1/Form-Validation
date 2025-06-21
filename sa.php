<?php
    $name = $email = $male = $female = $comment = $website = $success = "";
    $errors = array("","","","","");
    if(isset($_POST['submit'])){
        $name = trim($_POST['name']);
        if(strlen($name) < 1 ){
            $errors[0] = "Name is required ";
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){
            $errors[0] = "Invalid name characters only !";
          
        }else{
            $errors[0] = "";
        }
        $email = trim($_POST['email']);
        if(strlen($email) < 1 ){
            $errors[1] = "Email is required ";
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[1] = "Invalid email address , enter valid email format";
        }else{
            $errors[1] = "";
        }
        $website = trim($_POST['website']);
        if(!preg_match("/^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)\.[a-z]{2,5}(:[0-9]{1,5})?(\/.)?$/",$website) && strlen($website) > 0 ){
            $errors[2] = "Invalid website url, enter valid website format";
        }else{
            $errors[2] = "";
        }
        if(!isset($_POST['female']) && !isset($_POST['male'])){
            $errors[3] = "Gender is required";
        }else if(isset($_POST['female']) && isset($_POST['male']) ){
            $errors[3] = "You must choose only one";
        }
        else{
            $errors[3] = "";
            if(isset($_POST['male']))
                $male = "male";
            else
                $female = "female";
        }
        $comment = trim($_POST['comment']);
        if(!preg_match("/^([a-zA-Z' ]+)$/",$comment) && !empty($comment)){
            $errors[4] = "Only characters and spaces allowed";
        }else{
            $errors[4] = "";
        }
        $valid = true;
        foreach($errors as $error ){
            if($error != "")
                $valid = false;
        }
        if($valid == true){
            $success = "Supplier data successfully submitted";
            $name = $email = $male = $female = $comment = $website = "";
        }
            
    }
?>

<!Doctype html>
<html>
    <head>
        <title>Activity 4</title>
        <style>
            *{
                margin :0;
                padding: 0; 
            }
            form{
                width: 40%;
                margin:0 auto;
                margin-top: 50px;
                border: 2px solid black;
                border-radius: 25px;
                padding:20px;
                text-align:center;
                background-color : lavender ;
            }
            .row{
                margin-bottom: 10px;
            }
            .inputs ,textarea{
                width: 100%;
                height:20px;
                border-radius:7px;
                padding: 5px;
                
            }
            textarea{
                resize: none;
                height:50px
            }
            label{
                color:purple ;
            }
            .btn{
                width:100px;
                height: 35px;
                color: black;
                background-color: grey ;
                border-radius:10px;
            }
            .error{
                color:red;
                display: block;
                width: 100%;
                text-align:left;
            }
            .success{
                color : green;
            }
        </style>
    </head>
    <body>
        <form action="" method="POST">
            <h3 class="success"><?php echo $success;?></h3>
            <div class="row">
                <label>Full name </label>
                <input class="inputs" type="text"  name="name" value ="<?php echo $name;?>" placeholder="Enter your name .... ">
                <span class="error"><?php echo $errors[0];?></span>
            </div>
            <div class="row">
                <label>Gender</label><br>
                <input type="radio" name="male" <?php echo ($male === "male")?"checked":"";?> value="male"> Male &nbsp
                <input type="radio" name="female" <?php echo ($female == "female")?"checked":"";?> value="female"> Female
                <span class="error"><?php echo $errors[3];?></span>
            </div>
            <div class="row">
                <label>Email</label>
                <input class="inputs" type="text"  name="email" value ="<?php echo $email;?>" placeholder="Enter your email..">
                <span class="error"><?php echo $errors[1];?></span>
            </div>
            <div class="row">
                <label>Website</label>
                <input class="inputs" type="text"  name="website" value ="<?php echo $website;?>" placeholder="Enter your website (optional)...">
                <span class="error"><?php echo $errors[2];?></span>
            </div>
            <div>
                <label>Comment</label>
                <textarea  name="comment" placeholder="Enter your comment (optional)"><?php echo $comment?></textarea>
                <span class="error"><?php echo $errors[4];?></span>
            </div>
            <div class="row">
                <input class="btn" type="submit" value="Submit" name="submit">
            </div>
            
        </form>
    </body>
</html>