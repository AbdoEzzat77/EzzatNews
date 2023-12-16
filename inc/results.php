 <!-- Page Content -->
 <body>
 
    <!-- Blog Entries Column -->
    <div class="col-md-8">
        <h1 class="page-header"> Ezzat News <small>By Eng Ezzat </small></h1>
        <?php
         if (isset($_POST['search'])) {
            $keywords = $_POST['keywords'];

        }
                $sqlPosts = "SELECT * FROM `posts` WHERE `post_tags` LIKE '%$keywords%' ";
                $allPosts = mysqli_query($connection , $sqlPosts);
                $count = mysqli_num_rows($allPosts);
                //echo $count;

                if($count == 0 ){?>
                <div class="text-center alert alert-danger">
                    <h1 class="text-danger"> No Results </h1>
                </div>

<?php
                }
                
                
                else{

               

                while($row = mysqli_fetch_assoc($allPosts)):
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_category = $row['post_category'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'],0,150);
                    //$post_content = $row['post_content']; 
                    $post_tags = $row['post_tags'];
                    $post_comment_count = $row['post_comment_count'];
                    ?>

                                        
        <!-- First Blog Post -->
        <h2>
            <a href="post.php?pid=<?=$post_id?>"><?=$post_title ?></a> </h2>
        <p class="lead">
            by <a href="index.php"><?=$post_author ?></a>
        </p>
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$post_date ?></p>
        <hr>
        <img class="img-responsive" src="images/<?=$post_image?>" alt="">
        <hr>
        <p> <?=$post_content ?> </p>
        <a class="btn btn-primary" href="post.php?pid=<?=$post_id?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

        <hr>
        <?php endwhile ;  } //else ?>
    </div>

    