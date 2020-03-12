<?php
class HelloTask extends Shell {
	public $uses = array('User');

    public function execute() {
	    $user = $this->User->getAdmin();
        $this->out(print_r($user, true));
    }
}