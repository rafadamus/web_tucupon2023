
<?php
session_start();

//echo "hola".$pid;
//$pid=intval($_GET['id']);// product id



include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$pid=intval($_GET['id']);// product id


echo $pid;

if(isset($_POST['submit']))
{

	echo "dentro del update";
	$id_web=$_POST['id_web'];
	$nombre_web=$_POST['nombre_web'];
	$atencion_lu_vi=$_POST['atencion_lu_vi'];
	$atencion_sabado=$_POST['atencion_sabado'];
	$atenion_domingo=$_POST['atenion_domingo'];
	$direccion_emp=$_POST['direccion_emp'];
	$fono_contacto1=$_POST['fono_contacto1'];
	$fono_contacto2=$_POST['fono_contacto2'];
	$fono_whatupp=$_POST['fono_whatupp'];
	$email=$_POST['email'];
	$email=$_POST['email'];
	$email=$_POST['email'];
	$email=$_POST['email'];
	$email=$_POST['email'];




	
$sql=mysqli_query($con,"update  products set category='$category',subCategory='$subcat',productName='$productname',productCompany='$productcompany',productPrice='$productprice',productDescription='$productdescription',shippingCharge='$productscharge',productAvailability='$productavailability',productPriceBeforeDiscount='$productpricebd' where id='$pid' ");
$_SESSION['msg']="Producto actualizado correctamente !!";

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Editar WEB</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   <script>
function getSubcat(val) {
	$.ajax({	
	type: "POST",
	url: "get_subcat.php",
	data:'cat_id='+val,
	success: function(data){
		$("#subcategory").html(data);
	}
	});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>	


</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Editar Datos de la empresa</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Todo bien!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh vaya!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<?php 

echo "antes del select".$pid;
// $query=mysqli_query($con,"select * from adm_web where id_web='$pid'");




$query=mysqli_query($con,"select adm_web.*,activo_gral.desc_activo as descri , activo_gral.id_activo as cid from adm_web join activo_gral on activo_gral.id_activo = adm_web.estado_web where adm_web.id_web='$pid'");


// $query=mysqli_query($con,"select products.*,category.categoryName as catname,category.id as cid,subcategory.subcategory as subcatname,subcategory.id as subcatid from products join category on category.id=products.category join subcategory on subcategory.id=products.subCategory where products.id='$pid'");


$cnt=1;
while($row=mysqli_fetch_array($query))
{
  

?>



<div class="control-group">

<label class="control-label" for="basicinput">Estado de la web</label>
<div class="controls">
<select name="category" class="span8 tip" onChange="getSubcat(this.value);"  required>
<option value="<?php echo htmlentities($row['cid']);?>"><?php echo htmlentities($row['descri']);?></option> 
<?php $query=mysqli_query($con,"select * from activo_gral");
while($rw=mysqli_fetch_array($query))
{
	if($row['descri']==$rw['desc_activo'])
	{
		continue;
	}
	else{
	?>

<option value="<?php echo $rw['id_activo'];?>"><?php echo $rw['desc_activo'];?></option>
<?php }} ?>
</select>
</div>
</div>







<!-- 
*********************************************************************
************************** Nuevo ****************************
********************************************************************* -->






<div class="control-group">
<label class="control-label" for="basicinput">id web</label>
<div class="controls">
<input type="text"    name="id_web"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['id_web']);?>" class="span8 tip" >
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Nombre Web(Footer)</label>
<div class="controls">
<input type="text"    name="nombre_web"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['nombre_web']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Atencion Lunes a Viernes</label>
<div class="controls">
<input type="text"    name="atencion_lu_vi"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['atencion_lu_vi']);?>" class="span8 tip" >
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Atencion Sabado</label>
<div class="controls">
<input type="text"    name="atencion_sabado"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['atencion_sabado']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Atencion Domingo</label>
<div class="controls">
<input type="text"    name="atencion_domingo"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['atencion_domingo']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Direccion Empresa</label>
<div class="controls">
<input type="text"    name="direccion_emp"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['direccion_emp']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Fono Contacto 1</label>
<div class="controls">
<input type="text"    name="fono_contacto1"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['fono_contacto1']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Fono Contacto 2</label>
<div class="controls">
<input type="text"    name="fono_contacto2"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['fono_contacto2']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Fono WhatsUpp</label>
<div class="controls">
<input type="text"    name="fono_whatupp"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['fono_whatupp']);?>" class="span8 tip" >
</div>
	</div>



<div class="control-group">
<label class="control-label" for="basicinput">Email</label>
<div class="controls">
<input type="text"    name="email"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['email']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Reseña de la empresa</label>
<div class="controls">
<textarea  name="resumen_emp"  placeholder="Ingrese la reseña de la empresaproducto" rows="6" class="span8 tip">
<?php echo htmlentities($row['resumen_emp']);?>
</textarea>  
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Despachos Comunas Disponibles</label>
<div class="controls">
<textarea  name="despachos_comunas"  placeholder="Comunas Disponibles" rows="6" class="span8 tip">
<?php echo htmlentities($row['despachos_comunas']);?>
</textarea>  
</div>
</div>





<div class="control-group">
<label class="control-label" for="basicinput">Detalle Garantia</label>
<div class="controls">
<textarea  name="garantia"  placeholder="Garantia" rows="6" class="span8 tip">
<?php echo htmlentities($row['garantia']);?>
</textarea>  
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Politicas de Privacidad</label>
<div class="controls">
<input type="text"    name="politicas_de_privacidad"  placeholder="Ingrese nombre de producto" value="<?php echo htmlentities($row['politicas_de_privacidad']);?>" class="span8 tip" >
</div>
</div>


<br>
<br>
 <h3>Banners de Publicidad</h3>     <br>

 <hr size="2px" width="80%" noshade="noshade" align="right" />

  <hr size="3px" color="black" />
<br>



<!-- 
*********************************************************************
************************** logos y banners de la web  ****************************
********************************************************************* -->


<div class="control-group">
<label class="control-label" for="basicinput">Banner GARANTIA</label>
<div class="controls">
<input type="text"    name="garantia_banner"  placeholder="Ingrese banner Garantia" value="<?php echo htmlentities($row['garantia_banner']);?>" class="span8 tip" >
</div>
</div>




<div class="control-group">
<label class="control-label" for="basicinput">Banner ENVIO GRATIS</label>
<div class="controls">
<input type="text"    name="envio_gratis"  placeholder="Ingrese banner envio GRATIS" value="<?php echo htmlentities($row['envio_gratis']);?>" class="span8 tip" >
</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Banner OFERTA ESPECIAL</label>
<div class="controls">
<input type="text"    name="oferta_especial_banner"  placeholder="Ingrese oferta especial banner" value="<?php echo htmlentities($row['direccion_emp']);?>" class="span8 tip" >
</div>
</div>




<!-- 
*********************************************************************
************************** Fin Nuevo ****************************
********************************************************************* -->





<div class="control-group">
<label class="control-label" for="basicinput">Imagen Logo</label>
<div class="controls">
<img src="img_admweb/img_logo/<?php echo htmlentities($row['img_logo']);?>" width="200" height="100"> <a 
href="update_logo.php?id=<?php echo $row['id_web'];?>">Cambiar Imagen Logo</a>

</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Imagen Banner</label>
<div class="controls">
<img src="img_admweb/img_banner/<?php echo htmlentities($row['img_banner']);?>" width="200" height="100"> <a 
href="update_banner.php?id=<?php echo $row['id_web'];?>">Cambiar Imagen banner(1)</a>

</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Imagen Banner2</label>
<div class="controls">
<img src="img_admweb/img_banner/<?php echo htmlentities($row['img_banner2']);?>" width="200" height="100"> <a 
href="update_banner2.php?id=<?php echo $row['id_web'];?>">Cambiar Imagen banner(2)</a>

</div>
</div>



<div class="control-group">
<label class="control-label" for="basicinput">Imagen Banner3</label>
<div class="controls">
<img src="img_admweb/img_banner/<?php echo htmlentities($row['img_banner3']);?>" width="200" height="100"> <a 
href="update_banner3.php?id=<?php echo $row['id_web'];?>">Cambiar Imagen banner(3)</a>

</div>
</div>
 
     <br>

<hr size="2px" width="80%" noshade="noshade" align="right" />
<hr size="3px" color="grey" />




<?php } ?>
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">Actualizar</button>
											</div>
										</div>
									</form>
							</div>
						</div>


	
						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
<?php } ?>