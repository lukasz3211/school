<?php
$pageTitle = "buy page";
$aboutusLinkClass = "";
$contactLinkClass = "";
$buyLinkClass = "active";
$sitemapLinkClass= "";
$indexLinkClass = "";
require_once __DIR__.'/_header.php';

// get action GET parameter (if it exists)
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
require_once __DIR__ . '/../src/db_functions.php';

// call function and store result
$connection = get_connection();
// 2. get all products
$products = get_all_products($connection);
//require_once __DIR__ . '/../templates/buy.php'

?>

<!doctype html>
<html><head><title>Ghostbusters Shop</title>
    <style>
        table, tr, td, th {
            padding: 0.5rem;
            border: solid black 0.1rem;
        }
    </style>
</head><body>

<table>
    <tr>
        <th>Product ID</th>
        <th>Product Code</th>
        <th>Product Name</th>
        <th>Product Desc</th>
        <th>Image</th>
        <th>Price</th>
        <th>Stock</th>
    </tr>
    <?php
    foreach ($products as $item){
        print '<tr>';
        print '    <td>';
        print $item['product_id'];
        print '   </td>';
        print '    <td>';
        print $item['product_code'];
        print '   </td>';
        print '   <td>';
        print $item['product_name'];
        print '   </td>';
        print '   <td>';
        print $item['product_desc'];
        print '   </td>';
        print '    <td>';
        print $item['product_img_name'];
        print '   </td>';
        print '   <td>';
        print $item['price'];
        print '   </td>';
        print '   <td>';
        print $item['stock_num'];
        print '   </td>';
        print '</tr>';
    }
    ?>
</table>
// 3. print out description of product
<?php
$id = 1;
$product1 = get_one_product_by_id($connection, $id);
print 'Product (product_id = 1): ' . $product1['product_desc'] . PHP_EOL;
?>
</body>
</html>
<?php
require_once __DIR__ . '/_footer.php';
?>
