<?php
/* Smarty version 3.1.39, created on 2021-03-28 22:18:16
  from 'C:\xampp\htdocs\MShop\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060e488778c13_19110586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c95492f282ad8fdc39de33a49fa0a77c9151e47a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\contato.tpl',
      1 => 1616962694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060e488778c13_19110586 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-heading bg-light">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-7">
          <h1>Contate-nos</h1>         
        </div>
      </div>
    </div>
  </div>

  
  <div class="untree_co-section">
    <div class="container">

      <div class="row mb-5">
        <div class="col-lg-4 mb-5 order-2 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="contact-info">

            <div class="address mt-4">
              <i class="icon-room"></i>
              <h4 class="mb-2">Endereço:</h4>
              <p>Brasília - DF</p>
            </div>

            <div class="open-hours mt-4">
              <i class="icon-clock-o"></i>
              <h4 class="mb-2">Atendimento:</h4>
              <p>
                Segunda a Sexta:<br>
                11:00 AM - 20:00 PM
              </p>
            </div>

            <div class="email mt-4">
              <i class="icon-envelope"></i>
              <h4 class="mb-2">Email:</h4>
              <p>marciaprates@otmail.com</p>
            </div>

            <div class="phone mt-4">
              <i class="icon-phone"></i>
              <h4 class="mb-2">Telefone:</h4>
              <p>+1 1234 55488 55</p>
            </div>

          </div>
        </div>
        <div class="col-lg-7 mr-auto order-1" data-aos="fade-up" data-aos-delay="200">
          <form action="envio" method="GET">
            <div class="row">
              <div class="col-6 mb-3">
                <input type="text" class="form-control" placeholder="Seu Name" name="nome">
              </div>
              <div class="col-6 mb-3">
                <input type="email" class="form-control" name="email" placeholder="Seu Email">
              </div>
              <div class="col-12 mb-3">
                <textarea name="mensagem" id="" cols="30" rows="7" class="form-control" placeholder="Mensagem"></textarea>
              </div>

              <div class="col-12">
                <input type="submit" value="Enviar Mensagem" class="btn btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div> <!-- /.untree_co-section --><?php }
}
