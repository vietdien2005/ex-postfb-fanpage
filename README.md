# Example get token and post to your fanpage with PHP SDK Facebook V4 

## Install 
```sh
composer require facebook/php-sdk-v4
```

## Get app_id and app_secret

https://developers.facebook.com/apps/< app_id >/dashboard/

app_id     : < app_id >
app_secret : < app_secret > 

## Get page access token

[https://developers.facebook.com/tools/explorer](https://developers.facebook.com/tools/explorer)

Choose your page, you want to get access token but it just a token short lives, so if you want to get long live token, you must go to page: 

https://developers.facebook.com/tools/debug/accesstoken?q=<your_short_live_token>&version=v2.7

And click "Extend Access Token"

## Run Command

```sh
php postfb.php
```

