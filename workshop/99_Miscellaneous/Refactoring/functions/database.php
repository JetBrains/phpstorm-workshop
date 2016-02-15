<?php
class Database {

}

/**
 * Ensures default database content is created.
 */
function prep_DB_content()
{
    global $databaseConnection;
    $admin_role_id = 1;

    create_tables($databaseConnection);
    create_roles($databaseConnection, $admin_role_id);
    create_admin($databaseConnection, $admin_role_id);
    create_homepage($databaseConnection, $admin_role_id);
}

/**
 * Creates database tables.
 *
 * @param mysqli $databaseConnection Database connection.
 */
function create_tables($databaseConnection)
{
    $query_users = "CREATE TABLE IF NOT EXISTS users (id INT NOT NULL AUTO_INCREMENT, username VARCHAR(50), password CHAR(40), PRIMARY KEY (id))";
    $databaseConnection->query($query_users);

    $query_roles = "CREATE TABLE IF NOT EXISTS roles (id INT NOT NULL, name VARCHAR(50), PRIMARY KEY (id))";
    $databaseConnection->query($query_roles);

    $query_users_in_roles = "CREATE TABLE IF NOT EXISTS users_in_roles (id INT NOT NULL AUTO_INCREMENT, user_id INT NOT NULL, role_id INT NOT NULL, ";
    $query_users_in_roles .= " PRIMARY KEY (id), FOREIGN KEY (user_id) REFERENCES users(id), FOREIGN KEY (role_id) REFERENCES roles(id))";
    $databaseConnection->query($query_users_in_roles);

    $query_pages = "CREATE TABLE IF NOT EXISTS pages (id INT NOT NULL AUTO_INCREMENT, menulabel VARCHAR(50), content TEXT, PRIMARY KEY (id))";
    $databaseConnection->query($query_pages);
}

/**
 * Create roles.
 *
 * @param mysqli $databaseConnection Database connection.
 * @param int $admin_role_id Role for the administrator user.
 */
function create_roles($databaseConnection, $admin_role_id)
{
    $query_check_roles_exist = "SELECT id FROM roles WHERE id <= 2";
    $statement_check_roles_exist = $databaseConnection->prepare($query_check_roles_exist);
    $statement_check_roles_exist->execute();
    $statement_check_roles_exist->store_result();
    if ($statement_check_roles_exist->num_rows == 0) {
        $query_insert_roles = "INSERT INTO roles (id, name) VALUES ($admin_role_id, 'admin'), (2, 'user')";
        $statement_inser_roles = $databaseConnection->prepare($query_insert_roles);
        $statement_inser_roles->execute();
    }
}

/**
 * Create administrator.
 *
 * @param mysqli $databaseConnection Database connection.
 * @param int $admin_role_id Role for the administrator user.
 */
function create_admin($databaseConnection, $admin_role_id)
{
    // HACK: Storing config values in variables so that they aren't passed by reference later.
    $default_admin_username = DEFAULT_ADMIN_USERNAME;
    $default_admin_password = DEFAULT_ADMIN_PASSWORD;

    $query_check_admin_exists = "SELECT id FROM users WHERE username = ? LIMIT 1";
    $statement_check_admin_exists = $databaseConnection->prepare($query_check_admin_exists);
    $statement_check_admin_exists->bind_param('s', $default_admin_username);
    $statement_check_admin_exists->execute();
    $statement_check_admin_exists->store_result();
    if ($statement_check_admin_exists->num_rows == 0) {
        $query_insert_admin = "INSERT INTO users (username, password) VALUES (?, SHA(?))";
        $statement_insert_admin = $databaseConnection->prepare($query_insert_admin);
        $statement_insert_admin->bind_param('ss', $default_admin_username, $default_admin_password);
        $statement_insert_admin->execute();
        $statement_insert_admin->store_result();

        $admin_user_id = $statement_insert_admin->insert_id;
        $query_add_admin_to_role = "INSERT INTO users_in_roles (user_id, role_id) VALUES (?, ?)";
        $statement_add_admin_to_role = $databaseConnection->prepare($query_add_admin_to_role);
        $statement_add_admin_to_role->bind_param('dd', $admin_user_id, $admin_role_id);
        $statement_add_admin_to_role->execute();
        $statement_add_admin_to_role->close();
    }
}

/**
 * Adds homepage contents to the database.
 *
 * @param mysqli $databaseConnection Database connection.
 */
function create_homepage($databaseConnection)
{
    $homepageId = 1;
    $homepageTitle = 'Home';
    $homepageContents = '<ol class="round">
    <li class="one">
        <h5>Login as admin </h5>
The site admin username and password are both &quot;admin&quot;.
    </li>
    <li class="two">
        <h5>Customize your site</h5>
After you login, you can add, delete, and modify web pages.
     </li>
    <li class="asterisk">
        <div class="visit">
To learn more about PhpStorm, visit <a href="http://www.jetbrains.com/phpstorm" title="PhpStorm website">jetbrains.com/phpstorm</a>.
        </div>
     </li>
</ol>';

    $query_check_homepage_exists = "SELECT id FROM pages WHERE id = ? LIMIT 1";
    $statement_check_homepage_exists = $databaseConnection->prepare($query_check_homepage_exists);
    $statement_check_homepage_exists->bind_param('d', $homepageId);
    $statement_check_homepage_exists->execute();
    $statement_check_homepage_exists->store_result();
    if ($statement_check_homepage_exists->num_rows == 0) {
        $query_insert_page = "INSERT INTO pages (id, menulabel, content) VALUES (?, ?, ?)";
        $statement_insert_page = $databaseConnection->prepare($query_insert_page);
        $statement_insert_page->bind_param('dss', $homepageId, $homepageTitle, $homepageContents);
        $statement_insert_page->execute();
        $statement_insert_page->store_result();
    }
}
