<?php
	/**
	 * Created by PhpStorm.
	 * User: bodak
	 * Date: 2017.02.08.
	 * Time: 11:11
	 */
	namespace Store;



	class ApiCall
	{
		public function __construct()
		{


		}

		public static function simulateFirst()
		{
			$config = new Config('data');

			$test = $config->load();
			echo "\n---------------------------------------------------------------------------------\n";
			echo "Létrehoz két raktárat, felvesz x terméket, kikér y terméket \n";
			echo "---------------------------------------------------------------------------------\n";
			echo "Két üres raktár létregozása:\n";

			$phoneStore =$test['phoneStore'];
			$laptopStore =$test['laptopStore'];

			echo $phoneStore;
			echo $laptopStore;

			$firstPhone = $test['firstPhone'];
			$secPhone = $test['secPhone'];
			$firstLaptop = $test['firstLaptop'];
			$secLaptop = $test['secLaptop'];

			$phoneStore->push(new StoreItem($firstPhone,20));
			$phoneStore->push(new StoreItem($secPhone,15));

			$laptopStore->push(new StoreItem($firstLaptop,3));
			$laptopStore->push(new StoreItem($secLaptop,4));

			echo "Hozzáadunk két terméket az első raktárhoz\n";
			echo $phoneStore;
			echo $laptopStore;

			$phoneStore->pop(new StoreItem($secPhone,5));

			echo "Kieszünk a második termékből 5 darabod\n";
			echo $phoneStore;
			echo $laptopStore;

			echo "---------------------------------------------------------------------------------\n\n";

		}
		public static function simulateSec()
		{
			$config = new Config('data');

			$test = $config->load();
			echo "\n---------------------------------------------------------------------------------\n";
			echo "Létrehoz két raktárat, berak x terméket de nincs elég hely \n";
			echo "---------------------------------------------------------------------------------\n";
			echo "Két üres raktár létregozása:\n";

			$phoneStore =$test['phoneStore'];
			$laptopStore =$test['laptopStore'];
			$firstLaptop = $test['firstLaptop'];
			$secLaptop = $test['secLaptop'];
			$firstPhone = $test['firstPhone'];
			$secPhone = $test['secPhone'];

			$phoneStore->push(new StoreItem($firstPhone,20));
			$phoneStore->push(new StoreItem($secPhone,15));
			$laptopStore->push(new StoreItem($firstLaptop,3));
			$laptopStore->push(new StoreItem($secLaptop,4));

			echo $phoneStore;
			echo $laptopStore;


			echo "Hozzáadunk egy terméket, ami nem fér be (+16)\n";
			echo $phoneStore;
			echo $laptopStore;
			try {
				$phoneStore->push(new StoreItem($secPhone, 16));
			}
			catch(\Exception $e)
			{
				echo $e->getMessage()."\n";
			}



			echo "---------------------------------------------------------------------------------\n\n";

		}
		public static function simulateThird()
		{
			$config = new Config('data');

			$test = $config->load();
			echo "\n---------------------------------------------------------------------------------\n";
			echo "Létrehoz két raktárat, felvesz x terméket, majd kikér többet mint amennyi van. \n";
			echo "---------------------------------------------------------------------------------\n";
			echo "Két üres raktár létregozása:\n";

			$phoneStore =$test['phoneStore'];
			$laptopStore =$test['laptopStore'];
			$firstLaptop = $test['firstLaptop'];
			$secLaptop = $test['secLaptop'];
			$firstPhone = $test['firstPhone'];
			$secPhone = $test['secPhone'];

			$phoneStore->push(new StoreItem($firstPhone,20));
			$phoneStore->push(new StoreItem($secPhone,15));
			$laptopStore->push(new StoreItem($firstLaptop,3));
			$laptopStore->push(new StoreItem($secLaptop,4));

			echo $phoneStore;
			echo $laptopStore;


			echo "Hozzáadunk egy terméket, kikérünk (21) Nokia terméket\n";
			echo $phoneStore;
			echo $laptopStore;
			try {
				$phoneStore->pop(new StoreItem($firstPhone, 21));
			}
			catch(\Exception $e)
			{
				echo $e->getMessage()."\n";
			}




			echo "---------------------------------------------------------------------------------\n\n";

		}
	}