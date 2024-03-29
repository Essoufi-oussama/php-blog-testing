<?php 
    require_once 'Database.php';
    $config = require('config.php');
    $db = new Database($config['database']);
    $posts = $db -> query("select * from posts")-> fetchAll(PDO::FETCH_ASSOC);

?>

<div class="forums-test col-xl-6 col-lg-6 col-md-12">

    <?php
        foreach($posts as $post){
            
            echo '<div class="forum-post black-shadow">' .
                    '<img src="https://mathagonyaunt.co.uk/wp-content/uploads/sites/24/2019/01/cvAIXjdAsDym.jpg" alt="profile picture of author" class="post-image">' .
                    '<div class="writer-info"> 
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0_oUFa_Jfl6TLQ68zvHCwJzhkoVPLTQ2BSQ&usqp=CAU" alt="" class="blog-profile-pic">
                    <div>
                        <a href="" class="writer-name">Essoufi Oussama</a>
                        <h6 class="date">Mar 4</h6>
                    </div>    
                    </div>       
                    <div class="post">
                    <a href="details" class="post-title">' . $post['title'] . '</a>
                    <ul class="post-categories">
                    <li class="category"><a href="">#category</a></li>
                </ul>

                <div class="reactions-container">
                    <a href="" class="post-likes">
                        <i class="fa fa-like-o"></i>
                        <span class="">22<span> likes</span></span>
                    </a>
                    <div class="reactions">
                        <a href=""  class="post-comments"> 
                            <i class="fa fa-comment-o"></i>
                            <span class="">22<span> comments</span></span>
                        </a>
                    </div>
                    <div class="post-bookmark">
                        <div class="reading-time">3 min read</div>
                        <a href="" class="fa fa-bookmark"></a>
                    </div>
                </div>    
            </div>
            
        </div>';
        }
    ?>
</div>