<br>
<br>
<a href="/index">Назад</a>
<br>
<br>
<img src="<?=$product['imgPath']?>" alt="">
<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>

<form action="basket/add_to_cart" method="post">
    <input type="hidden" name="id" value="<?=$product['id']?>">
    <input type="text" name="qty" id="">
    <input type="submit" value="Добавить в корзину">
</form>