<?php require('../app/views/partials/header.php'); ?>

<h1>Dashboard</h1>

<h2>All Tasks:</h2>
<ul>
	<?php foreach($tasks as $task) : ?>

		<li class="<?php echo ( $task->completed ? 'completed' : '' ); ?>">
			<?= $task->description; ?>		
		</li>
		
	<?php endforeach; ?>
</ul>

<?php require('../app/views/partials/footer.php'); ?>
