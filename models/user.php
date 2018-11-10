<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 6/11/2018
 * Time: 7:55 PM
 */

class UserModel extends Model {
    public function register(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $password = md5($post['password']);

        if ($post['submit']){
            // Insert into MySQL
            $this->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
            $this->bind(':name', $post['name']);
            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);

            $this->execute();
            if ($this->lastInsertId()){
                // redirect
                header("Location: ".ROOT_URL.'users/login');
            }

        }

        return;
    }
}