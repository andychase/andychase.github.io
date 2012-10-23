<?php /* Smarty version Smarty-3.1.8, created on 2012-05-09 20:40:43
         compiled from ".\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301514fab332118c6b6-45710148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dfb6d298930cfbbe7fcc2824c930c4965e662f1' => 
    array (
      0 => '.\\index.tpl',
      1 => 1336621183,
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
    'feed' => 0,
    'steam' => 0,
    'karma' => 0,
    'files' => 0,
    'data' => 0,
    'file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fab3321300750_95888053')) {function content_4fab3321300750_95888053($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_spacify')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\modifier.spacify.php';
if (!is_callable('smarty_block_markdown')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\block.markdown.php';
if (!is_callable('smarty_function_mailto')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.mailto.php';
if (!is_callable('smarty_function_json')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.json.php';
if (!is_callable('smarty_modifier_linkify')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\modifier.linkify.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_function_scrapeweb')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.scrapeweb.php';
if (!is_callable('smarty_function_jsondata')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.jsondata.php';
if (!is_callable('smarty_function_featuredfiles')) include 'C:\\Users\\a5c\\Desktop\\ab\\Apps\\xampp\\htdocs\\libs\\plugins\\function.featuredfiles.php';
?><?php echo '<?xml';?> version="1.0" encoding="UTF-8"<?php echo '?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <!-- Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="<?php echo htmlspecialchars("-=======:]>>>>>", ENT_QUOTES, 'UTF-8', true);?>
" />
        <link rel="openid.server" href="http://asperous.us/openid/index.php" /> 
        <link rel="openid.delegate" href="http://asperous.us/openid/index.php" />
        <link rel="pavatar" href="http://asperous.us/openid/pavatar.png" />
        
        <title>Asperous.us // Andy Chase's website</title>
        
        <!-- JavaScript -->
        <script type="text/javascript" src="http://use.typekit.com/eyu2uhm.js"></script>
        <script type="text/javascript">try{ Typekit.load();}catch(e){ }</script>
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="./static/less.css" />
        <link type="text/css" rel="stylesheet" href="./static/sitestyle.css" />
    </head>
    
    
    
<body>
    <div class="the tower">
        <h1 style="background-color: red;"><?php echo smarty_modifier_spacify("ASPEROUS.US");?>
</h1>
        <div class="left side">
            
            
<?php $_smarty_tpl->smarty->_tag_stack[] = array('markdown', array()); $_block_repeat=true; echo smarty_block_markdown(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

## About me ##
Andy Chase  
[Tigard, Or](http://en.wikipedia.org/wiki/Tigard,_Oregon)  
<?php echo smarty_function_mailto(array('text'=>"theandychase<br/>@gmail.com",'address'=>"theandychase@gmail.com",'encode'=>'javascript'),$_smarty_tpl);?>
  
<br />
[[LinkedIn]](http://www.linkedin.com/pub/andy-chase/51/304/30a)  
[[Facebook]](http://facebook.com/asper)  
[[PDF] Resume](http://dl.dropbox.com/u/27512039/resume.pdf)  
<br />

<?php ob_start();?><?php echo preg_replace('!\s+!u', '',"http://api.twitter.com/1/statuses/user_timeline.json
            ?exclude_replies=true
            &oauth_token=14402880-qIo9493d6OKOwHFyeJ8r5OkbD8TGk9qMsrw1aUUhs
            &screen_name=asperous");?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_json(array('var'=>"feed",'url'=>$_tmp1),$_smarty_tpl);?>

<?php ob_start();?><?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['feed']->value[0]['text']);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=''){?>
<i><?php echo smarty_modifier_linkify($_smarty_tpl->tpl_vars['feed']->value[0]['text']);?>
 on <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['feed']->value[0]['created_at'],12,'');?>
</i>
<?php }?>
[[Twitter]](http://twitter.com/asperous)
   
<br />
<?php echo smarty_function_scrapeweb(array('url'=>"http://www.reddit.com/user/asperous/",'find'=>".karma",'var'=>"karma"),$_smarty_tpl);?>

<?php echo smarty_function_scrapeweb(array('url'=>"http://steamcommunity.com/id/asperous/games",'find'=>"script",'var'=>"steam"),$_smarty_tpl);?>

<?php ob_start();?><?php echo substr($_smarty_tpl->tpl_vars['steam']->value[4]->innertext,15);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["steam"] = new Smarty_variable($_tmp3, null, 0);?>
<?php echo smarty_function_jsondata(array('var'=>"steam",'data'=>$_smarty_tpl->tpl_vars['steam']->value,'tag'=>"hours_forever"),$_smarty_tpl);?>



[[Hypem] fav. music](http://hypem.com/asperous)
<br /><br />
[[Steam]<br /><?php echo $_smarty_tpl->tpl_vars['steam']->value;?>
  Dota2 Hrs.](http://steamcommunity.com/id/asperous)  
[[Reddit] <?php echo $_smarty_tpl->tpl_vars['karma']->value[0]->innertext;?>
|<?php echo $_smarty_tpl->tpl_vars['karma']->value[1]->innertext;?>
  Karma](http://www.reddit.com/user/asperous/)  
<br /><br />
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_markdown(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



        </div>
        <div class="right side">
    
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('markdown', array()); $_block_repeat=true; echo smarty_block_markdown(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

## My work ##
[[HazardDigital] Proj.s](http://hazarddigital.com/ourwork)  
[[YouTube] Movies](http://youtube.com/user/asperous)  
[[Bitbucket] Code](https://bitbucket.org/asperous)  
[[Picasa] Pictures](https://picasaweb.google.com/116933133784637904048)  
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