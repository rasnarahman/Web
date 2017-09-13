<?php
	class MailingList{
		private $customerName;
		private $phoneNumber;
		private $emailAddress;
		private $referrer;
		
		function __construct ($customerName, $phoneNumber, $emailAddress ,$referrer){
			$this->setcustomerName($customerName);
			$this->setphoneNumber($phoneNumber);
			$this->setemailAddress($emailAddress);
			$this->setreferrer($referrer);
		}
		
		public function getcustomerName(){
			return $this->customerName;
		}
		
		public function setcustomerName($customerName){
			$this->customerName = $customerName;
		}
		
		public function getphoneNumber(){
			return $this->phoneNumber;
		}
		
		public function setphoneNumber($phoneNumber){
			$this->phoneNumber = $phoneNumber;
		}
		
		public function getemailAddress(){
			return $this->emailAddress;
		}
		
		public function setemailAddress($emailAddress){
			$this->emailAddress = $emailAddress;
		}
		
		public function getreferrer(){
			return $this->referrer;
		}
		
		public function setreferrer($referrer){
			$this->referrer = $referrer;
		}
		
	}
?>