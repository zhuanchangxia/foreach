<?php
namespace Model;
use Medoo\Medoo;
class BasDao extends Medoo
{
	function __construct(){
        $option=[
       'type' => 'mysql',
    'host' => 'localhost',
    'database' => 'zouxiu2',
    'username' => 'root',
    'password' => '123456'
	];
	
	parent::__construct($option);

    }
	
   
}