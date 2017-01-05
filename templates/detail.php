<!doctype html>
<html>
<head>
    <title>product details</title>
    <style>
        @import '/public/css/basic.css';
    </style>
  
</head>
<body>

<h1>Details of one product</h1>

<dl>
    <dt>Product ID</dt>
    <dd><?= $product['product_id'] ?></dd>

    <dt>Product Code</dt>
    <dd><?= $product['product_code'] ?></dd>

    <dt>Product name</dt>
    <dd><?= $product['product_name'] ?></dd>

    <dt>Description</dt>
    <dd><?= $product['product_desc'] ?></dd>

    <dt>Picture</dt>
    <?php
    $url = $product['product_img_name'];
    ?>
    <img src="<?= $url ?>" " width="200px" height="auto"/>

    <dt>Price per item</dt>
    <dd><?= $product['price'] ?></dd>

    <dt>Number on stock</dt>
    <dd><?= $product['stock_num'] ?></dd>
</dl>


</body>
</html>