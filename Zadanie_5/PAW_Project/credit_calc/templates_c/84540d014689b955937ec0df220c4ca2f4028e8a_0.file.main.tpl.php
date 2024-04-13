<?php
/* Smarty version 4.5.1, created on 2024-04-13 19:01:24
  from 'C:\xampp\htdocs\PAW_Project\credit_calc\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_661aba648d0a75_65732973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84540d014689b955937ec0df220c4ca2f4028e8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW_Project\\credit_calc\\templates\\main.tpl',
      1 => 1711921461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661aba648d0a75_65732973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? 'Opis domyślny' ?? null : $tmp);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
    <link rel="icon" type="image" href="https://cdn.pixabay.com/photo/2023/03/06/04/26/calculator-7832583_1280.png">
</head>
<body>

<div id = "wrapper">

    <div id = "main">
        <div class = "inner">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1713603656661aba648ce1a6_15378181', 'header');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76805649661aba648ce8c2_73189723', 'beforeContent');
?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_513377395661aba648ceea8_72367644', 'content');
?>

        </div>
    </div>

    <div id="sidebar">
        <div class = "inner">

                <div class= "menu">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1362972127661aba648cf457_62211658', 'menu');
?>

                </div>

                <div class= "miniPost">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1321249515661aba648cf9d2_47752301', 'miniPost');
?>

                </div>
                
                <div class= "kontakt">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_297817226661aba648cff40_40003611', 'kontakt');
?>

                </div>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1466548580661aba648d04b5_71870404', 'footer');
?>

        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'header'} */
class Block_1713603656661aba648ce1a6_15378181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1713603656661aba648ce1a6_15378181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść headera <?php
}
}
/* {/block 'header'} */
/* {block 'beforeContent'} */
class Block_76805649661aba648ce8c2_73189723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'beforeContent' => 
  array (
    0 => 'Block_76805649661aba648ce8c2_73189723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść <?php
}
}
/* {/block 'beforeContent'} */
/* {block 'content'} */
class Block_513377395661aba648ceea8_72367644 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_513377395661aba648ceea8_72367644',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości <?php
}
}
/* {/block 'content'} */
/* {block 'menu'} */
class Block_1362972127661aba648cf457_62211658 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'menu' => 
  array (
    0 => 'Block_1362972127661aba648cf457_62211658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartości menu
                <?php
}
}
/* {/block 'menu'} */
/* {block 'miniPost'} */
class Block_1321249515661aba648cf9d2_47752301 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'miniPost' => 
  array (
    0 => 'Block_1321249515661aba648cf9d2_47752301',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartości mini-postow
                <?php
}
}
/* {/block 'miniPost'} */
/* {block 'kontakt'} */
class Block_297817226661aba648cff40_40003611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'kontakt' => 
  array (
    0 => 'Block_297817226661aba648cff40_40003611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    Domyślna zawartość kontaktu
                <?php
}
}
/* {/block 'kontakt'} */
/* {block 'footer'} */
class Block_1466548580661aba648d04b5_71870404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1466548580661aba648d04b5_71870404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki <?php
}
}
/* {/block 'footer'} */
}
