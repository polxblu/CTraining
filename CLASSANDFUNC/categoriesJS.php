<script language="JavaScript" type="text/javascript">
<!--
var contenuto= new Array();
<?php
echo "
contenuto['sectionNumber']=".$definitions['pagesTxt']['num']."+1;
contenuto['commonTxtNum']=".$definitions['commonTxt']['num'].";
";
for ($i=0;$i<$definitions['commonTxt']['num'];$i++){
    echo "contenuto['commonTxt".$i."']='".$definitions['commonTxt']['idc'][$i]."';
";
}
for ($i=0;$i<$definitions['pagesTxt']['num'];$i++){
    echo "contenuto['".$definitions['pagesTxt']['idc'][$i]."Num']=".$definitions['menu'][$definitions['pagesTxt']['idc'][$i]]['num'].";
";
    for ($j=0;$j<$definitions['menu'][$definitions['pagesTxt']['idc'][$i]]['num'];$j++){
       echo "contenuto['".$definitions['pagesTxt']['idc'][$i].$j."']='".$definitions['menu'][$definitions['pagesTxt']['idc'][$i]]['idc'][$j]."';
";
    }

}
?>

function chgSelTxt(nS){
	cDiv=document.forms['selSections'+nS].elements['sections'+nS].value;
	cTar=document.forms['selSections'+nS].elements['pages'+nS];

	cTar.options.length=0;
	cTar.options[0]=new Option('','');
	if (cDiv!='') {
       for(var i = 0; i < contenuto[cDiv+'Num'];i++){
          cTar.options[i+1]=new Option(contenuto[cDiv+i],contenuto[cDiv+i]);
       }
    }
}

//-->
</script>

