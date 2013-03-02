<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    {* Meta *}
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Andy Chase from Tigard, Oregon" />
    <link rel="openid.server" href="http://asperous.us/openid/index.php" />
    <link rel="openid.delegate" href="http://asperous.us/openid/index.php" />
    <link rel="pavatar" href="http://asperous.us/openid/pavatar.png" />

    <title>Asperous.us // Andy Chase's website</title>

    {* JavaScript *}
    <script type="text/javascript" src="http://use.typekit.com/eyu2uhm.js"></script>
    <script type="text/javascript">try{ Typekit.load();}catch(e){ }</script>

    {* Style *}
    <link type="text/css" rel="stylesheet" href="./static/sitestyle.css" />
</head>

<body>
    <div class="the tower">
        <h1 style="background-color: red;">{"ASPEROUS.US"|spacify}</h1>
        <div class="left side">

{markdown}
## About me ##
Andy Chase <br />
[Tigard, Or](http://en.wikipedia.org/wiki/Tigard,_Oregon) <br />
{mailto text="theandychase<br/>@gmail.com" address="theandychase@gmail.com" encode='javascript'}

<br />

[[LinkedIn]](http://www.linkedin.com/pub/andy-chase/51/304/30a)  <br />
[[Facebook]](http://facebook.com/asper)  <br /><br />
{if $days_until_birthday < 30 && $days_until_birthday > 1}
*It's almost my birthday!*
{elseif $days_until_birthday == 0}
*It's my birthday!*
{elseif $days_until_christmas < 40 && $days_until_christmas > 1}
*{$days_until_christmas} day{if $days_until_christmas == 1}s{/if} until Christmas!*
{elseif floor($days_until_christmas) == 0}
*It's Christmas!*
{/if}

[[Amzn] Wishlist](http://amzn.com/w/3RA2F8HIILNSL)

<br />

[[Twitter]](http://twitter.com/asperous) <br />

<br />
[[Hypem] fav. music](http://hypem.com/asperous)
<br /><br />
[[Steam]
    {$dota} <br /> Dota2 Hrs.](http://steamcommunity.com/id/asperous)

[[Reddit]
    {$reddit}<br />  Karma](http://www.reddit.com/user/asperous/)

<br /><br /> {* <- For space on smallest size*}
{/markdown}


</div>
<div class="right side">


{markdown}
## My work ##
[[YouTube] Movies](http://youtube.com/user/asperous) <br />
[[Github] Code](https://github.com/asperous) <br />
[[Flickr] Pics](http://www.flickr.com/photos/asperous/sets/)
<br /><br />
[R&#233;sum&#233;](http://dl.dropbox.com/u/27512039/resume.pdf)

<br /><br /> {* <- For space on smallest size*}
{/markdown}
{strip}

</div>
{* Featured items *}
    <h2 id="latest">Latest</h2>
    {foreach name=boxes from=$files key=file item=data}
        <div class="box">
            <a href="http://{$data[0]}"><img src="./featured/{$file}" alt="{$file}"/></a>
            {if $data[1] != ""}
                <h3>{$data[1]}</h3>
            {/if}
        </div>
        {if $smarty.foreach.boxes.total > 3 && $smarty.foreach.boxes.iteration==3}
        <div id="more">
            <h2>(more)</h2>
        <div id="showonmouseover">
        {/if}
    {/foreach}
    {if $smarty.foreach.boxes.total > 3}
        </div>
        </div>
    {/if}
</div>

</body>
</html>
{/strip}