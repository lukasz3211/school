<!DOCTYPE html>
<?php
$pageTitle = "login page";
$aboutusLinkClass = "";
$contactLinkClass = "";
$buyLinkClass = "";
$sitemapLinkClass= "";
$indexLinkClass = "";
$loginLinkClass ="active";
require_once __DIR__.'/_header.php';
?>
<br/> <br/>
<section class="middle">
<form action="index.php?action=processLogin" method="post" >
    Username: <br/> <input type="text" name="username"/> <br/><br/>
    Password: <br/> <input type="password" name="password"/> <br/> <br/>
    <input type="submit" value="login"/>

</form>
</section>

<?php
require_once __DIR__ . '/_footer.php';
?>





