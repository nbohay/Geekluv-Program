<?php include"common.php"; top();?>

<!--
Create a new account form. 
Name has 16 characters
Gender has a radio buttom for M or F
Age has 6 character box
Personality with 6 character box and link to site
Fav OS with three dropdowns- Windows, Max, Linux
Age has 6 character box with a max of 99 years old
Submit 

 -->

<div>
	<form action="signup-submit.php" method="post">
	<fieldset>
	<legend>New User Signup:</legend>

	<strong>Name:</strong><input type="text" name="name" size="16"/>
	<br/>

	<strong>Gender:</strong>
	<input type="radio" name="gender" value="M"/>Male
	<input type="radio" name="gender" value="F"/>Female
	<br/>

	<strong>Age:</strong><input type="text" name="age" size="6" maxlength="2"/>
	<br/>

	<strong>Personality type:</strong>
	<input type="text" name="personality-type" size="6" maxlength="4" />
	(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
	<br/>

	<strong>Favorite OS:</strong>
	<select name="OS">
	<option selected="selected">Windows</option>
	<option>Mac OS X</option>
	<option>Linux</option></select>
	<br/>

	<strong>Seeking age:</strong>
	<input type="text" name="min-age" size="6" placeholder="min"  maxlength="2"/> to
	<input type="text" name="max-age" size="6" placeholder="max"  maxlength="2"/>
	<br/>
	                        
	<input type="submit" value="Sign Up">

	</fieldset>
	</form>
</div>

<?php bottom();?>