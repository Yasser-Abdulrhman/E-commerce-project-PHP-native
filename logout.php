            <?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['count']);
unset($_SESSION["cart_item"]);

unset($_SESSION['email']);
unset($_SESSION['lpassword']);
unset($_SESSION['id']);
unset($_SESSION['cart']);
unset($_SESSION['total_price']);
header('Location:index.php');
?>
