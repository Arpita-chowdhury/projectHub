<?php 
include ("config/dbConn.php");
include ("inc/head.php");
?>

<?php //include ("js/valid.php"); ?>
<?php
//generating team id by using random_int function
$randomNumber = random_int(100000,999999);
$teamID = $randomNumber;

?>
<?php include ("action/validation.php"); ?>

<main class="form-container-style">
    <!--register section-->
    <!--form container start-->
    <div class="container ">
        <div class="row ">
            <div class="col"></div>
            
            <div class="col-sm-12 col-md-10 col-lg-7 mt-4 ">
                
                <!--form-->
                <form id="regForm" class="border border-secondary rounded bg-secondary p-2 " needs-validation 
                action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post" autocomplete="off" novalidate submit>
                    <div class="h3 p-4 text-light bg-secondary text-center">Team Registration</div>
                    <hr class="text-light mt-0">
                    <table class="table ">
                        <tr>
                            <td class="h6 pt-3 ps-5">Team Name</td>
                            <td  class="pe-4">
                                <input class="form-control mb-1 " placeholder="" type="Text" name="teamName" required>
                                
                            </td>
                        </tr>
                        <tr>
                            <td class="h6 pt-3 ps-5">Team ID</td>
                            <td  class="pe-4">
                                <input class="form-control h6 fw-bold" type="Text" name="teamID" value="<?php echo $teamID; ?>" disabled>
                            </td>
                        </tr>
                        <tr class="bg-light">
                            <td class="h6 pt-5 ps-5 ">Member 1</td>
                            <td class="pe-4">
                                <div class="form-input">
                                    <label class="form-label mb-0" for="">Student ID</label>
                                    <input id="sid" class="form-control" placeholder="123 456 7890" type="text" name="id[]" minlength="10" maxlength="10" >
                                    <p class="text-danger mb-0 pb-1" style="font-size: 13px;"><?php echo $idErr ?> </p>
                                </div>

                                <div class="form-input">
                                    <label class="form-label mb-0" for="">Name</label>
                                    <input id="name" class="form-control" placeholder="member name" type="text" name="name[]" >
                                    <p class="text-danger mb-0 pb-1" style="font-size: 13px;"><?php echo $nameErr ?></p>
                                </div>
                                
                                <div class="form-input">
                                    <label class="form-label mb-0" for="">Email</label>
                                    <input id="email" class="form-control" placeholder="example@gmail.com" type="text" name="email[]" >
                                    <p class="text-danger mb-0 pb-1" style="font-size: 13px;"><?php echo $emailErr ?></p>
                                </div>

                                <div class="form-input">
                                    <label class="form-label mb-0" for="">Phone</label>
                                    <input id="phone" class="form-control" placeholder="01234 567890" type="text"  minlength="11" maxlength="11" name="phone[]" >
                                    <p class="text-danger mb-0 pb-1" style="font-size: 13px;"><?php echo $phoneErr ?></p>
                                </div>
                                
                            </td>
                        </tr>
                        <!--add member dynamically-->
                        <tbody class="" id="addRow"></tbody>
                        
                        
                        <!--add button-->
                        <tr>
                            <td colspan="2" align="center">
                                <button type="button" data-bs-toggle="collapse" href="#mem2" class="btn btn-transparent btn-outline-secondary fw-bold " onclick="addMember();">Add Member<i class="fa-solid fa-plus fw-bold ms-1"></i></button>
                            </td>
                        </tr>
                        <tr >
                            <td class="h6 pt-3 ps-5 ">Password</td>
                            <td class="position-relative">
                            <div class="form-input">
                                <input id="regPass" class="form-control mb-1" placeholder="" type="password" name="regPass"  required>
                                <i class="fa-regular fa-eye btn border-0 text-muted position-absolute end-0 top-0 pe-4 pt-4" onclick="visibility_toggle_pass()"></i> 
                                <p class="text-danger mb-0 pb-1" style="font-size: 13px;"><?php echo $passErr ?></p>
                            </div>
                            </td>
                        </tr>
                        <tr >
                            <td class="h6 pt-3 ps-5">Confirm Password</td>
                            <td class="position-relative">
                                <div class="form-input">
                                    <input id="regConPass" class="form-control mb-1" placeholder="" type="password" name="regConPass" required>
                                    <i class="fa-regular fa-eye btn border-0 text-muted position-absolute end-0 top-0 pe-4 pt-4" onclick="visibility_toggle_conPass()"></i>
                                    <p class="text-danger mb-0 pb-1" style="font-size: 13px;"><?php echo $passErr ?></p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <p class="form-text text-center text-light">'Team ID' will be needed for Log In.</p>
                            <td colspan="2" align="center">
                                <input id="submit" class="btn btn-secondary" type="submit" name="submitReg" value="Register">
                            </td>
                        </tr>
                    </table>
                        
                    </form>
            </div>
            
            

            <div class="col"></div>
        </div>
        
        
    </div>
    <!--form end-->
</main>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

<!--for storing info collected through the reg form-->
<?php include ("action/add_team_member.php"); ?>


<!--password visibility js code-->
<script src="js/password_visibility_toggle.js"></script>


<!--stop form resubmission-->
<script >
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
    }
</script>






<?php include("inc/foot.php"); ?>
