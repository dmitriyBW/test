<?php
/* Smarty version 4.1.0, created on 2022-11-28 07:17:56
  from '/home/admin/web/test.b-w-group.ru/public_html/core/components/migx/templates/mgr/packagemanagertab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_638460a43f4ac7_95543727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ffc9a696bfb5fc34d463134d483754e783adf21' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/core/components/migx/templates/mgr/packagemanagertab.tpl',
      1 => 1669619849,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_638460a43f4ac7_95543727 (Smarty_Internal_Template $_smarty_tpl) {
?> 
{
    title: '<?php echo $_smarty_tpl->tpl_vars['cmptabcaption']->value;?>
',
    defaults: {
        autoHeight: true
    },
    items: [{
        html: '<p><?php echo $_smarty_tpl->tpl_vars['cmptabdescription']->value;?>
</p>',
        border: false,
        bodyCssClass: 'panel-desc'
    },
    {
        xtype: 'form',
        id: 'migx_packagemanager_form',
        standardSubmit: true,
        url: config.src,
        cls:'main-wrapper',
        items: [{
            xtype: 'textfield',
            name: 'packageName',
            id: 'migxpm_packageName',
            fieldLabel: 'Package Name'
        },
        {
            xtype: 'combo',
            name: 'use_custom_prefix',
            id: 'migxpm_use_custom_prefix',
            fieldLabel: 'table-prefix',
            store: [['0', 'Default Prefix'],['1', 'Custom Prefix']],
            typeAhead: false,
            editable: false,
            forceSelection: true,
            triggerAction: 'all',
            selectOnFocus:true,
            mode: 'local',
            value: '0'            
        },        
        {
            xtype: 'textfield',
            name: 'prefix',
            id: 'migxpm_prefix',
            fieldLabel: 'custom-prefix'
        },
        {
            xtype: 'modx-tabs',
            id: 'migx-tab-packagemanager',
            defaults: {
                border: false,
                autoHeight: true
            },
            border: true,
            items: [{
                title: 'Package',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Create new package-directory and an empty schema-file with <strong>Create Package</strong></p><p>Add this package to Extension-Packages with <strong>Add Extension Package</strong></p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('createPackage')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Create Package',
                    scope: this
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('addExtensionPackage')},
                    cls: 'primary-button migxcmp-button',                  
                    text: 'Add Extension Package',
                    scope: this
                }]
            },{
                title: 'Schema',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Write schema from existing tables with <strong>Write Schema</strong></p><p>Create xpdo-classes and maps if new or manipulate existing maps from schema with <strong>Parse Schema</strong></p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('writeSchema')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Write schema',
                    scope: this
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('parseSchema')},
                    cls: 'primary-button migxcmp-button',
                    text: 'parse Schema',
                    scope: this
                }]
            },{
                title: 'create Tables',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Create tables from schema </p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('createTables')},
                    cls: 'primary-button migxcmp-button',
                    text: 'create Tables',
                    scope: this
                }]
            },{
                title: 'Add fields',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Add missing fields to package-tables from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('addmissing')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Add fields',
                    scope: this
                }]
            },{
                title: 'Remove fields',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Remove in schema not existing fields from package-tables</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('removedeleted')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Remove fields',
                    scope: this
                }]
            },{
                title: 'Update indexes',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Add new indexes from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('checkindexes')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Update indexes',
                    scope: this
                }]
            },{
                title: 'Alter fields',
                layout:'form',
                defaults: {
                    autoHeight: true
                },
                items: [{
                    html: '<p>Alter fields from schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('alterfields')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Alter fields',
                    scope: this
                }]
            },{
                title: 'Xml Schema',
                layout:'form',
                defaults: {
                    autoHeight: false
                },
                items: [{
                    html: '<p>Load/Edit schema</p>',
                    bodyCssClass: 'panel-desc',
                    border: false
                },
                {
                    xtype: 'textarea',
                    name: 'schema',
                    height: '350' ,
                    width: '800' ,
                    id: 'migxpm_schema',
                    fieldLabel: 'Schema'
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('loadSchema')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Load schema',
                    scope: this
                },
                {
                    xtype: 'button',
                    handler: function(){this.updatePackage('saveSchema')},
                    cls: 'primary-button migxcmp-button',
                    text: 'Save schema',
                    scope: this
                }]
            }]
        }]
    }]
}





<?php }
}
