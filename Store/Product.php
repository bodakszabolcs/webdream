<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 10:22
	 */
	namespace Store;

	class Product
	{

		protected $sku;
		protected $name;
		protected $price;
		protected $brand;

		/**
		 * Product constructor.
		 * @param $sku
		 * @param $name
		 * @param $price
		 * @param $brand
		 */
		public function __construct($sku, $name, $price,Brand $brand)
		{
			$this->sku = $sku;
			$this->name = $name;
			$this->price = $price;
			$this->brand = $brand;
		}

		function __toString()
		{
			return $this->sku.", ".$this->name.', '.$this->price.", ".$this->brand;
		}

		/**
		 * @return mixed
		 */
		public function getSku()
		{
			return $this->sku;
		}

		/**
		 * @param mixed $sku
		 */
		public function setSku($sku)
		{
			$this->sku = $sku;
		}

		/**
		 * @return mixed
		 */
		public function getPrice()
		{
			return $this->price;
		}

		/**
		 * @param mixed $price
		 */
		public function setPrice($price)
		{
			$this->price = $price;
		}

		/**
		 * @return \Store\Brand
		 */
		public function getBrand()
		{
			return $this->brand;
		}

		/**
		 * @param \Store\Brand $brand
		 */
		public function setBrand(Brand $brand)
		{
			$this->brand = $brand;
		}





	}
	class Phone extends Product
	{
		private $color;

		/**
		 * Phone constructor.
		 * @param $color
		 */
		public function __construct($sku, $name, $price,Brand $brand,$color)
		{
			parent::__construct($sku, $name, $price,$brand);
			$this->color = $color;
		}

		function __toString()
		{
			return $this->sku.", ".$this->name.', '.$this->price.", ".$this->brand.", ".$this->color;
		}
		/**
		 * @return mixed
		 */
		public function getColor()
		{
			return $this->color;
		}
	}
	class Laptop extends Product
	{
		private $cpu;

		/**
		 * Laptop constructor.
		 * @param $cpu
		 */
		public function __construct($sku, $name, $price,Brand $brand,$cpu)
		{
			parent::__construct($sku, $name, $price,$brand);
			$this->cpu = $cpu;
		}

		function __toString()
		{
			return $this->sku.", ".$this->name.', '.$this->price.", ".$this->brand.", ".$this->cpu;
		}

		/**
		 * @return mixed
		 */
		public function getCpu()
		{
			return $this->cpu;
		}

	}