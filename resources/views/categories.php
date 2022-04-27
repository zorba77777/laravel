<?php foreach ($categories as $category): ?>
    <div>
        <a href="<?= route('categories.show', ['category' => $category]) ?>"><?= $category ?></a>
    </div>
<?php endforeach; ?>
