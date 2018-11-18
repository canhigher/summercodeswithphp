<?php
include 'header.html';
?>

<form class="form-horizontal"  action="/yazubi/bootstrap/ekle.php">
<fieldset>

<br><br><h1><b>Giriş Ekranı</b></h1><br><br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adınız</label>  
  <div class="col-md-4">
  <input  name="name" placeholder="" class="form-control input-md" type="text" >
 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Soyadınız</label>  
  <div class="col-md-4">
  <input  name="k_adi" placeholder="" class="form-control input-md" type="text" >
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Şifreniz</label>
  <div class="col-md-4">
    <input  name="pass" placeholder="" class="form-control input-md" type="password" >
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-primary" value="Gönder">
  </div>
</div>

</fieldset>
</form>


<?php
include 'footer.html';
?>