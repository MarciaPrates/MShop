  <div class="page-heading bg-light">
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
                      {foreach from=$CATEGORIAS item=C}                    
                        <option value="{$C.cate_id}">{$C.cate_nome}</option>  

                      {/foreach}
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
                  <!--<script> 
                    tinymce.init({ selector:'textarea'  });
                  </script>-->
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
  </div>