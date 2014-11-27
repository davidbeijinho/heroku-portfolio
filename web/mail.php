<?php

require 'vendor/autoload.php';
$sendgrid = new SendGrid('app31980293@heroku.com', 'yd0ibbkp');

$message = new SendGrid\Email();
$message->addTo('davidbeijinho@gmail.com')->
          setFrom('me@bar.com')->
          setSubject('Subject goes here')->
          setText('Hello World!')->
          setHtml('<strong>Hello World!</strong>');
$response = $sendgrid->send($message);

?>

