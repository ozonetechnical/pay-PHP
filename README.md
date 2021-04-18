# PAY ozone API 
Base URL : ``` https://pay.o.zone/```
## 1. Get Address for watch
```https://pay.o.zone/newaddress```?*apikey*=apikey&*asset*=BTC

`apikey` place apikey you recieved from panel.

`asset` it is BTC.

### Signature

You Should send `sign` in header to authenticate your request.

`sign` is HMAC(SHA512) of your querystring.

This is an Example to calculate `sign` :

```PHP
$params = array(
  "apikey" => 'APIKEY',
  "asset" => 'BTC'
  );
$query = http_build_query($params);
$sign = hash_hmac("SHA512",$query,$secretkey);
```

Pay.o.Zone API PHP examples
