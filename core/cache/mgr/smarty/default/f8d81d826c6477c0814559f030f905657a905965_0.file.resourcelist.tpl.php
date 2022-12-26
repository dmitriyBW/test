<?php
/* Smarty version 4.1.0, created on 2022-12-02 11:35:48
  from '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/element/tv/renders/input/resourcelist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6389e3140cc2e9_70160182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d81d826c6477c0814559f030f905657a905965' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/element/tv/renders/input/resourcelist.tpl',
      1 => 1667575811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6389e3140cc2e9_70160182 (Smarty_Internal_Template $_smarty_tpl) {
?><select id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['opts']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['text'], ENT_QUOTES, 'UTF-8', true);?>
</option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>

<?php echo '<script'; ?>
>
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'combo'
        ,transform: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,itemId: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,triggerAction: 'all'
        ,listClass: 'modx-tv-resourcelist'
        ,width: 400
        ,maxHeight: 300
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
            ,title: '<?php echo htmlspecialchars((($tmp = $_smarty_tpl->tpl_vars['params']->value['title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
'
        <?php }?>
        <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['listWidth'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
            ,listWidth: <?php echo $_smarty_tpl->tpl_vars['params']->value['listWidth'];?>

        <?php }?>
        ,maxHeight: <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['maxHeight'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {
echo $_smarty_tpl->tpl_vars['params']->value['maxHeight'];
} else { ?>300<?php }?>
        ,tpl: '<tpl for="."><div class="x-combo-list-item">{text:htmlEncode}</div></tpl>'
        <?php if ($_smarty_tpl->tpl_vars['params']->value['typeAhead'] == 1 || $_smarty_tpl->tpl_vars['params']->value['typeAhead'] == 'true') {?>
            ,typeAhead: true
            ,typeAheadDelay: <?php if ((($tmp = $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) && (($tmp = $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp) != '') {
echo (($tmp = $_smarty_tpl->tpl_vars['params']->value['typeAheadDelay'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);
} else { ?>250<?php }?>
            ,selectOnFocus: true
        <?php } else { ?>
            ,typeAhead: false
            ,editable: false
        <?php }?>
        
        ,forceSelection: true
        ,msgTarget: 'under'
        ,listeners: {
            select: function(cmp, record, selectedIndex) {
                MODx.fireResourceFormChange();
                if (cmp.lastSelectionText === '-') {
                    cmp.setRawValue('');
                }
            },
            afterrender: function(cmp) {
                if (cmp.lastSelectionText === '-') {
                    cmp.setRawValue('');
                }
            }
        }
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
