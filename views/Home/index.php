<h1 class="text-center gray-text py-5">Welcome, This is custom template</h1>
<div class="row">
	<div class="col-md-8 col-centered text-center">
		<p>There are five main different folders <kbd>assets</kbd>, <kbd>classes</kbd>, <kbd>controllers</kbd>, <kbd>models</kbd> and <kbd>views</kbd>.
		<br>
		Inside <kbd>assets</kbd> folder there are <em>css</em>, <em>js</em> and such files.
		<br>
		To create new page you need to create new file in <kbd>controllers</kbd> folder like <em>user.php</em>
		<br>
		content example: <br>
		<pre>
class user extends Controller{
	protected function signup(){
		$viewmodel = new userModel();
		$this->returnView($viewmodel->signup(), true);
	}
}
		</pre>
		<br>
		then file <em>user.php</em> in <kbd>model</kbd> folder
		<br>
		content example: <br>
		<pre>
class userModel extends Model{
	public function signup(){
		// some logic here
	}	
}
		</pre>
		<br>
		The last step is create folder user in <kbd>view</kbd> folder and method name ase {methodname}.php file in our case signup.php
		<br>
		content:
		anything we would like to display
		<hr>
		P.S <br>
		include thos files in index.php file outside a folder
		 </p>
	</div>
</div>