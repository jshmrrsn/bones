<?php require('../app/views/partials/header.php'); ?>

<h1>All Tasks</h1>

<h3>Tasks To-Do:</h3>
<ul>
	<?php foreach($todoTasks as $task) : ?>

		<li class="todo">
			<?= $task->description; ?>		
		</li>
		
	<?php endforeach; ?>
</ul>

<h3>Completed Tasks:</h3>
<ul>
	<?php foreach($completedTasks as $task) : ?>

		<li class="completed">
			<?= $task->description; ?>
		</li>
		
	<?php endforeach; ?>
</ul>

<form method="POST" action="/tasks">
	<input type="text" name="description">
	<button type="submit" class="button">Add Task</button>
</form>

<?php require('../app/views/partials/footer.php'); ?>
