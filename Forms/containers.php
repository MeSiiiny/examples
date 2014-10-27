<?php

/**
 * Nette\Forms containers example.
 */


require __DIR__ . '/vendor/autoload.php';

use Nette\Forms\Form,
	Nette\Diagnostics\Debugger,
	Nette\Diagnostics\Dumper;

Debugger::enable();


$form = new Form;

// group First person
$form->addGroup('First person');

$first = $form->addContainer('first');
$first->addText('name', 'Your name:');
$first->addText('email', 'Email:');
$first->addText('street', 'Street:');
$first->addText('city', 'City:');

// group Second person
$form->addGroup('Second person');

$second = $form->addContainer('second');
$second->addText('name', 'Your name:');
$second->addText('email', 'Email:');
$second->addText('street', 'Street:');
$second->addText('city', 'City:');

// group for button
$form->addGroup();

$form->addSubmit('submit', 'Send');


if ($form->isSuccess()) {
	echo '<h2>Form was submitted and successfully validated</h2>';
	Dumper::dump($form->getValues());
	exit;
}


?>
<!DOCTYPE html>
<meta charset="utf-8">
<title>Nette\Forms containers example | Nette Framework</title>
<link rel="stylesheet" media="screen" href="assets/style.css" />

<h1>Nette\Forms containers example</h1>

<?php echo $form ?>

<footer><a href="http://doc.nette.org/en/forms">see documentation</a></footer>
