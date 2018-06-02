<div class="row justify-content-center">
	<div class="col-6 mt-5 text-center">
		<h1 class="grey-text mb-5">Please type <code>page name</code> you would like to create!</h1>
		<?php Messages::display(); ?>
	</div>
</div>

<form action="" method="post">
	<div class="row justify-content-center">
		<div class="col-2">
			<input type="text" name="page" required="true" placeholder="Page name" class="form-control">
		</div>
		<div class="col-2">
			<input type="text" name="method" required="true" placeholder="Default method name" class="	form-control">
		</div>
		<div class="col-2 text-center">
			<input type="submit" name="create" value="Create" class="btn btn-primary float-left my-0">
		</div>
	</div>
</form>