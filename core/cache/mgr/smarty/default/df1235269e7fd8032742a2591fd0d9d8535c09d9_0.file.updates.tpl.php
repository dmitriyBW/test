<?php
/* Smarty version 4.1.0, created on 2022-11-04 17:35:55
  from '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/dashboard/updates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63654d7b1d60a9_38300043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df1235269e7fd8032742a2591fd0d9d8535c09d9' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/dashboard/updates.tpl',
      1 => 1667575723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63654d7b1d60a9_38300043 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modx-grid-updates" class="updates-widget">
    <div class="table-wrapper">
        <table class="table">
            <thead>
            <tr>
                <th><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_type'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_status'];?>
</th>
                <th><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_action'];?>
</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><span class="updates-title">MODX</span></td>
                <?php if ($_smarty_tpl->tpl_vars['modx']->value['updateable']) {?>
                    <td><span class="updates-available"><?php echo $_smarty_tpl->tpl_vars['modx']->value['full_version'];?>
</span></td>
                    <td><a href="https://modx.com/download" class="dashboard-button"
                           target="_blank"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_update'];?>
</a></td>
                <?php } else { ?>
                    <td><span class="updates-ok"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_ok'];?>
</span></td>
                    <td><button class="dashboard-button" disabled><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_update'];?>
</button></td>
                <?php }?>
            </tr>
            <tr>
                <?php if ($_smarty_tpl->tpl_vars['packages']->value['updateable']) {?>
                    <td>
                        <span class="updates-title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_extras'];?>
</span>
                        <span class="updates-updateable">
                            <?php if ($_smarty_tpl->tpl_vars['packages']->value['updateable'] > 10) {?>10+<?php } else {
echo $_smarty_tpl->tpl_vars['packages']->value['updateable'];
}?>
                        </span>
                    </td>
                    <td><span class="updates-available"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_available'];?>
</span></td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
?a=workspaces"
                           class="dashboard-button"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_update'];?>
</a>
                    </td>
                <?php } else { ?>
                    <td><span class="updates-title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_extras'];?>
</span></td>
                    <td><span class="updates-ok"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_ok'];?>
</span></td>
                    <td><button class="dashboard-button" disabled><?php echo $_smarty_tpl->tpl_vars['_lang']->value['updates_update'];?>
</button></td>
                <?php }?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<?php }
}
