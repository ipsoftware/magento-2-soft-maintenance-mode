# Soft maintenance mode for Magento 2

Sometimes you need to turn off your store. If the shop is completely turned off, you may lose your position in the search engine. The module only disables key functionalities: logging in, registration, adding products to the basket, subscribing to the newsletter. The rest of the store is available to users and search engine robots.

# Install via composer (recommend)

Run the following command in Magento 2 root folder:

````
composer require ipsoftware/magento-2-soft-maintenance-mode
php bin/magento setup:upgrade
````


# Usage

After install go to Magento Admin panel -> STORIES -> Configuration -> IPSOFTWARE -> Soft maintenance mode nad just set "Module Enable" on "Yes" and "Save Config"
 
In this place you can change "display text" too.

After "Save Config" do not forget flush magento cache :)

![alt text](https://i.ibb.co/zQbMRhd/magento01.jpg)

![alt text](https://i.ibb.co/cLz4wsb/magento02.jpg)
