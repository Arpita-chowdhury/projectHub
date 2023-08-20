<?php
$id = $name = $email = $phone = $pass = $conPass = "";
$idErr = $nameErr = $emailErr = $phoneErr = $passErr = $conPassErr = "";
$vid = $vname = $vemail = $vphone = $vpass = $vconpass = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $pass = ($_POST["regPass"]);
    $conPass = ($_POST["regConPass"]);

    for ($a = 0; $a < count($_POST["name"]); $a++){
        
        // define variables
        $id = ($_POST["id"][$a]);
        $name = ($_POST["name"][$a]);
        $email = ($_POST["email"][$a]);
        $phone = ($_POST["phone"][$a]);
        
        //valid inputs
        $isValidSid = preg_match("/^\d{10}$/", $id);
        $isValidName = preg_match("/^[a-zA-Z]+ [a-zA-Z]+$/", $name);
        $isValidEmail = preg_match("/^\\S+@\\S+\\.\\S+$/", $email);
        $isValidPhone = preg_match("/^\+?(88)?0?1[3456789][0-9]{8}\b/", $phone);

        //id
        if (empty($id)) {
            $idErr = "ID is required";
        } else if(!$isValidSid){
            $idErr = "Provide a valid student ID";
        }else{
            $vid = true;
        } 
        
        //name
        if (empty($name)) {
            $nameErr = "Name is required";
        } else if(!$isValidName){
            $nameErr = "Provide first name & last name.";
        }else{
            $vname = true;
        }

        //email
        if (empty($email)) {
            $emailErr = "Email is required";
        } else if(!$isValidEmail){
            $emailErr = "Provide a valid email address";
        }else{
            $vemail = true;
        }
    
        //phone
        if (empty($phone)) {
            $phoneErr = "Phone number is required";
        } else if(!$isValidPhone){
            $emailErr = "Provide a valid phone number";
        }else{
            $vphone = true;
        }
    }


    //pass
    if (empty($pass)) {
        $passErr = "Password is required";
    } else if(strlen($pass) < 8){
        $passErr = "Password should be at least 8 characters.";
    }else{
        $vpass = true;
    }

    //con pass
    if (empty($conPass)) {
        $conPassErr = "Please confirm your password";
    } else if($pass !== $conPass){
        $conPassErr = "Passwords doesn't match";
    }else{
        $vconpass = true;
    }
    
   
}

if($vid && $vname && $vemail && $vphone && $vpass && $vconpass == true){
    //insert into db
    if (isset($_POST["submitReg"])){
        $team_name = $_POST["teamName"];
        $team_id = $teamID;
        $password = $_POST["regConPass"];

        //inserted into table ---> team 
        //team id and pass will be used for team varification
        $sql = "INSERT INTO team( serial , team_id , team_name , password) 
        VALUES ('' , '$team_id', '$team_name' , '$password')";
        $team = mysqli_query($conn, $sql);



        //inserted into table ----> user
        //each members details with similar team id for each team
        //team_id ----> foreign key
        for ($a = 0; $a < count($_POST["name"]); $a++)
        {
            $sql = "INSERT INTO user (serial , team_id , std_id , name , email , phone )
            VALUES('' , '$team_id' , '" . $_POST["id"][$a] . "' , '" . $_POST["name"][$a] . "' ,
            '". $_POST["email"][$a] ."' , '". $_POST["phone"][$a] ."' )";
            $user = mysqli_query($conn, $sql);
        }

        //confirmation alart
        if($team){
            echo '<script type="text/javascript">';
            echo ' alert("Thank You. Team has been Registard Successfully. \nTeam ID : "+"'.$team_id.'")';
            echo '</script>';
        }else{
            echo ("Something went wrong");
        }    
    }
}

?>