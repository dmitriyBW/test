<?php
/* Smarty version 4.1.0, created on 2022-11-04 17:35:54
  from '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/dashboard/buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63654d7a055906_96110809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ab7fa883d5ab842b9d9c6cd46cc529b8399b0e7' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/dashboard/buttons.tpl',
      1 => 1667575722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63654d7a055906_96110809 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dashboard-block headless <?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" id="dashboard-block-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <div class="body<?php if ($_smarty_tpl->tpl_vars['customizable']->value) {?> draggable<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['customizable']->value) {?>
            <div class="action-buttons">
                <button class="action icon icon-compress<?php if ($_smarty_tpl->tpl_vars['size']->value == 'quarter') {?> hidden<?php }?>"
                        data-action="shrink"></button>
                <button class="action icon icon-expand<?php if ($_smarty_tpl->tpl_vars['size']->value == 'double') {?> hidden<?php }?>"
                        data-action="expand"></button>
                <button class="action icon icon-times-circle"
                        data-action="remove"></button>
            </div>
        <?php }?>
        <div class="dashboard-buttons">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="dashboard-button"<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"<?php }?>>
                    <div class="dashboard-button-icon">
                        <i class="icon icon-<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i>
                    </div>
                    <div class="dashboard-button-wrapper">
                        <div class="dashboard-button-title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                        <div class="dashboard-button-description"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div>
                    </div>
                </a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
