<?php
	# functions
	if (!function_exists("echoCssFiles")) {
		function echoCssFiles($cssFiles)
		{
			global $output_styles;
			foreach ($cssFiles as $key => $val) {
				$output_styles = "<link href=\"$val\" type=\"text/css\" rel=\"stylesheet\" />";
				echo $output_styles;
			}
			return $output_styles;
		}
	}
	if (!function_exists("echoJssFiles")) {
		function echoJssFiles($jsFiles)
		{
			global $output_scripts;
			foreach ($jsFiles as $key => $val) {
				$output_scripts = "<script defer src=\"$val\"></script>";
				echo $output_scripts;
			}
			return $output_scripts;
		}
	}

	#base
	$http = 'http://';
	$urllocal = '/luma_prataArte';
	$title = 'Prata & Arte';

	#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

	# define a pagina
	$home = false;
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;

	# carrega os estilos/scripts
	$css_libraries = 'dist/libraries-min.css';
	$css_homePage = 'dist/homePage-min.css';
	$css_innerPages = 'dist/innerPages-min.css';
	$css_allPages = 'dist/allPages-min.css';

	$js_jquery = 'https://code.jquery.com/jquery-3.3.1.min.js';
	$js_libraries = 'dist/libraries-min.js';
	$js_homePage = 'dist/homePage-min.js';
	$js_innerPages = 'dist/innerPages-min.js';
	$js_allPages = 'dist/allPages-min.js';
	$js_components = 'dist/components-min.js';
	
	$load_this_js = array($js_jquery, $js_libraries, $js_components, $js_allPages);
	$load_this_css = array($css_libraries, $css_allPages);

	# carrega os estilos/scripts por página
	# muda titulo de cada página
	switch ($pagina) {
		case 'componentslist':
			$file = 'page_components.php';
			$title_page = 'Components - '.$title;
			break;
		
		case 'categoria':
			$file = 'page_categoria.php';
			$title_page = 'Categoria - '.$title;
			break;

		case 'busca':
			$file = 'page_busca.php';
			$title_page = 'Busca - '.$title;
			break;
		
		case 'produto':
			$file = 'page_produto.php';
			$title_page = 'Produto - '.$title;
			break;

		case 'sobre':
			$file = 'page_sobre.php';
			$title_page = 'Sobre - '.$title;
			break;

		case 'login':
			$file = 'page_login.php';
			$title_page = 'Login - '.$title;
			break;

		case 'cadastro':
			$file = 'page_cadastro.php';
			$title_page = 'Cadastro - '.$title;
			break;

		case 'carrinho':
			$file = 'page_carrinho.php';
			$title_page = 'Carrinho - '.$title;
			break;

		case 'termos':
			$file = 'page_termos.php';
			$title_page = 'Termos de Uso - '.$title;
			break;

		case '' :
		case 'home' :
		default :
			$file = 'page_home.php';
			$title_page = $title;
			$home = true;
			$load_this_js = array($js_jquery, $js_libraries, $js_components, $js_allPages);
			$load_this_css = array($css_libraries, $css_allPages);
			break;
	}

	#Monta a base url
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);
?>