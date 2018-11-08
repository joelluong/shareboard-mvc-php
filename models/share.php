<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 6/11/2018
 * Time: 7:55 PM
 */
class ShareModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM shares');
        $rows =$this->resultSet();

        return $rows;
    }
}