<?php

use PHPUnit\Framework\TestCase;

class UserDatabase
{
   public function getUserBalance($userId)
   {
      $pdo = new \PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
      $stmt = $pdo->prepare('SELECT balance FROM users WHERE id = ?');
      $stmt->execute([$userId]);
      $row = $stmt->fetch();
      return $row['balance'];
   }
}

class UserDatabaseTest extends TestCase
{
//    private $userDatabase;
// 
//    protected function setUp(): void
//    {
//       parent::setUp();
//       $this->userDatabase = new UserDatabase();
//    }

   // public static function userBalanceProvider()
   // {
   //    return [
   //       [1, 100], // User ID 1 memiliki saldo 100
   //       [2, 50], // User ID 2 memiliki saldo 50
   //       [3, 200], // User ID 3 memiliki saldo 200
   //    ];
   // }

   /**
    * @dataProvider userBalanceProvider
    */
   // public function testGetUserBalance($userId, $expectedBalance)
   // {
   //    $actualBalance = $this->userDatabase->getUserBalance($userId);
   //    $this->assertEquals($expectedBalance, $actualBalance);
   // }
}
?>