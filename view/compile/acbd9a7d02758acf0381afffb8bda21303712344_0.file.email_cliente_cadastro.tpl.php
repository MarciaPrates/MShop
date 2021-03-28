<?php
/* Smarty version 3.1.39, created on 2021-03-28 21:19:14
  from 'C:\xampp\htdocs\MShop\view\email_cliente_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6060d6b2cb8622_33061805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acbd9a7d02758acf0381afffb8bda21303712344' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MShop\\view\\email_cliente_cadastro.tpl',
      1 => 1616887039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6060d6b2cb8622_33061805 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="gmail_signature" dir="ltr" data-smartmail="gmail_signature">
  <div style="text-align: center; display: flex; align-items: center; justify-content: center; flex-direction: column;">
    <h1 style="margin-top: 30px; font-size: 40px; font-weight: 600;  width: 100%; color: #0088fe; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</h1>
  </div>
  <div style="text-align: center; display: flex; align-items: center; justfy-content: center; flex-direction: column;">
    <h1 style="margin-top: 30px; font-size: 20px; font-weight: 600; background-color: #0088fe; width: 100%; color: #fcfcfc; border-radius: 20px; text-align: center;">Confirmação de cadastro</h1>
  </div>
  <div style="text-align: center;">
    <p style="text-align: center;">Olá, <b><?php echo $_smarty_tpl->tpl_vars['NOME']->value;?>
</b>!</p>
    <br>
 
    <p style="text-align: center;">Cadastro efetuado com sucesso!</p>
      <p>Para fazer  o login no site, use seu email cadastrado: 
      <br><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
.</p>
      <br>
    <p>Sua senha neste momento é: <b><?php echo $_smarty_tpl->tpl_vars['SENHA']->value;?>
</b>.</p>
    <br>
    <p>
    Para acessar a sua conta, basta clicar no link abaixo:</p> <br>
    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
" style="background-color: #0088fe; border: none; color: #fcfcfc; height: 40px; border-radius: 20px; padding: 10px 15px;cursor: pointer;text-decoration:none"><?php echo $_smarty_tpl->tpl_vars['PAG_MINHA_CONTA']->value;?>
</a>
    <br>
    <br>
    <br>
    <p style="color: #ccc;">Atenciosamente,</p>
    <p style="color: #000;"><?php echo $_smarty_tpl->tpl_vars['SITE']->value;?>
</p>
  </div>
</div><?php }
}
