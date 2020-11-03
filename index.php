<?php
  class User
  {
    public $name;
    public $username;
    public $email;

    public function addFriend($name)
    {
      echo $name . " added a friend.";
    }

    public function postStatus($name)
    {
      echo $name . " posted a status.";
    }
  }

  $user1 = new User();
  $user1->addFriend("Joshua Capalaran");
  echo "<br>";
  $user1->postStatus("Joshua Capalaran");
 ?>
