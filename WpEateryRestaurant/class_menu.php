<?php
	class menuItem
	{
		private $itemName;
		private $description;
		private $price;
		

		public function __construct($iName, $iDesc, $iPrice) { 
			$this->itemName = $iName;
			$this->description  = $iDesc;
			$this->price = $iPrice;
		
		}

		public function getItemName() {
			return $this->itemName;
		}
		public function getDescription() {
			return $this->description;
		}
		public function getPrice() {
			return $this->price;
		}

		
		public function setitemName($i){
			$this->itemName = $i;
		}

		public function setdescription($i){
			$this->description = $i;
		}
		public function setPrice($i){
			$this->price = $i;
		}

	}
?>