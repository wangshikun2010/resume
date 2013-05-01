<?php

$salt = "sjdf1237*&ruiI&UTY^234_*&%R^%^";
$level = 20;
$app_name = "License Generator";
$license_key = null;

$inputs = array(
	'customer_name' => array(
		'placeholder' => 'song tun she qu',
		'label' => 'Customer Name',
	),
	'customer_identifier' => array(
		'placeholder' => '',
		'label' => 'Customer Identifier',
	),
	'license_date' => array(
		'placeholder' => date('Ymd'),
		'label' => 'License Date',
	),
);

if (!empty($_POST)) {
	extract($_POST);

	if (isset($customer_name) && !empty($customer_name)
		&& isset($customer_identifier) && !empty($customer_identifier)
		&& isset($license_date) && !empty($license_date)
	) {
		$customer_name = trim($customer_name);
		$customer_identifier = strtolower(trim($customer_identifier));
		$license_date = trim($license_date);
		$data = compact('customer_name', 'customer_identifier', 'license_date');
		$license_key = md5(implode('-', $data) . $salt);

		for ($i=0; $i < $level; $i++) {
			$license_key = md5($license_key . $salt);
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $app_name; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/resume.css" rel="stylesheet">
</head>
<body>

<div class="container" id="main" style="margin-top: 5em;">
	<div class="row">
		<div class="span3">&nbsp;</div>
		<div class="span6">
			<?php if (isset($license_key)): ?>
				<div class="alert alert-error">
					<strong><?php echo $license_key; ?></strong>
				</div>
			<?php else: ?>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form form-horizontal" method="post">
					<fieldset>
						<legend><?php echo $app_name; ?></legend>
						<?php foreach ($inputs as $key => $attributes): ?>
						<div class="control-group">
							<label class="control-label" for="<?php echo $key; ?>"><?php echo $attributes['label']; ?></label>
							<div class="controls">
								<input type="text" id="<?php echo $key; ?>" name="<?php echo $key; ?>" placeholder="<?php echo $attributes['placeholder']; ?>" required>
							</div>
						</div>
						<?php endforeach; ?>
					</fieldset>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-danger">Cancel</button>
					</div>
				</form>
			<?php endif; ?>
		</div>
		<div class="span3">&nbsp;</div>
	</div>
</div>

</body>
</html>

