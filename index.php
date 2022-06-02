<?php
// Require the Composer autoloader.
include_once('vendor/autoload.php');
ini_set('memory_limit', '-1');
use Aws\S3\S3Client;
try {
// Instantiate an Amazon S3 client.
    $s3= new S3Client([
        'version' => 'latest',
        'region'  => 'xxx',
        "endpoint" =>'https://xxx.xxxxxxxxxxx.com/xxxxxx',
        'credentials' => array(
            'key' => "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
            'secret' => "xxxxxxxxxxxxxxxxxxxxxxxxxxxxx"
        ),
        "s3BucketEndpoint" => true
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    print_r($e);
}


try {
        $s3->putObject([
            'Bucket' => 'my-bucket',
            'Key'    => 'my-object',
            'Body'   => fopen('/path/to/file', 'r+'),
            'ACL' => 'public-read',
            'CacheControl' => 'max-age=3153600'
        ]);

    $list= $s3->listObjects(array(
        'Bucket' => 'upload'
    ));
    print_r($list);
} catch (Aws\S3\Exception\S3Exception $e) {
   print_r($e);
}
