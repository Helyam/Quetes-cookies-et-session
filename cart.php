<?php require 'inc/head.php';?>
<section class="cookies container-fluid">
    <div class="row">
    <ul>
    <?php
        foreach ($_SESSION['panier'] as $value) {
            echo "<li>$value</li>";
        }
        ?>
    </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>


