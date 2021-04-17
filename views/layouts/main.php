<?php
use yii\helpers\Url;
use app\assets\AppAsset;
use app\components\BrandWidget;
use yii\helpers\Html;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <header>
        <img src="../../web/img/logo.png" alt="logo">
        <nav>
            <ul class="nav_links">  
                <select name="widget" id="" onchange="window.location.href=this.options[this.selectedIndex].value">
                <?echo BrandWidget::widget();?>
                </select>
                <?php
                echo "<li><a href='".Url::toRoute(['page/home'])."'>Home</a></li>";
                echo "<li><a href='".Url::toRoute(['page/brand-page'])."'>Cars</a></li>";
                echo "<li><a href='".Url::toRoute(['page/order'])."'>Order</a></li>";
                echo "<li><a href='".Url::toRoute(['page/form'])."'>Contact</a></li>";
                 echo "<li><a href='".Url::toRoute(['/admin'])."'>admin</a></li>";
                ?>
            </ul>
        </nav>
    </header>

    <div id="container">
        <?=$content?>
    </div>

    <footer id="footer">
        <div class="container my_footer">
            <div class="footer_box">
                <h6>Support</h6>
                <a href="#" class="footer_link">Contact Us</a>
                <a href="#" class="footer_link">Lost Card?</a>
                <a href="#" class="footer_link">Mobile & Online</a>
            </div>
            <div class="footer_box">
                <h6>About Us</h6>
                <a href="#" class="footer_link">Board of Directors</a>
                <a href="#" class="footer_link">Careers</a>
                <a href="#" class="footer_link">Blog</a>
            </div>
            <div class="footer_box">
                <h6>Support</h6>
                <a href="#" class="footer_link">Contact Us</a>
                <a href="#" class="footer_link">Lost Card?</a>
                <a href="#" class="footer_link">Mobile & Online</a>
            </div>
            <div class="footer_box">
                <h6>About Us</h6>
                <a href="#" class="footer_link">Board of Directors</a>
                <a href="#" class="footer_link">Careers</a>
                <a href="#" class="footer_link">Blog</a>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>