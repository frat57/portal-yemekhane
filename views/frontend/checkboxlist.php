<script type="text/javascript">
	function checkall(source){
	checkbox=document.querySelectorAll('input[type="checbox"]');
	for(var i =0; i<checkbox.length;i++){
		if(checbox[i] != source)
	checbox[i].checked = sourc.checked;
	}
	}
</script>
<div>
<table class = "table table-bordered table-condensed">
	<tr>
		<th>Regid</th>
		<th>foods</th>
		<th>Section</th>
		<th><input type 'checbox' onclick = "checkall(this)" /Select</th>
	</tr>
	<?php
	foreach ($std as $s){
	?><td> <?=$s['regid']?></td>	
	<td> <?=$s['foodslist']?></td>	
	<td> <?=$s['section']?></td> 
		<td>
			<input type="checkbox" name="sem[]" value="<?= $d['id'] ?>" id="chk">
		</td>
	</tr>
	<?php} ?>
</table>
</div>