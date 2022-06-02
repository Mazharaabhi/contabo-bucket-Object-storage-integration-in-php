# Contabo Bucket Object Storage Itegration in php

The **CONTABO SDK for PHP** makes it easy for developers to access Contabo in their PHP code, and build robust applications and software
using services like Amazon S3 etc. You can
get started in minutes by installing the SDK through Composer docs-installation
or by downloading a single zip or phar file from our latest release.

Jump To:
* [Getting Started](#Getting-Started)
* [Quick Examples](#Quick-Examples)
* [Getting Help](#Getting-Help)

## Getting Started

1. **Sign up for Contabo** – Before you begin, you need to
   sign up for an Contabo account and retrieve your Contabo credentials.
1. **Minimum requirements** – To run the SDK, your system will need to meet the
   minimum requirements docs-requirements, including having **PHP >= 5.5**.
   We highly recommend having it compiled with the cURL extension and cURL
   7.16.2+ compiled with a TLS backend (e.g., NSS or OpenSSL).
1. **Install the SDK** – Using [Composer] is the recommended way to install the
   Contabo SDK for PHP. The SDK is available via [Packagist] under the
   [`aws/aws-sdk-php`][install-packagist] package. If Composer is installed globally on your system, you can run the following in the base directory of your project to add the SDK as a dependency:
   ```
   composer require aws/aws-sdk-php
   ```
## Quick Examples

### Create an Contabo  client

```php
<?php
// Require the Composer autoloader.
require 'vendor/autoload.php';

use Aws\S3\S3Client;

// Instantiate an Contabo client.
 $s3= new S3Client([
                'version' => 'latest',
                'region'  => 'xxx',   // au9
                "endpoint" =>'https://xxx.xxxxxxxxxxx.xxx/',  //https://au9.contabostorage.com/
                'credentials' => array(
                    'key' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',
                    'secret' => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
                ),
                'use_path_style_endpoint' => true
            ]);
```

### Upload a file to Contabo S3

```php
<?php
// Upload a publicly accessible file. The file size and type are determined by the SDK.
try {
    $s3->putObject([
        'Bucket' => 'my-bucket',
        'Key'    => 'my-object',
        'Body'   => fopen('/path/to/file', 'r+'),
        'ACL' => 'public-read',
        'CacheControl' => 'max-age=3153600'
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
}
```

## Getting Help

Please use these community resources for getting help. We use the GitHub issues for tracking bugs and feature requests and have limited bandwidth to address them.



[sdk-website]: http://aws.amazon.com/sdkforphp
[sdk-forum]: https://forums.aws.amazon.com/forum.jspa?forumID=80
[sdk-issues]: https://github.com/aws/aws-sdk-php/issues
[sdk-license]: http://aws.amazon.com/apache2.0/
[sdk-blog]: https://aws.amazon.com/blogs/developer/category/php/
[sdk-twitter]: https://twitter.com/awsforphp
[sdk-sample]: http://aws.amazon.com/developers/getting-started/php

[install-packagist]: https://packagist.org/packages/aws/aws-sdk-php
[latest-release]: https://github.com/aws/aws-sdk-php/releases

[docs-api]: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html
[docs-guide]: http://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/welcome.html
[docs-api-v2]: http://docs.aws.amazon.com/aws-sdk-php/v2/api/index.html
[docs-guide-v2]: http://docs.aws.amazon.com/aws-sdk-php/v2/guide/index.html
[docs-contribution]: https://github.com/aws/aws-sdk-php/blob/master/CONTRIBUTING.md
[docs-migration]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_migration.html
[docs-signup]: http://aws.amazon.com/developers/access-keys/
[docs-requirements]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_requirements.html
[docs-installation]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_installation.html
[docs-quickstart]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/welcome.html#getting-started
[docs-paginators]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_paginators.html
[docs-waiters]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_waiters.html
[docs-results]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html#result-objects
[docs-exceptions]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html#handling-errors
[docs-wire-logging]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/faq.html#how-can-i-see-what-data-is-sent-over-the-wire
[docs-ddbsh]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/service_dynamodb-session-handler.html
[docs-services]: https://aws.amazon.com/products/
[docs-rande]: http://docs.aws.amazon.com/general/latest/gr/rande.html
[docs-streamwrapper]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-stream-wrapper.html
[docs-s3-transfer]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-transfer.html
[docs-s3-multipart]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-multipart-upload.html
[docs-s3-encryption]: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/s3-encryption-client.html

[aws]: http://aws.amazon.com
[aws-iam-credentials]: http://docs.aws.amazon.com/AWSEC2/latest/UserGuide/UsingIAM.html#UsingIAMrolesWithAmazonEC2Instances
[aws-tools]: http://aws.amazon.com/tools
[guzzle-docs]: http://guzzlephp.org
[composer]: http://getcomposer.org
[packagist]: http://packagist.org
[psr-7]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-7-http-message.md
[psr-4]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md
[psr-1]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md
[psr-2]: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md

[mod-laravel]: https://github.com/aws/aws-sdk-php-laravel
[mod-zf2]: https://github.com/aws/aws-sdk-php-zf2
[mod-silex]: https://github.com/aws/aws-sdk-php-silex
[mod-symfony]: https://github.com/aws/aws-sdk-php-symfony
[sns-validator]: https://github.com/aws/aws-php-sns-message-validator
[serverless-LAMP-stack-guide]: https://github.com/aws-samples/php-examples-for-aws-lambda
