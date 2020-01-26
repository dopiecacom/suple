<?php
/* Smarty version 3.1.33, created on 2020-01-26 21:25:17
  from '/website/suple/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2df5ad4a78b1_54510916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73b3a191effd70718178f524f4d510019c964b48' => 
    array (
      0 => '/website/suple/themes/classic/templates/page.tpl',
      1 => 1580070031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2df5ad4a78b1_54510916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1852448585e2df5ad49e4c4_10323169', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7259653835e2df5ad49fc05_03026172 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_9258074455e2df5ad49eee4_01128603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7259653835e2df5ad49fc05_03026172', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16214433795e2df5ad4a3240_55577796 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10305188685e2df5ad4a40b6_75079240 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16624049875e2df5ad4a2802_25772523 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16214433795e2df5ad4a3240_55577796', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10305188685e2df5ad4a40b6_75079240', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6924671935e2df5ad4a60b0_62239252 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4483328975e2df5ad4a56b8_69424959 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6924671935e2df5ad4a60b0_62239252', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1852448585e2df5ad49e4c4_10323169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1852448585e2df5ad49e4c4_10323169',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_9258074455e2df5ad49eee4_01128603',
  ),
  'page_title' => 
  array (
    0 => 'Block_7259653835e2df5ad49fc05_03026172',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16624049875e2df5ad4a2802_25772523',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16214433795e2df5ad4a3240_55577796',
  ),
  'page_content' => 
  array (
    0 => 'Block_10305188685e2df5ad4a40b6_75079240',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4483328975e2df5ad4a56b8_69424959',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6924671935e2df5ad4a60b0_62239252',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9258074455e2df5ad49eee4_01128603', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16624049875e2df5ad4a2802_25772523', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4483328975e2df5ad4a56b8_69424959', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
