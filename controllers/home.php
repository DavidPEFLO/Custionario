<?php
include ('conex.php');
$result = mysql_query("SELECT SUM(valor) as total FROM preguntas");   
$row = mysql_fetch_array($result, MYSQL_ASSOC);

$titulo='Bienvenido al cuestionario ';
$contenido='conteste las siguientes preguntas:';
?>
 <input type="button"  value="Consultar pregunta" onClick="window.location.reload()">
<?php
$variables = array ('titulo'=>$titulo,'contenido'=>$contenido,);
view('home',$variables);
echo"</br></br>";
include "conex.php";
$x=rand(1,10);
$query=mysql_query("select * from preguntas where id_pregunta=$x and valor=' '");
$num=mysql_num_rows($query);

				for($i=0;$i<$num;$i++){
				$id_pregunta=mysql_result($query,$i,'id_pregunta');
				$pregunta=mysql_result($query,$i,'pregunta');
				$Valor=mysql_result($query,$i,'valor');
				$respuesta=mysql_result($query,$i,'respuesta');
echo"			
<div class='container theme-showcase' role='main'>
<form action='controllers/respuesta.php?id_pregunta=$id_pregunta'  method = 'POST'>";
				?>
					<div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
		<tr>
			<td colspan='2' align='center'>Serie de preguntas</td>
		</tr>
					<tr>
						<td><?=$pregunta?></br> 
						<b>Verdadero:</b>
						<input type='radio' id='r1' name='respuesta' value='1'/><label for='r1'>
						<b>Falso:</b>
						<input type='radio' id='r2' name='respuesta' value='0'/><label for='r2'></td>
					</tr>
					<tr>
						<td>
						<input type='submit' value='Enviar'>
						</td>
						<br><br><br>
						<td>
						<center>Su Pormedio es de: <?php echo $row["total"];?></center>
						</td>
					</tr>
				</form>
				</tbody>
          </table>
        </div>
      </div>
	</div>
				<?php
				}
				?>