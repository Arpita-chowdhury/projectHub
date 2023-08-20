<?php

 $isValid = false;
 $authenticationErr = "";
    if(isset($_POST["submitLog"]))
    {
        $sql = "SELECT team_id, password 
                FROM team WHERE 
                team_id ='$_POST[team_id]' && password ='$_POST[logPass]' ";
        $login = mysqli_query($conn,$sql);

        while($varification = mysqli_fetch_array($login)){
            
            $_SESSION["team"] = $varification["team_id"];
        
            $isValid = true;
        }

        if($isValid == true){
            ?>
        
            <script type="text/javascript">
                window.location="user/user_dashboard.html";
            </script>
        
            <?php
        }else{
            $authenticationErr = "Invalid Team-ID or Password !";
        }
        
            
        
        
    } 
    
?>