<?php
class bla extends Controller{
	protected function Index(){
		$viewmodel = new blaModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
}
