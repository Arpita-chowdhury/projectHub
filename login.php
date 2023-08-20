<?php
include ("config/dbConn.php");
include ("inc/head.php") ?>

<main>
    <!--register section-->
    <!--form start-->
    <div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col-6 mt-5 border rounded bg-secondary">
                
                <div class="h3 p-3 text-light text-center">Log In</div>
                <!--student login-->
                <form class=" needs-validation" id="student" action="" method="post" autocomplete="off" novalidate>
                    <table class="table table-borderless pt-5">
                        <tr class="">
                            <td class="h6 ps-4">Team ID</td>
                            <td class=""><input class="form-control mb-1" placeholder="" type="text" name="" required></td>
                        </tr>
                        <tr>
                            <td class="h6 ps-4">Password</td>
                            <td class=""><input class="form-control mb-1" placeholder="" type="password" name="" required></td>
                        </tr>
                        
                        <tr>
                            <p class="form-text text-center text-light">Enter the Team ID you have been provided while Registration.</p>
                            <td colspan="2" align="center"><input class="btn btn-secondary" type="submit" value="Log In"></td>
                        </tr>
                    </table>
                        
                    </form>

            </div>

            <div class="col"></div>
        </div>
        
        
    </div>
    <!--form end-->
</main>


        
</div>

    <script src="scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>