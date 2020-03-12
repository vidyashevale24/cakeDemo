<?php
class HelloShell extends AppShell {
    // With Argument
 /*   public function main() {
        $this->out('Hello world.');
    }

    public function hey_there() {
        $this->out('Hey there ' . $this->args[0]);
    }*/
    //Using Models in your shells

    
    public $uses = array('User');

    public function show() {
        $user = $this->User->getAdmin();
        $this->out(print_r($user, true));
    }
}

/************************************************OUTPUT**************************************/
/*nikhil@nikhil-pc:/var/www/html/cakeDemo$ cake hello show

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