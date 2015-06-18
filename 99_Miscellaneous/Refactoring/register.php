<?php
require_once 'config.php';
require_once SITE_PATH . '/includes/connectDB.php';
include SITE_PATH . '/includes/header.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, password) VALUES (?, SHA(?))";

    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('ss', $username, $password);
    $statement->execute();
    $statement->store_result();

    $creationWasSuccessful = $statement->affected_rows == 1 ? true : false;
    if ($creationWasSuccessful) {
        $userId = $statement->insert_id;

        $addToUserRoleQuery = "INSERT INTO users_in_roles (user_id, role_id) VALUES (?, ?)";
        $addUserToUserRoleStatement = $databaseConnection->prepare($addToUserRoleQuery);

        // TODO: Extract magic number for the 'user' role ID.
        $userRoleId = 2;
        $addUserToUserRoleStatement->bind_param('dd', $userId, $userRoleId);
        $addUserToUserRoleStatement->execute();
        $addUserToUserRoleStatement->close();

        $session->set('userid', $userId);
        $session->set('username', $username);
        header("Location: index.php");
        exit;
    } else {
        echo "Failed registration";
    }
}
?>
    <div id="main">
        <h2>Register an account</h2>

        <form action="register.php" method="post">
            <fieldset>
                <legend>Register an account</legend>
                <ol>
                    <li>
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="" id="username"/>
                    </li>
                    <li>
                        <label for="password">Password:</label>
                        <input type="password" name="password" value="" id="password"/>
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
<?php
include SITE_PATH . '/includes/footer.php';
?>
