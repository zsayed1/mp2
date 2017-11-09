<?php
require 'vendor/autoload.php';
$sqs = new Aws\Sns\SnsClient([
    'version' => 'latest',
    'region' => 'us-west-2'
]);



$result = $sqs->listTopics([

]);

print_r($result['Topics']);
$topicarn=($result['Topics'][0]['TopicArn']);
echo "Your Topic Arn: . $topicarn";

?>