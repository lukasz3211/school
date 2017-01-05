<?php
$username= $_SESSION['user'];
$pageTitle = "new product form";
$aboutusLinkClass = "";
$contactLinkClass = "";
$buyLinkClass = "";
$sitemapLinkClass= "";
$indexLinkClass = "";
//-------- page header -------------------

require_once 'C:/laragon/html/templates/_header.php';
//----------------------------------------
?>


<h1>Create a new product</h1>

<form
    action="index.php?action=createNewProduct"
    method="POST"
>

    <p>
        <label>Product Code:</label>
        <input type="text" name="ProductCode">
    </p>

    <p>
        <label>Name:</label>
        <input type="text" name="Name">
    </p>


    <p>
        <label>Description:</label>
        <input type="text" name="ProductDesc">
    </p>

    <p>
        <label>Image</label>
        <input type="text" name="ProductImage">
    </p>
    <p>
        <label>Price</label>
        <input type="text" name="Price">
    </p>

    <p>
        <label>Stock</label>
        <input type="text" name="StockNum">
    </p>

    <input type="submit" value="Create New Product">

</form>


</body>
</html>