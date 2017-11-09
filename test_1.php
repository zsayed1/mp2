<?php
require 'vendor/atoload.php'

echo" Hello world hi there"

$sqs = new Aws/Sns/SnsClient([
    'version' => 'latest',
    'region' => 'us-west-2'
]);