<?php 

class User extends VKMedia\core\Model {
    public $email = 'robin@vkmedia.dk';
}

$user = new User;
$user->test();

?>