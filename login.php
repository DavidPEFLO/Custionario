
<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand">SISTEMA CUESTIONARIO</a>
        </div>
        
			</div>

<div class="container theme-showcase" role="main">
	<form action='validar.php' method='GET'>
	<div class="row">
        <div class="col-md-6">
          <table class="table">
		<tr>
			<td>Usuario:</td><td><input type='text' name='user' class='form-control'></td>
		</tr>
		<tr>
			<td>Password:</td><td><input type='password' name='psw' class='form-control'></td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
        <button type='submit'>Ingresar</button></td>
		</tr>
		 </tbody>
          </table>
        </div>
      </div>
	</form>
	</div>
 <?php
		@$msg=$_GET['msg'];
		?>
	<div class="bs-docs-section">
 
  <div class="bs-example bs-example-standalone">

    <div class="alert alert-danger alert-dismissible fade in" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Salir</span></button>
      <h4><?=$msg?></h4>
    </div>
  </div>
  </div>
		
