<?php
class AdminModel extends Model{
	public function index(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if(isset($post['create'])){
			if(isset($post['page']) && !empty($post['page']) && isset($post['method']) && !empty($post['method'])){
				Messages::setMsg('If something went wrong regarding file permissions, then try chown -R www-data:www-data /path/to/webserver/www', 'info');
				switch (true) {
					case file_exists('./controllers/'.$post['page'].'.php'):
						Messages::setMsg('You already have controller '.$post['page'], 'warn');
						break;
					case file_exists('./models/'.$post['page'].'.php'):
						Messages::setMsg('You already have model '.$post['page'], 'warn');
						break;
					case file_exists('./views/'.$post['page'].'/'.$post['method'].'.php'):
						Messages::setMsg('You already have view '.$post['page'].'/'.$post['method'], 'warn');
						break;
					
					default:
						$getController = file_get_contents('core/controller.txt');
						$getModel = file_get_contents('core/model.txt');
						$fileController = fopen('./controllers/'.$post['page'].'.php', 'w') or die('Cannot open file:  controllers/'.$post['page']);
						$fileModel = fopen('./models/'.$post['page'].'.php', 'w') or die('Cannot open file:  models/'.$post['page']);
						$getController = str_replace('{Home}', $post['page'], $getController);
						$getController = str_replace('{Index}', $post['method'], $getController);

						$getModel = str_replace('{Home}', $post['page'], $getModel);
						$getModel = str_replace('{Index}', $post['method'], $getModel);

						fwrite($fileController, $getController);
						fwrite($fileModel, $getModel);

						$dirname = './views/'.$post['page'];
						if (!is_dir($dirname)) {
						    mkdir($dirname);
						}

						$fileView = fopen('./views/'.$post['page'].'/'.$post['method'].'.php', 'w') or die('Cannot create file in views');
						fwrite($fileView, '<h1 class="text-center m-5 grey-text">Welcome '.$post['page'].'.php </h1>');

						$fileAutoInclude = fopen('./core/autoincludes.php', 'a');
						fwrite($fileAutoInclude, vsprintf("require('./controllers/%s.php');\nrequire('./models/%s.php');\n", [$post['page'],$post['page']]));

						Messages::setMsg('Yay baby '.$post['page'].'.php has been created in controllers and models folder also in view folder. <br> Available at '.ROOT_URL.$post['page'].'/'.$post['method'].'<br> If not then try chown -R www-data:www-data /var/www/html'.ROOT_PATH.'<br> Or try chmod -R 777 /var/www/html'.ROOT_PATH, '');
				}
				// if(file_exists($post['page']))
			}
		}
		return;
	}
}



