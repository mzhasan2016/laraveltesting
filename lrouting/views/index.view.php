<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
	<nav>
    	<ul>
        	<li><a href="/lrouting/about.php">About Page</a></li>
             <!--<li><a href="/localhost:8080/lrouting/about.php">About Page</a></li>-->

        	<li><a href="/lrouting/contact.php">Contct Page</a></li>
         </ul>
    </nav>

    <ul>
        <?php foreach($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
             </li>
        <?php endforeach; ?>
        <!--<?php if ($task->completed) : ?>
            	<strike>
            <?php endif; ?>
			<?= $task->description; ?>
            <?php if ($task->completed) : ?>
            	</strike>
            <?php endif; ?>-->
    </ul>
</body>
</html>