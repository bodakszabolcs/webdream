<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 11:12
	 */
namespace Store;

return array(

	'firstPhone'    => new Phone('P01', 'Nokia', 1000, new Brand('Kiváló',4),'fekete'),
	'secPhone'      => new Phone('P02', 'Apple', 10000, new Brand('Közepes',3),'fehér'),

	'firstLaptop'   => new Laptop('L01', 'Acer', 50000, new Brand('Használt',2),'fekete'),
	'secLaptop'     => new Laptop('L02', 'Dell', 10000, new Brand('Közepes',3),'fehér'),

	'phoneStore'    => new Store('Telefon raktár','Budapest',array()),
	'laptopStore'    => new Store('Laptop raktár','Deprecen',array()),
);