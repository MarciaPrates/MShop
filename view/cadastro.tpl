  <div class="page-heading bg-light">
  	<div class="container">
  		<div class="row align-items-end">
  			<div class="col-lg-7">
  				<h1>Cadastro de Cliente</h1>      
  			</div>
  		</div>
  	</div>
  </div>

  <div class="untree_co-section">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 mb-5 mb-md-0">

  				<form name="cadcliente" id="cadcliente" method="post" action="">
  					<div class="p-3 p-lg-5 border">
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">Nome <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_nome" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Sobrenome <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_sobrenome" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">Data de Nascimento <span class="text-danger">*</span></label>
  								<input type="date" class="form-control" name="cli_data_nasc" placeholder="dd/mm/aaaa" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">RG <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_rg" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">CPF <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_cpf" minlength="11" maxlength="11" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Celular <span class="text-danger">*</span></label>
  								<input type="number" class="form-control" name="cli_celular" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">DDD <span class="text-danger">*</span></label>
  								<input type="number" class="form-control" name="cli_ddd" min="10" max="99" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Telefone <span class="text-danger">*</span></label>
  								<input type="number" class="form-control" name="cli_fone" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-12">
  								<label for="c_address" class="text-black">Endereço <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_endereco" minlength="3" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_state_country" class="text-black">Número <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_numero" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_postal_zip" class="text-black">Bairro <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_bairro" minlength="3" required>
  							</div>
  						</div>


  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_state_country" class="text-black">Cidade <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_cidade" minlength="3" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_postal_zip" class="text-black">UF <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_uf" maxlength="2" minlength="2" required>
  							</div>
  						</div>

  						<div class="form-group row mb-5">
  							<div class="col-md-6">
  								<label for="c_phone" class="text-black">CEP <span class="text-danger">*</span></label>
  								<input type="text" class="form-control" name="cli_cep" minlength="8" maxlength="8" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
  								<input type="email" class="form-control" name="cli_email" required>
  							</div>

  						</div>



  						<div class="form-group" id="btngravar">
  							<button type="submit" class="btn btn-black btn-lg py-3 btn-block" >Gravar</button>
  						</div>

  					</div>
  				</form>
  			</div>








  		</div>
  		<!-- </form> -->
  	</div>
  </div>