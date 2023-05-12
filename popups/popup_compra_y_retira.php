



<HTML>
<HEAD>
<TITLE>Titulo</TITLE>

<STYLE TYPE="text/css">

#popup {
  background-color: rgba(0,0,0,0.8);
  position: fixed;
  top:0;
  left:0;
  right:0;
  bottom:0;
  margin:0;
  -webkit-animation:autopopup 2s;
  -moz-animation:autopopup 2s;
  animation:autopopup 2s;
  background: url('/tienda/img_tienda/base_comunas_dis.png')no-repeat center center;
 
 background-size:cover;

}

@-webkit-keyframes autopopup {
  from {opacity: 0;margin-top:-100px;}
  to {opacity: 1;}
}
@-moz-keyframes autopopup {
  from {opacity: 0;margin-top:-100px;}
  to {opacity: 1;}
}
@keyframes autopopup {
  from {opacity: 0;margin-top:-100px;}
  to {opacity: 1;}
}

#popup:target {
  -webkit-transition:all 1s;
  -moz-transition:all 1s;
  transition:all 1s;
  opacity: 0;
  visibility: hidden;
}

.popup-contenedor {
  position: relative;
  margin:7% auto;
  padding:30px 50px;
  background-color: orange ;

  /*fbb13bff*/
  color:#333;
  border-radius: 20px;
  width:40%;
}

a.popup-cerrar {
  position: absolute;
  top:3px;
  right:3px;
  background-color: #333;
  padding:7px 10px;
  font-size: 20px;
  text-decoration: none;
  line-height: 1;
  color:#fff;
}


</STYLE>


</HEAD>


<div class="modal-wrapper" id="popup">
  <div class="popup-contenedor">	



    <h2>Compra y Retira HOY!!!</h2>




<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
            <div class="furniture-container homepage-container">	
                    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

<table border="0" cellpadding="1" cellspacing="1" style="width:640px">
	<tbody>
		<tr>
			<td style="width:255px">&nbsp;</td>
			<td style="width:300px">&nbsp;</td>
		</tr>
		<tr>
			<td style="text-align:center; width:285px"><span style="display:none">&nbsp;</span><span style="display:none">&nbsp;</span>
			<hr />
			<p>Compra y retira HOY!!!! </p>

			<p>Realiza tu compra y retira en nuestra Tienda reviza y disfruta de todos nuestros productos!!!</p>

			<hr/>
			<p>&nbsp;</p>
			</td>
			<td style="text-align:center; width:340px">
				

				<span style="display:none">&nbsp;</span></td>
		</tr>
		<tr>
			<td style="width:255px">&nbsp;</td>
			<td style="width:300px">&nbsp;</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>

<p>&nbsp;</p>
                    </div>
            </div>
    </div>
</div>

  <script src="script.js"></script>
    <a class="popup-cerrar" href="../index.php">Cerrar!!!</a>			
  </div>
</div>
  <script src="script.js"></script>
</body>
