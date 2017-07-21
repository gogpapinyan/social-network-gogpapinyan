<?php
/**
 * Created by PhpStorm.
 * User: gogli
 * Date: 18.07.17
 * Time: 23:13
 */

namespace Model;


class ValidLoginModel
{    /*
        * @var string
     */
    private $error = "";

    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param string $Error
     */

    public function setError($error)
    {
        $this->error = $error;
    }

}
