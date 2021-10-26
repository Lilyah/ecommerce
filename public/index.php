<?php 

require_once("../resources/config.php");

/* TEMPLATE_FRONT is custom defined in resources/config.php
*/
include(TEMPLATE_FRONT . "/header.php");

?>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?php
            /* TEMPLATE_FRONT is custom defined in resources/config.php
            */
            include(TEMPLATE_FRONT . "/side_nav.php")
            ?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">

                    <?php
                    /* TEMPLATE_FRONT is custom defined in resources/config.php
                    */
                    include(TEMPLATE_FRONT . "/slider.php")
                    ?>
                        
                    </div>

                </div>

                <div class="row">

                <?php
                get_products();
                ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

<?php

/* TEMPLATE_FRONT is custom defined in resources/config.php
*/
include(TEMPLATE_FRONT . "/footer.php");

?>
