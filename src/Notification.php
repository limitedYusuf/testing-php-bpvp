<?php

namespace Testing;

class Notification
{
   private $mailer;

   public function __construct(Mailer $mailer)
   {
      $this->mailer = $mailer;
   }

   public function sendNotification($email, $message)
   {
      // $this->mailer->send($email, $message);
      return true;
   }
}

?>