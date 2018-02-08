<?php 
require_once "/var/www/html/book_company/Booktype/book.php";
/*use xampp\htdocs\book_company\Booktype\Book;*/
class DigitalBook extends Book
{
	private $file_size;
	private $font_size;
	private $file_format;
	private $book_details;
	function __construct($file_size,$font_size,$file_format)
	{
		$this->file_size    = $file_size;
		$this->font_size    = $font_size;
		$this->file_format  = $file_format;
		$this->book_details = new Book("Harry Potter","1000","2001","250");
		$this->book_details = $this->book_details->getBookDetails();
	}
	function getDigiBook()
	{
		return ["File size" => $this->file_size,
				"Font size" => $this->font_size,
				"File format" => $this->file_format,
				"Book details" => $this->book_details];
	}
}
$dbook = new DigitalBook("2 MB","12","pdf");
$digi_book = $dbook->getDigiBook();
echo "<pre>";
print_r($digi_book);
echo "</pre>";
?>