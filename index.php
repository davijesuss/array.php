<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
   // $lista_coisas = [ ];
   
   // $lista_coisas['frutas'] = array(1 => 'banana', 2 =>'maçã', 3 =>'morango', 4 =>'uva');
    //$lista_coisas['pessoas'] = [1 =>'joão', 2 =>'josé ',3 => 'maria'];
   // echo '<pre>';
    //print$lista_coisas);
    //echo '</pre>';

//echo '<hr>';
//echo $lista_coisas['frutas'][3];
//echo '<br />';
//echo $lista_coisas['pessoas'][3];

 //in_array() mostar verdadeiro ou falso, tem ou não
 //array_search() mostra o inidce, o valor do array 

 $lista_frutas = ['banana', 'Maçã', 'Morango', 'uva'];

 /*echo '<pre>';
 print_r($lista_frutas);
 echo '</pre>'; 
 */

/*echo array_search('uva', $lista_frutas);*/


/*$existe = in_array('Morango', $lista_frutas);
// true => texto = 1
// false => texto = vazio

/*
if($existe){ // variaveis que contem valores boolano não precisam ser testadas 
    echo 'Sim, o valor pesquisado existe';   
}else {
    echo'Não, o valor não existe';
}
*/

$lista_coisas = [
    'frutas' => $lista_frutas,
    'pessoas' => ['joão', 'maria']
];
echo '<pre>';
 print_r($lista_coisas);
 echo '</pre>';

 echo in_array('uva', $lista_coisas ['frutas'])

?>
    
</body>
</html>
