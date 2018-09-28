$(document).ready(function() {

	$('#submit').on('click', function(e){
		e.preventDefault();
		
		var x = $('#inputNumber').val();

		var param = {
  					x: x
  				};

		$.post('php_functions/isNumberFibonacci.php', param, function(data, status){
			if(data === '1'){
				$("span#result").text("True");
			}else{
				$("span#result").text("False");
			}
			
      	}).fail(function(){
        	alert('System Error!!!');
      	});


	});

});