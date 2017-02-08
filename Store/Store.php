<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 10:20
	 */
	namespace Store;


	class Store
	{
		private $name;
		private $address;
		private $max_capacity=50;
		private $actual_capacity=0;
		private  $itemList= array();

		/**
		 * Store constructor.
		 * @param array $itemList
		 * @param $name
		 * @param $address
		 */
		public function __construct($name, $address,array $itemList)
		{
			$this->itemList = $itemList;
			$this->name = $name;
			$this->address = $address;
		}

		function __toString()
		{
			$tmpString=$this->name.", ".$this->address.'. Kapacitás:'.$this->max_capacity."\r\n"."Készlet:"."\r\n";
			foreach ($this->itemList as $item)
			{
				$tmpString.=$item."\r\n";
			}
			return $tmpString;
		}

		/**
		 * @return mixed
		 */
		public function getName()
		{
			return $this->name;
		}

		/**
		 * @return mixed
		 */
		public function getAddress()
		{
			return $this->address;
		}

		/**
		 * @return int
		 */
		public function getMaxCapacity()
		{
			return $this->max_capacity;
		}

		/**
		 * @return array
		 */
		public function getItemList()
		{
			return $this->itemList;
		}

		/**
		 * @param mixed $name
		 */
		public function setName($name)
		{
			$this->name = $name;
		}

		/**
		 * @param mixed $address
		 */
		public function setAddress($address)
		{
			$this->address = $address;
		}



		public function push( StoreItem $listItem)
		{
			$amount = $listItem->getAmount();
			$actualItem = $listItem->getItem();
			$itemExist =false;
			if($amount + $this->actual_capacity <= $this->max_capacity) {
				foreach ($this->itemList as $key => $item) {
					$product = $item->getItem();
					$productAmount = $item->getAmount();
					if ($product->getSku() === $actualItem->getSku()) {
						$item->setAmount($productAmount + $amount);
						$itemExist = true;

					}
				}
				if (!$itemExist) {
					array_push($this->itemList,$listItem);
				}
				$this->actual_capacity = $this->actual_capacity+$amount;
			}
			else {
				throw new \Exception('Unable to add the store. Error: actual capacity plus item amount, greater then max capacity ');
			}


		}
		public function pop( StoreItem $listItem)
		{
			$amount = $listItem->getAmount();
			$actualItem = $listItem->getItem();
			$itemExist = false;
			$hasAmount = true;
			$actualAmount=0;

			if( $this->actual_capacity-$amount >= 0) {

				foreach ($this->itemList as $key => $item) {
					$product = $item->getItem();
					$productAmount = $item->getAmount();
					if ($product->getSku() === $actualItem->getSku()) {
						$itemExist = true;
						$actualAmount = $productAmount;
						if($productAmount-$amount < 0) {
							$hasAmount =false;

						}
						else {
							if($productAmount-$amount==0) {
								unset($this->itemList[$key]);

							}
							else {
								$item->setAmount($productAmount - $amount);

								$this->actual_capacity = $this->actual_capacity - $amount;
							}
						}
					}
				}
				if (!$itemExist)
				{
					throw new \Exception('Item not exist');
				}
				if(!$hasAmount)
				{
					throw new \Exception('Item amount not found. Error: actual amount '.$actualAmount);
				}

			}
			else
			{
				throw new \Exception('Unable to remove the store');
			}

		}


	}