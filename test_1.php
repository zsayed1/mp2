<?php
require 'vendor/atoload.php'

echo" Hello world"

$sqs = new Aws/Sns/SnsClient([
    'version' => 'latest',
    'region' => 'us-west-2'
]);