<?php include"common.php"; top();?>
<!--Input name to search for matches-->
		<div>
			<form action="matches-submit.php" method="GET">
			<fieldset>
				<legend>Returning User:</legend>

				<strong>Name:</strong>
				
				<input type="text" name="name" size="16"/>
                <input type="submit" value="View My Matches">
			</fieldset>
			</form>
		</div>

<?php bottom();?>
