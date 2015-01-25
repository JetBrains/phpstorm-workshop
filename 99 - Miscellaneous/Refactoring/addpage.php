<?php
require_once 'config.php';
require_once SITE_PATH . '/includes/session.php';
require_once SITE_PATH . '/includes/connectDB.php';
include SITE_PATH . '/includes/header.php';
confirm_is_admin($session);

if (isset($_POST['submit'])) {
    $menulabel = $_POST['menulabel'];
    $content = $_POST['content'];
    $query = "INSERT INTO pages (menulabel, content) VALUES (?, ?)";

    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('ss', $menulabel, $content);
    $statement->execute();
    $statement->store_result();

    if ($statement->error) {
        die('Database query failed: ' . $statement->error);
    }

    $creationWasSuccessful = $statement->affected_rows == 1 ? true : false;
    if ($creationWasSuccessful) {
        header("Location: index.php");
        exit;
    } else {
        echo 'Failed adding new page';
    }
}
?>
<div id="main">
    <h2>Add Page</h2>

    <form action="addpage.php" method="post">
        <fieldset>
            <legend>Add Page</legend>
            <ol>
                <li>
                    <label for="menulabel">Menu Label:</label>
                    <input type="text" name="menulabel" value="" id="menulabel"/>
                </li>
                <li>
                    <label for="content">Page Content:</label>
                    <textarea name="content" id="content"></textarea>
                </li>
            </ol>
            <input type="submit" name="submit" value="Submit"/>

            <p>
                <a href="index.php">Cancel</a>
            </p>
        </fieldset>
    </form>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php include SITE_PATH . '/includes/footer.php'; ?>

