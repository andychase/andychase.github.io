<?php /* Smarty version Smarty-3.1.8, created on 2013-03-02 00:23:31
         compiled from ".\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301514fab332118c6b6-45710148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dfb6d298930cfbbe7fcc2824c930c4965e662f1' => 
    array (
      0 => '.\\index.tpl',
      1 => 1362212225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301514fab332118c6b6-45710148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fab3321300750_95888053',
  'variables' => 
  array (
    'days_until_birthday' => 0,
    'days_until_christmas' => 0,
    'dota' => 0,
    'reddit' => 0,
    'files' => 0,
    'data' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fab3321300750_95888053')) {function content_4fab3321300750_95888053($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_spacify')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\modifier.spacify.php';
if (!is_callable('smarty_block_markdown')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\block.markdown.php';
if (!is_callable('smarty_function_mailto')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.mailto.php';
if (!is_callable('smarty_function_featuredfiles')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.featuredfiles.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <meta name="description" content="Andy Chase from Tigard, Oregon" />
        <link rel="openid.server" href="http://asperous.us/openid/index.php" /> 
        <link rel="openid.delegate" href="http://asperous.us/openid/index.php" />
        <link rel="pavatar" href="http://asperous.us/openid/pavatar.png" />
        
        <title>Asperous.us // Andy Chase's website</title>
        
        <!-- JavaScript -->
        <script type="text/javascript" src="http://use.typekit.com/eyu2uhm.js"></script>
        <script type="text/javascript">try{ Typekit.load();}catch(e){ }</script>
        
        <!-- Style -->
        <link type="text/css" rel="stylesheet" href="./static/sitestyle.css" />
    </head>
    
    
    
<body>
    <div class="the tower">
        <h1 style="background-color: red;"><?php echo smarty_modifier_spacify("ASPEROUS.US");?>
</h1>
        <div class="left side">
            
            
<?php $_smarty_tpl->smarty->_tag_stack[] = array('markdown', array()); $_block_repeat=true; echo smarty_block_markdown(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

## About me ##
Andy Chase <br />
[Tigard, Or](http://en.wikipedia.org/wiki/Tigard,_Oregon) <br />
<?php echo smarty_function_mailto(array('text'=>"theandychase<br/>@gmail.com",'address'=>"theandychase@gmail.com",'encode'=>'javascript'),$_smarty_tpl);?>
  

<br />

[[LinkedIn]](http://www.linkedin.com/pub/andy-chase/51/304/30a)  <br />
[[Facebook]](http://facebook.com/asper)  <br /><br />
<?php if ($_smarty_tpl->tpl_vars['days_until_birthday']->value<30&&$_smarty_tpl->tpl_vars['days_until_birthday']->value>1){?>
*It's almost my birthday!*
<?php }elseif($_smarty_tpl->tpl_vars['days_until_birthday']->value==0){?>
*It's my birthday!*
<?php }elseif($_smarty_tpl->tpl_vars['days_until_christmas']->value<40&&$_smarty_tpl->tpl_vars['days_until_christmas']->value>1){?>
*<?php echo $_smarty_tpl->tpl_vars['days_until_christmas']->value;?>
 day<?php if ($_smarty_tpl->tpl_vars['days_until_christmas']->value==1){?>s<?php }?> until Christmas!*
<?php }elseif(floor($_smarty_tpl->tpl_vars['days_until_christmas']->value)==0){?>
*It's Christmas!*
<?php }?>

[[Amzn] Wishlist](http://amzn.com/w/3RA2F8HIILNSL)

<br />

[[Twitter]](http://twitter.com/asperous) <br />

<br />
[[Hypem] fav. music](http://hypem.com/asperous)
<br /><br />
[[Steam]
    <?php echo $_smarty_tpl->tpl_vars['dota']->value;?>
 <br /> Dota2 Hrs.](http://steamcommunity.com/id/asperous)

[[Reddit]
    <?php echo $_smarty_tpl->tpl_vars['reddit']->value;?>
<br />  Karma](http://www.reddit.com/user/asperous/)

<br /><br /> 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_markdown(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



        </div>
        <div class="right side">
    
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('markdown', array()); $_block_repeat=true; echo smarty_block_markdown(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

## My work ##
[[YouTube] Movies](http://youtube.com/user/asperous) <br />
[[Github] Code](https://github.com/asperous) <br />
[[Flickr] Pics](http://www.flickr.com/photos/asperous/sets/)
<br /><br />
[R&#233;sum&#233;](http://dl.dropbox.com/u/27512039/resume.pdf)

<br /><br /> 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_markdown(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </div>
        <!-- Featured items -->
        <h2 id="latest">Latest</h2>
<?php echo smarty_function_featuredfiles(array('dir'=>"./featured",'var'=>"files"),$_smarty_tpl);?>

<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['boxes']['total'] = $_smarty_tpl->tpl_vars['data']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['boxes']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['file']->value = $_smarty_tpl->tpl_vars['data']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['boxes']['iteration']++;
?>
        <div class="box" >
            <a href="http://<?php echo $_smarty_tpl->tpl_vars['data']->value[0];?>
" ><img src="./featured/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" /></a>
<?php if ($_smarty_tpl->tpl_vars['data']->value[1]!=''){?>
            <h3><?php echo $_smarty_tpl->tpl_vars['data']->value[1];?>
</h3>
<?php }?>
        </div>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['boxes']['total']>3&&$_smarty_tpl->getVariable('smarty')->value['foreach']['boxes']['iteration']==3){?>
        <div id="more">
            <h2>(more)</h2>
        <div id="showonmouseover">
<?php }?> 

<?php } ?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['boxes']['total']>3){?>
        </div>
        </div>
<?php }?>
    
    </div>

</body>
</html><?php }} ?>