<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Ezzat News</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                <?php
                $sqlCategories = "SELECT * FROM `categories`;";
                $allCategories = mysqli_query($connection , $sqlCategories);
                
                while($row = mysqli_fetch_assoc($allCategories)):
                    $cat_ID = $row['cat_ID'];
                    $cat_title = $row['cat_title'];
                    ?>
                    <li>
                        <a href="category.php?cid=<?=$cat_ID ?>"> <?=$cat_title ?> </a>
                    </li>

                <?php endwhile ; ?>

                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
