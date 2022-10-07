<?php

# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('8e9254fc121802568ca03bcec9006b6c-381f2624-cfb25989');
$domain = "sandboxadc3f828107746f6a8b62d0578f2c62d.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
array('from'    => 'Mailgun Sandbox <postmaster@sandboxadc3f828107746f6a8b62d0578f2c62d.mailgun.org>',
'to'      => 'N.A.P. <nap.service2022@gmail.com>',
'subject' => 'Hello N.A.P.',
'text'    => 'Congratulations N.A.P., you just sent an email with Mailgun!  You are truly awesome! '));

// You can see a record of this email in your logs: https://app.mailgun.com/app/logs.

// You can send up to 300 emails/day from this sandbox server.
// Next, you should add your own domain so you can send 10000 emails/month for free.




?>