<?php
class SoundTask extends Shell {
	public $uses = array('User');

    public function execute() {
	  	$this->out('Hello world.');
	  	//$this->out('Quiet message', 1, Shell::QUIET);
	  	//$this->out('normal message', 1, Shell::NORMAL);
		//$this->out('loud message', 1, Shell::VERBOSE);

		$this->stdout->outputAs(ConsoleOutput::COLOR);
	  	//$this->stdout->styles('flashy', array('text' => 'magenta', 'blink' => true));
	}
}