        <div id="page-wrapper">

            <div class="container-fluid">

                    <div class="col-lg-12">
                      
                        <h1 class="page-header">
                            Users
                        </h1>

                        <h4 class="text-center bg-success">
                            <?php display_message(); ?>
                        </h4>

                        <a href="add_user.php" class="btn btn-primary">Add User</a>

                        <div class="col-md-12">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Username</th>
                                        <th>User Email</th>
                                        <th>User Password</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php display_users() ?>                                  
                                    
                                </tbody>
                            </table> <!--End of Table-->
                        
                        </div>
                        
                    </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->