<?php
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
    
    
                                    




?>