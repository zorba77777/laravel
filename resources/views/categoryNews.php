<?php foreach ($categoryNews as $news): ?>
    <div>
        <a href="<?= route('news.show', ['id' => $news['id']]) ?>"><?= $news['text'] ?></a>
    </div>
<?php endforeach; ?>
