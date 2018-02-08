<?php 
/*include "F:/xampp/htdocs/book_company/Booktype/book.php" ;*/
require_once "/var/www/html/book_company/Person/person.php";
/*namespace \book_company\People;
use xampp\htdocs\book_company\Person\Person ;*/
class Publisher extends Person
{
	private $books_count;
	private $publ_house;
	//private $book_details;
	private $credentials;
	function __construct($books_count,$publ_house)
	{
		$this->books_count              = $books_count;
		$this->publ_house				= $publ_house;
		/*$this->book_details   = new Book("Harry Potter","1000","2001","250");
		$this->book_details   = $this->book_details->getBookDetails();*/
		$this->credentials = new Person("Ankush","Deora","ankush.deora@gmail.com","9384654565","Germany","12-12-1975");
		$this->credentials = $this->credentials->getPerson(); 
	}
	function getPublisherDetails(){
		return ["books count" => $this->books_count,
				"Publication house" => $this->publ_house,
				/*$this->book_details,*/
				"Credentials" => $this->credentials];
	}
	public function writeBook(){
	}
	public function referResources(){
	}
	public function createIndex(){
	}
}
/*$classname = 'Person';
$classname::testFn();
	exit;*/
//Author::dir();
/*$author1 = new Author("10","2");
$author_details = $author1->getAuthorDetails();*/
/*echo "<pre>";
print_r($author_details);
echo "</pre>";*/
 ?>