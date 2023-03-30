<?php
session_start();
require 'inc/head.php';
require 'inc/data/products.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
    <?php if (isset($_SESSION['cookies'])) {
            $cookies = array_count_values($_SESSION['cookies']); ?>
            <p class="text-center">
                <?php foreach ($cookies as $id => $count) { ?>
                    <span> <?= 'Vous avez ' . $count . '     ' . $catalog[$id]['name'] . ' dans votre panier'?> </span><br><br>
                <?php } ?>
            </p>
        <?php } else { ?>
            <div class="text-center"> Votre panier est vide </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
