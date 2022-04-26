<?php
class Validator {

    // Egenskaper
    private $data;

    public function __construct($postData)
    {
        $this->data = $postData;
    }

    // Metoderna 

    public function ValidateUsername() {
        // echo "<p>{$this->data['username']}</p>";
        // Kolla längd 5-15 tecken
        if (strlen($this->data['username']) < 5 || strlen($this->data['username']) > 15) {
            echo "<p>Användarnamnet måste vara 5-15 tecken</p>";
        }
    }

    public function ValidateEmail() {
        //echo "<p>{$this->data['email']}</p>";
        if (strlen($this->data['email']) < 10 || strlen($this->data['email']) > 25) {
            echo "<p>Email måste vara 10-25 tecken</p>";
        }
    }
}
?>