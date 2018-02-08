<?php 

require_once "/var/www/html/book_company/Booktype/book.php";

class AudioBook extends Book
{
	private $file_size;
	private $default_reading_speed;
	private $file_format;
	private $book_details;
	function __construct($file_size,$default_reading_speed,$file_format)
	{
		$this->file_size                = $file_size;
		$this->default_reading_speed    = $default_reading_speed;
		$this->file_format              = $file_format;
		$this->book_details             = new Book("Harry Potter","1000","2001","250");
		$this->book_details             = $this->book_details->getBookDetails();
	}
	function getAudioBook()
	{
		return ["File size" => $this->file_size,
				"Default reading speed" => $this->default_reading_speed,
				"File format" => $this->file_format,
				"Book details" => $this->book_details];
	}
}
$abook = new AudioBook("4 MB","60 wpm","mp3");
$audio_book = $abook->getAudioBook();
echo "<pre>";
print_r($audio_book);
echo "</pre>";
?>
	



