<?php
/* Smarty version 3.1.39, created on 2021-04-03 17:24:11
  from 'C:\xampp\htdocs\MShop\adm\view\adm_produtos_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068ceeb4428f6_08377434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c2c0292146f6d12bfd463cf59e255765dc804fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\adm\\view\\adm_produtos_novo.tpl',
      1 => 1617481443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068ceeb4428f6_08377434 (Smarty_Internal_Template $_smarty_tpl) {
?>  <div class="page-heading bg-light">
  	<div class="container">
  		<div class="row align-items-end">
  			<div class="col-lg-7">
  				<h1>Adicionar novo produto</h1>      
  			</div>
  		</div>
  	</div>
  </div>

  <div class="untree_co-section">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12 mb-5 mb-md-0">

  				<form name="frm_produto" method="post" action="" enctype="multipart/form-data">
  					<div class="p-3 p-lg-5 border">
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label class="text-black">Produto</label>
  								<input type="text" name="pro_nome" id="pro_nome" class="form-control"  required >
  							</div>
  							<div class="col-md-6">
  								<label class="text-black">Categoria </label>
  								<select name="pro_categoria" id="pro_categoria" class="form-control" required>
                    <option value="teste"> Escolha </option>
                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>                    
                        <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>  

                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label class="text-black">Ativo </label>
  								<select name="pro_ativo" id="pro_cativo" class="form-control" required>
                    <option value=""> Escolha </option>
                    <option value="NAO"> Não </option>
                    <option value="SIM"> Sim </option>
                  </select>
  							</div>
  							<div class="col-md-6">
  								<label class="text-black">Modelo </label>
  								<input type="text" name="pro_modelo" id="pro_modelo" class="form-control" >
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label class="text-black">Referência </label>
  								<input type="text" name="pro_ref" id="pro_ref" class="form-control" >
  							</div>
  							<div class="col-md-6">
  								<label class="text-black">Valor </label>
  								<input type="text" name="pro_valor" id="pro_valor" class="form-control" required >
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-6">
  								<label class="text-black">Estoque </label>
  								<input type="text" name="pro_estoque" id="pro_estoque" class="form-control" required >
  							</div>
  							<div class="col-md-6">
  								<label class="text-black">Peso </label>
  								<input type="text" name="pro_peso" id="pro_peso" class="form-control" required >
  							</div>
  						</div>
  						<div class="form-group row">
  							<div class="col-md-4">
  								<label for="c_address" class="text-black">Altura </label>
  								<input type="text" name="pro_altura" id="pro_altura" class="form-control" required >
  							</div>
  							<div class="col-md-4">
  								<label class="text-black">Largura </label>
  								<input type="text" name="pro_largura" id="pro_largura" class="form-control" required >
  							</div>
                <div class="col-md-4">
                  <label class="text-black">Comprimento </label>
                  <input type="text" name="pro_comprimento" id="pro_comprimento" class="form-control" required >
                </div>
  						</div>


  						<div class="form-group row">
  							<div class="col-md-6">
  								<label class="text-black">Imagem Principal </label>
  								<input type="file" name="pro_img" class="form-control " id="pro_img">
  							</div>
  							<div class="col-md-6">
  								<label class="text-black">Slug </label>
  								<input type="text" readonly name="pro_slug" id="pro_slug"   class="form-control" >
  							</div>
  						</div>

  						<div class="form-group row mb-5">
  							<div class="col-md-12">
  								<label class="text-black">Descrição </label>
                  <textarea name="pro_desc" id="pro_desc" rows="5" class="form-control" placeholder="Coloque a descrição do produto aqui..."></textarea>
                  <!--<?php echo '<script'; ?>
> 
                    tinymce.init({ selector:'textarea'  });
                  <?php echo '</script'; ?>
>-->
  							</div>

  						</div>



  						<div class="form-group" id="btngravar">
  							<button class="btn btn-black btn-lg py-3 btn-block" name="btn_gravar">Gravar</button>
  						</div>

  					</div>
  				</form>
  			</div>








  		</div>
  		<!-- </form> -->
  	</div>
  </div><?php }
}
