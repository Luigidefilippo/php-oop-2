<?php

require_once __DIR__ . "/db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Shop</title>
    <!-- BOOTSRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- FONTAWESON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container">
        <?php
        foreach ($products as $product) {
        ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= $product->getPicture() ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $product->getName() ?>
                        <small><i class="fa-solid <?= $product->getCategory()->getIcon() ?>"></i></small>
                    </h5>

                    <p>
                        <?php

                        switch (get_class($product)) {

                            case 'Food':
                                echo "Ingredienti: " . $food->getIngredients();
                                break;

                            case 'Toy':
                                echo "Materiale: " .  $toy->getMaterial();
                                break;

                            default:
                                echo "<br>";
                                break;
                        }

                        ?>
                    </p>
                    <strong>Prezzo: <?= $product->getPrice() ?> &euro;</strong>
                    <small>Tipo: <?= $product->getType() ?></small>
                </div>
                <a href="#" class="btn btn-primary">Buy now</a>
            </div>
        <?php
        }
        ?>
    </div>
<!-- bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>