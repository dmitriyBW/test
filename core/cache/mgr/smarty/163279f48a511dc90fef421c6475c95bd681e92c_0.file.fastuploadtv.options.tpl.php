<?php
/* Smarty version 4.1.0, created on 2022-11-28 14:10:45
  from '/home/admin/web/test.b-w-group.ru/public_html/core/components/fastuploadtv/elements/tv/input/tpl/fastuploadtv.options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6384c16546af54_11258698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '163279f48a511dc90fef421c6475c95bd681e92c' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/core/components/fastuploadtv/elements/tv/input/tpl/fastuploadtv.options.tpl',
      1 => 1669644462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6384c16546af54_11258698 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tv-input-properties-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
"></div>

<style>
    .fastuploadtvInfo {
        margin-top: 20px;
    }
    .fastuploadtvInfo h4 {
        margin-top: 10px;
    }
    .fastuploadtvInfo ul {
        margin-left:20px;
        font-size:12px;
        margin-top:5px;
        color: #666;
    }
    .fastuploadtvInfo ul li span {
        font-family:mono;
        font-weight:bold;
    }
</style>
<div class="fastuploadtvInfo">
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['options_desc_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = {
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['params']->value, 'v', false, 'k', 'p', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['total'];
?>
 '<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
': '<?php echo strtr($_smarty_tpl->tpl_vars['v']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_p']->value['last'] : null)) {?>,<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};


FastUploadTVLex = <?php echo $_smarty_tpl->tpl_vars['tveulex']->value;?>
;
function __(key){
    return FastUploadTVLex[key];
};


MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,border: false
    ,labelAlign: 'top'
    ,items: [{
        xtype: 'textfield',
        fieldLabel: __('fastuploadtv.save_path'),
        name: 'inopt_path',
        id: 'inopt_path<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
',
        value: params['path'] || '',
        anchors: '98%',
        listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_path<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,html: __('fastuploadtv.save_path_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield',
        fieldLabel: __('fastuploadtv.file_prefix'),
        name: 'inopt_prefix',
        id: 'inopt_prefix<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
',
        value: params['prefix'] || '',
        anchors: '98%',
        listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_prefix<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,html: __('fastuploadtv.file_prefix_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield',
        fieldLabel: __('fastuploadtv.mime_types'),
        name: 'inopt_MIME',
        id: 'inopt_MIME<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
',
        value: params['MIME'] || '',
        anchors: '98%',
        listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_MIME<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,html: __('fastuploadtv.mime_types_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'modx-combo-boolean',
        fieldLabel: __('fastuploadtv.show_value'),
        name: 'inopt_showValue',
        id: 'inopt_showValue<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
',
        value: params['showValue'] || 0,
        anchors: '98%',
        listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_MIME<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,html: __('fastuploadtv.show_value_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'modx-combo-boolean',
        fieldLabel: __('fastuploadtv.show_preview'),
        name: 'inopt_showPreview',
        id: 'inopt_showPreview<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
',
        value: params['showPreview'] || 0,
        anchors: '98%',
        listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_MIME<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
        ,html: __('fastuploadtv.show_preview_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'modx-combo-boolean',
        fieldLabel: __('fastuploadtv.prefix_filename'),
        name: 'inopt_prefixFilename',
        id: 'inopt_prefixFilename<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
',
        value: params['prefixFilename'] || 0,
        anchors: '98%',
        listeners: oc
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
