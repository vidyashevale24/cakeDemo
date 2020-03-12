<?php
class SeaShell extends AppShell {
    public $tasks = array('Sound','Hello'); // found in Console/Command/Task/SoundTask.php
    public function main() {
        $this->Sound->execute();

    }
}

/************************************* OUTPUT **********************************************/
/*
nikhil@nikhil-pc:/var/www/html/cakeDemo$ cake sea hello

Welcome to CakePHP v2.10.20 Console
---------------------------------------------------------------
App : app
Path: /var/www/html/cakeDemo/app/
---------------------------------------------------------------
Array
(
    [0] => Array
        (
            [User] => Array
                (
                    [userID] => 36
                    [fullName] => Vidya Sagar
                    [username] => vidyasagar
                    [password] => 6c8250b6eff8bdadba3313773058a4e8b0d152e5
                    [email] => vidya@gmail.com
                    [mobileNo] => 8965236598
                    [role] => admin
                    [createdDate] => 2020-03-11 12:03:00
                    [modifiedDate] => 
                    [status] => active
                )

            [Post] => Array
                (
                    [0] => Array
                        (
                            [postID] => 2
                            [postContent] => My First Post
                            [images] => 
                            [createdBy] => 36
                            [createdDate] => 
                            [modifiedDate] => 
                            [status] => active
                        )

                    [1] => Array
                        (
                            [postID] => 3
                            [postContent] => My Second Post
                            [images] => 
                            [createdBy] => 36
                            [createdDate] => 
                            [modifiedDate] => 
                            [status] => active
                        )

                )

        )

)
*/
?>