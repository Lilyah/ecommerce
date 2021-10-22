  <div class="row">

    <h3 class="bg-success"></h3>

    <?php add_slides() ?>

    <h4 class="text-center bg-success">
      <?php display_message(); ?>
    </h4>

    <div class="col-xs-4">

      <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <input type="file" name="file">
        </div>

        <div class="form-group">
          <label for="title">Slide Title</label>
          <input type="text" name="slide_title" class="form-control">
        </div>

        <div class="form-group">
          <input type="submit" name="add_slide">
        </div>

      </form>

    </div>

    <div class="col-xs-8">
      <img src="https://via.placeholder.com/800x300" alt="">
    </div>

  </div><!-- ROW-->

  <hr>

  <h1>Slides Available</h1>

  <div class="row">
  </div>


