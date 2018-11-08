<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 5/11/2018
 * Time: 3:40 PM
 */

abstract class Controller
{
    protected $request;
    protected $action;

    public function __construct($action, $request)
    {
        $this->request = $request;
        $this->action = $action;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    protected function returnView($viewModel, $fullView){
        $view = 'views/'.get_class($this).'/'.$this->action.'.php';
        if ($fullView){
            require('views/main.php');
        } else {
            require($view);
        }
    }

}