<?php 

/*include "F:/xampp/htdocs/book_company/Booktype/book.php" ;*/
require_once "F:/xampp/htdocs/book_company/Person/person.php";

/*namespace \book_company\People;
use xampp\htdocs\book_company\Person\Person ;*/


class Editor extends Person
{

	private $books_count;
	private $num_publishers;
	private $books_edited = array();
	//private $book_details;
	private $credentials;


	function __construct($books_count,$num_publishers,$books_edited)
	{
		$this->books_count    = $books_count;
		$this->num_publishers   = $num_publishers;
		$this->books_edited		= $books_edited;
		/*$this->book_details   = new Book("Harry Potter","1000","2001","250");
		$this->book_details   = $this->book_details->getBookDetails();*/
		$this->credentials = new Person("John","Doe","john.doe@gmail.com","9892222685","Ney York","15-10-1975");
		$this->credentials = $this->credentials->getPerson(); 
	}

	function getEditorDetails(){
		return ["books count" => $this->books_count,
				"Number of publishers" => $this->num_publishers,
				"Books edited" => $this->books_edited, 
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
