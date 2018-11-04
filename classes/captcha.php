<?php

class Captcha
{
	
	function __construct()
	{
		$this->template = array(
				'%s plus %s',
				'Square of %s',
				'If u were born %s years ago, how old would u be?',
				'%s multiply %s'
			);
	}

	public function genereate(){
		$tIndex = rand(0, sizeof($this->template) - 1);

		switch($tIndex){
			case 0:
				$f = rand(0,10);
				$l = rand(0,10);
				$this->question = sprintf($this->template[0], $f, $l);
				$this->answer = $f + $l;
				break;
			case 1:
				$f = rand(0,10);
				$this->question = sprintf($this->template[1], $f);
				$this->answer = pow($f, 2);
				break;
			case 2:
				$f = rand(0,20);
				$this->question = sprintf($this->template[2], $f);
				$this->answer = $f;
				break;
			case 3:
				$f = rand(0,10);
				$l = rand(0,10);
				$this->question = sprintf($this->template[3], $f, $l);
				$this->answer = $f * $l;
				break;

		}
	}

	public function getQuestion(){
		return $this->question;
	}

	public function getAnswer(){
		return $this->answer;
	}
}

