
<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <!--заполните этот список из массива категорий-->
        <?php foreach ($categories as $category): ?>
         <li class="promo__item promo__item--boards">
            <a class="promo__link" href="pages/all-lots.html"><?=$category;?></a>
         </li>
        <?php endforeach ?>
        </ul>
        
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
    <?php
        function form_price($number)
        {
            return ($number < 1000 ? ceil($number) : number_format(ceil($number), 2, '.', ' ') ). " ₽";
        }
            
    ?>
        <ul class="lots__list">
            <!--заполните этот список из массива с товарами-->
            <?php foreach ($products as $product): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= $product['pic_url']; ?>" width="350" height="260" alt="<?= $product['category']; ?>">
                </div>
                <div class="lot__info">
                    <span class="lot__category">Название категории</span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= strip_tags($product['name']); ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount"><?= form_price($product['price']); ?></span>
                            <span class="lot__cost"><?= form_price($product['price']); ?></span>
                        </div>
                        <?php endforeach ?>
                        <div class="lot__timer timer">
                            12:23
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
</main>
</div>
