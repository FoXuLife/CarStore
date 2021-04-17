<?php $this->registerCssFile('@web/css/order.css', ['depends' => 'yii\bootstrap\BootstrapAsset'])?>
<?php $this->registerJsFile('@web/js/order.js')?>
<title>Order</title>
<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
    <section>
    <?php $form = ActiveForm::begin(['options' => ['method' => 'post']])  ?>
        <!--<form action="" method="POST" class="container_my">-->
            <h1>Информация о заказе</h1>
            <div class="main_info">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
            <?=
            $form->field($model, 'brand')
            ->dropDownList([
                'mercedes' => 'mercedes',
                'volkswagen' => 'volkswagen',
                'audi' => 'audi',
                'bmw' => 'bmw',
                'jaguar' => 'jaguar',
            ],
            [
                'prompt' => 'Check brand'
            ]);
            ?>
            <!--<select name="brand" id="select" onchange="checkBrand()">
                <option value="0">Check brand</option>
                <option value="mercedes">mercedes</option>
                <option value="volkswagen">volkswagen</option>
                <option value="jaguar">jaguar</option>
                <option value="audi">audi</option>
                <option value="bmw">bmw</option>
            </select>-->

            <div class="check_model" id="mercedes">
                <div class="box" onclick="checkModel()" id="mercedes_1">
                    <div class="imgBox">
                        <img src="../../web/img/first_screen_mercedes.jpg">
                    </div>
                    <div class="content">
                        <h3>Mercedes model 1</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/first_screen_mercedes.jpg">
                    </div>
                    <div class="content">
                        <h3>Mercedes model 2</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/first_screen_mercedes.jpg">
                    </div>
                    <div class="content">
                        <h3>Mercedes model 3</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/first_screen_mercedes.jpg">
                    </div>
                    <div class="content">
                        <h3>Mercedes model 4</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/first_screen_mercedes.jpg">
                    </div>
                    <div class="content">
                        <h3>Mercedes model 5</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/first_screen_mercedes.jpg">
                    </div>
                    <div class="content">
                        <h3>Mercedes model 6</h3>
                    </div>
                </div>
            </div>

            <div class="check_model" id="volkswagen">
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/volks.jpg">
                    </div>
                    <div class="content">
                        <h3>volkswagen model 1</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/volks.jpg">
                    </div>
                    <div class="content">
                        <h3>volkswagen model 2</h3>
                    </div>
                </div>

                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/volks.jpg">
                    </div>
                    <div class="content">
                        <h3>volkswagen model 3</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/volks.jpg">
                    </div>
                    <div class="content">
                        <h3>volkswagen model 4</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/volks.jpg">
                    </div>
                    <div class="content">
                        <h3>volkswagen model 5</h3>
                    </div>
                </div>
    
                <div class="box">
                    <div class="imgBox">
                        <img src="../../web/img/volks.jpg">
                    </div>
                    <div class="content">
                        <h3>volkswagen model 6</h3>
                    </div>
                </div>
            </div>     
            
            <div class="equipment">
                <div class="box">
                    <div class="content_eq">
                        <h3>basic</h3>
                        <p>1 000 000 руб.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="content_eq">
                        <h3>middle</h3>
                    </div>
                </div>
                <div class="box">
                    <div class="content_eq">
                        <h3>max</h3>
                    </div>
                </div>
            </div>
        <!--</form>-->
        <?php ActiveForm::end()?>
    </section>