<?php

include("File.php");

class ValidationLogin
{
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;

    /**
     * Validation constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function validLogin()
    {

        $file = new File("username.txt");
        $handle = $file->getHandle();
        while (!$file->isEndOfFile($handle)) {
            $row = $file->explodeRow($handle);
            if ($row[0] == $this->username && password_verify($this->password, trim($row[1]))) {
                return true;
            }
        }
        return false;
    }
}