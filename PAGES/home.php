<div id="formaazzurra" class="sologrande"></div>
<div id="formaazzurrasmall" class="solopiccolo"></div>
<img id="pictop" src="IMAGES/HOME/pictop.jpg"/>

<div id="registrazione">
    <span style="font-size:35px;">
        Crea la tua scheda,<br />inizia il tuo allenamento.
    </span>
    
    <hr style="width:100%; height:4px; background-color:white;"/>
    
    <form action="index.php<?php if(isset($_GET['token'])) echo '?token='.$_GET['token'];?>" method="post" name="chgText" id="chgText">
        <?php echo $testo['home']['homeName'];?>:<br />
        <input class="formreg" name="name" type="text" value="<?php if(isset($_SESSION['name']))echo $_SESSION['name'];?>"/><br /><br />
        
        <?php echo $testo['home']['homeMail'];?>:<br />
        <input value="<?php if(isset($_SESSION['email']))echo $_SESSION['email'];?>" class="formreg" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email" name="email" required/><br/><br/>
        
        <?php echo $testo['home']['homeTryT'];?>:<br />
        <select class="formreg" name="typeTraining" id="typeTraining" size="1">
            <option></option>
            <?php
            for ($j=0;$j<$liste['typeTraining']['num'];$j++){
			  echo '<option value="'.$liste['typeTraining']['idc'][$j].'"';
              if ($_SESSION['typeTraining']==$liste['typeTraining']['idc'][$j])echo' selected';
              echo '>'.$liste['typeTraining']['name'][$j].'</option>
            ';
            }
            ?>
	   </select><br/><br />
        
        <?php echo $testo['home']['homeAge'];?>:<br />
        <?php
        for($i=0;$i<$kar['rangeAgeNum'];$i++){
            echo '<input ';
            if(isset($_SESSION['age']))if($_SESSION['age']==$i)echo ' checked ';
            echo 'name="age" value="'.$i.'" type="radio"/>'.$kar['rangeAge'][$i].'&nbsp;&nbsp;';
        }
        ?>
        <br /><br />
        <button class="formreg" style="font-size:17px;" name="ACT" type="submit" value="<?php echo $testo['buttons']['register']; ?>">
            <?php echo $testo['buttons']['freeTrial']; ?>
        </button>
        <br /><br />
        <?php
        if (!isset($_SESSION['id'])) 
            echo '
        <button class="formreg" style="font-size:17px;" name="ACT" type="submit" value="'.$testo['buttons']['register'].'">
            '.$testo['buttons']['register'].'
        </button>
            ';
        ?>
    </form>
</div>

<div id="maincontent">
    <div id="titolo">
    	<img src="IMAGES/COMMON/title.png" height="100%"/>
    </div>
    
<div id="stepscontainer">
    	<div id="step1" class="step">
        	<img src="IMAGES/HOME/step1.jpg" width="100%" height="100%"/>
            <div id="step1descr" class="stepdescr">
            	Programma i tuoi allenamenti
            </div>
        </div>
        <div id="step2" class="step">
        	<img src="IMAGES/HOME/step2.jpg" width="100%" height="100%"/>
            <div id="step2descr" class="stepdescr">
            	Porta i video sempre con te
            </div>
        </div>
        <div id="step3" class="step">
        	<img src="IMAGES/HOME/step3.png" width="100%" height="100%"/>
            <div id="step3descr" class="stepdescr">
            	Scopri consigli e ricette per il tuo allenamento
            </div>
        </div>
</div>
<div id="videoesempio">
<br>	QUI ALCUNI VIDEO DI ESEMPIO.<br><br><br>
Da decidere colori e sfondi, da riempire con immagini<br><br><br> Responsive Collaudato!
</div>

</div>