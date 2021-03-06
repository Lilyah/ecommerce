<?php 

require_once("../resources/config.php");

/* TEMPLATE_FRONT is custom defined in resources/config.php
*/
include(TEMPLATE_FRONT . "/header.php");

?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <h2 class="text-center bg-danger"><?php display_message(); ?></h2>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post">

                <?php 
                login_user();
                ?>

                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="user_password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

<?php

/* TEMPLATE_FRONT is custom defined in resources/config.php
*/
include(TEMPLATE_FRONT . "/footer.php");

?>
