# t-appz   PHP SDK


This repository contains the open source PHP SDK that allows you to create your own rest api for T-appz


## Installation


The T-appz PHP SDK can be installed with [Composer](https://getcomposer.org/). Run this command:

```sh
composer require tappz/php-sdk    (coming soon)
```


For creating your own   Native M-commerce Apps T-appz  you should build your own RESTful API.t-appz   PHP SDK  helps you create your own RESTful API.
Your RESTful api  should   HTTP methods mapped as follows   : 

| Endpoint         | Method           |
| ------------- |:-------------:| -----:|
| /index        | GET | 
| /categories   | GET    | 
| /category/{categoryId} | GET       |
| /productSearch | GET       |
| /product/{productId} | GET       |
| /product | GET       |
| /product/{productId}/related | GET       |
| /profile | GET       |
| /profile | POST       |
| /profile | PUT      |
| /login | POST       |
| /fblogin | POST       |
| /passwordRecovery | POST       |
| /purchaseOrder/{orderId} | GET       |
| /purchaseOrder/{orderId}/address | POST|
| /userAgreement |GET|
| /profile/favoriteProducts |GET|
| /profile/addFavoriteProduct/{productId} |POST|
| /profile/removeFavoriteProduct/{productId} |POST|
| /profile/backInStockSubscriptions |GET|
| /profile/addBackInStockSubscriptions/{productId} |POST|
| /profile/removeBackInStockSubscriptions/{productId} |POST|
| /addresses |DELETE|
| /addresses|POST |
| /addresses|PUT |
| /countries|GET |
| /states/{countryId} |GET|
| /cities/{countryId} |GET|
| /districts/{countryId} |GET|
| /towns/{countryId} |GET|
| /basket/{basketId} |GET|
| /mergeBasket | POST |
| /basket/{basketId}/lines| POST |
| /basket/{basketId}/address | POST |
| /basket/{basketId}/discount | DELETE |
| /basket/{basketId}/discount| POST |
| /basket/{basketId}/giftCheque | DELETE  |
| /basket/{basketId}/giftCheque | POST |
| /basket/{basketId}/userPoints| POST |
| /basket/{basketId}/purchase/card | POST |
| /basket/{basketId}/purchase/threeD | POST |
| /basket/{basketId}/purchase/moneyTransfer | POST |
| /basket/{basketId}/purchase/paypal | POST |
| /basket/{basketId}/purchase/applePay  | POST |
| /basket/{basketId}/contract| GET |
| /basket/{basketId}/giftWrapping | POST |
| /branches| GET | 
| /branchescitylist| GET |
| /store| GET | 
