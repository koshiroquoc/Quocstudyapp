<HTML>
<HEAD>
<TITLE>:: Thông Báo ::</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="4; url=<?=$page_transfer?>">
</HEAD>
<BODY>

<div id="alert">
	<img width="64px" src="../Assets/images/icon/<?=($stt) ? 'success' : 'error'?>.png" />
	<div class="title">Thông báo</div>
	<div class="message"><?=$showtext?></div>
	<div class="rlink" style="font-size: 18px;">(<a href="<?=$page_transfer?>"  style=" color: #015364; text-decoration: none;">Click vào đây nếu không muốn đợi lâu</a>)</div>
	<img src="../Assets/images/icon/progress_bar.gif" alt='' />

</div>


</BODY>
</HTML>
<style>
	body{background:#eee}
	
	#alert{background:#fff;padding:40px;margin:30px auto;border-radius:3px;-webkit-box-shadow: 0px 0px 3px 0px rgba(50, 50, 50, 0.3);
-moz-box-shadow:    0px 0px 3px 0px rgba(50, 50, 50, 0.3);
box-shadow:         0px 0px 3px 0px rgba(50, 50, 50, 0.3);	

width:350px;
 margin-top: 100px;

text-align:center;

}
	#alert .message{  color: #FF0000 }
	#alert .rlink{      font-size: 14px;
    margin-top: 10px;
    border-top: 1px solid #ccc;
    padding-top: 10px;  }
	
	
	#alert .title{    text-transform: uppercase;
    font-weight: bold;
    margin: 10px;}



</style>