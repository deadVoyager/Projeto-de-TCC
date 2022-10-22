$(document).ready(function(){
	
	$("#btn_frete").click(function(){
		
		$("#resultado").html("<img src='./images/carregando.gif'>");
		var cep = $("#cep_frete").val();
		alert (cep);
		//$("#cep_endereco").val($("#cep").val());
		
		$.post("frete.php",
		{
			cep:cep
		},function(resposta){
			
			$("#resultado").html(resposta);
		});
	});
	
});