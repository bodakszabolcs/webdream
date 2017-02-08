<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 10:40
	 */
	namespace Store;

	class Brand
	{
		private $name;
		private $category;

		function __construct($name, $category)
		{
			$this->name = $name;
			$this->category =  $category;
		}
		function __toString()
		{
			return $this->name."(".$this->category.") ";
		}
		public function getName()
		{
			return $this->name;
		}

		public function getCategory()
		{
			return $this->category;
		}

	}