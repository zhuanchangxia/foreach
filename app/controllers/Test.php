<?php
namespace controllers;

use model\BasDao;
class Test extends BaseControllers
{
	public function index(){
       $aa=new BasDao();
       $bb=$aa->select('carts','*');
       print_r($bb);
	   // $this->display('index');
	  
	}
	public function hello(){
	    echo 'this is hello';
	}
}