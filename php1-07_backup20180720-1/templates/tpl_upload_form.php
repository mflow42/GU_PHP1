<?=$message?>
<!--разметка для формы загрузки картинок-->
<div class="gallery-upload">
    <form class="gallery__form" action="" enctype="multipart/form-data" method="post">
        <input type="hidden" name="upload" value="image"/>
        <input type="file" name="img" id="file">
        <input type="submit" value="Загрузить">
    </form>
</div>