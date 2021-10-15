<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="shop">Shop</a>
                    </li>

                    <?php

                    if(isset($_SESSION['username'])){
                        $admin_button = <<<DELIMETER
                        <li>
                        <a href="admin/index">Admin</a>
                        </li>
                        DELIMETER;
                
                        echo $admin_button;
                    } else {
                        $login_button = <<<DELIMETER
                        <li>
                        <a href="login">Login</a>
                        </li>
                        DELIMETER;
                
                        echo $login_button;
                    }

                    ?>
                
                     <li>
                        <a href="checkout">Checkout</a>
                    </li>
                    <li>
                        <a href="contact">Contact</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->