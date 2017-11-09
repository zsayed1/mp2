<?php
require 'vendor/autoload.php';

// Creatinhg SNS client
$sqs = new Aws\Sns\SnsClient([
    'version' => 'latest',
    'region' => 'us-west-2' //regionus0west-2
]);


//creating variable to store the list of Topic arn
$result = $sqs->listTopics([

]);

print_r($result['Topics']);
$topicarn=($result['Topics'][0]['TopicArn']);
echo "Your Topic Arn: . $topicarn";

//subscribing sns
$sqs = $client->subscribe([
    'Endpoint' => 'zsayed1@hawk.iit.edu',
    'Protocol' => 'email',
    'TopicArn' => $topicarn, 
]);

?>