<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 26/12/2019
 * Time: 23:12
 */

class Controller_Signin extends Controller
{
    function action_index()
    {
        $data['title']         = "Home";
        $this->view->generate('', 'signin.php', $data);
    }
}