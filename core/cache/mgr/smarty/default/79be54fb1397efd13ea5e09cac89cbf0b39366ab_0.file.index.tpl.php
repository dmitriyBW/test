<?php
/* Smarty version 4.1.0, created on 2022-12-09 10:05:15
  from '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/browser/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6393085b83ec69_68346801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79be54fb1397efd13ea5e09cac89cbf0b39366ab' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/browser/index.tpl',
      1 => 1667575721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6393085b83ec69_68346801 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html <?php if ($_smarty_tpl->tpl_vars['_config']->value['manager_direction'] == 'rtl') {?>dir="rtl"<?php }?> lang="<?php echo $_smarty_tpl->tpl_vars['_config']->value['cultureKey'];?>
" xml:lang="<?php echo $_smarty_tpl->tpl_vars['_config']->value['cultureKey'];?>
">
<head>
<title>MODX :: <?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_resource_browser'];?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['_config']->value['modx_charset'];?>
" />


<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/ext3/resources/css/ext-all-notheme-min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
templates/default/css/index<?php if ($_smarty_tpl->tpl_vars['_config']->value['compress_css']) {?>-min<?php }?>.css" />

<?php if ((isset($_smarty_tpl->tpl_vars['_config']->value['ext_debug'])) && $_smarty_tpl->tpl_vars['_config']->value['ext_debug']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/ext3/adapter/ext/ext-base-debug.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/ext3/ext-all-debug.js"><?php echo '</script'; ?>
>
<?php } else {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/ext3/adapter/ext/ext-base.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/ext3/ext-all.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/modext/core/modx.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
lang.js.php?ctx=mgr&topic=category,file,resource&action=<?php echo (($tmp = preg_replace('!<[^>]*?>!', ' ', $_GET['a']) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['connectors_url'];?>
modx.config.js.php?action=<?php echo (($tmp = preg_replace('!<[^>]*?>!', ' ', $_GET['a']) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
if ($_smarty_tpl->tpl_vars['_ctx']->value) {?>&wctx=<?php echo $_smarty_tpl->tpl_vars['_ctx']->value;
}?>&HTTP_MODAUTH=<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['site_id']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>
"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['maincssjs']->value;?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cssjs']->value, 'scr');
$_smarty_tpl->tpl_vars['scr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['scr']->value) {
$_smarty_tpl->tpl_vars['scr']->do_else = false;
echo $_smarty_tpl->tpl_vars['scr']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo $_smarty_tpl->tpl_vars['rteincludes']->value;?>

</head>
<body>


<?php echo '<script'; ?>
>
Ext.onReady(function() {
    Ext.QuickTips.init();
    Ext.BLANK_IMAGE_URL = MODx.config.manager_url+'assets/ext3/resources/images/default/s.gif';
    <?php if ($_smarty_tpl->tpl_vars['rtecallback']->value) {?>
    MODx.onBrowserReturn = <?php echo $_smarty_tpl->tpl_vars['rtecallback']->value;?>
;<?php }?>
    MODx.ctx = "<?php if ($_smarty_tpl->tpl_vars['_ctx']->value) {
echo $_smarty_tpl->tpl_vars['_ctx']->value;
} else { ?>web<?php }?>";
    MODx.load({
        xtype: 'modx-browser-rte'
        ,auth: '<?php echo $_smarty_tpl->tpl_vars['site_id']->value;?>
'
    });
});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
