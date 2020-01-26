<?php
/* Smarty version 3.1.33, created on 2020-01-26 21:25:17
  from '/website/suple/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2df5ad498c38_64304134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed0c6ea852ab13cba0d33fe0c59212b3ffe14022' => 
    array (
      0 => '/website/suple/themes/classic/templates/index.tpl',
      1 => 1580070032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2df5ad498c38_64304134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12739869725e2df5ad4923e6_13893251', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1956781085e2df5ad493312_01041408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_11305895825e2df5ad4956a2_77995799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5359412795e2df5ad494846_23605716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11305895825e2df5ad4956a2_77995799', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12739869725e2df5ad4923e6_13893251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12739869725e2df5ad4923e6_13893251',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1956781085e2df5ad493312_01041408',
  ),
  'page_content' => 
  array (
    0 => 'Block_5359412795e2df5ad494846_23605716',
  ),
  'hook_home' => 
  array (
    0 => 'Block_11305895825e2df5ad4956a2_77995799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1956781085e2df5ad493312_01041408', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5359412795e2df5ad494846_23605716', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
