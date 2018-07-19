<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.07.2018
 * Time: 23:48
 */
?>
<?php foreach ($comments as $comment): ?>
    <div class="comments__comment" data-id="<?=$comment['id']?>" data-approved="<?=$comment['approved']?>">
        <h1 class="comments__message"><?=$comment['name']?></h1>
        <p class="comments__message"><?=$comment['content']?></p>
    </div>
<?php endforeach; ?>
