<?php 

// This will make error messages visible on edumedia
// temporary and should be deleted when code is debugged.
error_reporting(-1);
ini_set('display_errors', 'on');
var_dump($_POST);

?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Tax Calculator</title>
</head>

<body>

<form action="index.php" method="post">
	<div>
		<label for="num1"> Number 1</label>
		<input type="number" id="num1" name="num1" maxlength="5">
		
	<label for="operator">Operator</label>
	<select id= id="operator" name="operator">
		<option value ="a">+ Addition</option>
		<option value ="s">- Subtraction</option>
		<option value ="m">* Multiplication</option>
		<option value ="d">/ Division</option>
	</select>
		
		
		<label for="num2"> Number 2</label>
		<input type="number" id="num2" name="num2" maxlength="5">
		<br>
	</div>
	<div>
	<br>
		<button type="calculate">Please press this button to calculate the new number</button>
	</div>
	<br>

	
<!--	string number_format ( float $number , int $decimals = 0 , string $dec_point = '.' , string $thousands_sep = ',' )
	
// english notation without thousands separator
$english_format_number = number_format($number, 2, '.', ',');
// 1234.57
-->	
</form>

<?php if (!empty($_POST['num1']) && !empty($_POST['num2'])) : ?>
	
	<?php if ($_POST['operator'] == "a") : ?>
		<?php $ans = $_POST['num1'] + $_POST['num2']; ?>
		<p>The mathamatical answer for <?php echo $_POST['num1']; ?> added to <?php echo $_POST['num2']; ?> is <?php echo number_format($ans, 2); ?></p>
	<?php elseif ($_POST['operator'] == "s") : ?>
		<?php $ans = $_POST['num1'] - $_POST['num2']; ?>
		<p>The mathamatical answer for <?php echo $_POST['num2']; ?> subtracted from <?php echo $_POST['num1']; ?> is <?php echo number_format($ans, 2); ?></p>
	<?php elseif ($_POST['operator'] == "m") : ?>
		<?php $ans = $_POST['num1'] * $_POST['num2']; ?>
	<p>The mathamatical answer for <?php echo $_POST['num1']; ?> multiplied by <?php echo $_POST['num2']; ?> is <?php echo number_format($ans, 2); ?></p>
	<?php elseif ($_POST['operator'] == "d") : ?>
		<?php $ans = $_POST['num1'] / $_POST['num2']; ?>
		<p>The mathamatical answer for <?php echo $_POST['num1']; ?> divided by <?php echo $_POST['num2']; ?> is <?php echo number_format($ans, 2); ?></p>
	<?php endif; ?>

	<p>Taxes are $ <?php //echo($ans * .13); ?></p>;
	<p>Taxes are $ <?php echo number_format(($ans * .13), 2); ?></p>;
	

<?php endif; ?>


</body>
</html>