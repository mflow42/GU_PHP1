<div class="comments">
    <?php foreach ($comments as $comment): ?>
        <div class="comments__comment" data-id="<?=$comment['id']?>" data-approved="<?=$comment['approved']?>">
            <h1 class="comments__author"><?=$comment['name']?></h1>
            <p class="comments__message"><?=$comment['content']?></p>
        </div>
    <?php endforeach; ?>
</div>

<form class="comments" action="" enctype="multipart/form-data" method="post">
    <input type="hidden" name="upload" value="comment"/>
    Имя: <input type="text" name="name" id=""/>
    <br>
    Комментарий:
    <br>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Отправить">
</form>