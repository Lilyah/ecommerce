<div id="page-wrapper">

<div class="container-fluid">

  <div class="row">

    <h1 class="page-header">
      Reports
    </h1>

    <h4 class="text-center bg-success">
      <?php display_message(); ?>
    </h4>

    <table class="table table-hover">
      <thead>

        <tr>
          <th>ID</th>
          <th>Order ID</th>
          <th>Product ID</th>
          <th>Product Title</th>
          <th>Product Price</th>
          <th>Ordered Quantity</th>
        </tr>

      </thead>

      <tbody>

        <?php 
        get_reports();
        ?>

      </tbody>
    </table>

  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->