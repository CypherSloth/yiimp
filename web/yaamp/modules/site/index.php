<?php

$algo = user()->getState('yaamp-algo');

JavascriptFile("/extensions/jqplot/jquery.jqplot.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.dateAxisRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.barRenderer.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.highlighter.js");
JavascriptFile("/extensions/jqplot/plugins/jqplot.cursor.js");
JavascriptFile('/yaamp/ui/js/auto_refresh.js');

$height = '240px';

$min_payout = floatval(YAAMP_PAYMENTS_MINI);
$min_sunday = $min_payout/10;

$payout_freq = (YAAMP_PAYMENTS_FREQ / 3600)." hours";
?>

<div id='resume_update_button' style='color: #444; background-color: #ffd; border: 1px solid #eea;
	padding: 10px; margin-left: 20px; margin-right: 20px; margin-top: 15px; cursor: pointer; display: none;'
	onclick='auto_page_resume();' align=center>
	<b>Auto refresh is paused - Click to resume</b></div>


<!--<p class="main-left-box" align="center" style='padding:10px; font-size:  1.25em; background-color: #ffffee; font-family: monospace;'>
        Pool is currently in alpha. Stats are being recorded, payouts may not occur at stated times.</p>-->



<table cellspacing=20 width=100%>
<tr><td valign=top width=50%>

<!--  -->

<div class="main-left-box">
<div class="main-left-title">GigaRho MINING POOL</div>
<div class="main-left-inner">

<ul>

<li>GigaRho's cryptocurrency mining multipool is a multi-algorithm profit-switching pool that dynamically calculates the available crypto options that will enable high profits with convert to Bitcoin option enabled with c=BTC in miner's password field. </li>
<li>The philosophy of this pool is to point our collective hashrate at coins that will allow everyone to have the highest profitability for their miner's work.</li>
<li>With that in mind, more coins for each algorithm are under constant evaluation and shall be gradually added into the site when it will benefit profitability.</li>
<li>No registration is required, we do payouts in Bitcoin or any coin that we have enough supply. Use your wallet address as the username.</li>
<li>&nbsp;</li>
<li>Payouts are made automatically every<b> <?= $payout_freq ?></b> for all balances above <b><?= $min_payout ?></b>, or <b><?= $min_sunday ?></b> on Sunday.</li>
<li>For some coins, there is an initial delay before the first payout, please wait as this can be normal. With our service, the coins you mine may be exchanged into BTC if you choose that option which adds time before that amount will mature for payout.</li>
<li>Found blocks shall be distributed proportionally among valid submitted shares.</li>
<li><u><b>NOTE:</b></u> Any mistake on the part of the miner(you) by inputting your information incorrectly may lead to forfeiture of earnings.</li>
<li>Any legitimate concerns about your earnings may be addressed through our forums. By using this service you agree that a mistake on your part may not be possible for us to fix.</li>
<br/>

</ul>
</div></div>
<br/>

<!--  -->

<div class="main-left-box">
<div class="main-left-title">STRATUM CONNECTION SERVERS</div>
<div class="main-left-inner">

<ul>
<li>If you are connecting with any miner that has entry fields for Server URL, username and password then use the method directly below:</li>
<li><b>United States Server:</b>
<p class="main-left-box" style='padding:3px; font-size:  .8em; background-color: #ffffee; font-family: monospace;'>
	stratum+tcp://<?= YAAMP_STRATUM_URL ?>:&lt;PORT_of_Algo_You_Want_to_Mine_On&gt#xnsub<br> 
	Username= &lt;WALLET_ADDRESS&gt;<br>
	Password= c=BTC (or c=NAME_OF_COIN_WE_HAVE_IN_STOCK)</p>
</li>
<li>Adding #xnsub at the end of the stratum address as shown above should allow your miners to more efficiently connect and transact shares with our server. Please check our difficulty link below if you want to set a static difficulty and have complications.</li>
<li>
<p class="main-left-box" style='padding:3px; font-size: .8em; background-color: #ffffee; font-family: monospace;'>
	-o stratum+tcp://<?= YAAMP_STRATUM_URL ?>:&lt;PORT&gt; -u &lt;WALLET_ADDRESS&gt; [-p &lt;OPTIONS&gt;]</p>
</li>

<?php if (YAAMP_ALLOW_EXCHANGE): ?>
<li>&lt;WALLET_ADDRESS&gt; can be one of any currency we mine or a BTC address.</li>
<?php else: ?>
<li>&lt;WALLET_ADDRESS&gt; should be valid for the currency you mine. <b>DO NOT USE a BTC address here, the auto exchange is disabled</b>!</li>
<?php endif; ?>
<li>As optional password, you can use <b>-p c=&lt;SYMBOL&gt;</b> to set your BTC address or any coin you want that we have in supply. This option may malfunction if the wrong currency input is detected. Please create a new address for your miner input in such a case.</li>
<li>See the "Pool Status" area on the right for PORT numbers. Algorithms without associated coins are disabled.</li>

<br>

</ul>
</div></div><br>

<!--  -->

<div class="main-left-box">
<div class="main-left-title">LINKS</div>
<div class="main-left-inner">

<ul>

<!--<li><b>BitcoinTalk</b> - <a href='https://bitcointalk.org/index.php?topic=508786.0' target=_blank >https://bitcointalk.org/index.php?topic=508786.0</a></li>-->
<!--<li><b>IRC</b> - <a href='http://webchat.freenode.net/?channels=#yiimp' target=_blank >http://webchat.freenode.net/?channels=#yiimp</a></li>-->

<li><b>Forums</b> - <a href='https://forum.gigarho.com'>https://forum.gigarho.com</a></li>
<li><b>Twitter</b> - <a href='https://twitter.com/gigarho'>https://twitter.com/gigarho</a></li>
<li><b>API</b> - <a href='/site/api'>http://<?= YAAMP_SITE_URL ?>/site/api</a></li>
<li><b>Difficulty</b> - <a href='/site/diff'>http://<?= YAAMP_SITE_URL ?>/site/diff</a></li>
<?php if (YIIMP_PUBLIC_BENCHMARK): ?>
<li><b>Benchmarks</b> - <a href='/site/benchmarks'>http://<?= YAAMP_SITE_URL ?>/site/benchmarks</a></li>
<?php endif; ?>

<?php if (YAAMP_ALLOW_EXCHANGE): ?>
<li><b>Algo Switching</b> - <a href='/site/multialgo'>http://<?= YAAMP_SITE_URL ?>/site/multialgo</a></li>
<?php endif; ?>

<br>

</ul>
</div></div><br>

<!--  -->

<a class="twitter-timeline" data-theme="dark" href="https://twitter.com/gigarho">Tweets by GigaRho</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>




</td><td valign=top>

<!--  -->

<div id='pool_current_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

<div class="main-left-box">
<div class="main-left-title">Rent More Hashpower</div>
<div class="main-left-inner">

<ul>
<li>Want to increase your profits even more by placing a timed order for more hashpower? Head on over to one of our recommended affiliate websites to bid on a hashing contract to use with our pool services.</li>
<li>Be sure to click on the image below to be directed to their site and if you successfully initiate an order with them, just enter our pool connection details for your preferred algorithm (i.e. Scrypt) and begin mining!<li>
<center>
<a href="https://www.nicehash.com/buy?refby=639028" target="_blank">
<img src="/images/stuff/nhb1short.png" />
</a>
<a href="https://www.miningrigrentals.com/?ref=48970" target="_blank">
<img src="/images/stuff/mrr1long.png" width="250" height="60"/>
</a>
</center>
</ul>
</div></div>

<br>

<div id='pool_history_results'>
<br><br><br><br><br><br><br><br><br><br>
</div>

</td></tr></table>

<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br>

<script>

function page_refresh()
{
	pool_current_refresh();
	pool_history_refresh();
}

function select_algo(algo)
{
	window.location.href = '/site/algo?algo='+algo+'&r=/';
}

////////////////////////////////////////////////////

function pool_current_ready(data)
{
	$('#pool_current_results').html(data);
}

function pool_current_refresh()
{
	var url = "/site/current_results";
	$.get(url, '', pool_current_ready);
}

////////////////////////////////////////////////////

function pool_history_ready(data)
{
	$('#pool_history_results').html(data);
}

function pool_history_refresh()
{
	var url = "/site/history_results";
	$.get(url, '', pool_history_ready);
}

</script>

