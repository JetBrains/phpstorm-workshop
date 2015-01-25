<?php
require_once 'config.php';
require_once SITE_PATH . '/includes/connectDB.php';
include SITE_PATH . '/includes/header.php';
confirm_is_admin($session);

if (isset($_POST['submit'])) {
    $pageId = $_POST['pageId'];
    $query = "SELECT Id FROM pages WHERE id = ?";
    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('d', $pageId);
    $statement->execute();
    $statement->store_result();

    if ($statement->error) {
        die('Database query failed: ' . $statement->error);
    }

    // TODO: Check for == 1 instead of > 0 when page names become unique.
    $pageExists = $statement->num_rows == 1;
    if ($pageExists) {
        header("Location: editpage.php?id=$pageId");
    } else {
        echo "Failed to locate selected page for edit";
    }
}
?>
    <div id="main">
        <h2>Edit Page</h2>

        <form action="selectpagetoedit.php" method="post">
            <fieldset>
                <legend>Edit Page</legend>
                <ol>
                    <li>
                        <label for="pageId">Title:</label>
                        <select id="pageId" name="pageId">
                            <option value="0">--Select Page--</option>
                            <?php
                            $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                            $statement->execute();

                            if ($statement->error) {
                                die("Database query failed: " . $statement->error);
                            }

                            $statement->bind_result($id, $menulabel);
                            while ($statement->fetch()) {
                                echo "<option value=\"$id\">$menulabel</option>\n";
                            }
                            ?>
                        </select>
                    </li>
                </ol>
                <input type="submit" name="submit" value="Edit"/>
            </fieldset>
        </form>
        <br/>
        <a href="index.php">Cancel</a>
    </div>
    </div> <!-- End of outer-wrapper which opens in header.php -->
<?php include SITE_PATH . '/includes/footer.php'; ?>
