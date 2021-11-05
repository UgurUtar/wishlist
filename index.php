<?php
include_once ('simple_html_dom.php');
ini_set('user_agent', 'My-Application/2.5');
// MeGekko prijzen
$videokaartmg = file_get_html('https://www.megekko.nl/product/1963/309339/Nvidia-Videokaarten/MSI-GeForce-RTX-3060-Ti-GAMING-Z-TRIO-8G-LHR-Videokaart');
$processormg = file_get_html('https://www.megekko.nl/product/4278/294824/Socket-AM4-Processoren/AMD-Ryzen-5-5600X-processor');
$rammg = file_get_html('https://www.megekko.nl/product/2046/1005950/DDR4-Geheugen/Corsair-DDR4-Vengeance-RGB-Pro-2x8GB-3200-CMW16GX4M2C3200C16-Geheugenmodule');
$moederbordmg = file_get_html('https://www.megekko.nl/product/4286/295472/AMD-Socket-AM4-Moederborden/Gigabyte-B550-AORUS-ELITE-V2-moederbord');
//$ssd250mg = file_get_html('https://www.megekko.nl/product/2018/351496/SSD-2-5-SATA/Samsung-870-EVO-250GB-SSD');
$ssd500mg = file_get_html('https://www.megekko.nl/product/5093/303273/SSD-M-2/Samsung-980-500GB-M-2-SSD');
$behuizingmg = file_get_html('https://www.megekko.nl/product/2013/1113625/Midi-Tower-Behuizingen/Corsair-iCUE-4000X-RGB-Tempered-Glass-Black-Midi-Tower-Behuizing');
$casefanmg = file_get_html('https://www.megekko.nl/product/1995/1137621/Case-fan-120mm/Corsair-Casefan-iCUE-SP120-RGB-Elite-Performance-Single-Pack-120mm');
$voedingmg = file_get_html('https://www.megekko.nl/product/4186/1061990/PC-Voedingen-PSU-/Corsair-RM750-PSU-PC-voeding');
$hdd2tbmg = file_get_html('https://www.megekko.nl/product/2036/1720129/Hard-disks-3-5-/Seagate-HDD-3-5-2TB-ST2000DM008-Barracuda');

$videokaartmegekko = $videokaartmg->find("div [class='col_right_container_wishlist']",0);
$prijs = $processormg->find("div [class='col_right_container_wishlist']",0);
$rammegekko = $rammg->find("div [class='col_right_container_wishlist']",0);
$moederbordmegekko = $moederbordmg->find("div [class='col_right_container_wishlist']",0);
//$ssd250megekko = $ssd250mg->find("div [class='col_right_container_wishlist']",0);
$ssd500megekko = $ssd500mg->find("div [class='col_right_container_wishlist']",0);
$behuizingmegekko = $behuizingmg->find("div [class='col_right_container_wishlist']",0);
$casefanmegekko = $casefanmg->find("div [class='col_right_container_wishlist']",0);
$voedingmegekko = $voedingmg->find("div [class='col_right_container_wishlist']",0);
$hdd2tbmegekko = $hdd2tbmg->find("div [class='col_right_container_wishlist']",0);

$vkmgprijs = $videokaartmegekko->find("div [class='euro large']");
$pmgprijs = $prijs->find("div [class='euro large']");
$rmgprijs = $rammegekko->find("div [class='pricecontainer']");
$mbmgprijs = $moederbordmegekko->find("div [class='euro large']");
//$ssd250mgprijs = $ssd250megekko->find("div [class='pricecontainer']");
$ssd500mgprijs = $ssd500megekko->find("div [class='pricecontainer']");
$bhmgprijs = $behuizingmegekko->find("div [class='pricecontainer']");
$cfmgprijs = $casefanmegekko->find("div [class='pricecontainer']");
$vdmgprijs = $voedingmegekko->find("div [class='pricecontainer']");
$hdd2tbprijs = $hdd2tbmegekko->find("div [class='pricecontainer']");

// Alternate prijzen
$videokaartan = file_get_html('https://www.alternate.nl/MSI/GeForce-RTX-3060-Ti-GAMING-Z-TRIO-grafische-kaart/html/product/1758139');
$processoran = file_get_html('https://www.alternate.nl/AMD/Ryzen-5-5600X-3-7-GHz-(4-6-GHz-Turbo-Boost)-socket-AM4-processor/html/product/1685588');
$raman = file_get_html('https://www.alternate.nl/Corsair/16-GB-DDR4-3200-Kit-werkgeheugen/html/product/1713317');
//$moederbordan = file_get_html('https://www.alternate.nl/AORUS/B550-ELITE-V2-socket-AM4-moederbord/html/product/1693452');
//$ssd250an = file_get_html('https://www.alternate.nl/Samsung/870-EVO-250-GB-SSD/html/product/1706401');
$ssd500an = file_get_html('https://www.alternate.nl/Samsung/980-500-GB-SSD/html/product/1719951');
$behuizingan = file_get_html('https://www.alternate.nl/Corsair/iCUE-4000X-RGB-Tempered-Glass-tower-behuizing/html/product/1654931');
$casefanan = file_get_html('https://www.alternate.nl/Corsair/iCUE-SP120-RGB-ELITE-case-fan/html/product/1729407');
$voedingan = file_get_html('https://www.alternate.nl/Corsair/RM750-750-Watt-voeding/html/product/1547371');
$hdd2tban = file_get_html('https://www.alternate.nl/Seagate/BarraCuda-2-TB-Harde-schijf/html/product/1431718');

$videokaartalternate = $videokaartan->find('div [class="col-12 col-md-auto"]',0);
$processoralternate = $processoran->find('div [class="col-12 col-md-auto"]',0);
$ramalternate = $raman->find('div [class="col-12 col-md-auto"]',0);
//$moederbordalternate = $moederbordan->find('div [class="col-12 col-md-auto"]',0);
//$ssd250alternate = $ssd250an->find('div [class="col-12 col-md-auto"]',0);
$ssd500alternate = $ssd500an->find('div [class="col-12 col-md-auto"]',0);
$behuizingalternate = $behuizingan->find('div [class="col-12 col-md-auto"]',0);
$casefanalternate = $casefanan->find('div [class="col-12 col-md-auto"]',0);
$voedingalternate = $voedingan->find('div [class="col-12 col-md-auto"]',0);
$hdd2tbalternate = $hdd2tban->find('div [class="col-12 col-md-auto"]',0);

$vkanprijs = $videokaartalternate->find('div class="price"');
$panprijs = $processoralternate->find('div class="price"');
$ranprijs = $ramalternate->find('div class="price"');
//$mbanprijs = $moederbordalternate->find('div class="price"');
//$ssd250anprijs = $ssd250alternate->find('div class="price"');
$ssd500anprijs = $ssd500alternate->find('div class="price"');
$bhanprijs = $behuizingalternate->find('div class="price"');
$cfanprijs = $casefanalternate->find('div class="price"');
$vdanprijs = $voedingalternate->find('div class="price"');
$hdd2tbanprijs = $hdd2tbalternate->find('div class="price"');

// Informatique prijzen
//$videokaartim = file_get_html('https://www.informatique.nl/212462/msi-geforce-rtx-3060-ti-gaming-z-trio.html');
$processorim = file_get_html('https://www.informatique.nl/208373/amd-ryzen-5-5600x-3-7ghz-4-6ghz-35mb.html');
$moederbordim = file_get_html('https://www.informatique.nl/208994/gigabyte-b550-aorus-elite-v2-atx-4xddr.html');
$ramim = file_get_html('https://www.informatique.nl/201772/corsair-vengeance-rgb-pro-16gb-2x8gb-32.html');
//$ssd250im = file_get_html('https://www.informatique.nl/209444/samsung-ssd-870-evo-250gb-2-5inch.html');
$ssd500im = file_get_html('https://www.informatique.nl/209966/samsung-980-ssd-500gb-m-2-nvme.html');
$behuizingim = file_get_html('https://www.informatique.nl/207398/corsair-icue-4000x-rgb-atx-t-g-zwart.html');
$casefanim = file_get_html('https://www.informatique.nl/210541/corsair-sp120-rgb-elite-120mm.html');
$voedingim = file_get_html('https://www.informatique.nl/196871/corsair-rm750-750w-80-gold-fully-mod.html');
$hdd2tbim = file_get_html('https://www.informatique.nl/194740/seagate-barracuda-2tb-7200rpm-256mb.html');

//$videokaartinformatique = $videokaartim->find('div id="price"',0);
$processorinformatique = $processorim->find('div id="price"',0);
$moederbordinformatique = $moederbordim->find('div id="price"',0);
$raminformatique = $ramim->find('div id="price"',0);
//$ssd250informatique = $ssd250im->find('div id="price"',0);
$ssd500informatique = $ssd500im->find('div id="price"',0);
$behuizinginformatique = $behuizingim->find('div id="price"',0);
$casefaninformatique = $casefanim->find('div id="price"',0);
$voedinginformatique = $voedingim->find('div id="price"',0);
$hdd2tbinformatique = $hdd2tbim->find('div id="price"',0);

//$vkimprijs = $videokaartinformatique->find('[class="verkoopprijs"]');
$pimprijs = $processorinformatique->find('[class="verkoopprijs"]');
$mbimprijs = $moederbordinformatique->find('[class="verkoopprijs"]');
$rimprijs = $raminformatique->find('[class="verkoopprijs"]');
//$ssd250imprijs = $ssd250informatique->find('[class="verkoopprijs"]');
$ssd500imprijs = $ssd500informatique->find('[class="verkoopprijs"]');
$bhimprijs = $behuizinginformatique->find('[class="verkoopprijs"]');
$cfimprijs = $casefaninformatique->find('[class="verkoopprijs"]');
$vdimprijs = $voedinginformatique->find('[class="verkoopprijs"]');
$hdd2tbimprijs = $hdd2tbinformatique->find('[class="verkoopprijs"]');

// Azerty prijzen
$videokaartaz = file_get_html('https://azerty.nl/product/msi/4574776/geforce-rtx-3060-ti-gaming-z-trio-lhr-videokaart-8-gb-gddr6');
$processoraz = file_get_html('https://azerty.nl/product/amd/4368019/ryzen-5-5600x-processor-3-7-ghz-4-6-ghz-');
$moederbordaz = file_get_html('https://azerty.nl/product/gigabyte/4383012/b550-aorus-elite-v2-moederbord-atx-socket-am4');
$ramaz = file_get_html('https://azerty.nl/product/corsair/3543414/vengeance-rgb-pro-geheugen-ddr4');
//$ssd250az = file_get_html('');
$ssd500az = file_get_html('https://azerty.nl/product/samsung/4346538/980-pro-500-gb-solid-state-drive-500-gb');
$behuizingaz = file_get_html('https://azerty.nl/product/corsair/4341867/icue-4000x-rgb-midtowermodel-atx');
$casefanaz = file_get_html('https://azerty.nl/product/corsair/3979717/icue-sp120-rgb-pro-performance-ventilatorhuis-120-mm');
$voedingaz = file_get_html('https://azerty.nl/product/corsair/3924465/rm-series-rm750-2019-voeding-intern-atx12v-2-52-eps12v-2-92');
//$hdd2tbaz = file_get_html('');

$videokaartazerty = $videokaartaz->find('div [class="prices"]',0);
$processorazerty = $processoraz->find('div [class="prices"]',0);
$moederbordazerty = $moederbordaz->find('div [class="prices"]',0);
$ramazerty = $ramaz->find('div [class="prices"]',0);
$ssd500azerty = $ssd500az->find('div [class="prices"]',0);
$behuizingazerty = $behuizingaz->find('div [class="prices"]',0);
$casefanazerty = $casefanaz->find('div [class="prices"]',0);
$voedingazerty = $voedingaz->find('div [class="prices"]',0);

$vkazprijs = $videokaartazerty->find('span');
$pazprijs = $processorazerty->find('span');
$mbazprijs = $moederbordazerty->find('span');
$razprijs = $ramazerty->find('span');
$ssd500azprijs = $ssd500azerty->find('span');
$bhazprijs = $behuizingazerty->find('span');
$cfazprijs = $casefanazerty->find('span');
$vdazprijs = $voedingazerty->find('span');
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
    <title>Big man PC thang</title>
</head>
<body>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Big Man PC</th>
            <th scope="col"><a href="https://www.megekko.nl/">MeGekko</a></th>
            <th scope="col"><a href="https://www.alternate.nl/">Alternate</a></th>
            <th scope="col"><a href="https://www.informatique.nl/">Informatique</a></th>
            <th scope="col"><a href="https://www.azerty.nl/">Azerty</a></th>
        </tr>
</thead>
<tbody>
        <tr>
            <th scope="row"><a href="https://www.google.com/search?q=MSI+GeForce+RTX+3060+Ti+GAMING+Z+TRIO+8G+LHR+Videokaart&oq=MSI+GeForce+RTX+3060+Ti+GAMING+Z+TRIO+8G+LHR+Videokaart&aqs=chrome..69i57j69i60l3.291j0j1&sourceid=chrome&ie=UTF-8">Videokaart</a></th>
            <th><?php echo $vkmgprijs[0] ?></th>
            <th><?php echo $vkanprijs[0] ?></th>
            <th>Niet meer beschikbaar</th>
            <th>Niet meer beschikbaar</th>
        </tr>
            <th scope="row"><a href="https://www.google.com/search?q=AMD+Ryzen+5+5600X+processor&sxsrf=AOaemvKOEI-9whngq0zBLskn_gAl3T2rsw%3A1635176271912&ei=T892YZfxNseZsAeRlIywDg&ved=0ahUKEwjX1NOm8uXzAhXHDOwKHREKA-YQ4dUDCA4&uact=5&oq=AMD+Ryzen+5+5600X+processor&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABDLATIFCAAQywEyBQgAEMsBMgUIABDLATIFCAAQywEyBQgAEMsBMgUIABDLATIFCAAQywEyBQgAEMsBOgcIABBHELADSgQIQRgAUOqaEFjqmhBglqIQaAFwAngAgAFYiAFYkgEBMZgBAKABAqABAcgBCMABAQ&sclient=gws-wiz">Processor</a></th>
            <th><?php echo $pmgprijs[0] ?></th>
            <th><?php echo $panprijs[0] ?></th>
            <th><?php echo $pimprijs[0] ?></th>
            <th><?php echo $pazprijs[0] ?></th>
        </tr>
            <th scope="row"><a href="https://www.google.com/search?q=Gigabyte+B550+AORUS+ELITE+V2+moederbord&sxsrf=AOaemvILw1VUe9QMMDxP6DPzc2mygIVQHA%3A1635176540916&ei=XNB2YfWlN8r-7_UP3LqP8AI&ved=0ahUKEwj1w_am8-XzAhVK_7sIHVzdAy4Q4dUDCA4&uact=5&oq=Gigabyte+B550+AORUS+ELITE+V2+moederbord&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46BwgAEEcQsAM6BwgAELADEEM6EAguEMcBENEDEMgDELADEEM6EAguEMcBEKMCEMgDELADEENKBQg4EgExSgQIQRgAULOEBFizhARgjYYEaAFwAngAgAFfiAFfkgEBMZgBAKABAqABAcgBC8ABAQ&sclient=gws-wiz">Moederbord</a></th>
            <th><?php echo $mbmgprijs[0] ?></th>
            <th>Tijdelijk niet beschikbaar</th> 
            <!-- <?php echo $mbanprijs[0] ?> -->
            <th><?php echo $mbimprijs[0] ?></th>
            <th><?php echo $mbazprijs[0] ?></th>

        </tr>
            <th scope="row"><a href="https://www.google.com/search?q=Corsair+DDR4+Vengeance+RGB+Pro+2x8GB+3200+&sxsrf=AOaemvI2_pq4zLoTl7EO-QKii1NPZAYsGw%3A1635176608608&ei=oNB2YaKzJKmC9u8PlIGE6AM&ved=0ahUKEwiig5rH8-XzAhUpgf0HHZQAAT0Q4dUDCA4&uact=5&oq=Corsair+DDR4+Vengeance+RGB+Pro+2x8GB+3200+&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB46BwgAEEcQsANKBAhBGABQmI8CWJiPAmDnkwJoBHACeACAAViIAViSAQExmAEAoAECoAEByAEIwAEB&sclient=gws-wiz">Ram</a></th>
            <th><?php echo $rmgprijs[0] ?></th>
            <th><?php echo $ranprijs[0] ?></th>
            <th><?php echo $rimprijs[0] ?></th>
            <th><?php echo $razprijs[0] ?></th>
        <!-- </tr>    
            <th scope="row"><a href="https://www.google.com/search?q=Samsung+870+EVO+250GB+SSD&sxsrf=AOaemvKILsH2LdLD0lkPCmNjFnGiJBpdnA%3A1635176646169&ei=xtB2YYbPCfaA9u8P98KVqAQ&ved=0ahUKEwiGyo7Z8-XzAhV2gP0HHXdhBUUQ4dUDCA4&uact=5&oq=Samsung+870+EVO+250GB+SSD&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABDLATIFCAAQywEyBQgAEMsBMgUIABDLATIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46BwgAEEcQsANKBAhBGABQ54YCWOeGAmC4iAJoAXACeACAAV2IAV2SAQExmAEAoAECoAEByAEIwAEB&sclient=gws-wiz">SSD 250GB</a></th>
            <th><?php echo $ssd250mgprijs[0]?></th> 
            <th>Niet meer beschikbaar</th>
            <th><?php echo $ssd250anprijs[0]?></th> 
            <th><?php echo $ssd250imprijs[0]?></th>
            <th>Niet meer beschikbaar</th>
             -->
        </tr>
            <th scope="row"><a href="https://www.google.com/search?q=Samsung+980+500GB+M.2+SSD&sxsrf=AOaemvLgwALONUGDg9pED2qH_Fnlux0ypQ%3A1635176682085&ei=6tB2YcHABL2D9u8P4Yaa0AU&ved=0ahUKEwjB3Z7q8-XzAhW9gf0HHWGDBloQ4dUDCA4&uact=5&oq=Samsung+980+500GB+M.2+SSD&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMggIABAWEAoQHjIGCAAQFhAeOgcIIxCwAxAnOgcIABBHELADSgQIQRgAUJ7QAVie0AFg79EBaANwAngAgAFXiAFXkgEBMZgBAKABAqABAcgBCcABAQ&sclient=gws-wiz">SSD 500GB 2x</a></th>
            <th><?php echo $ssd500mgprijs[0]?></th>
            <th><?php echo $ssd500anprijs[0]?></th>
            <th><?php echo $ssd500imprijs[0]?></th>
            <th>Niet meer beschikbaar</th>
        </tr>    
            <th scope="row"><a href="https://www.google.com/search?q=Corsair+iCUE+4000X+RGB+Tempered+Glass+Black+Midi+Tower+Behuizing&sxsrf=AOaemvIOJerKpbhWHQDu51LEUxWH9hNxfg%3A1635176710211&ei=BtF2YdGDDPL-7_UPy52Z-A4&ved=0ahUKEwjRntP38-XzAhVy_7sIHctOBu8Q4dUDCA4&uact=5&oq=Corsair+iCUE+4000X+RGB+Tempered+Glass+Black+Midi+Tower+Behuizing&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEOgcIABBHELADSgQIQRgAUIKoAViCqAFg5qwBaAFwAngAgAFiiAFikgEBMZgBAKABAqABAcgBCMABAQ&sclient=gws-wiz">Behuizing</a></th>
            <th><?php echo $bhmgprijs[0]?></th>
            <th><?php echo $bhanprijs[0]?></th>
            <th><?php echo $bhimprijs[0]?></th>
            <th><?php echo $bhazprijs[0]?></th>
        </tr>    
            <th scope="row"><a href="https://www.google.com/search?q=Corsair+Casefan+iCUE+SP120+RGB+Elite+Performance+%28Single+Pack%29+black&sxsrf=AOaemvIri-pVtQnpaOVGjmpdZNTcgOJUDA%3A1635176768160&ei=QNF2YZT7CLaL9u8Pwd2zgAc&ved=0ahUKEwiUm6ST9OXzAhW2hf0HHcHuDHAQ4dUDCA4&uact=5&oq=Corsair+Casefan+iCUE+SP120+RGB+Elite+Performance+%28Single+Pack%29+black&gs_lcp=Cgdnd3Mtd2l6EAM6BwgAEEcQsAM6BwgjEK4CECdKBAhBGABQigxYkBFg5xJoAXACeACAAWqIAawEkgEDNC4ymAEAoAEByAEIwAEB&sclient=gws-wiz">Corsair Casefan</a></th>
            <th><?php echo $cfmgprijs[0]?></th>
            <th><?php echo $cfanprijs[0]?></th>
            <th><?php echo $cfimprijs[0]?></th>
            <th><?php echo $cfazprijs[0]?></th>
        </tr>    
            <th scope="row"><a href="https://www.google.com/search?q=Corsair+RM750+PSU+%2F+PC+voeding&sxsrf=AOaemvK47TDRngFhd0KVed4IKSjRhqM8fQ%3A1635176772420&ei=RNF2Ye_6GJ6D9u8PvrqUqAw&ved=0ahUKEwjvrKiV9OXzAhWegf0HHT4dBcUQ4dUDCA4&uact=5&oq=Corsair+RM750+PSU+%2F+PC+voeding&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEOgcIABBHELADSgQIQRgAUMq8AVjKvAFgxr4BaAFwAngAgAF9iAF9kgEDMC4xmAEAoAECoAEByAEIwAEB&sclient=gws-wiz">Voeding</a></th>
            <th><?php echo $vdmgprijs[0]?></th>
            <th><?php echo $vdanprijs[0]?></th>
            <th><?php echo $vdimprijs[0]?></th>
            <th><?php echo $vdazprijs[0]?></th>
        </tr>    
            <th scope="row"><a href="https://www.google.com/search?q=Seagate+HDD+3.5%22+2TB+ST2000DM008+Barracuda&sxsrf=AOaemvKuwLYxj2F8pUkrrN9eliyEmTCZmw%3A1635176798359&ei=XtF2YeaqFd_-7_UPlOGJ6Aw&ved=0ahUKEwjm0deh9OXzAhVf_7sIHZRwAs0Q4dUDCA4&uact=5&oq=Seagate+HDD+3.5%22+2TB+ST2000DM008+Barracuda&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIGCAAQFhAeMgYIABAWEB46BwgAEEcQsANKBAhBGABQhKIBWISiAWDuowFoAXACeACAAV-IAV-SAQExmAEAoAECoAEByAEIwAEB&sclient=gws-wiz">HDD 2TB</a></th>
            <th><?php echo $hdd2tbprijs[0]?></th>
            <th><?php echo $hdd2tbanprijs[0]?></th>
            <th><?php echo $hdd2tbimprijs[0]?></th>
            <th>Niet meer beschikbaar</th>
        </tr>
    </tbody>
</table>
</body>
</html>