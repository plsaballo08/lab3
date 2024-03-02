<!--<h2><?= esc($title) ?></h2>-->

<article>
<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $g): ?>

        <h3><?= esc($g['name']) ?></h3>

        <div class="main">
            <?= esc($g['email']) ?>
	    <br>
            <?= esc($g['website']) ?>
            <br>
            <?= esc($g['comment']) ?>
	    <br>
            <?= esc($g['gender']) ?>
	    <br>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guests for you.</p>

<?php endif ?>
</article>