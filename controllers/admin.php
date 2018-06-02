<?php
class Admin extends Controller{
	protected function index(){
		if(!ADMIN_GUI){
			header('Location: /');
			die('Admin_gui is disabled');
		}
		$viewmodel = new AdminModel();
		$this->returnView($viewmodel->index(), '__adminGui.php');
	}
	
}
