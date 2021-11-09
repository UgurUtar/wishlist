# Wishlist
Do you want to compare a few prices but you dont want to check every website one by one? I got the solution for you!


## Usage

```php
# Put the link of the webshop
$videokaartmg = file_get_html('https://www.megekko.nl/product/1963/309339/Nvidia-Videokaarten/MSI-GeForce-RTX-3060-Ti-GAMING-Z-TRIO-8G-LHR-Videokaart');
![First step](https://github.com/UgurUtar/wishlist/blob/main/img/firststep.png?raw=true)

# Find the div where the price is listed
$videokaartmegekko = $videokaartmg->find("div [class='col_right_container_wishlist']",0);
![Second step](https://github.com/UgurUtar/wishlist/blob/main/img/secondstep.png?raw=true)

# Find the div of the price
$vkmgprijs = $videokaartmegekko->find("div [class='euro large']");
![Third step](https://github.com/UgurUtar/wishlist/blob/main/img/thirdstep.png?raw=true)
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

