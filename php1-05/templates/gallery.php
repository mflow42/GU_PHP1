<!--разметка для галереи-->
<!--<div class="gallery">
    <div class="gallery-wrapper">
        <?php /*foreach ($files as $img): */?>
            <a class="gallery__image-wrapper" href="/img/normal/<?/*= $img */?>" target="_blank">
                <img class="gallery__image-file" src="/img/thumbnails/<?/*= $img */?>" alt="image">
            </a>
        <?php /*endforeach; */?>
    </div>
</div>-->
<div class="gallery">
    <div class="gallery-wrapper">
        <?php foreach ($files as $img): ?>
            <a class="gallery__image-wrapper" href="/photo.php?id=<?=$img['id']?>" target="_blank">
                <img class="gallery__image-file" src="/img/thumbnails/<?= $img['name'] ?>" alt="image">
            </a>
        <?php endforeach; ?>
    </div>
</div>
<!--разметка для формы загрузки картинок-->
<div class="gallery-upload">
    <form action="" class="gallery__form" enctype="multipart/form-data" method="post">
        <input type="file" name="img" id="file">
        <input type="submit" value="Загрузить">
    </form>
</div>