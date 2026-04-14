<?php // @TODO
$user['name'] = 'Ivy<script src="js/bad.hs"></script>';
$user['age'] = 23.75;
$user['email'] = 'ivy@eg.link/'; // User's email 
// User's name
// User's age
// User's email

$sanitize_user['name'] = FILTER_SANITIZE_FULL_SPECIAL_CHARS;
$sanitize_user['age'] = FILTER_SANITIZE_NUMBER_INT;
$sanitize_user['email'] = FILTER_SANITIZE_EMAIL;

$User = fliter_var_array($user, $sanitize_user);


// HTML Escape filter
// Integer filter
// Email filter

// Sanitize output
?>
<?php include 'includes/header.php'; ?>

<p>Name:  <?= $user['name'] ?></p>
<p>Age:   <?= $user['age'] ?></p>
<p>Email: <?= $user['email'] ?></p>
<pre><?php var_dump($user); ?></pre>

<?php include 'includes/footer.php'; ?>