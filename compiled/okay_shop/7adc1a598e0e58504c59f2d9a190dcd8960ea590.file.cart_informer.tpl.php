<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-07-17 22:45:29
         compiled from "/sites/test.test/design/okay_shop/html/cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21020764265d2fa5091d4591-25732223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7adc1a598e0e58504c59f2d9a190dcd8960ea590' => 
    array (
      0 => '/sites/test.test/design/okay_shop/html/cart_informer.tpl',
      1 => 1563403342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21020764265d2fa5091d4591-25732223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'lang_link' => 0,
    'lang' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d2fa5091e4f06_66757874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d2fa5091e4f06_66757874')) {function content_5d2fa5091e4f06_66757874($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart" class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
         <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </a>
<?php } else { ?>
    <div class="cart_info">
        <span class="cart_counter"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
</span>
        <span class="cart_title" data-language="index_cart"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
        <span class="cart_total"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert(($_smarty_tpl->tpl_vars['cart']->value->total_price));?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>
</span>
    </div>
<?php }?>
<?php }} ?>
