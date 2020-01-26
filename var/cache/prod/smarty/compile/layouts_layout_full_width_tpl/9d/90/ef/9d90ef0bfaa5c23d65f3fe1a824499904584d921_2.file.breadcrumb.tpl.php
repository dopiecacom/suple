<?php
/* Smarty version 3.1.33, created on 2020-01-26 21:25:17
  from '/website/suple/themes/classic/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2df5ad613888_19197057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d90ef0bfaa5c23d65f3fe1a824499904584d921' => 
    array (
      0 => '/website/suple/themes/classic/templates/_partials/breadcrumb.tpl',
      1 => 1580070031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2df5ad613888_19197057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10316603195e2df5ad604286_08860274', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_10968813455e2df5ad60f280_43727524 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_10316603195e2df5ad604286_08860274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_10316603195e2df5ad604286_08860274',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_10968813455e2df5ad60f280_43727524',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10968813455e2df5ad60f280_43727524', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
