# Hello LoremIpsumBundle!

FxRateBundle is a way for your user FX Rate API into
your Symfony application.

Install the package with:

```console
composer require boonkuaeboonsutta/fx-rate-bundle --dev
```

And... that's it! If you're *not* using Symfony Flex, you'll also
need to enable the `BK\FxRateBundle\BKFxRateBundleBundle`
in your `AppKernel.php` file.

## Usage

This bundle provides a single service for connect to the FX Api, which
you can autowire by using the `BK` type-hint:

