<?php 

require_once "/var/www/html/book_company/Booktype/book.php";

class Paperback extends Book
{
	private $weight;
	private $thickness;
	private $durabilty;
	private $type;
	private $book_details;
	function __construct($weight,$thickness,$durabilty,$type)
	{
		$this->weight         = $weight;
		$this->thickness      = $thickness;
		$this->durabilty      = $durabilty;
		$this->type           = $type;
		$this->book_details   = new Book("Harry Potter","1000","2001","250");
		$this->book_details   = $this->book_details->getBookDetails();
	}
	function getPaperbackBook()
	{
		return ["weight"       => $this->weight,
				"thickness"    => $this->thickness,
				"durabilty"    => $this->durabilty,
				"type"		   => $this->type,	
				"Book details" => $this->book_details];
	}
}
$pbbook = new Paperback("300 gm","1 cm","3 yrs","Mass market");
$paperback_book = $pbbook->getPaperbackBook();
echo "<pre>";
print_r($paperback_book);
echo "</pre>";
?>
	



