<?php 

require_once "/var/www/html/book_company/Booktype/book.php";

class Hardcover extends Book
{
	private $weight;
	private $thickness;
	private $durabilty;
	private $book_details;
	function __construct($weight,$thickness,$durabilty)
	{
		$this->weight         = $weight;
		$this->thickness      = $thickness;
		$this->durabilty      = $durabilty;
		$this->book_details   = new Book("Harry Potter","1000","2001","250");
		$this->book_details   = $this->book_details->getBookDetails();
	}
	function getHardcoverBook()
	{
		return ["weight" => $this->weight,
				"thickness" => $this->thickness,
				"durabilty" => $this->durabilty,
				"Book details" => $this->book_details];
	}
}
$hcbook = new Hardcover("200 gm","2 cm","5 yrs");
$hardcover_book = $hcbook->getHardcoverBook();
echo "<pre>";
print_r($hardcover_book);
echo "</pre>";
?>
	



