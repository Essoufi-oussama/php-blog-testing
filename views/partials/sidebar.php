<div class="sidebar col-xl-3 col-lg-3" id="blog-sidebar">
    <ul class="blog-categories black-shadow">
        <h4 >Thémes</h4>
        
        <?php 
            require_once 'Database.php';
            $config = require('config.php');
            $db = new Database($config['database']);

            $categories = $db -> query("select * from categories")-> fetchAll(PDO::FETCH_ASSOC);
            foreach ($categories as $category) {
                echo '<a href=""><li class="blog-category gray-border"><img src="' . $category["icon"] . '" alt="' . $category["name"] . '" class="category-icon">' . $category["name"] . '</li></a>';
            }
        ?>
    </ul>
</div>