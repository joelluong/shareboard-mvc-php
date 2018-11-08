<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 5/11/2018
 * Time: 3:49 PM
 */

class Home extends Controller{
    protected function Index(){
        $viewmodel = new HomeModel();
        $this->returnView($viewmodel->Index(), true);
    }
}