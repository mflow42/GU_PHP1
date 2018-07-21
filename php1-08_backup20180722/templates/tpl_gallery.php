<!--разметка для галереи-->
<div class="gallery">
    <div class="gallery-wrapper">
        <?php foreach ($files as $img): ?>
            <a class="gallery__image-wrapper" href="/photo?id=<?=$img['id']?>" target="_top">
                <img class="gallery__image-file" src="/img/thumbnails/<?= $img['name'] ?>" alt="image">
            </a>
        <?php endforeach; ?>
    </div>
</div>
