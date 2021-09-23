<title>Reviews</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($reviews as $review) : ?>
    <article>
        <h1>
            <a href="/reviews/<?= $review->slug; ?>">
                <?= $review->title; ?>
            </a>
        </h1>

        <div>
            <?= $review->excerpt; ?>
        </div>
    </article>
    <?php endforeach; ?>
</body>
