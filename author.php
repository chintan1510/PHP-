<?php 

/*include "F:/xampp/htdocs/book_company/Booktype/book.php" ;*/
include "F:/xampp/htdocs/book_company/Person/person.php";

/*namespace xampp\htdocs\book_company\People;
use xampp\htdocs\book_company\Person\Person;*/

class Author extends Person
{

	static function dir()
	{
	echo __DIR__ ;
	}
	private $books_count;
	private $publications;
	//private $book_details;
	private $credentials;


	function __construct($books_count,$publications)
	{
		$this->books_count    = $books_count;
		$this->publications   = $publications;
		/*$this->book_details   = new Book("Harry Potter","1000","2001","250");
		$this->book_details   = $this->book_details->getBookDetails();*/
		$this->credentials = new Person("Chintan","Panjwani","chintan.panjwani@gmail.com","9892222495","Kandivali","15-10-1992");
		$this->credentials = $this->credentials->getPerson(); 
	}

	function getAuthorDetails(){
		return ["books count" => $this->books_count,"publications" => $this->publications,/*$this->book_details,*/"Credentials" => $this->credentials];
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