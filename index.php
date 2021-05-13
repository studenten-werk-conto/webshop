<?php
include('./core/header.php');
?>
<!-- q and a time with conto
q: why make a giant css file for the styling of the website? 
a: well there is a prefetch so it will be loaded once and then stored in chache this will save bandwith server and client side -->
<link rel="stylesheet" href="./assets/css/style.css"> <!-- FIXME add prefetch -->

    <article>
        <aside>
            ad space for rent</aside>
    </article>
    <main>
<?php
$liqry = $con->prepare("SELECT product_id, product.name, product.description, category.category_id, category.name, price, color, weight, product.active FROM product INNER JOIN category ON product.category_id = category.category_id WHERE product.active = true");
if ($liqry === false) {
    echo mysqli_error($con);
} else {
    $liqry->bind_result($product_id, $Name, $Description, $category_id, $Category, $Price, $Color, $Weight, $active);
    if ($liqry->execute()) {
        $liqry->store_result();
        while ($liqry->fetch()) {

            echo ' <a href="product.php?id=' . $product_id . '">
            <div class="product_card"> 
                    <img src="https://i.redd.it/6e7h50adj9t61.jpg" alt="product photo">
                        <div class="product_card_info"> 
                            <b>' . $Name . '</b>
                            <br>
                            <b>' . $Color . '</b>
                            <b>' . $Weight . '</b>
                            <br>
                            <b>' . $Price . '$</b>
                            <svg viewBox="0 10 100 100" class="product_card_order_button">
                                    <path d="M42.8,17.6H30c-1.7,0-3-1.3-3-3s1.3-3,3-3h12.8c1.7,0,3,1.3,3,3S44.5,17.6,42.8,17.6z"></path>
                                    <circle cx="23.7" cy="36.1" r="4"></circle>
                                    <circle cx="49.1" cy="36.1" r="4"></circle>
                                    <path d="M57,5.1c-1.6-0.4-3.2,0.5-3.7,2.1l-4.1,15.3H23.6L18.2,2.2C17.8,0.9,16.7,0,15.3,0H3.1c-1.7,0-3,1.3-3,3s1.3,3,3,3h7.6c1.4,0,2.5,0.9,2.9,2.2l0,0l4.8,18.1c0.4,1.3,1.5,2.2,2.9,2.2h30.2c1.4,0,2.5-0.9,2.9-2.2l4.7-17.5C59.5,7.1,58.6,5.5,57,5.1z"></path>
                                </svg>
                        </div>                       
                    </div>
                    </a>';
        }
    }
    $liqry->close();
}?>


</main>
<?php
include('core/footer.php');
?>