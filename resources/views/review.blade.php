<!doctype html>

<title>My Reviews</title>
<link rel="stylesheet" href="/app.css">

<body>
<article>
<h1><?= $review->title; ?></h1>

    <div>
        <?= $review->body; ?>
    </div>
</article>

<a href="/">Go Back</a>
</body>
