<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 10:27
	 */
	namespace Store;


	class StoreItem
	{
		private $item;
		private $amount;

		/**
		 * StoreItem constructor.
		 * @param $item
		 * @param $amount
		 */
		public function __construct(Product $item, $amount)
		{
			$this->item = $item;
			$this->amount = $amount;
		}

		function __toString()
		{
			return $this->item." , ".$this->amount;
		}

		/**
		 * @return \Store\Product
		 */
		public function getItem()
		{
			return $this->item;
		}

		/**
		 * @return mixed
		 */
		public function getAmount()
		{
			return $this->amount;
		}

		/**
		 * @param mixed $amount
		 */
		public function setAmount($amount)
		{
			$this->amount = $amount;
		}


	}