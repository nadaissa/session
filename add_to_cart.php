<?php

session_start();

if(empty($_SESSION['cart']))
{
    $_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<p>
    Votre produit est ajouté!
    <a href="cart.php">Voir votre panier</a>
</p>

<?php if (isset($_SESSION['cart']) && $_SESSION['cart'][$id] !== 0): ?>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"><?= $_SESSION['cart'][$id] ?? '' ?></span> Add to cart
                        </a>
<?php endif ?>

<?php

// if(isset($_GET['cart'])) {
//     if(!isset($_SESSION['cart'])){
//         $_SESSION['cart'] = array();
//     }
//         $_SESSION['cart'][] = intval($_GET['cart']);
// }
//     foreach ($_SESSION['cart'] as $sessionId) {
//         foreach ($catalog as $Id => $cookie) {
//             if ($sessionId === $Id) {
//                 echo $cookie['name'];
//             }
//         }
//     }
//     var_dump($_SESSION['cart']);

?>