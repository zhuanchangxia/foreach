<?php
require('vendor/autoload.php');
use \NoahBuscher\Macaw\Macaw;



Macaw::get('/',"controllers\Home@index");



Macaw::get('/2231/(:num)',function($is){
	var_dump($is);
   
});
Macaw::dispatch();