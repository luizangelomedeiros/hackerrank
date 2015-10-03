<?php
$_fp = fopen ("php://stdin","r");
$t = fgets($_fp);
$t2 = $t - 1;
$t1 = 0;

$diagonal2 = $diagonal1 = 0;
for($i=0;$i<$t;$i++){
   $linha = fgets($_fp);
   $pos = split(' ', $linha);
   $conta = count($pos);
    
        for($j=0;$j<$conta;$j++){
                          
            if($j==$t1){
                $diagonal1 = $diagonal1 + $pos[$j];   
            } 
                               
            if($j==$t2){
                $diagonal2 = $diagonal2 + $pos[$j];    
                $t2--;                
            }
            
        }
        $t1++; 

}
$diferenca = abs($diagonal1 - $diagonal2);
print($diferenca);

fclose($_fp);

?>
