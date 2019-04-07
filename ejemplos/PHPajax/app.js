$(document).ready(function() {

	console.log('esta que funciona');
	$('#task-result').hide();

	$('#search').keyup(function (e){
		if ($('#search').val()){
		     let search = $('#search').val();
       //console.log(search);
		       $.ajax({
			     url: 'task-search.php',
			     type: 'POST',
			     data: {search},
			     success: function (response) {
			  //metodo parse lo que hace es que objeto json convertido en un string reconvertidor en un json
		   	         let tasks = JSON.parse(response);
			         let template = '';

			         tasks.forEach(task => {
			        	template += `
			        	<li>${task.name}
			  	     </li>`
			         });
			         $('#task-result').show();
                     $('#container').html(template);
	          //console.log(tasks);
		     }
	      });
	    }		
	});
  });


