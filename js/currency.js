$(function(){

	// var base, convert_into;

	// $("#base").blur(function(){
	// 	base = $(this).val();
	// });

	// $("#convert_into").blur(function(){
	// 	convert_into = $(this).val();
	// });


	$("#interchange").click(function(){

		var base = $("#base").val();
		var convert_into = $("#convert_into").val();

		console.log(convert_into);
		console.log(base);
		$("#base").val(convert_into);
		$("#convert_into").val(base);

		
		// var temp = base;
		// base = convert_into;
		// convert_into = temp;
		// $("#base").html(convert_into);
		// console.log(base);
		// console.log(convert_into);
	});
	$("#amount").keyup(function(e){
		e.preventDefault();
		var base = $("#base").val();
		var amount = $("#amount").val();
		var convert_into = $("#convert_into").val();

		// $("#display_result").load("https://api.fixer.io/latest?base="+base,function(data){
		// 	console.log(data);
		// });
		$.ajax({
			url : "https://api.fixer.io/latest?base="+base,
			dataType : "json",
			type : 'GET',
			success : function(data){
				var converted_value = amount * data.rates[convert_into];
				$("#display_result").html(
					'<table class="table"><thead><td>Base</td>'+
					'<td>Amount</td><td>Convert into</td><td>Converted value</td></thead>'+
					'<tbody><tr><td>'+base+'</td><td>'+amount+'</td><td>'+[convert_into]+
					'</td><td>'+converted_value+
					'</td></tr></tbody></table>'
				);
			}
		});

	});
});