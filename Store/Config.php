<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 11:18
	 */
	namespace Store;

	class Config
	{
		private $path;
		/**
		 * Config constructor.
		 */
		public function __construct($path)
		{
			$this->path=$path;
		}

		public function load()
		{
			$pathArray = explode('.',$this->path);

			$file = realpath(dirname(__FILE__).'/config/'.$pathArray[0].'.php');
			unset($pathArray[0]);
			if(file_exists($file)) {
				$data = include $file;
				if(count($pathArray)>0) {
					foreach($pathArray as $p) {
						if(isset($data[$p])) {
							$data =$data[$p];
						}
						else {
							throw new \Exception('Config file not exist');
						}
					}
				}
				if(count($data)>0) {
					return $data;
				}
				else {
					throw new \Exception('Config file is empty');
				}

			}
			else
			{
				throw new \Exception('Config file not exist');
			}


		}
	}