# FxRateBundle

FxRateBundle is a way for your user FX Rate API into
your Symfony application.

Install the package with:

```console
composer require boonkuaeboonsutta/fx-rate-bundle
```

Create 'config/routes/bk_fx_rate.yml' file. A File contain as below

    _bk_fx_rate:
        resource: '@BKFxRateBundle/Resources/config/routes.xml'
        prefix: /api/fxrate/

    
Create anathor file at 'config/packages/bk_fx_rate.yml'

    bk_fx_rate :
      endpoints : https://forex.1forge.com/1.0.3/convert
      api_key : <YOUR API KEY>
      
   
## Usage

This bundle provides a single service for connect to the FX Api, which
you can autowire by using the `BK` type-hint:



