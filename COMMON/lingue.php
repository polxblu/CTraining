<div id="lingue" onmouseover="document.getElementById('lingueOver').style.visibility = 'visible';" onmouseout="document.getElementById('lingueOver').style.visibility = 'hidden';">
        <?php echo'<img src="'.$kar['flagdir'].$langar['str']['current']['flag'].'" alt="';RandIndex(); echo'" />&nbsp;'.$langar['str']['current']['nome'];?>
     <div style="visibility: hidden;" id="lingueOver" onmouseover="document.getElementById('lingueOver').style.visibility = 'visible';" onmouseout="document.getElementById('lingueOver').style.visibility = 'hidden';">
<?php
        $var['rediMod']=rediMod('Xlang','');
        for ($i=0;$i<$langar['str']['num'];$i++){
            if($langar['str']['lanID'][$i]!==$var['Xlang']){
                if ($langar['str']['ready'][$i]=='yes'){
                   echo '<a href="index.php?Xlang='.$langar['str']['lanID'][$i].$var['rediMod'].'">
                            <img src="'.$kar['flagdir'].$langar['str']['flag'][$i].'" class="lingue" border="0" alt="';RandIndex();echo'" />
                            '.$langar['str']['nome'][$i].'
                         </a>
                         <br>
                   ';
                }

            }
        }
?>
   </div>
</div>

