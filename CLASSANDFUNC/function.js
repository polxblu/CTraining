<!--
function ckLogIn(){
	if ((document.forms['Login'].elements['user'].value != '')&&(document.forms['Login'].elements['pass'].value != '')){
		document.getElementById('ACT').disabled = false;
	}else{
		document.getElementById('ACT').disabled = true;
	}
}

function chgImgF(){
	if ( document.forms['chgImg'].elements['pics'].value != '' ){
		document.getElementById('ACT').disabled = false;
	}else{
		document.getElementById('ACT').disabled = true;
	}
}

function chgSelTxt(nForm,nMaster,nSlave,num,diff){
	cDiv=document.forms[nForm+num].elements[nMaster+num].value;
	cTar=document.forms[nForm+num].elements[nSlave+num];

	cTar.options.length=0;
	cTar.options[0]=new Option('','');
	if (cDiv!='') {
       for(var i = 0; i < contenuto[cDiv+'Num'];i++){
          cTar.options[i+1]=new Option(contenuto[diff+cDiv+i],contenuto[cDiv+i]);
       }
    }
}

//-->

