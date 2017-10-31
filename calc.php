<?
if ($_POST) {
     # code...

$cep=$_POST['cep'];
$data['nCdEmpresa'] = '';
 $data['sDsSenha'] = '';
 $data['sCepOrigem'] = ''.$cep.'';
 $data['sCepDestino'] = '06513030';
 //kg
 $data['nVlPeso'] = '1';
 // cm
 $data['nCdFormato'] = '1';
 $data['nVlComprimento'] = '16';
 $data['nVlAltura'] = '5';
 $data['nVlLargura'] = '15';
 $data['nVlDiametro'] = '0';
 $data['sCdMaoPropria'] = 'n';
 $data['nVlValorDeclarado'] = '35';
 $data['sCdAvisoRecebimento'] = 'n';
 $data['StrRetorno'] = 'xml';
 //$data['nCdServico'] = '40010';
 $data['nCdServico'] = '40010,40045,40215,40290,41106';
 $data = http_build_query($data);

 $url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx';

 $curl = curl_init($url . '?' . $data);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

 $result = curl_exec($curl);
 $result = simplexml_load_string($result);
 foreach($result -> cServico as $row) {
 //Os dados de cada serviço estará aqui
 if($row -> Erro == 0) {
/*     echo $row -> Codigo . '<br>';*/
     /*echo $row -> Valor . '<br>';*/
/*     echo $row -> PrazoEntrega . '<br>';
     echo $row -> ValorMaoPropria . '<br>';
     echo $row -> ValorAvisoRecebimento . '<br>';
     echo $row -> ValorValorDeclarado . '<br>';
     echo $row -> EntregaDomiciliar . '<br>';
     echo $row -> EntregaSabado;*/

     


 } else {
    /* echo $row -> MsgErro;*/
 }
 }echo "O valor do frete é: ".$row -> Valor."";
}
?>   