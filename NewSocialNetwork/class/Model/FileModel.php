<?php
/**
 * Created by PhpStorm.
 * User: gogli
 * Date: 18.07.17
 * Time: 23:15
 */

namespace Model;


class FileModel
{
    private $fileName;

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    public function writeInFile($toWrite)
    {
        $handle = fopen($this->fileName, "a+");
        fwrite($handle, $toWrite);
        fclose($handle);
    }

    public function stringExist($string)
    {
        $handle = fopen($this->fileName, "r");
        if ($handle) {
            while (!feof($handle)) {
                $row = fgets($handle);
                $words = explode(" ", $row);
                if (in_array($string, $words) !== false) {
                    return true;
                }
            }
        }
        return false;
    }

    public function usernamePassswordExist($username, $password)
    {
        $handle = fopen($this->fileName, "a+");
        if ($handle) {
            while (!feof($handle)) {
                $row = fgets($handle);
                $words = explode(" ", $row);
                if ($words[3] == $username && password_verify($password, trim($words[4]))) {
                    return true;
                }
            }
            return false;
        }
    }

}