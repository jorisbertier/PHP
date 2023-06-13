<?php


class user {

    //private
    //public
    //protected
    private string $name;
    private string $password;

    public function __construct(string $newName, int $newPassword) {
        $this->name = $newName;
        $this->password = $newPassword;
    }

}

?>