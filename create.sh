

function page 
{
MVC=( controllers models view )
cat << EOF > "./$1.php"
<?php
class $1 extends Controller{
	protected function Index(){
		\$viewmodel = new $1Model();
		\$this->returnView(\$viewmodel->Index(), true);
	}
	
}
EOF
}




"$@"
