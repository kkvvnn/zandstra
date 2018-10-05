<?php

Header("Content-Type:text/html; charset=UTF-8");

class ShopProduct {
	public $title 		  = "Стандартный товар";
	public $producerFirstName = "Имя автора";
	public $producerMainName  = "Фамилия автора";
	public $price 		  = 0;
	
	public function __construct( $title, $firstName, $mainName, 
				     $price ) 
	{
		$this->title             = $title;
		$this->producerMainName  = $mainName;
		$this->producerFirstName = $firstName;
		$this->price             = $price;
	}


	public function getSummaryLine()
	{
		$base  = "{$this->title} ( {$this->producerMainName}, ";
		$base .= "{$this->producerFirstName} )";

		return $base;
	}
	public function getProducer() 
	{
		return "{$this->producerFirstName} "
			."{$this->producerMainName}";
	}
}


class CDproduct extends ShopProduct {

	public $playLength;

	public function __construct($title, $firstName, $mainName,
					$price, $playLength) 
	{
		parent::__construct($title, $firstName, $mainName, $price);
		$this->playLength = $playLength;
	}
	
	public function getPlayLength()
	{
		return $this->playLength;
	}
	
	public function getSummaryLine()
	{
		$base  = parent::getSummaryLine();
		$base .= ": Время звучания - {$this->playLength}";
		
		return $base;
	}
}


class BookProduct extends ShopProduct {

	public $numPages;

	public function __construct($title, $firstName, $mainName,
					$price, $numPages) 
	{
		parent::__construct($title, $firstName, $mainName, $price);
		$this->numPages = $numPages;
	}
	
	public function getNumberOfPages()
	{
		return $this->numPages;
	}	
	
	public function getSummaryLine()
	{
		$base  = parent::getSummaryLine();
		$base .= ": {$this->numPages} стр.";
		return $base;
	}
}
