<h2><?php echo $title?></h2>

<?php

echo validation_errors();
	
?>

<?php echo form_open('news/create');?>

<?php echo $error; ?>
<label for="title">Title:</label>

<input type="input" name="title"><br>

<label for="text">Text</label>
<textarea name="text"></textarea><br>

<input type="submit" name="submit" value="Create new Items">

</form>
