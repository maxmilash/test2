<?php
/**
 * Created by PhpStorm.
 * User: Max
 * Date: 10.06.2018
 * Time: 11:52
 */

namespace application\controllers\admin;


use application\core\AdminController;

class Main extends AdminController
{
    public function actionIndex()
    {
        $this->oContent->render();
    }
}