<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
	    		$('#Nota').click(function(){
	       		$("#contenido").load("al_notas.html");
	    									 });

	    		$('#Curso').click(function(){
	       		$("#contenido"). load("al_curso.html");
	    									 });

	    		$('#Pago').click(function(){
	       		$("#contenido").load("al_Pago.html");
	    									 });
										});
		</script>