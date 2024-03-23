<?php
/* Smarty version 4.5.1, created on 2024-03-23 23:16:34
  from 'C:\xampp\htdocs\Zadanie_3\credit_calc\app\credit_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_65ff54c20aa108_51264977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b496b6060a8c75f470b3d91f59cd4e8972b7fd3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie_3\\credit_calc\\app\\credit_calc.tpl',
      1 => 1711232035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ff54c20aa108_51264977 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
ob_start();
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208031264965ff54c209bc21_29663315', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110616778265ff54c209c5a7_85436748', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_208031264965ff54c209bc21_29663315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_208031264965ff54c209bc21_29663315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa treść stopki wpisana do szablonu głównego z szablonu kalkulatora <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_110616778265ff54c209c5a7_85436748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110616778265ff54c209c5a7_85436748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Zadanie_3\\credit_calc\\lib\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    
<h2>Prosty kalkulator</h2>
    <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/credit_calc.php" method="post" class="pure-form pure-form-stacked">
    <fieldset>
        <label for="id_years">Liczba lat: </label>
        <input id="id_years" type="text" placeholder="Np.'8'" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['years'];?>
"><br>

        <label for="id_cost">Kwota kredytu: </label>
        <input id="id_cost" type="text" placeholder="Np. '400000'" name="cost" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['cost'];?>
"><br>

        <label for="id_percent">Oprocentowanie: </label>
        <input id="id_percent" type="text" placeholder="Np. '6.76'" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['percent'];?>
"><br>
    </fieldset>

    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
    </form>

    <div class="messages">

    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?> 
        <h4>Wynik</h4>
        <p class="res">
        <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </p>
    <?php }?>

    </div>

<?php
}
}
/* {/block 'content'} */
}
