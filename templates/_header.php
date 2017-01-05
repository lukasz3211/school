<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        @import "/public/css/basic.css";
        @import "/public/css/nav.css";
        @import "/public/css/footer.css";
        @import "/public/css/header.css";
    </style>
    <title>Ghostbusters Shop -<?= $pageTitle ?></title>
</head>
<header>
    <?php
    //----------------------------
   //if($isLoggedIn):
     //   require_once __DIR__ . '/admin/_links.php';
    //endif;
    //----------------------------
    ?>
    <section class="right">
        <?php
        if(($isLoggedIn)&&( $username==='admin')):
            require_once __DIR__ . '/admin/_links.php';
        endif;
        //----------------------------
        if($isLoggedIn):
        ?>
        you are logged in as:<strong><?= $username ?></strong>
        <br>
        <a href="/public/index.php?action=logout">(logout)</a>
        <?php
        else:
         ?>
        <a href="/public/index.php?action=login">login</a>
        <?php
        endif;
        ?>
    </section>
    <img src="/public/images/logo.png" alt="logo">
    <section class="right">
        basket
    </section>



</header>
<?php
require_once __DIR__ . '/_nav.php';