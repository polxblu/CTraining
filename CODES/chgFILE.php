<?php
if(empty($_POST['difficultN'])||empty($_POST['name'])||empty($_POST['categoryN'])||empty($_POST['muscleGroupN'])){
    $var['er']=$testo['errors']['emptyField'];    
}else{    
    if(isset($_POST['freeN'])) $var['yn']='yes'; else $var['yn']='no';
    $target = $kar['vidhost'] . basename( $_FILES["video"]["name"]);
        $OK=true;

            // Check if file already exists
            if (file_exists($target)) {
                $var['er']= "File Gia Esistente - RIPROVA";
                $OK = false;
                unlink($_FILES["video"]["tmp_name"]);
            }

            // Only GIF files allowed
            if () {
            }else{
                $var['er'].= "<br/>File tipo non previsto - RIPROVA";
                $OK = false;
                unlink($_FILES["video"]["tmp_name"]);
            }

            // Check if $uploadOk is set to 0 by an error /*/
            if ($OK) {
                if (move_uploaded_file($_FILES["video"]["tmp_name"], $target)) {
                    $var['er'] = "SUCCESSO: Il file ". basename( $_FILES["video"]["name"]). " &egrave; stato caricato.";
                    $DataB->setColDt(array('nome'));
                    $DataB->setValDt(array($_FILES["video"]["name"]));
                    $DataB->insert('video');
                    for ($i=0;$i<$dati['ip']['num'];$i++){
                        if($dati['ip'][$dati['ip']['abrLoop'][$i]][1]){
                            // stabilisce la connessione
                            $conn = ftp_connect($dati['ip'][$dati['ip']['abrLoop'][$i]][0]);

                            // si collega con username and password
                            $login_result = ftp_login($conn, 'pi', 'asd');                        
                        
                            ftp_chdir($conn, $kar['vidremote']);
                            if ( ftp_put($conn,basename( $_FILES["video"]["name"]), $target, FTP_BINARY ) ) {
                                // chiude la connessione
                                ftp_close($conn); 
                                include('Net/SSH2.php');

                                $ssh = new Net_SSH2($dati['ip'][$dati['ip']['abrLoop'][$i]][0]);
                                if (!$ssh->login('root', 'asd')) {
                                    exit('Login Failed');
                                }else echo $ssh->exec('reboot');
                                unset($ssh);                      
                            } else {
                                $var['er'] .= "<br/>Si &egrave; verificato un problema durante il trasferimento su".$dati['ip']['namLoop'][$i];
                                // chiude la connessione
                                ftp_close($conn); 
                            }
                        }
                    }


                } else  $var['er'].= "<br/>Errore in Upload - RIPROVA";
            }
    if($_POST['typeN']==$liste['type']['idc'][0]){
        $dataDB->setColWh(array('who'));
        $dataDB->setValWh(array($_POST['whoN']));
        $res=$dataDB->select('category');
    }else $res['id']='';
    
    if(empty($res['id'])){
        $var['newID']='cate'.time();
        $dataDB->setColDt(array('id','type','who'));
        $dataDB->setValDt(array($var['newID'],$_POST['typeN'],$_POST['whoN']));
        $dataDB->insert('category');

        for ($i=0;$i<$testo['str']['num'];$i++){
            $txtDB->setColDt(array('languages','pages','sections','rifTxt','txt'));
            $txtDB->setValDt(array($testo['str']['id'][$i],'category','commonTxt',$var['newID'],txaTOdb($_POST['name'],true)));
            $txtDB->insert('txtWeb');
        }
        Redieasy('index.php?token='.$_GET['token']);
    }else $var['er']=$testo['errors']['catAlreadySel'];

}
?>
