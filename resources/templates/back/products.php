          <div id="page-wrapper">

            <div class="container-fluid">

              <div class="row">

                <h1 class="page-header">
                  All Products
                </h1>

                <h4 class="text-center bg-success">
                  <?php display_message(); ?>
                </h4>

                <table class="table table-hover">
                  <thead>

                    <tr>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Category</th>
                      <th>Price</th>
                      <th>Quantity in stock</th>
                    </tr>

                  </thead>

                  <tbody>

                    <?php 
                    get_products_in_admin();
                    ?>

                  </tbody>
                </table>

              </div>

            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- /#page-wrapper -->