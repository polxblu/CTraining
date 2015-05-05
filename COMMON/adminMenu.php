<?php
for ($i=0;$i<$definitions['menu']['admin']['num'];$i++){
   $uar['pag']=$definitions['menu']['admin']['idc'][$i];
   toUrl();
   echo'<a href="index.php?token='.$var['token'].'">'.$definitions['menu']['admin']['idc'][$i].'</a>&nbsp;';
    
}
?>
