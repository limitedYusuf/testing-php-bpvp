<?php

use Testing\Mailer;
use Testing\Notification;
use PHPUnit\Framework\TestCase;

class NotificationTest extends TestCase
{
   public function testSendNotification()
   {
      $mailer = new Mailer();
      $notification = new Notification($mailer);
      $result = $notification->sendNotification('test@example.com', 'Hello, World!');

      $this->assertTrue($result);
   }
}

?>