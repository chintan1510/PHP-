<?php 

require_once "F:/xampp/htdocs/book_company/People/author.php";
require_once "F:/xampp/htdocs/book_company/People/editor.php";
/*include "F:/xampp/htdocs/book_company/People/illustrator.php";
include "F:/xampp/htdocs/book_company/People/publisher.php";*/

/*namespace \book_company\Booktype;

use xampp\htdocs\book_company\People\Author;
use xampp\htdocs\book_company\People\Editor;*/

class Book
{
	private $title;
	private $cost;
	private $publ_year;
	private $num_pages;
	private $author;
	private $editor;
	private $illustrator;
	private $publisher;

	function __construct($title,$cost,$publ_year,$num_pages)
	{
		$this->title        = $title;
		$this->cost         = $cost;
		$this->publ_year    = $publ_year;
		$this->num_pages    = $num_pages;
		$this->author       = new Author("10","2");
		$this->author       = $this->author->getAuthorDetails();

		$this->editor       = new Editor("20","5",["3 mistakes of my life","Sherlock Holmes"]);
		$this->editor       = $this->editor->getEditorDetails();
		/*$this->illustrator  = new Illustrator("10","2");
		$this->illustrator  = $this->illustrator->getIllustratorDetails();
		$this->publisher    = new Publisher("10","2");
		$this->publisher    = $this->publisher->getPublisherDetails();*/
	}

	function getBookDetails()
	{
		return ["Title" => $this->title,
				"Cost" => $this->cost,
				"Publication year" => $this->publ_year,
				"Num of pages" => $this->num_pages,
				"Author" => $this->author,
				"Editor" => $this->editor];/*,$this->illustrator,$this->publisher*/
	}
}

/*$book1 = new Book("Harry Potter","1000","2001","250");
echo $book_details = $book1.getBookDetails();*/

?>
