<?php
/**
 * Created by PhpStorm.
 * User: Stepan
 * Date: 10.02.2016
 * Time: 23:16
 */
?>

<a href="login.php">Login</a>
<a href="logout.php">Logout</a>
<a href="status.php">Connection status</a>
<a href="query.php">Query</a>
<?php
$cookieStorage = new \StepanSib\AlmClient\AlmCurlCookieStorage();
if ($cookieStorage->isCurlCookieFileExist()) {
    echo $cookieStorage->getCurlCookieFile();
}
?>
<hr>