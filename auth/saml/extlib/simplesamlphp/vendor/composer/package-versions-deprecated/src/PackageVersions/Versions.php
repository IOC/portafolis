<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'simplesamlphp/simplesamlphp';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'gettext/gettext' => 'v4.8.6@bbeb8f4d3077663739aecb4551b22e720c0e9efe',
  'gettext/languages' => '2.9.0@ed56dd2c7f4024cc953ed180d25f02f2640e3ffa',
  'phpfastcache/riak-client' => '3.4.3@d771f75d16196006604a30bb15adc1c6a9b0fcc9',
  'phpmailer/phpmailer' => 'v6.5.3@baeb7cde6b60b1286912690ab0693c7789a31e71',
  'predis/predis' => 'v2.0.3@ff59f745815150c65ed388f7d64e7660fe961771',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'robrichards/xmlseclibs' => '3.1.1@f8f19e58f26cdb42c54b214ff8a820760292f8df',
  'simplesamlphp/assert' => 'v0.0.13@5429921b320ca4f9d1844225884ac52f649ea1e3',
  'simplesamlphp/composer-module-installer' => 'v1.1.8@45161b5406f3e9c82459d0f9a5a1dba064953cfa',
  'simplesamlphp/saml2' => 'v4.4.0@f3b13417deb45f882f676108c250143f994eb2a4',
  'simplesamlphp/simplesamlphp-module-adfs' => 'v1.0.7@fe810201312684adb62b5dfcb0bbb1b16f66abcb',
  'simplesamlphp/simplesamlphp-module-authcrypt' => 'v0.9.4@62555123e61b11463be3cd7adb708562023cff28',
  'simplesamlphp/simplesamlphp-module-authfacebook' => 'v0.9.3@9152731e939ad4a49e0f06da5f0009ebde0d2b5c',
  'simplesamlphp/simplesamlphp-module-authorize' => 'v0.9.4@4c7ce4eaa54fc301f131c62e803fc843e4d88056',
  'simplesamlphp/simplesamlphp-module-authtwitter' => 'v0.9.3@6e178e7aae7827a64dc462b5bb2f28d6eddc4381',
  'simplesamlphp/simplesamlphp-module-authwindowslive' => 'v0.9.1@f40aecec6c0adaedb6693309840c98cec783876e',
  'simplesamlphp/simplesamlphp-module-authx509' => 'v0.9.9@b138f41b2bc725371f42abb63b5a39ac11b5432a',
  'simplesamlphp/simplesamlphp-module-authyubikey' => 'v0.9.3@414e2a73da4adfee6d97ba66e852ec7c85369913',
  'simplesamlphp/simplesamlphp-module-cas' => 'v0.9.1@63b72e4600550c507cdfc32fdd208ad59a64321e',
  'simplesamlphp/simplesamlphp-module-cdc' => 'v0.9.2@92498fc3004c02849d96da29ca472d99ed23af73',
  'simplesamlphp/simplesamlphp-module-consent' => 'v0.9.8@8466b0b7c6207b15ca5e265f436299ff2dec85da',
  'simplesamlphp/simplesamlphp-module-consentadmin' => 'v0.9.2@62dc5e9d5b1a12a73549c80140b7224d7f7d1c2e',
  'simplesamlphp/simplesamlphp-module-discopower' => 'v0.10.1@4cb6b7c648b455586903b8932a171397375b50b0',
  'simplesamlphp/simplesamlphp-module-exampleattributeserver' => 'v1.0.0@63e0323e81c32bc3c9eaa01ea45194bb10153708',
  'simplesamlphp/simplesamlphp-module-expirycheck' => 'v0.9.4@02101497281031befba93c48c96ee9133f57241d',
  'simplesamlphp/simplesamlphp-module-ldap' => 'v0.9.17@40f1bfe0c4ac2f91cf8e52d22fa6ec2fe1c03066',
  'simplesamlphp/simplesamlphp-module-memcachemonitor' => 'v0.9.3@8d25463ac56b4e2294f59f622a6658e0c67086f4',
  'simplesamlphp/simplesamlphp-module-memcookie' => 'v1.2.2@39535304e8d464b7baa1e82cb441fa432947ff57',
  'simplesamlphp/simplesamlphp-module-metarefresh' => 'v0.9.7@ca724f0edd1179bb0056dc4561d455db7a1f1adc',
  'simplesamlphp/simplesamlphp-module-negotiate' => 'v0.9.12@48752cea80e81a60ebb522cc10789589ac16df50',
  'simplesamlphp/simplesamlphp-module-oauth' => 'v0.9.3@2a2433144dca408315e4ee163f9ab73a6110b2b1',
  'simplesamlphp/simplesamlphp-module-preprodwarning' => 'v0.9.3@b3c6d9d41d009e340f4843ce5c24b4118a38e4c3',
  'simplesamlphp/simplesamlphp-module-radius' => 'v0.9.4@dbe2976ba27f5131faeca368a5665f8baeaae8b6',
  'simplesamlphp/simplesamlphp-module-riak' => 'v0.9.1@c1a9d9545cb4e05b9205b34624850bb777aca991',
  'simplesamlphp/simplesamlphp-module-sanitycheck' => 'v0.9.1@15d6664eae73a233c3c4c72fd8a5c2be72b6ed2a',
  'simplesamlphp/simplesamlphp-module-smartattributes' => 'v0.9.2@ba6a32fa287db0f8d767104471176f70fad7f0e1',
  'simplesamlphp/simplesamlphp-module-sqlauth' => 'v0.9.4@8a28f9a9726bab1dbc8fd3734daa08882dd0a25b',
  'simplesamlphp/simplesamlphp-module-statistics' => 'v0.9.6@03fb6bdbbf5ce0a0cb257208db79aacac227ac10',
  'simplesamlphp/twig-configurable-i18n' => 'v2.3.4@e2bffc7eed3112a0b3870ef5b4da0fd74c7c4b8a',
  'symfony/cache' => 'v4.4.36@1caa6c63f0ebf3022b88263a2b90260cff33f6dc',
  'symfony/cache-contracts' => 'v1.1.11@41c956506500bea5502022f6be81da96fb9c7626',
  'symfony/config' => 'v4.4.36@03218ffbd5faeda5e6a97f9109acebf7973ff385',
  'symfony/console' => 'v4.4.36@621379b62bb19af213b569b60013200b11dd576f',
  'symfony/debug' => 'v4.4.36@346e1507eeb3f566dcc7a116fefaa407ee84691b',
  'symfony/dependency-injection' => 'v4.4.36@24e802b4973d3a60c01fd77bdaac8a66944202e1',
  'symfony/error-handler' => 'v4.4.36@1fa841189eae3d59c7a29c3751fd9ed8ab65ca5c',
  'symfony/event-dispatcher' => 'v4.4.34@1a024b45369c9d55d76b6b8a241bd20c9ea1cbd8',
  'symfony/event-dispatcher-contracts' => 'v1.1.11@01e9a4efac0ee33a05dfdf93b346f62e7d0e998c',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.36@1fef05633cd61b629e963e5d8200fb6b67ecf42c',
  'symfony/framework-bundle' => 'v4.4.36@c2d12e37719fc066739e579c09dd1772e7db6d5a',
  'symfony/http-client-contracts' => 'v1.1.11@8a497ee1712c2507eaccd31aca00dd603f93d25d',
  'symfony/http-foundation' => 'v4.4.36@0948e99457615ddb05380adde3584484ffd951d4',
  'symfony/http-kernel' => 'v4.4.36@dfb65dcad12ef433d45ad1c97f632cd52c7faa68',
  'symfony/mime' => 'v4.4.36@fee42d10c8920b2308f466269cbf924ddc4fce94',
  'symfony/polyfill-ctype' => 'v1.24.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php72' => 'v1.24.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.24.0@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/routing' => 'v4.4.34@fc9dda0c8496f8ef0a89805c2eabfc43b8cef366',
  'symfony/service-contracts' => 'v1.1.11@633df678bec3452e04a7b0337c9bcfe7354124b3',
  'symfony/var-dumper' => 'v4.4.36@02685c62fcbc4262235cc72a54fbd45ab719ce3c',
  'symfony/var-exporter' => 'v4.4.34@75a297f25a87ce9343d39241679578886f3fd458',
  'symfony/yaml' => 'v4.4.36@a19f7c44ba665fa9d9d415cc4493361381b93f9b',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.14.10@95fb194cd4dd6ac373a27af2bde2bad5d3f27aba',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'whitehat101/apr1-md5' => 'v1.0.0@8b261c9fc0481b4e9fa9d01c6ca70867b5d5e819',
  'amphp/amp' => 'v2.6.1@c5fc66a78ee38d7ac9195a37bacaf940eb3f65ae',
  'amphp/byte-stream' => 'v1.8.1@acbd8002b3536485c997c4e019206b3f10ca15bd',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/semver' => '3.2.7@deac27056b57e46faf136fae7b449eeaa71661ee',
  'composer/xdebug-handler' => '1.4.6@f27e06cd9675801df441b3656569b328e04aa37c',
  'dnoegel/php-xdg-base-dir' => 'v0.1.1@8f8a6e48c5ecb0f991c2fdcf5f154a47d85f9ffd',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'felixfbecker/advanced-json-rpc' => 'v3.2.1@b5f37dbff9a8ad360ca341f3240dc1c168b45447',
  'felixfbecker/language-server-protocol' => '1.5.1@9d846d1f5cf101deee7a61c8ba7caa0a975cd730',
  'mikey179/vfsstream' => 'v1.6.10@250c0825537d501e327df879fb3d4cd751933b85',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'netresearch/jsonmapper' => 'v3.1.1@ba09f0e456d4f00cef84e012da5715625594407c',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'openlss/lib-array2xml' => '1.0.0@a91f18a8dfc69ffabe5f9b068bc39bb202c81d90',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.1.0@6568f4687e5b41b054365f9ae03fcb1ed5f2069b',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => 'v1.10.3@451c3cd1418cf640de218914901e51b064abb093',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.5@42c5ba5220e6904cbfe8b1a1bda7c0cfdc8c12f5',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.3@9c1da83261628cb24b6a6df371b6e312b3954768',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.4@0c32ea2e40dbf59de29f3b49bf375176ce7dd8db',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'sensiolabs/security-checker' => 'v6.0.3@a576c01520d9761901f269c4934ba55448be4a54',
  'simplesamlphp/simplesamlphp-test-framework' => 'v0.1.2@f54a646a95f7b928d06a36d5f7f8303ac07f09b2',
  'squizlabs/php_codesniffer' => '3.6.2@5e4e71592f69da17871dba6e80dd51bce74a351a',
  'symfony/http-client' => 'v4.4.36@35e2cd1862b9ec2b46ebf050fbb13e285944b6a3',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'vimeo/psalm' => '3.18.2@19aa905f7c3c7350569999a93c40ae91ae4e1626',
  'webmozart/glob' => '4.1.0@3cbf63d4973cf9d780b93d2da8eec7e4a9e63bbe',
  'webmozart/path-util' => '2.3.0@d939f7edc24c9a1bb9c0dee5cb05d8e859490725',
  'simplesamlphp/simplesamlphp' => 'v1.19.5@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}