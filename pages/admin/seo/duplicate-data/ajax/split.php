<?
	$val = $_POST['val'];
	$sentences = explode('.',$val);
	foreach ($sentences as $key => $sentence) {
		if (trim($sentence)) {
?>
	<div id="sentence<?=$key?>-container" class="has-floats" style="margin-bottom:20px;">
    	<div>Sentence <?=$key+1?></div>
		<div style="float:left; margin-right:10px;">
        	<input type="text" id="sentence<?=$key?>" style="width:900px" value="<?=trim($sentence)?>." />
        </div>
        <div style="float:left;">
        	<input type="text" size="2" maxlength="2" value="<?=$key+1?>" />
        </div>
    </div>
<?		
		}
	}
?>