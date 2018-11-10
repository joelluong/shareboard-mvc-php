<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 5/11/2018
 * Time: 4:22 PM
 */

class Users extends Controller{
    protected function register(){
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }
}