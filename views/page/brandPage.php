<?// debug($model)?>
<?php $this->registerCssFile('@web/css/brand_Page.css', ['depends' => 'yii\bootstrap\BootstrapAsset'])?>
<?use yii\helpers\Url;?>
<title>Cars</title>

<style>
    .landing-page::after {
        background: url(../../web/img/cars.jpg) no-repeat;
        background-size: cover;
    }
</style>
    <section>
        <div class="landing-page">
            <div class="page-content">
                <!--<img src="../../web/img/mercedes.png" alt="">
                <h1>mercedes</h1>-->
                <h1>Cars</h1>
            </div>
            <div class="arrow-7">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>
    <section class="models_section">
        <div><h2>models</h2></div>
        <div class="underline"></div>
        <div class="models_grid">
            <?foreach($model as $item){?>
            <?echo "<a href='".Url::toRoute(['page/model-page','id'=>$item['id_model']])."'>";?>
            <div class="box">
                <div class="imgBox">
                    <?foreach($photo as $img){?>
                    <? if($img['id_model']== $item['id_model']){?>
                    <img src="../../web/<?=$img['src']?>">
                    <?}}?>
                </div>
                <div class="content">
                    <?foreach($brands as $brand){?>
                    <? if($brand['id_brand']== $item['id_brand']){?>
                    <h3><?=$brand['brand']." ".$item['model']?></h3>
                    <p><?=$item['description']?></p>
                    <p class="price"><?=$item['price']?></p>
                    <?}}?>
                </div>
            </div>
               <?echo "</a>";?>
            <?}?>
        </div>
    </section>