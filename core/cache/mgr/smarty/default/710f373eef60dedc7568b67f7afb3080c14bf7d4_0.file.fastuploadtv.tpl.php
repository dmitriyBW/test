<?php
/* Smarty version 4.1.0, created on 2022-11-28 14:11:36
  from '/home/admin/web/test.b-w-group.ru/public_html/core/components/fastuploadtv/elements/tv/input/tpl/fastuploadtv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6384c1989bc9e0_56048930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '710f373eef60dedc7568b67f7afb3080c14bf7d4' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/core/components/fastuploadtv/elements/tv/input/tpl/fastuploadtv.tpl',
      1 => 1669644462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384c1989bc9e0_56048930 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="fastuploadtv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" style="width:100%"></div>
<?php echo '<script'; ?>
 type="text/javascript">
    myTV<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'FastUploadTV',
        renderTo: 'fastuploadtv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
',
        url: '<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
connector.php',
        name: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
',
        text: '<?php echo $_smarty_tpl->tpl_vars['lex']->value->upload_file;?>
',
        altText: '<?php echo $_smarty_tpl->tpl_vars['lex']->value->replace_file;?>
',
        clearText: '<?php echo $_smarty_tpl->tpl_vars['lex']->value->clear_file;?>
',
        res_id: <?php echo $_smarty_tpl->tpl_vars['res_id']->value;?>
,
        res_alias: '<?php echo $_smarty_tpl->tpl_vars['res_alias']->value;?>
',
        p_id: <?php echo $_smarty_tpl->tpl_vars['p_id']->value;?>
,
        p_alias: '<?php echo $_smarty_tpl->tpl_vars['p_alias']->value;?>
',
        tv_id: <?php echo $_smarty_tpl->tpl_vars['tv_id']->value;?>
,
        ms_id: <?php echo $_smarty_tpl->tpl_vars['ms_id']->value;?>
,
        acceptedMIMEtypes: <?php echo $_smarty_tpl->tpl_vars['MIME_TYPES']->value;?>
,
        showValue: <?php echo $_smarty_tpl->tpl_vars['showValue']->value;?>
,
        showPreview: <?php echo $_smarty_tpl->tpl_vars['showPreview']->value;?>
,
        prefixFilename: <?php echo $_smarty_tpl->tpl_vars['prefixFilename']->value;?>
,
        value: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
',
        lex: <?php echo $_smarty_tpl->tpl_vars['jsonlex']->value;?>

    
    });
    
<?php echo '</script'; ?>
><?php }
}
