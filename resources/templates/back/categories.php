<h1 class="page-header">
  Product Categories
</h1>

<?php add_category() ?>

<h4 class="text-center bg-success">
    <?php display_message(); ?>
</h4>

<div class="col-md-4">
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input name="cat_title" type="text" class="form-control">
        </div>

        <div class="form-group"> 
            <input type="submit" name="add_category" class="btn btn-primary" value="Add Category">
        </div>      

    </form>

</div>


<div class="col-md-8">

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            get_categories_in_admin();
            ?>
        </tbody>
    </table>

</div>
