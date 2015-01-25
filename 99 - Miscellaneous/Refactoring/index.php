<?php
require_once 'config.php';
require_once SITE_PATH . '/includes/connectDB.php';
include SITE_PATH . '/includes/header.php';
?>

    <div id="main">
        <?php
        $pageid = $_GET['pageid'];
        if ($pageid == 0 || $pageid == '') {
            $pageid = 1;
        }
        $query = 'SELECT menulabel, content FROM pages WHERE id = ? LIMIT 1';
        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('s', $pageid);
        $statement->execute();
        $statement->store_result();
        if ($statement->error) {
            die('Database query failed: ' . $statement->error);
        }

        if ($statement->num_rows == 1) {
            $statement->bind_result($menulabel, $content);
            $statement->fetch();
            echo "<h2>$menulabel</h2> $content";
        } else {
            echo 'Page Not Found';
        }
        ?>
    </div>
    </div> <!-- End of outer-wrapper which opens in header.php -->
<?php
include SITE_PATH . '/includes/footer.php';
?>
