<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto+Slab" rel="stylesheet">
<style>
	html,body, div.container-fluid{
		margin: 0;
		padding: 0;
	}
	h1.title{
		font-family: 'Roboto Slab', serif;
		font-family: 'Abril Fatface', cursive;
		font-size: 7em;
		background: rgba(235,223,245,0.5);
		width: 100%;
	}
</style>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<div class="row p-0 m-0">
	<div class="col-12 p-0">
		<h1 class="text-center m-auto mb-2 title p-5 grey-text">PHP ninja</h1>
	</div>
</div>
<div class="row m-0">
	<div class="col-12">
		<h1 class="text-center grey-text py-5">Welcome, This is custom created template <code>PHP.ninja();</code></h1>
	</div>
</div>
<div class="row justify-content-center m-0">
	<div class="col-6 text-center">
		<p>This is default page <code>index.php</code>. The first thing you have to do is to check <em>config.php</em> and edit database constants.</p>
		<hr>
		<p><b>Structue</b>: there are main pre defined mandatory folders:
			<ol>
				<li><b>assets</b> - images, javascript, fonts, css etc.</li>
				<li><b>classes</b> - important classes, core functions</li>
				<li><b>models</b> - business logic </li>
				<li><b>views</b> - user view files, HTML</li>
				<li><b>controllers</b> - contollers between business logic and views</li>
			</ol>
		</p>
		<hr>
		<h3 class="text-center grey-text">How to create page?</h3>
		<p>
		Let's create page user -> info 
			<ol>
				<li>Create controller <em>user</em></li>
				<li>Create model <em>user</em></li>
				<li>Create view <em>user</em>/<em>info.php</em></li>
			</ol>
		</p>
<pre class="prettyprint lang-scm text-left">
	//creating controller user inside controllers folder as user.php
	class user extends Controller{
		protected function info(){
			$viewmodel = new userModel();
			$this->returnView($viewmodel->info(), 'main.php');
		}
		
	}
</pre>
<pre class="prettyprint lang-scm text-left">
	//creating model user inside models folder as user.php
	class userModel extends Model{
		public function info(){
			return array(
				'user' => 'PHP ninja',
				'description' => 'My first web-page'
			);
		}
	}

</pre>
<p>in view folder we need to create <b>user</b> folder and <b>info.php</b> inside with the content</p>
<pre class="prettyprint lang-scm text-left">
	&#60;?php echo 'Hello '.$viewmodel['user']; ?&#62;
	&#60;?php echo 'Hello '.$viewmodel['description']; ?&#62;
</pre>
	</div>
</div>
