  <div class="page-heading bg-light" id="senha-alterar">
  	<div class="container">
  		<div class="row align-items-end">
  			<div class="col-lg-7">
  				<h1>Meus Dados</h1>      
  			</div>
  		</div>
  	</div>
  </div>

  <div class="untree_co-section">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 mb-1 mb-md-0">

  				<form name="cadcliente" id="cadcliente" method="post" action="">
  					<div class="p-3 p-lg-5 border">
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">Nome <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_NOME}" name="cli_nome" class="form-control" minlength="3" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Sobrenome <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_SOBRENOME}" name="cli_sobrenome" class="form-control"  minlength="3" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">Data de Nascimento <span class="text-danger">*</span></label>
  								<input type="date" value="{$CLI_DATA_NASC}" name="cli_data_nasc" class="form-control" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">RG <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_RG}" name="cli_rg" class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">CPF <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_CPF}" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required readonly>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Celular <span class="text-danger">*</span></label>
  								<input type="number" value="{$CLI_CELULAR}" name="cli_celular" class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">DDD <span class="text-danger">*</span></label>
  								<input type="number" value="{$CLI_DDD}" name="cli_ddd" class="form-control"  min="10" max="99" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Telefone <span class="text-danger">*</span></label>
  								<input type="number" value="{$CLI_FONE}" name="cli_fone" class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-12">
  								<label for="c_address" class="text-black">Endereço <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_ENDERECO}" name="cli_endereco" class="form-control"  minlength="3" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_state_country" class="text-black">Número <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_NUMERO}" name="cli_numero" class="form-control" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_postal_zip" class="text-black">Bairro <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_BAIRRO}" name="cli_bairro" class="form-control" minlength="3" required>
  							</div>
  						</div>


  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_state_country" class="text-black">Cidade <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_CIDADE}" name="cli_cidade" class="form-control" minlength="3" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_postal_zip" class="text-black">UF <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_UF}"name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
  							</div>
  						</div>

  						<div class="form-group row mb-5">
  							<div class="col-md-6">
  								<label for="c_phone" class="text-black">CEP <span class="text-danger">*</span></label>
  								<input type="text" value="{$CLI_CEP}" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
  								<input type="email" value="{$CLI_EMAIL}" name="cli_email" class="form-control" required>
  							</div>

  						</div>

  						<div class="row justify-content-center">
  							<div class="col-md-6 mb-2 mb-md-0">
  								<h2 class="h3 mb-3 text-black">Digite sua senha para alterar os dados</h2>
  								<div class="p-3 p-lg-5 border">

  									<div class="form-group row">
  										<div class="col-md-12">
  											<label class="text-black">Senha: </label>
  											<input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
  										</div>
  									</div>

  								</div>
  							</div>

  						</div>

  						<div class="form-group mt-5" id="btngravar">
  							<button type="submit" class="btn btn-black btn-lg py-3 btn-block" >Gravar</button>
  						</div>

  					</div>
  				</form>
  			</div>








  		</div>
  		<!-- </form> -->
  	</div>
  </div>