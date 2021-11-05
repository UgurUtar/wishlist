<?php
include_once ('simple_html_dom.php');
ini_set('user_agent', 'My-Application/2.5');

// MeGekko price
$videokaartmg = file_get_html('https://www.megekko.nl/product/1963/309339/Nvidia-Videokaarten/MSI-GeForce-RTX-3060-Ti-GAMING-Z-TRIO-8G-LHR-Videokaart');

$videokaartmegekko = $videokaartmg->find("div [class='col_right_container_wishlist']",0);

$vkmgprijs = $videokaartmegekko->find("div [class='euro large']");

// Alternate price
$videokaartan = file_get_html('https://www.alternate.nl/MSI/GeForce-RTX-3060-Ti-GAMING-Z-TRIO-grafische-kaart/html/product/1758139');

$videokaartalternate = $videokaartan->find('div [class="col-12 col-md-auto"]',0);

$vkanprijs = $videokaartalternate->find('div class="price"');

// Azerty price
$videokaartaz = file_get_html('https://azerty.nl/product/msi/4574776/geforce-rtx-3060-ti-gaming-z-trio-lhr-videokaart-8-gb-gddr6');

$videokaartazerty = $videokaartaz->find('div [class="prices"]',0);

$vkazprijs = $videokaartazerty->find('span');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>My Wishlist</title>
</head>
<body>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">My wishlist</th>
            <th scope="col"><a href="https://www.megekko.nl/">MeGekko</a></th>
            <th scope="col"><a href="https://www.alternate.nl/">Alternate</a></th>
            <th scope="col"><a href="https://www.azerty.nl/">Azerty</a></th>
        </tr>
</thead>
<tbody>
        <tr>
            <th scope="row">Videokaart</th>
            <th><?php echo $vkmgprijs[0] ?></th>
            <th><?php echo $vkanprijs[0] ?></th>
            <th><?php echo $vkazprijs[0] ?></th>
        </tr>
 
    </tbody>
</table>
</body>
</html>
