<?php 
/*include "F:/xampp/htdocs/book_company/Booktype/book.php" ;*/
require_once "/var/www/html/book_company/Person/person.php";
/*namespace \book_company\People;
use xampp\htdocs\book_company\Person\Person ;*/
class Illustrator extends Person
{
	private $books_count;
	private $illustration_tools = array();
	//private $book_details;
	private $credentials;
	function __construct($books_count,$illustration_tools)
	{
		$this->books_count              = $books_count;
		$this->illustration_tools		= $illustration_tools;
		/*$this->book_details   = new Book("Harry Potter","1000","2001","250");
		$this->book_details   = $this->book_details->getBookDetails();*/
		$this->credentials = new Person("Parth","Shah","parth.shah@gmail.com","9384651235","London","25-10-1975");
		$this->credentials = $this->credentials->getPerson(); 
	}
	function getIllustratorDetails(){
		return ["books count" => $this->books_count,
				"Illustration tools" => $this->illustration_tools,
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