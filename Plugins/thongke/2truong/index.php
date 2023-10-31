<?php
	$counter = new Library\Counter($db);
	$row_thongke = $counter->get_counter();
?>

<ul class="thongke ul">
	<li><?=_dangonline?> : <?=$row_thongke['online']?><span>|</span></li>
	<li><?=_thangnay?> : <?=$row_thongke['month']?><span>|</span></li>
	<li><?=_tongtruycap?> : <?=$row_thongke['totalaccess']?></li>
</ul>
