
	<!--<nav>
    	<ul>
        	<li><a href="/lrouting/about.php">About Page</a></li>
             <!--<li><a href="/localhost:8080/lrouting/about.php">About Page</a></li>-->

        	<!--<li><a href="/lrouting/contact.php">Contct Page</a></li>
         </ul>
    </nav>-->
    
    <?php include ('partials/head.php'); ?>

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
    <?php include ('partials/footer.php'); ?>
