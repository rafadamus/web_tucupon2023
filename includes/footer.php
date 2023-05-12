<footer id="footer" class="footer color-bg">
	  <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
        <div class="logo">
            <a href="index.php">
                
<!-- 

*******************************************+
***************** NUEVO ****************+
*******************************************+ -->

<?php 


$pid=1;
$query=mysqli_query($con,"select * from adm_web where id_web ='$pid'");

while($row=mysqli_fetch_array($query))
{

$nombre_web = htmlentities($row['nombre_web']);
$resumen_emp  = htmlentities($row['resumen_emp']);
$atencion_lu_vi  = htmlentities($row['atencion_lu_vi']);
$atencion_sabado  = htmlentities($row['atencion_sabado']);
$atencion_domingo  = htmlentities($row['atencion_domingo']);
$direccion_emp  = htmlentities($row['direccion_emp']);
$fono_contacto1 = htmlentities($row['fono_contacto1']);
$fono_contacto2 = htmlentities($row['fono_contacto2']);
$email = htmlentities($row['email']);

?>


<?php  }   ?>

<!-- 
*******************************************+
*******************************************+
*******************************************+ -->


<h3><?php echo $nombre_web ?></h3>
            </a>
        </div><!-- /.logo -->
    
    </div><!-- /.footer-logo -->

     <div class="module-body m-t-20">
        <p class="about-us"> <?php echo $resumen_emp ?>.</p>
    
        <div class="social-icons">
        

         <a href="" class='active'><i class="icon fa fa-facebook"></i></a>
        <a href=""><i class="icon fa fa-twitter"></i></a>
        <a href=""><i class="icon fa fa-linkedin"></i></a>
        <a href=""><i class="icon fa fa-rss"></i></a>
        <a href=""><i class="icon fa fa-pinterest"></i></a>

       <!--  <a href="https://facebook.com/platea21" class='active'><i class="icon fa fa-facebook"></i></a>
        <a href="https://platea21.blogspot.com"><i class="icon fa fa-twitter"></i></a>
        <a href="https://platea21.blogspot.com"><i class="icon fa fa-linkedin"></i></a>
        <a href="https://platea21.blogspot.com"><i class="icon fa fa-rss"></i></a>
        <a href="https://platea21.blogspot.com"><i class="icon fa fa-pinterest"></i></a> -->

        </div><!-- /.social-icons -->
    </div><!-- /.module-body -->

</div><!-- /.contact-info -->
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            	</div><!-- /.col -->

            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= CONTACT TIMING============================================================= -->
<div class="contact-timing">
	<div class="module-heading">
		<h4 class="module-title">Horario de atención</h4>
	</div><!-- /.module-heading -->

	<div class="module-body outer-top-xs">
		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr><td>Lunes-Viernes:</td><td class="pull-right"><?php echo $atencion_lu_vi ?></td></tr>
					<tr><td>Sábados:</td><td class="pull-right"><?php echo $atencion_sabado ?></td></tr>
					<tr><td>Domingos:</td><td class="pull-right"><?php echo $atencion_domingo ?></td></tr>
				</tbody>
			</table>
		</div><!-- /.table-responsive -->
	</div><!-- /.module-body -->
</div><!-- /.contact-timing -->
<!-- ============================================================= CONTACT TIMING : END ============================================================= -->            	</div><!-- /.col -->

            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= INFORMATION============================================================= -->
<div class="contact-information">
	<div class="module-heading">
		<h4 class="module-title">Información</h4>
	</div><!-- /.module-heading -->

	<div class="module-body outer-top-xs">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p><?php echo $direccion_emp ?></p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p><?php echo $fono_contacto1 ?> <br><?php echo $fono_contacto2 ?></p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#"><?php echo $email ?></a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
</div><!-- /.contact-timing -->
<!-- ============================================================= INFORMATION : END ============================================================= -->            	</div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->

    