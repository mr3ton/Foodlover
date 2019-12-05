<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/public/images/logo.jpg" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a href="/">Home</a></li>
                    <li><a href="/site/about">About Us</a></li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Register</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<?= $content ?>


<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/public/images/logo.png" alt=""></div>
                    <div class="about-content">FoodLover это блог, где вы можете найти разнообразные, легких, доступные по цене, полезные для вашего организма, рецепты.</div>
                    <div class="address">
                        <h4 class="text-uppercase">Контактная информация</h4>

                        <p>Украина, город Сумы, ул. Инкогнито</p>

                        <p>За подробной информацией вэлком ту Fika</p>

                        
                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Foodlover</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>И пламенем ярким надежда горит в нас.</p>
                                    </div>
                                    <div class="author-id">
                                        <a href="https://www.instagram.com/_mr3ton_">
                                        <img src="/public/images/author1.png" alt="">
                                        </a>
                                        <div class="author-text">
                                            <h4>Alex</h4>

                                            <h4>Developer</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Разработчики блога очень устали и хотят на Мальдивы. Хотя нет, в начале закройте плиз нас на сто, ведь мы на уровне. А потом и на солнышке греться. Отпутите и подарите им миг счастья.</p>
                                    </div>
                                    <div class="author-id">
                                        <a href="https://www.instagram.com/mrs_opium">
                                        <img src="/public/images/author2.png" alt="">
                                        </a>
                                        <div class="author-text">
                                            <h4>Yasya</h4>

                                            <h4>Designer</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Ну как бы всё работает, придраться не к чему. Ну рил, поставьте 100, билеты на Мальдивы уже куплены.</p>
                                    </div>
                                    <div class="author-id">
                                        <a href="https://www.instagram.com/daryapryk">
                                        <img src="/public/images/author3.png" alt="">
                                        </a>
                                        <div class="author-text">
                                            <h4>Dasha</h4>

                                            <h4>Tester</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Creators of this blog</h3>


                    <div class="custom-post">
                        <div>
                            <a><img src="/public/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <h5 class="text-uppercase">На фото есть идейный вдохновитель</h5>
                            <span class="p-date">Анечка, которая любит покушать. Все женщины любят покушать</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">© 2019 <a href="http://itp.elit.sumdu.edu.ua/uk/">ITP Production, Kursach </a><i class="fa fa-heart"></i> by <a href="https://youtu.be/dQw4w9WgXcQ">Тим Дрима</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
