<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 5/11/2018
 * Time: 4:22 PM
 */

class Shares extends Controller{
    protected function Index(){
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add(){
        if(!isset($_SESSION['is_logged_in'])){
            header("Location: ".ROOT_URL."shares");
        } else {
            $viewmodel = new ShareModel();
            $this->returnView($viewmodel->add(), true);
        }
    }
}