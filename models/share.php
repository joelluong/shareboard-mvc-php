<?php
/**
 * Created by IntelliJ IDEA.
 * User: JoelLuong
 * Date: 6/11/2018
 * Time: 7:55 PM
 */
class ShareModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM shares ORDER BY create_date DESC');
        $rows =$this->resultSet();

        return $rows;
    }

    public function add(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']){
            if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
                Messages::setMsg('Please Fill In ALL fields', 'error');
                return;
            }

            // Insert into MySQL
            $this->query("INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)");
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);

            $this->execute();
            if ($this->lastInsertId()){
                // redirect
                header("Location: ".ROOT_URL.'shares');
            }

        }

        return;
    }
}