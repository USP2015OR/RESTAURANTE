
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <title> REGISTRAR USUARIO </title>
    </head>
    <body>
			<div class="modal-header">
				<h5>SISTEMA DE PEDIDOS DE COMANDAS</h5>
			</div>
     <form id="frm_registromenu" name="frm_registromenu" class="form-vertical">
      <table style="margin: 0 auto;" >
	<tr>
		<td colspan="4">
			<center><p class="form-title">Registros de Platoss</p><br/></center>
		</td>
	</tr>
        
	<tr>
              <td width="10%"></td>
              <td width="17%"><h4><span>Nombre:</span></h4></td>
              <td width="50%"><input type="text"  id="txtnombre" class="form-control" placeholder="Ingrese su nombre"></td>
              <td width="10%"></td>
        </tr>
        
	<tr>
             <td></td>
	    <td><h4><span>Descripcion:</span></h4></td>
            <td><input type="text" id="txtdescripcion" class="form-control" placeholder="Ingrese su Descripcion"></td>
             <td></td>
	</tr>	
        
        <tr>
             <td></td>    
            <td><h4><span>Precio:</span></h4></td>
            <td><input type="text" id="txtpre" class="form-control" placeholder="Ingrese su Precio"></td>
                     <td></td>
	</tr>
        
        <tr>  
                <td></td>
		<td><h4><span>Categoria:</span></h4></td>
                <td><SELECT NAME="categoria" style="width: 100%" style="height: 300%">
                <option>Seleccione una Opcion...</option>
            <?php 
              require_once("conexion.php");
	      $cnn=conectar();
                $clavebuscadah=mysql_query("SELECT subcategoria_id,subcategoria_nombre FROM `subcategoria` WHERE subcategoria_estado=1",$cnn) or
                die("Problemas en el select:".mysql_error());
                while($row = mysql_fetch_array($clavebuscadah))
                {
                echo'<OPTION VALUE="'.$row['subcategoria_id'].'">'.$row['subcategoria_nombre'].'</OPTION>';
                }

                ?>
                </SELECT>
                </td>
                 <td></td>
	</tr>
	<tr>
	 <td></td>	
         <td></td>
         <td><button type="button" onclick="registromenu();" class="btn btn-primary">Registrar</button></td>
         <td></td>	
	</tr>
</table>
     </form>
        			<div class="modal-footer">
                                    <center> <h5>RESTAURANTE R & O </h5></center>
			</div>
                
 </body>
</html>

