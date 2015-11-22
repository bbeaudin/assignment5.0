<nav>
    <ol>
        <?php
        
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "form") {
            print '<li class="activePage">Form</li>';
        } else {
            print '<li><a href="form.php">Form</a></li>';
        }
        
        print '<li><a href="Specifications.pdf">Specifications</a></li>';
        
        if ($path_parts['filename'] == "sitemap") {
            print '<li class="activePage">Sitemap</li>';
        } else {
            print '<li><a href="../sitemap.php">Sitemap</a></li>';
        }
        
        ?>
    </ol>
</nav>
