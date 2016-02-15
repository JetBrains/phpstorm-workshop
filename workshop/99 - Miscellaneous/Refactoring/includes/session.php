<?php
session_start();
require_once SITE_PATH . '/includes/connectDB.php';
require_once SITE_PATH . '/includes/classes/Session.php';

/* Setup new session */
$sessionType = 'Session';
$session = new $sessionType($_SESSION);

/**
 * Is the current user logged on?
 *
 * @param Session $session The session to check.
 * @return bool True if the user is logged on, false otherwise.
 */
function logged_on($session)
{
    return $session->has('userid');
}

/**
 * Ensure the current user is an administrator.
 *
 * @param Session $session The session to check.
 */
function confirm_is_admin($session)
{
    if (!logged_on($session)) {
        header("Location: logon.php");
        exit;
    }

    if (!is_admin($session)) {
        header("Location: index.php");
        exit;
    }
}

/**
 * Is the current user an administrator?
 *
 * @param Session $session The session to check.
 * @return bool True if the user is administrator, false if otherwise.
 */
function is_admin($session)
{
    global $databaseConnection;
    $query = "SELECT user_id FROM users_in_roles UIR INNER JOIN roles R on UIR.role_id = R.id WHERE R.name = 'admin' AND UIR.user_id = ? LIMIT 1";
    $statement = $databaseConnection->prepare($query);
    $statement->bind_param('d', $session->get('userid'));
    $statement->execute();
    $statement->store_result();
    return $statement->num_rows == 1;
}
