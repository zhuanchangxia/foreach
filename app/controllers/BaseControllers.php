<?php
namespace Controllers;
class BaseControllers
{
 
    protected $twig;
    protected $data=[];

	public function __construct(){
		$loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__).'/views');
		$this->twig = new \Twig\Environment($loader, [
    // 'cache' => '/path/to/compilation_cache',
         ]);
	}
	public function assign($key,$val=null){
         $this->data[$key]=$val;
	}

    function display($template){
    	echo $this->twig->render($template.'.html', $this->data);
    }
    




	public function success($url,$mess){
	    echo "<script>";
	    echo "alert('{$mess}')";
	    echo "location.href='{$url}'";
	    echo "</script>";

	}
	public function se(){
		var_dump(666);
	}
}