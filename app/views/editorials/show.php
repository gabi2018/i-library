<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>

<table>
	<tr>
		<th>Nombre</th>
        <th>direccion</th>
	
	<tr>
		
	</tr>
	
</table>
<div>
<label for="cata-book">buscar</label>
       <input type="text" name="author" class="form-control" id="sug_input" required data-url="<?php echo URL_ROUTE?>/editorials/search" placeholder=" nombre editorial">



</div>
<div id="result">
</div>
<script type="text/javascript">
  //suggetion for finding product names
  

  

      function search(param,url) {
				
				
				// process the form
				var parame ={
					'editorial':param
				};
				

				$.ajax({
					type        : 'POST',
					data        : parame,
					url         : url,
					
					
					success:function(data){
						$('#result').html(data);
					}
				})
				

	};
$(document).on('keyup','#sug_input',function(){

	var input=$(this).val();
	
		if(input !=""){
			url = $(this).attr('data-url');

			
			search(input,url);
		}
		else{
			
		}
});					
				
</script>