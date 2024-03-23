<?php
/* Smarty version 4.5.1, created on 2024-03-23 23:07:48
  from 'C:\xampp\htdocs\Zadanie_3\credit_calc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65ff52b4b283f2_30169534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75536e1c874009aac3b3bd15d3df7098bda1583e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3\\credit_calc\\templates\\main.tpl',
      1 => 1711231486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ff52b4b283f2_30169534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo '<?php'; ?>
 out($page_description); if (!isset($page_description)){ <?php echo '?>'; ?>
 Opis domyślny ... <?php echo '<?php'; ?>
 } <?php echo '?>'; ?>
">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css">
</head>
<body>

<div class="header">
    <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
    <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
    <p>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>

    </p>
</div>

<div class = "content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192747494465ff52b4b27732_87277258', 'content');
?>

</div><!-- content -->

<div class="footer">
    <p>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29565999965ff52b4b27e37_32180089', 'name');
?>

    </p>
    <p>
        Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a> (autor Bartosz Adamek)
    </p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_192747494465ff52b4b27732_87277258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_192747494465ff52b4b27732_87277258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
/* {block 'name'} */
class Block_29565999965ff52b4b27e37_32180089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'name' => 
  array (
    0 => 'Block_29565999965ff52b4b27e37_32180089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki <?php
}
}
/* {/block 'name'} */
}
