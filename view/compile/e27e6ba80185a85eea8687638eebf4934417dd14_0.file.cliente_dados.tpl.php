<?php
/* Smarty version 3.1.39, created on 2021-03-30 02:44:18
  from 'C:\xampp\htdocs\MShop\view\cliente_dados.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60627462b99f23_51353055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e27e6ba80185a85eea8687638eebf4934417dd14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\cliente_dados.tpl',
      1 => 1617065055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60627462b99f23_51353055 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light" id="senha-alterar">
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
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NOME']->value;?>
" name="cli_nome" class="form-control" minlength="3" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Sobrenome <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_SOBRENOME']->value;?>
" name="cli_sobrenome" class="form-control"  minlength="3" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">Data de Nascimento <span class="text-danger">*</span></label>
  								<input type="date" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DATA_NASC']->value;?>
" name="cli_data_nasc" class="form-control" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">RG <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_RG']->value;?>
" name="cli_rg" class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">CPF <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CPF']->value;?>
" name="cli_cpf" class="form-control" minlength="11" maxlength="11" required readonly>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Celular <span class="text-danger">*</span></label>
  								<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CELULAR']->value;?>
" name="cli_celular" class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_fname" class="text-black">DDD <span class="text-danger">*</span></label>
  								<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_DDD']->value;?>
" name="cli_ddd" class="form-control"  min="10" max="99" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_lname" class="text-black">Telefone <span class="text-danger">*</span></label>
  								<input type="number" value="<?php echo $_smarty_tpl->tpl_vars['CLI_FONE']->value;?>
" name="cli_fone" class="form-control" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-12">
  								<label for="c_address" class="text-black">Endereço <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_ENDERECO']->value;?>
" name="cli_endereco" class="form-control"  minlength="3" required>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_state_country" class="text-black">Número <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_NUMERO']->value;?>
" name="cli_numero" class="form-control" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_postal_zip" class="text-black">Bairro <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_BAIRRO']->value;?>
" name="cli_bairro" class="form-control" minlength="3" required>
  							</div>
  						</div>


  						<div class="form-group row">
  							<div class="col-md-6">
  								<label for="c_state_country" class="text-black">Cidade <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CIDADE']->value;?>
" name="cli_cidade" class="form-control" minlength="3" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_postal_zip" class="text-black">UF <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_UF']->value;?>
"name="cli_uf" class="form-control" maxlength="2" minlength="2" required>
  							</div>
  						</div>

  						<div class="form-group row mb-5">
  							<div class="col-md-6">
  								<label for="c_phone" class="text-black">CEP <span class="text-danger">*</span></label>
  								<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['CLI_CEP']->value;?>
" name="cli_cep" class="form-control" minlength="8" maxlength="8" required>
  							</div>
  							<div class="col-md-6">
  								<label for="c_email_address" class="text-black">Email <span class="text-danger">*</span></label>
  								<input type="email" value="<?php echo $_smarty_tpl->tpl_vars['CLI_EMAIL']->value;?>
" name="cli_email" class="form-control" required>
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
  </div><?php }
}
