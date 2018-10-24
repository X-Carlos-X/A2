<html>
    <body>
<form action="" method="post" id="formulario">
	
    
	<div class="field-group">
		<div><label for="usuario">Usuario</label></div>
		<div><input name="Usuario" type="text" 
               value="<?php if(isset($_COOKIE["Usuario"])) {
                   echo $_COOKIE["Usuario"]; } ?>"
                   class="input-field">
                </div>
                
	<div class="field-group">
		<div><label for="password">Contrasenya</label></div>
		<div><input name="Contrasenya" type="password"
              value="<?php if(isset($_COOKIE["Contrasenya"])) { 
                  echo $_COOKIE["Contrasenya"]; } ?>"
                  class="input-field"> 
	</div>
                
	<div class="field-group">
		<div><input type="checkbox" name="recordar" id="recordar"
                     <?php if(isset($_COOKIE["Usuario"])) { ?> checked <?php } ?> />
		<label for="recuerdame">Recordar</label>
                <div><input type="checkbox" name="olvidar" id="olvidar"
                     <?php if(isset($_COOKIE["olvidar"])) { ?> checked <?php } ?> />
		<label for="olvidame">Olvidar Cookie</label>
	</div>
	<div class="field-group">
		<div><input type="submit" name="usuario" value="Acceder" class="form-submit-button"></span></div>
	</div>
           <div>Usuario valido: Carlos | Contraseña Valida: 1234</div>
</form>
        <?php
        $json = file_get_contents("validar.json");
        $data = json_decode($json);
        if(!empty($_POST["recordar"])) {
            setcookie ("Usuario",$_POST["Usuario"],time()+1800);
            setcookie ("Contrasenya",$_POST["Contrasenya"],time()+1800);
            header ('Location: redirect/redirect.php');
	} 
        else {
              //  header ('Location: redirect/redirect.php');
                if(isset($_COOKIE["Usuario"])) {
                    setcookie ("Usuario","");
                }
                if(isset($_COOKIE["Contrasenya"])) {
                setcookie ("Contrasenya","");
                }
                
            }
         
            if (!empty($_POST["olvidar"])) {
            }
                else {
                   unset($_COOKIE['Usuario']);
                   unset($_COOKIE['Contrasenya']); 
                }
       // Seguir por hacer usuario que muestre su data y hora sol osi le da a recordar
                //Si no le da recordar, no mostrará nada.
                //Acaba rcon el JSON
            
        ?>
    </body>
</html>