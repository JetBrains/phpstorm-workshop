<?php
require_once 'config.php';
require_once SITE_PATH . '/includes/session.php';
require_once SITE_PATH . '/includes/connectDB.php';
include SITE_PATH . '/includes/header.php';
confirm_is_admin($session);

$pageId = null;
$menulabel = null;
$content = null;
if (isset($_GET['id'])) {
    $pageId = $_GET['id'];
    $query = "SELECT menulabel, content FROM pages WHERE id = ?";
    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('d', $pageId);
    $statement->execute();
    $statement->store_result();

    if ($statement->error) {
        die('Database query failed: ' . $statement->error);
    }

    $pageExists = $statement->num_rows == 1;
    if ($pageExists) {
        $statement->bind_result($menulabel, $content);
        $statement->fetch();
    } else {
        header("Location: index.php");
        exit;
    }
} else if (isset($_POST['submit'])) {
    $pageId = $_POST['pageId'];
    $menulabel = $_POST['menulabel'];
    $content = $_POST['content'];
    $query = "UPDATE pages SET menulabel = ?, content = ? WHERE Id = ?";

    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('ssd', $menulabel, $content, $pageId);
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
        echo 'Failed to edit page';
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<div id="main">

    <h1>Edit Page</h1>

    <form action="editpage.php" method="post">
        <fieldset>
            <legend>Edit Page</legend>
            <ol>
                <li>
                    <input type="hidden" id="pageId" name="pageId" value="<?php echo $pageId; ?>"/>
                    <label for="menulabel">Menu Label:</label>
                    <input type="text" name="menulabel" value="<?php echo $menulabel; ?>" id="menulabel"/>
                </li>
                <li>
                    <label for="content">Page Content:</label>
                    <textarea name="content" id="content"><?php echo $content; ?></textarea>
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

