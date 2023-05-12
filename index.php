<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>TuCupon.cl</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>






</header>




<script type="text/javascript" src="main.js?v=12392823"></script>


<script>
    function popupYT(id) {
    window.open('https://www.youtube.com/embed/'+id, 'popup',  config='left=380, height=300,width=300')
    }
   </script>




<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		<div class="row">
		
			<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				
<!-- ==============Menu izquiedo superios========================== -->

	<?php include('includes/side-menu_info.php');?>    

<!-- =====================fin menu izquierdo ================== -->
			</div><!-- /.sidemenu-holder -->	
			
			<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->






<!-- 
**************************************************
*****************  NUEVO RAFA*********************
*************************************************
 -->

<?php 
$pid=1; 
$query=mysqli_query($con,"select * from adm_web where id_web ='$pid'");

while($rowi=mysqli_fetch_array($query))
{
$img_banner = htmlentities($rowi['img_banner']);
$img_banner2 = htmlentities($rowi['img_banner2']);
$img_banner3 = htmlentities($rowi['img_banner3']);
$envio_gratis = htmlentities($rowi['envio_gratis']);
$garantia_banner = htmlentities($rowi['garantia_banner']);
$oferta_especial_banner = htmlentities($rowi['oferta_especial_banner']);



?>
<?php  }   ?>

<!-- 
**************************************
**************************************
************************************** 
-->
			
<div id="hero" class="homepage-slider3">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
		<div class="full-width-slider">	


			<div class="item" style="background-image: url(admin/img_admweb/img_banner/<?php echo $img_banner;?>);">
<!-- 
			<div class="item" style="background-image: url(assets/images/sliders/slider1.png);"> -->

				<!-- /.container-fluid -->
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->
	    
	    <div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(admin/img_admweb/img_banner/<?php echo $img_banner2;?>);">
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->


       <div class="full-width-slider">
			<div class="item full-width-slider" style="background-image: url(admin/img_admweb/img_banner/<?php echo $img_banner3;?>);">
			</div><!-- /.item -->
		</div><!-- /.full-width-slider -->




	</div><!-- /.owl-carousel -->
</div>
			
<!-- ========================================= SECTION – HERO : END ========================================= -->	
				<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp ">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
						     <i class="icon fa fa-dollar"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading green">Garantia</h4>
						</div>
					</div>	
					<!-- <h6 class="text">30 dias de protección al cliente, programa de afiliados.</h6> -->
					<h6 class="text"><?php echo $garantia_banner; ?></h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-truck"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading orange">Envio gratis</h4>
						</div>
					</div>
					<h6 class="text"><?php echo $envio_gratis; ?></h6>	
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						<div class="col-xs-2">
							<i class="icon fa fa-gift"></i>
						</div>
						<div class="col-xs-10">
							<h4 class="info-box-heading red">Oferta Especial</h4>
						</div>
					</div>
				<!-- 	<h6 class="text">Todos los productos 20% de dscto </h6>	 -->
					<h6 class="text"><?php echo $oferta_especial_banner; ?> </h6>	

				</div>
			</div><!-- .col -->
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->
	
</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->		
			</div><!-- /.homebanner-holder -->
			
		</div><!-- /.row -->




<!-- /.****************************************************** -->
<!-- /.*************** INICIO PRODUCTOS FULL DESCUENTO *************************** -->
<!-- /.****************************************************** -->


		<!-- ============================================== SCROLL TABS ============================================== -->
		<div id="product-tabs-slider" >
			<div class="more-info-tab clearfix">
			   <h3 class="new-product-title pull-left">Productos NUEVOS...</h3>
				<!-- <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
					<li class="active"><a href="#all" data-toggle="tab">Todos</a></li>
					<li><a href="#books" data-toggle="tab">Libros</a></li>
					<li><a href="#furniture" data-toggle="tab">Muebleria</a></li>
				</ul>  -->         <!-- /.nav-tabs -->
			</div>

			<div class="tab-content outer-top-xs" >
				<div class="tab-pane in active" id="all">			
					<div class="product-slider" style="padding-right: 10px ; padding-left: 10px;">
						<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="6">
<?php
$ret=mysqli_query($con,"select * from products ");
while ($row=mysqli_fetch_array($ret)) 
{
	# code...


?>

						    	
		<div class="item item-carousel" style="padding-right: 10px ; padding-left: 10px;">
			<div class="products"   class="scroll-tabs inner-bottom-vs  wow fadeInUp"  style="border:  dotted; color: lightgreen ; border-radius: 10px;  padding-top: 15px;  padding-right: 10px ; padding-left: 10px ; padding-bottom: 15px;" >
				
	<div class="product"style="align-content: center; text-align: center;">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">
				<img  src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>"  width="80" height="80" alt=""></a>
			</div><!-- /.image -->			

			                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-center" style="font-size-adjust: 10px;" >
			<h1 class="name">



				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a>




			</h1>
			<div class="rating rateit-small" align="center"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$.<?php echo number_format(htmlentities($row['productPrice']), 0, ".", ".");?>			</span>
										     <span class="price-before-discount">$.<?php echo htmlentities($row['productPriceBeforeDiscount']);?>	</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="action"><a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="lnk btn btn-primary">Agregar a carrito</a></div>
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	<?php } ?>

			</div><!-- /.home-owl-carousel -->
					</div><!-- /.product-slider -->
				</div>




<!-- /.****************************************************** -->
<!-- /.*************** fin PRODUCTOS DESTACADOS *************************** -->
<!-- /.****************************************************** -->




<!-- /.****************************************************** -->
<!-- /.*************** incicio Todos productos *************************** -->
<!-- /.****************************************************** -->





				<div class="search-result-container">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
								<div class="row">									
			<?php
$ret=mysqli_query($con,"select * from products where activo = 1 ");
$num=mysqli_num_rows($ret);
if($num>0)
{
while ($row=mysqli_fetch_array($ret)) 
{?>							
		<!-- <div class="col-sm-6 col-md-4 wow fadeInUp"> -->
     <!--  <div  class="col-lg-3 col-md-5 col-sm-6 col-xs-12 wow fadeInUp "> -->

      	<div  class="col-lg-3 col-md-5 col-sm-6 col-xs-12 text-center display:flex" >

<!--      
aqui holita 
-->
     
.


	<!-- <div class="products" style="border:  dotted; color: orange ; border-radius: 10px; padding-top: 10; padding-left: 25;" >	 -->

<div class="products" style="border:  dotted; color: orange ; border-radius: 10px;  padding-top: 15px; " >				
			
  
  


	<!-- <div class="product" style="border: dotted; color: orange ; border-spacing: 20px 10px !important; ">	 -->	
		<div class="product text-center  display:flex">	
		<div class="product-image" >
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" alt="" width="250" height="250"></a>
			</div><!-- /.image -->			                      		   
		</div><!-- /.product-image -->
			

			
		
		<div class="product-info text-center " >
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>">


				<?php 

				$largo= strlen(htmlentities($row['productName']));
				if ($largo <=36)
							{
									//echo htmlentities($row['productName'])."mas de 33 caracteres......y mas";
									$codigoBarra = str_replace(' ',"&nbsp;",str_pad($array[codigob],14,' ',STR_PAD_LEFT));
									echo htmlentities($row['productName']).$codigoBarra;

								}
				else
							{
									echo htmlentities($row['productName']);

							}	

				//echo htmlentities($row['productName']);


				?>
					

				</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price text-center">	
				<span class="price" style = "font-size: 10px;" >
					<!-- $. <?php //echo htmlentities($row['productPrice']);?>	 -->		</span>

							

							Antes :<span class="price-before-discount" >$<?php echo 

							number_format(htmlentities($row['productPriceBeforeDiscount']), 0, ".", ".");
							
							//htmlentities($row['productPriceBeforeDiscount']);


							?></span>
							 <span class="price" style = "color: #49a74b ; font-size: 12px;">Ahora:
							 </span>
									
							 
							 <span class="price" style = "color: #49a74b ; font-size: 18px;" >	     	
										$<?php echo number_format(htmlentities($row['productPrice']), 0, ".", ".");?>			
							</span>


									
									<?php 
											

											// $largo= (strlen(htmlentities($row['productName'])));
											// $espacios=15;
											// if ($largo < 33)
											// 	{

											// 			$dif =  ( 33 - $largo);
											// 			$largo3  = ($dif) + ($largo) + ($espacios);

											// 		}

												
											// 	echo $largo."-" ;
											// 	echo $dif."-";	
											// 	echo $largo3;

											 	

									 ?>




			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect" >
				<div class="action">
					<ul class="list-unstyled">
					<div class="cart clearfix animate-effect" >
						<li class="add-cart-button btn-group " >

							<!-- <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button> -->

							<a href="category.php?page=product&action=add&id=<?php echo $row['id']; ?>"> 
							
							<button class="btn btn-primary"  style = "padding-left:18px;"  type="button" >Agregar al carrito</button></a>
														
						</li>	
	                   
		                <li class="lnk wishlist">
			<!-- <a class="add-to-cart" href="category.php?pid=<?php //echo htmlentities($row['id'])?>&&action=wishlist" title="Wishlist"> -->

	
								 <!-- <i class="icon fa fa-heart"></i> -->



								 <!-- <a class="fa fa-video-camera" href="#play" onclick="popupYT('Axx_d7nEa5s')">-Ver-</a>  -->

								 <a class="fa fa-video-camera" href="#play" onclick="popupYT('<?php echo htmlentities($row['link_youtube']);?>')">-Ver-</a> 

								 <?php //echo htmlentities($row['productName']);?>
								  

								 
							</a>
						</li>

						
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div>
			</div>
		</div>
	  <?php } } else {?>
	
		<div class="col-sm-6 col-md-4 wow fadeInUp"> <h3>No se encontraron productos Cargados...</h3>
		</div>
		
<?php } ?>	
		
										</div><!-- /.row -->
							</div><!-- /.category-product -->
						
						</div><!-- /.tab-pane -->
						
				

				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div></div>
		



</div>
</div>



<!-- /.****************************************** -->
<!-- /.**************fin productos************* -->
<!-- /.****************************************** -->




		<!-- ============================================== TABS : END ============================================== -->

		
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>