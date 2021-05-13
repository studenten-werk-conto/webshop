<?php
include('./core/header.php');
?>
<main>
    <link rel="stylesheet" href="./assets/css/style.css"> <!-- FIXME add prefetch -->
    <link rel="stylesheet" href="./assets/css/product.css">

    <img class="product_photo" src="https://i.redd.it/soqmyvvu68u61.png" alt="product">
    <article class="product_article">
    <div class="product_article_order">
    <img src="./assets/img/order.png" alt="order">
    <label for="cars">Choose a car:</label>

<select name="cars" id="cars">
    <?php
for ($i=0; $i < 10 ; $i++) { 
    echo('<option value="'.$i.'">'.$i.'</option>');
};
    ?>
    
</select>
    </div>
    <?php
    if (isset($_GET['id']) && $_GET['id'] != '') {
        $id = $con->real_escape_string($_GET['id']);

        $liqry = $con->prepare("SELECT product_id, product.name, product.description, category.category_id, category.name, price, color, weight FROM product INNER JOIN category ON product.category_id = category.category_id WHERE product_id = ? LIMIT 1;");
        if($liqry === false) {
           echo mysqli_error($con);
        } else{
            $liqry->bind_param('i',$id);
            $liqry->bind_result($product_id, $Name, $Description, $category_id, $Category, $Price, $Color, $Weight);
            if($liqry->execute()){
                $liqry->store_result();
                while($liqry->fetch()) {
                    echo($Name .'<br>'.$Description.'<br><br>'.$Price.'$');
                }
            }
        }
    }
    ?>
    </article>

</main>
<?php
include('core/footer.php');
?>