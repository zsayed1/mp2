<?php
require 'vendor/autoload.php';
$sqs = new Aws\Sns\SnsClient([
    'version' => 'latest',
    'region' => 'us-west-2'
]);



$result = $sqs->listTopics([

]);

print_r($result['Topics']);
print_r($result['Topics'][0]['TopicArn']);
?>