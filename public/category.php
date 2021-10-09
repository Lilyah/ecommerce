<?php 

require_once("../resources/config.php");

/* TEMPLATE_FRONT is custom defined in resources/config.php
*/
include(TEMPLATE_FRONT . "/header.php");

?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <?php
        get_category();
        ?>

         <!-- Page Features -->
         <div class="row text-center">

        <?php
        get_products_in_cat_page();
        ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


<?php

/* TEMPLATE_FRONT is custom defined in resources/config.php
*/
include(TEMPLATE_FRONT . "/footer.php");

?>
