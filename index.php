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
<link href="css/general.css" rel="stylesheet">

</head>

<body>

<form action="index.php" method="post">
	<div class = 'calculator'>
	<p>Enter a number in each box and select a mathematical operator</p>
	<div class = 'input1'>
		<label for="num1"> Number 1</label>
		<input type="number" id="num1" name="num1" maxlength="5">
	</div> <!-- end input 1 -->
	<div class = 'operator'>
	<label for="operator">Operator  </label>
	<select id= id="operator" name="operator">
		<option value ="a">+ Addition</option>
		<option value ="s">- Subtraction</option>
		<option value ="m">* Multiplication</option>
		<option value ="d">/ Division</option>
	</select>
	</div><!-- end operator -->
	<div class = 'input2'>
		<label for="num2"> Number 2</label>
		<input type="number" id="num2" name="num2" maxlength="5">
		<br>
	</div><!-- end input 2 -->
	</div><!-- end calculator -->
	<br>
	<div class = 'button'>
		<button type="calculate">Please press this button to calculate the new number</button>
	</div><!-- end button -->
	<br>

</form>

<?php if (!empty($_POST['num1']) && !empty($_POST['num2'])) : ?>
	<div class = 'answer'>
	<?php if ($_POST['operator'] == "a") : ?>
		<?php $ans = $_POST['num1'] + $_POST['num2']; ?>
		<p>The mathematical answer for <?php echo $_POST['num1']; ?> added to <?php echo $_POST['num2']; ?> is <?php echo number_format($ans, 0); ?></p>
	<?php elseif ($_POST['operator'] == "s") : ?>
		<?php $ans = $_POST['num1'] - $_POST['num2']; ?>
		<p>The mathematical answer for <?php echo $_POST['num2']; ?> subtracted from <?php echo $_POST['num1']; ?> is <?php echo number_format($ans, 0); ?></p>
	<?php elseif ($_POST['operator'] == "m") : ?>
		<?php $ans = $_POST['num1'] * $_POST['num2']; ?>
	<p>The mathematical answer for <?php echo $_POST['num1']; ?> multiplied by <?php echo $_POST['num2']; ?> is <?php echo number_format($ans, 0); ?></p>
	<?php elseif ($_POST['operator'] == "d") : ?>
		<?php $ans = $_POST['num1'] / $_POST['num2']; ?>
		<p>The mathematical answer for <?php echo $_POST['num1']; ?> divided by <?php echo $_POST['num2']; ?> is <?php echo number_format($ans, 0); ?></p>
	<?php endif; ?>
	</div><!-- end answer -->
	<br>
	<div class = 'taxes'>
	<p>Taxes are $ <?php echo number_format(($ans * .13), 2); ?></p>
	</div><!-- end taxes -->	

<?php endif; ?>


</body>
</html>