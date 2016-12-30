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
    <section class="right">
        <a href="/public/index.php?action=login">login</a>
    </section>
    <img src="/public/images/logo.png" alt="logo">
    <section class="right">
        basket
    </section>



</header>
<?php
require_once __DIR__ . '/_nav.php';