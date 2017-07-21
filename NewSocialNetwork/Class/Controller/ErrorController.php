<?php
/**
 * Created by PhpStorm.
 * User: gogli
 * Date: 18.07.17
 * Time: 20:20
 */

namespace Controller;


class ErrorController
{

    public function actionNotFound()
    {
        http_response_code(404);
        require '../view/error/404.php';
    }

}