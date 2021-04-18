<!-- ```php
// SQL STATEMENTS
// Voor gebruik voor onderhoudsfuncties (CRUD)

// index.php
$sql = 'SELECT product_id, name, description, category_id, price, color, weight, active FROM products';

// edit_user.php
$sql = 'UPDATE products SET name = ?, description = ?, category_id = ?, price = ?, color = ?, weight = ?, active = ? WHERE product_id = ?';

// add_user.php
// product_id wordt automatisch aangemaakt.
$sql = 'INSERT INTO products (name, description, category_id, price, color, weight, active) VALUES (?,?,?,?,?,?,?)';

// delete_user.php
$sql = 'DELETE FROM products WHERE product_id = ?';
``` -->
<?php 
include '../../../env/db_conect.php';
GLOBAL $con;

function AddProduct($firstname, $lastname,$name,$email,$password){
opencon();
$sql = "INSERT INTO products (name, description, category_id, price, color, weight, active) VALUES (?,?,?,?,?,?,?)"; 
$result = mysqli_query($con, $sql); 
closecon($con);
return $result;
}

function EditProduct($data, $datareplace, $id){
opencon();
$sql = "UPDATE products SET name = ?, description = ?, category_id = ?, price = ?, color = ?, weight = ?, active = ? WHERE product_id = ?"; 
$result = mysqli_query($con, $sql); 
closecon($con);
return $result;
}

function DeleteProduct($id){
opencon();
$sql = "DELETE FROM products WHERE product_id ="; 
$result = mysqli_query($con, $sql); 
closecon($con);
return $result;
}

function View(){
opencon();
$sql = "SELECT product_id, name, description, category_id, price, color, weight, active FROM products"; 
$result = mysqli_query($con, $sql); 
closecon($con);
return $result;
}
?>