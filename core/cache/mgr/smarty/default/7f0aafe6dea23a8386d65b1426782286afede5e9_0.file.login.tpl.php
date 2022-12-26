<?php
/* Smarty version 4.1.0, created on 2022-11-04 17:35:44
  from '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/security/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63654d703824a1_62953391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0aafe6dea23a8386d65b1426782286afede5e9' => 
    array (
      0 => '/home/admin/web/test.b-w-group.ru/public_html/manager/templates/default/security/login.tpl',
      1 => 1667575726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63654d703824a1_62953391 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/admin/web/test.b-w-group.ru/public_html/core/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!doctype html>
<html <?php if ($_smarty_tpl->tpl_vars['_config']->value['manager_direction'] == 'rtl') {?>dir="rtl"<?php }?> lang="<?php echo $_smarty_tpl->tpl_vars['_config']->value['cultureKey'];?>
" xml:lang="<?php echo $_smarty_tpl->tpl_vars['_config']->value['cultureKey'];?>
">
    <head>
        <meta charset="<?php echo $_smarty_tpl->tpl_vars['_config']->value['modx_charset'];?>
">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_title'];?>
 | <?php echo htmlspecialchars(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['_config']->value['site_name']), ENT_QUOTES, 'UTF-8', true);?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex, nofollow">

        <?php if ($_smarty_tpl->tpl_vars['_config']->value['manager_favicon_url']) {?>
            <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_favicon_url'];?>
">
            <link rel="apple-touch-icon" href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_favicon_url'];?>
">
        <?php }?>

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
templates/default/css/login<?php if ($_smarty_tpl->tpl_vars['_config']->value['compress_css']) {?>-min<?php }?>.css">
    </head>
    <body id="login">
        <?php echo $_smarty_tpl->tpl_vars['onManagerLoginFormPrerender']->value;?>


        <div class="l-content">
            <header class="l-header">
                <img alt="MODX CMS/CMF" src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" class="c-logo">
            </header>

            <main class="l-main">
                <?php if ($_smarty_tpl->tpl_vars['show_help']->value) {?>
                    <div id="modx-login-help-block" class="c-help">
                        <h2><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_help_title'];?>
</h2>
                        <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_help_text'];?>

                    </div>
                <?php }?>

                <h1><?php echo $_smarty_tpl->tpl_vars['greeting']->value;?>
</h1>

                <?php if ($_smarty_tpl->tpl_vars['_config']->value['passwordless_activated']) {?>
                                        <form id="modx-login-form" class="c-form" action="" method="post">
                        <input type="hidden" name="login_context" value="mgr">
                        <input type="hidden" name="modhash" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['modhash']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                        <input type="hidden" name="returnUrl" value="<?php echo $_smarty_tpl->tpl_vars['returnUrl']->value;?>
">

                        <p class="lead"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_note_passwordless'];?>
</p>

                        <?php if ((($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                            <p class="is-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        <?php } elseif ((($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                            <p class="is-success"><?php echo (($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                        <?php }?>

                        <label>
                            <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_email'];?>

                            <input
                                    type="text"
                                    id="modx-login-passwordless"
                                    name="passwordless_login_email"
                                    value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_post']->value['passwordless_login'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                                    placeholder="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_magiclink_email_placeholder'];?>
"
                                    required>
                        </label>

                        <button class="c-button" name="magiclink" type="submit" value="1" id="modx-magiclink-btn"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_magiclink_email_button'];?>
</button>
                    </form>

                <?php } else { ?>

                    <?php if (!(($tmp = $_smarty_tpl->tpl_vars['_post']->value['modhash'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                        <form id="modx-login-form" class="c-form can-toggle <?php if ((($tmp = $_smarty_tpl->tpl_vars['_post']->value['username_reset'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>is-hidden<?php }?>" action="" method="post">
                            <input type="hidden" name="login_context" value="mgr">
                            <input type="hidden" name="modhash" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['modhash']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <input type="hidden" name="returnUrl" value="<?php echo $_smarty_tpl->tpl_vars['returnUrl']->value;?>
">

                            <p class="lead"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_note'];?>
</p>

                            <?php if ((($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                                <p class="is-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                            <?php } elseif ((($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                                <p class="is-success"><?php echo (($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                            <?php }?>

                            <label>
                                <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_username'];?>

                                <input type="text" id="modx-login-username" name="username" autocomplete="on" autofocus value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_post']->value['username'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                            </label>

                            <label>
                                <div class="c-password-label">
                                    <span><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_password'];?>
</span>
                                    <?php if ((($tmp = $_smarty_tpl->tpl_vars['allow_forgot_password']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                                        <a class="" id="modx-fl-link" name="forgotpassword"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_forget_your_login'];?>
</a>
                                    <?php }?>
                                </div>
                                <input type="password" id="modx-login-password" name="password" autocomplete="on" required>
                            </label>

                            <div id="rememberme-checkbox">
                                <input type="checkbox" id="modx-login-rememberme" name="rememberme" autocomplete="on" <?php if ((($tmp = $_smarty_tpl->tpl_vars['_post']->value['rememberme'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>checked="checked"<?php }?> value="1">
                                <label for="modx-login-rememberme">
                                    <?php echo $_smarty_tpl->tpl_vars['rememberme']->value;?>

                                </label>
                            </div>

                            <?php echo $_smarty_tpl->tpl_vars['onManagerLoginFormRender']->value;?>


                            <button class="c-button" id="modx-login-btn" name="login" type="submit" value="1"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_button'];?>
</button>
                            <a class="c-button c-button--ghost" href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['site_url'];?>
">
                                <svg class="c-arrow c-arrow--left" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g fill="none" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                    </g>
                                </svg>
                                <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_return_site'];?>

                            </a>
                        </form>

                        <?php if ((($tmp = $_smarty_tpl->tpl_vars['allow_forgot_password']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                            <form action="" method="post" id="modx-forgot-login-form" class="c-form can-toggle <?php if (!(($tmp = $_smarty_tpl->tpl_vars['_post']->value['username_reset'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>is-hidden<?php }?>">
                                <p class="lead"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_forget_your_login_note'];?>
</p>

                                <?php if ((isset($_smarty_tpl->tpl_vars['error_message']->value)) && $_smarty_tpl->tpl_vars['error_message']->value) {?>
                                    <p class="is-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                                <?php } elseif ((isset($_smarty_tpl->tpl_vars['success_message']->value)) && $_smarty_tpl->tpl_vars['success_message']->value) {?>
                                    <p class="is-success"><?php echo (($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                                <?php }?>

                                <label>
                                    <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_username_or_email'];?>

                                    <input type="text" id="modx-login-username-reset" name="username_reset" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_post']->value['username_reset'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                                </label>

                                <button class="c-button" name="forgotlogin" type="submit" value="1" id="modx-fl-btn"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_send_activation_email'];?>
</button>
                                <button name="modx-fl-back-to-login-link" id="modx-fl-back-to-login-link" class="c-button c-button--ghost">
                                    <svg class="c-arrow c-arrow--left" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                        <g fill="none" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                            <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                        </g>
                                    </svg>
                                    <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_back_to_login'];?>

                                </button>
                            </form>
                        <?php }?>
                    <?php } else { ?>
                        <form action="" method="post" id="modx-new-password-form" class="c-form">
                            <input type="hidden" name="modhash" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_post']->value['modhash'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            <p class="lead"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_new_password_note'];?>
</p>

                            <?php if ((($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                                <p class="is-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['error_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                            <?php } elseif ((($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp)) {?>
                                <p class="is-success"><?php echo (($tmp = $_smarty_tpl->tpl_vars['success_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                            <?php }?>

                            <label>
                                <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_new_password'];?>

                                <input type="password" id="modx-login-specified-password" name="specifiedpassword" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_post']->value['specifiedpassword'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" autofocus>
                            </label>
                            <label>
                                <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_confirm_password'];?>

                                <input type="password" id="modx-login-confirm-password" name="confirmpassword" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['_post']->value['confirmpassword'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
                            </label>

                            <?php echo $_smarty_tpl->tpl_vars['onManagerLoginFormRender']->value;?>


                            <button class="c-button" name="login" type="submit" value="1"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_button'];?>
</button>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
" class="c-button c-button--ghost">
                                <svg class="c-arrow c-arrow--left" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                    <g fill="none" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                                        <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
                                    </g>
                                </svg>
                                <?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_back_to_login'];?>

                            </a>
                        </form>
                    <?php }?>
                <?php }?>
            </main>
            <footer class="l-footer">
                <div class="c-languageselect">
                    <select name="manager_language" id="modx-login-language-select" class="c-languageselect__select" aria-label="<?php echo $_smarty_tpl->tpl_vars['_config']->value['cultureKey'];?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'native', false, 'language');
$_smarty_tpl->tpl_vars['native']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value => $_smarty_tpl->tpl_vars['native']->value) {
$_smarty_tpl->tpl_vars['native']->do_else = false;
?>
                            <option lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" aria-label="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['native']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['language']->value == $_smarty_tpl->tpl_vars['_config']->value['cultureKey']) {?> selected<?php }?>><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['native']->value);?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <span class="c-languageselect__arrow"></span>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['show_help']->value) {?>
                    <a href="#help" class="c-helplink" id="modx-login-help-trigger"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['login_help_button_text'];?>
</a>
                <?php }?>
            </footer>
        </div>
        <div class="l-background" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['background']->value;?>
)"></div>

        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_config']->value['manager_url'];?>
assets/modext/sections/login.js"><?php echo '</script'; ?>
>
    </body>
</html>
<?php }
}
