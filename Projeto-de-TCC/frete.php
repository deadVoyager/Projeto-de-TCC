<?php

if( !function_exists( 'calculaFrete' ))
{
   function calculaFrete(
      $cod_servico, /* codigo do servico desejado */
      $cep_origem,  /* cep de origem, apenas numeros */
      $cep_destino, /* cep de destino, apenas numeros */
      $peso,        /* valor dado em Kg incluindo a embalagem. 0.1, 0.3, 1, 2 ,3 , 4 */
      $altura,      /* altura do produto em cm incluindo a embalagem */
      $largura,     /* altura do produto em cm incluindo a embalagem */
      $comprimento, /* comprimento do produto incluindo embalagem em cm */
      $valor_declarado='0' /* indicar 0 caso nao queira o valor declarado */
   ){
 
      $cod_servico = strtoupper( $cod_servico );
      if( $cod_servico == 'SEDEX10' ) $cod_servico = 40215 ; 
      if( $cod_servico == 'SEDEXACOBRAR' ) $cod_servico = 40045 ; 
      if( $cod_servico == 'SEDEX' ) $cod_servico = 40010 ; 
      if( $cod_servico == 'PAC' ) $cod_servico = 41106 ;
 
      # ###########################################
      # Código dos Principais Serviços dos Correios
      # 41106 PAC sem contrato
      # 40010 SEDEX sem contrato
      # 40045 SEDEX a Cobrar, sem contrato
      # 40215 SEDEX 10, sem contrato
      # ###########################################
 
      $correios = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdEmpresa=&sDsSenha=&sCepOrigem=".$cep_origem."&sCepDestino=".$cep_destino."&nVlPeso=".$peso."&nCdFormato=1&nVlComprimento=".$comprimento."&nVlAltura=".$altura."&nVlLargura=".$largura."&sCdMaoPropria=n&nVlValorDeclarado=".$valor_declarado."&sCdAvisoRecebimento=n&nCdServico=".$cod_servico."&nVlDiametro=0&StrRetorno=xml";
 
      $xml = simplexml_load_file($correios);
 
      $_arr_ = array();
      if($xml->cServico->Erro == '0'):
         $_arr_['codigo'] = $xml -> cServico -> Codigo ;
         $_arr_['valor'] = $xml -> cServico -> Valor ;
         $_arr_['prazo'] = $xml -> cServico -> PrazoEntrega .' Dias' ;
         // return $xml->cServico->Valor;
         return $_arr_ ; 
      else:
         return false;
      endif;
   }
}
 $cep = $_POST["cep"]; //cep de destino fornecido pelo cliente

 $cep_origem = 12223560;  //da loja ou do correio de onde foi postado
 
 $resultado = calculaFrete('40010',$cep_origem, $cep, '1', '15', '22', '32', 0 );
 
 echo "<br>
	    <h3> <input type='radio' name='frete' value='SEDEX*".$resultado["valor"]."*".$resultado["prazo"]."'> SEDEX</h3>
		<p> <b>Valor do frete</b> R$ ".$resultado["valor"]."</p>";
 echo " <p><b>Prazo de entrega: </b>".$resultado["prazo"]."</p>";
 
 echo "<hr>";

 
 $resultado = calculaFrete('41106',$cep_origem, $cep, '1', '15', '22', '32', 0 );
 
 echo " <h3><input checked type='radio' name='frete' value='PAC*".$resultado["valor"]."*".$resultado["prazo"]."'> PAC</h3>
		<p><b>Valor do frete</b> R$ ".$resultado["valor"]."</p>";
 echo " <p><b>Prazo de entrega: </b>".$resultado["prazo"]."</p>";
?>
