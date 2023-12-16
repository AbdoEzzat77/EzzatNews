<!-- Side Widget Well -->
<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <form action="search.php" method="post">
        <div class="input-group">
            <input type="text" name="keywords" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" name="search" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
        <!-- /.input-group -->
        </form>
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
            <h4>Blog Categories</h4>
            <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                <?php
                $sqlCategories = "SELECT * FROM `categories`;";
                $allCategories = mysqli_query($connection , $sqlCategories);
                
                while($row = mysqli_fetch_assoc($allCategories)):
                    $cat_ID = $row['cat_ID'];
                    $cat_title = $row['cat_title'];
                    ?>
                    <li>
                    <a href="category.php?cid=<?=$cat_ID ?>"> <?=$cat_title ?> </a>                    </li>

                <?php endwhile ; ?>

                </ul>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>


    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>

</div>
<!-- /.row -->

<hr>