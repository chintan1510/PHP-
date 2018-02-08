$(function(){

	$("#book_type").change(function(){

		var booktype = $(this).val();

		switch(booktype)
		{
			case "hardcover" :
					$("#display_form").load("http://local.test.in/book_company/view/hardcover.php");
					console.log("hardcover");
					break;
			case "paperback" :
					$("#display_form").load("http://local.test.in/book_company/view/paperback.php");
					console.log("paperback");
					break;
			case "digital" :
					$("#display_form").load("http://local.test.in/book_company/view/digital.php");
					console.log("digital");
					break;
			case "audio" :
					$("#display_form").load("http://local.test.in/book_company/view/audio.php");
					console.log("audio");
					break;
		}

	});
});