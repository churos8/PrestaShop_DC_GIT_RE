<?php
/* Smarty version 3.1.33, created on 2019-06-08 11:07:11
  from 'C:\wamp64\www\Prestashop_DC\PrestaShop\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfbdd2faae727_22251315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41dc6df59965582efc7c74bac8d9ebb6f103c4b' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_DC\\PrestaShop\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1556660796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfbdd2faae727_22251315 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
