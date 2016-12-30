<?php
require_once __DIR__ . '/_header.php';
?>

<h1>successful login</h1>
<p>
    <?=  $hashedCorrectPassword ?>
    well done <?= $username ?>, you have successfully logged in to the system.
</p>
