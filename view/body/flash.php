<?php
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

// Add messages
$msg->info('This is an info message');
$msg->success('This is a success message');
$msg->warning('This is a warning message');
$msg->error('This is an error message 1');
$msg->error('This is an error message 2'); // 可以塞多個

// If you need to check for errors (eg: when validating a form) you can:

if ($msg->hasErrors()) {
	$msg->display(); // 最後一次全部顯示出來
} else {
  // There are NOT any errors
}
