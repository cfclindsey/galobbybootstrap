<?php

$string = 'Hello ' . $params['username'] . ",<br /><br />  We have created an account for you to the Georgia Lobby website.  We look forward to serving you as a new subscriber to Georgia Lobby. <br /><br />  You can access it at <a href=" . '"http//galobby.com/user/">https://galobby.com/user</a> and log in with your email address and the password: ' . $params['password'] . '.<br /><br /> Please contact us at 678.522.2271 or <a href="mailto:office@galobby.com">office@galobby.com</a> if you have trouble with your account.<br /><br /> - Georgia Lobby';

return $string;

?>