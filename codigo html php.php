
 ================================LIEN tr table ===================

<tr onclick="document.location='employee_detail.php'">

 ================================Print specifical space ===================
    <script language="javascript">
        function printdiv(printpage) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>



    <input name="b_print" type="button" class="ipt" onClick="printdiv('div_print');" value=" Print ">

    <div id="div_print">

        <h1 style="Color:Red">The Div content which you want to print</h1>

    </div>







 ================================REPEAT PASSWORD ===================

<form class="pure-form">
    <fieldset>
        <legend>Confirm password with HTML5</legend>

        <input type="password" placeholder="Password" id="password" required>
        <input type="password" placeholder="Confirm Password" id="confirm_password" required>

        <button type="submit" class="pure-button pure-button-primary">Confirm</button>
    </fieldset>
</form>



<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>




      ================================PLACEHOLDER DATE ===================
<input placeholder="Date of Birth" class="input_text" type="text" onfocus="(this.type='date')" id="date">




      ================================Affiche time hace 1 mn ===================
       <?php

                                             $todaydate = date("Y-m-d H:i:s");

                                                $ago = strtotime($todaydate) - strtotime($print_message_contact_unread_header->date_message_contact);
                                                if ($ago >= 86400) {
                                                $diff = floor($ago/86400).' days ago';
                                                } elseif ($ago >= 3600) {
                                                $diff = floor($ago/3600).' hours ago';
                                                } elseif ($ago >= 60) {
                                                $diff = floor($ago/60).' minutes ago';
                                                } else {
                                                $diff = $ago.' seconds ago';
                                                }

                                            echo $diff;
                                            ?>







-------------------------------------------------Refrescar una pagina-------------------------------------------------


<input type="submit" value="refrescar" onclick="javascript:window.location.reload();"/>

_______________abrir una pagina en nueva ventana____________________________________________

<a href="documento.html" target="_blank">Enlace</a>



____________________________________abrir una pagina en nueva ventana con tamaño especifico_______________________________________

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
function popitup(url)
{
	newwindow=window.open(url,'name','height=500,width=900'); 
	if (window.focus) {newwindow.focus()}
	return false;
}
</SCRIPT>

<a href="pagina2.html" onClick="return popitup('pagina2.html')">
ir a pagina2
</a> 

__________________________________________________________Botton para Cerrar ventana________________



<input name="button" type="button" onclick="window.close();" value="Cerrar esta ventana" /> 




_____________________________________________________________icon HTML_____________________________________________________




       &#9997;  ----editer
       &#10006;  ----eliminer
       &#10149;   -----enter
________________________________________________________subir imagen__________________________________________________________


     eso se pone en el form---- id="form1" enctype="multipart/form-data"
    eso se mone en el input----------id="file"




       $imagen=$_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],"../documentos/productos/".$imagen);

GetSQLValueString($imagen, "text"),






pou change le nom de l'image ajoute :

$imagen='ou mete nom ou beswen an la'.$_FILES['imagen']['name'];
move_uploaded_file($_FILES['imagen']['tmp_name'],"../documentos/productos/".$imagen);
_________________________________________________select opcional_________________________________________________________________



<select id="" onClick="abrirventana();" name="">
  <option selected disabled>Seleccionar el nombre de su empresa</option>
<option >European Association for Osseointegration</option>
<option >Conoce las enfermedades de las encías</option>

</select>





----------------------------------------------mensage de confirmacion---------------------------------------
<script>
function asegurar()
{rc = confirm("Êtes-vous sûr que vous voulez eliminer ces données?");
	return rc;}
</script>


onclick="javascript:return asegurar();"





---------------------------------------------------para que el error no aparece en l pagina-----------------------------

<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
error_reporting(0);
?>




---------------------------------------------------Fecha y Hora actual---------------------------------------------------------------
 
<?=date('m/d/Y g:ia');?>








------------------------------virtualizar pdf----------------------------------------------------



<iframe src="evidencia.jpg" width="600" height="780" style="border: none;"></iframe>


 

 ------------------------------------imprimir valor numerico con 2 valores despues de coma----------------------------



$pourcentage=134,63473647274;
 $format_number = number_format($pourcentage, 2);


 <?php echo $format_number; ?>


 -----------------------------------Imagen en PHP---------------------------

<?php

$figura='x48-usuario';
echo '<img style="width:27" src="../Image_icon/48/'.$figura.'.png" />';

?>







 ----------------------------------Fecha---------------------------


<?= date('g:i a',strtotime($print_list_user->date_registe_user)) ?>
<?= date('F j - Y',strtotime($print_list_user->date_registe_user)) ?>
<?= date('F j - Y - g:i a',strtotime($print_list_user->date_registe_user)) ?>

$time = date("H:i:s");
 



 ---------------------------------css background image--------------------------

#example2 {
    background: url(mountain.jpg);
    background-repeat: no-repeat;
    background-size: 300px 100px;
}


 ---------------------------------email--------------------------
<a href="mailto:email@echoecho.com?subject=SweetWords">
Send Email</a>








 ---------------------------------codigo para devuelve un parte de un cadena de texto--------------------------

 $preg = substr('je suis pas', 0, -4);

 ---------------------------------patern--------------------------

            pattern="[0-9]{2,9}.[0-9]{1,9}" 




 ---------------------------------Listbox con espacion de escribir--------------------------
            <input list="browsers">

<datalist id="browsers">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>





 ---------------------------------fpdf accent--------------------------

 $this->Cell(13,6,"A".utf8_decode("Ñ")."O",1);






 ---------------------------------INPUT EN MAYUSCULAS--------------------------

<br><br>

<input type="text" value="" style="text-transform:uppercase;"  onkeyup="javascript:this.value=this.value.toUpperCase();">

<br><br>
Se puede utilizar el style o el onkeyup
<br><br>
Para minusculas, cambiar
<br>
text-transform:uppercase; por text-transform:lowercase
<br>
y
<br>
javascript:this.value=this.value.toUpperCase(); por javascript:this.value=this.value.toLowerCase();


 ---------------------------------CAMBIAR CAMPO MYSQL EN MAYUSCULA--------------------------

update tabla set campo=UPPER(campo) where 1


 ---------------------------------Lien table -------------------------


https://www.tutorialrepublic.com/snippets/gallery.php?tag=table
 

 ---------------------------------Espace table -------------------------

 <table>
  <tr>
    <td rowspan="3"> <img src="icon/printer.png" width="30"></td>
     
    <tr>
    <td colspan="3">1</td>
     
  </tr>
    <tr>
    <td>1</td>
     <td>2</td>
      <td>3</td>
  </tr>
</table>


================================TEXT BOX AUTO ACTIVE====================================

<input autofocus type="" name="">


==============================Select de una tabla  registros que no estan en otra tabla==============================

Select * from t1 where not exists (select * from t2 where t2.id = t1.id)


================================Toma imagen por default====================================

<img src="code/icon/cart.png" onerror="this.src='code/icon/capaj.png'" />


================================Compteur de row====================================

$count_slider = $connection -> query("SELECT COUNT(*) FROM t_slider ")->fetch(PDO::FETCH_NUM);





 ---------------------------------image.ico--------------------------


icon-icons.com/icon/



 ---------------------------------css background image--------------------------

#example2 {
    background: url(mountain.jpg);
    background-repeat: no-repeat;
    background-size: 300px 100px;
}


 ---------------------------------email--------------------------
<a href="mailto:email@echoecho.com?subject=SweetWords">
Send Email</a>






 ---------------------------------codigo para devuelve un parte de un cadena de texto--------------------------

 $preg = substr('je suis pas', 0, -4);

 ---------------------------------patern--------------------------

            pattern="[0-9]{2,9}.[0-9]{1,9}" 




 ---------------------------------Listbox con espacion de escribir--------------------------
            <input list="browsers">

<datalist id="browsers">
  <option value="Internet Explorer">
  <option value="Firefox">
  <option value="Chrome">
  <option value="Opera">
  <option value="Safari">
</datalist>





 ---------------------------------fpdf accent--------------------------

 $this->Cell(13,6,"A".utf8_decode("Ñ")."O",1);






 ---------------------------------INPUT EN MAYUSCULAS--------------------------

<br><br>

<input type="text" value="" style="text-transform:uppercase;"  onkeyup="javascript:this.value=this.value.toUpperCase();">

<br><br>
Se puede utilizar el style o el onkeyup
<br><br>
Para minusculas, cambiar
<br>
text-transform:uppercase; por text-transform:lowercase
<br>
y
<br>
javascript:this.value=this.value.toUpperCase(); por javascript:this.value=this.value.toLowerCase();


 ---------------------------------CAMBIAR CAMPO MYSQL EN MAYUSCULA--------------------------

update tabla set campo=UPPER(campo) where 1


 ---------------------------------Lien table -------------------------


https://www.tutorialrepublic.com/snippets/gallery.php?tag=table
 

 ---------------------------------Espace table -------------------------

 <table>
  <tr>
    <td rowspan="3"> <img src="icon/printer.png" width="30"></td>
     
    <tr>
    <td colspan="3">1</td>
     
  </tr>
    <tr>
    <td>1</td>
     <td>2</td>
      <td>3</td>
  </tr>
</table>


----------------Select de una tabla  registros que no estan en otra tabla-------------------------

Select * from t1 where not exists (select * from t2 where t2.id = t1.id)
      



----------------Alert-------------------------


      <div class="alert alert-block">
  <a class="close" data-dismiss="alert">×</a>
  <h4 class="alert-heading">Warning!</h4>
  Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
</div>

<div class="alert alert-success">
  <a class="close" data-dismiss="alert">×</a>
  <strong>Well done!</strong> You successfully read this important alert message.
</div>

<div class="alert alert-error">
  <a class="close" data-dismiss="alert">×</a>
  <strong>Oh Snap!</strong> Change a few things up and try submitting again.
</div>

<div class="alert alert-info">
  <a class="close" data-dismiss="alert">×</a>
  <strong>Heads Up!</strong> This alert needs your attention, but it's not super important.
</div>




<style type="text/css">
  body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  /* for demo only */
  margin: 8px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  font-family: inherit;
  font-weight: bold;
  color: inherit;
  text-rendering: optimizelegibility;
}
h4 {
font-size: 14px;
}
h4, h5, h6 {
line-height: 18px;
}

p {
  margin: 0 0 9px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 18px;
}

.close {
  float: right;
  font-size: 20px;
  font-weight: bold;
  line-height: 18px;
  color: #000000;
  text-shadow: 0 1px 0 #ffffff;
  opacity: 0.2;
  filter: alpha(opacity=20);
}
.close:hover {
  color: #000000;
  text-decoration: none;
  opacity: 0.4;
  filter: alpha(opacity=40);
  cursor: pointer;
}

.alert {
  padding: 8px 35px 8px 14px;
  margin-bottom: 18px;
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  background-color: #fcf8e3;
  border: 1px solid #fbeed5;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  color: #c09853;
}
.alert-heading {
  color: inherit;
}
.alert .close {
  position: relative;
  top: -2px;
  right: -21px;
  line-height: 18px;
}
.alert-success {
  background-color: #dff0d8;
  border-color: #d6e9c6;
  color: #468847;
}
.alert-danger,
.alert-error {
  background-color: #f2dede;
  border-color: #eed3d7;
  color: #b94a48;
}
.alert-info {
  background-color: #d9edf7;
  border-color: #bce8f1;
  color: #3a87ad;
}
.alert-block {
  padding-top: 14px;
  padding-bottom: 14px;
}
.alert-block > p,
.alert-block > ul {
  margin-bottom: 0;
}
.alert-block p + p {
  margin-top: 5px;
}
</style>




---------------Vérifier si ce pseudo n'est pas déja stocké dans la bdd------------------


<?php
$req = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
$req->execute(array($_POST['pseudo']));
$donnees = $req->fetch();
if (empty($donnees['pseudo']))
{
//Tu enregistre le membre
}
else
{
//Ce pseudo existe déjà
}
?>

---------------Horloge-----------------

<div id="div_horloge"></div>

<script type="text/javascript">
window.onload=function() {
  horloge('div_horloge');
};

function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    str += ':'+(date.getSeconds()<10?'0':'')+date.getSeconds();
    el.innerHTML = str;
  }
  actualiser();
  setInterval(actualiser,1000);
}
</script>


================================Refrech page cada secundos====================================
<meta http-equiv="refresh" content="1">

================================sin foto====================================
      <img  src="../picture_user/lal.png" onerror="this.src='../icon/photo.png'" />


================================Count====================================
$count_news = $connection -> query("SELECT COUNT(*) FROM t_news ")->fetch(PDO::FETCH_NUM);


================================Redirectioner nan yon lot page apres 5 secondes===================================
<meta http-equiv="refresh" content="5;url=index.php">


================================Forme money==================================
<?php

echo number_format("1000000",2)."<br>";
?>


================================Sum PDO==================================

<?php 
    $sql = "SELECT  SUM(amount_payment) AS depot from t_payment";
    $query = $connection -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0) {
        foreach($results as $result) { ?>  

        
           
           <?php echo htmlentities ($result->depot);?>
       

<?php 
            $cnt++;
        } 
    }
?>






//=======================exception si user deja enregister=============================
try
{


  $loginUsername = $_POST['fn_postulant'];
  $loginUsername2 = $_POST['ln_postulant'];
  $loginUserdate = $_POST['date_birth_postulant'];
  $loginUsergender= $_POST['gender_postulant'];
 

    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=sfst', 'root', '', $pdo_options);
     
    $reponse = $bdd->query("SELECT * FROM t_postulant WHERE fn_postulant='$loginUsername' AND ln_postulant='$loginUsername2' AND date_birth_postulant='$loginUserdate' AND gender_postulant='$loginUsergender'");
     
    if ($donnees = $reponse->fetch())
    { 

    $AA = $donnees['id_postulant']; 
         header("Location: result_postulant_duplicate.php?idPost=$AA");
    }

    else{   Good action  }

    =============================================ver password=====================

    <!-- Password field -->
Password: <input type="password" value="FakePSW" id="myInput">

<!-- An element to toggle between password visibility -->
<input type="checkbox" onclick="myFunction()">Show Password


<script type="text/javascript">
  function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

====================================Popup message aut0=========================

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        #myModal {
            width: 500px;
            top: 25%;
            left: 50%;
            margin-top: -25px;
            margin-left: -200px;
            padding: 20px;
        }
    </style>

    <div class="container">
      <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-body">
              <p>Some text in the modal.</p>
              <p>Some text in the modal.</p>
              <p>Some text in the modal.</p>
              </br>
            </div>
          </div>
        </div>
      </div>
    </div>


<script>
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>




====================================html go back to the previous page=========================

<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>

====================================Mobile and Desktop CONTENT code with inline script=========================


<cool-ad>
  <template class="ad__mobile">
    // Mobile ad HTML code with inline script
  </template>
  <template class="ad__desktop">
    // Desktop ad HTML code with inline script
  </template>
</cool-ad>

<script>
  class AdComponent extends HTMLElement {
  connectedCallback() {
    const isMobile = matchMedia('(max-width: 500px)').matches;    
    const ad = document.currentScript.closest('.ad');
    const content = this
      .querySelector(isMobile ? '.ad__mobile' : '.ad__desktop')
      .content;
    
    this.appendChild(document.importNode(content, true));
  }
}

customElements.define('cool-ad', AdComponent);
</script>



====================================MStart new project in laravel=========================


composer create-project --prefer-dist laravel/laravel project_name

php artisan make:migration create_students_table--create=students
$table->id();
$table->string('studname');
$table->string('course');
$table->string('fee');
$table->timestamps();

php artisan migrate

php artisan make:controller StudentController--resource--model=Student