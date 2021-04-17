<?php $this->registerCssFile('@web/css/model_Page.css', ['depends' => 'yii\bootstrap\BootstrapAsset']) ?>
<?// debug($brands) ?>

<title><?=$brand['brand']." ".$model['model']?></title>

<style>
    .landing-page::after {
        background: url(../../web/<?=$photo[1]['src']?>) no-repeat;
        background-size: cover;
    }
</style>
    <section>
        <div class="landing-page">
          <div class="page-content">
            <h1><?=$brand['brand']." ".$model['model']?></h1>
          </div>
          <div class="order">order</div>
        </div>
    </section>
    <section class="descrip_section">
        <div class="container_m white">
            <div class="left">
                <div class="description_h1"><h1>Description</h1></div>
            </div>
            
            <div class="right">
                <div class="content_box">
                    <p>Duis aute irure dolor in reprehenderit in voluptate, 
                        qui in ea voluptate velit esse, quam nihil molestiae consequatur, 
                        vel illum, facere possimus, omnis voluptas assumenda est, 
                        omnis dolor repellendus.
                    </p>
                
                    <p>Et harum quidem rerum facilis est et expedita distinctio, 
                        qui in ea voluptate velit esse, quam nihil molestiae consequatur, 
                        vel illum, quis nostrud exercitation ullamco laboris nisi ut 
                        aliquip ex ea commodo consequat. Ut enim ad minima veniam, 
                        nam libero tempore, cum soluta nobis est eligendi optio, 
                        cumque nihil impedit, quo minus id, quod maxime placeat, 
                        qui dolorem eum fugiat, quo voluptas nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, quis nostrum 
                        exercitationem ullam corporis suscipit laboriosam, qui dolorem 
                        eum fugiat, quo voluptas nulla pariatur. Quis autem vel eum iure 
                        reprehenderit, qui in ea voluptate velit esse,
                    </p>
                </div>
            </div>
            
            <div class="middle">
                <div class="container_m">
                    <div class="img_container">
                        <img src="../../web/<?=$photo[0]['src']?>" alt="" id="img_1">
                        <img src="../../web/<?=$photo[2]['src']?>" alt="" id="img_2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="last">
        <div class="container_m black">
            <div class="left">
                <div id="text1">
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate, 
                        qui in ea voluptate velit esse, quam nihil molestiae consequatur, 
                        vel illum, facere possimus, omnis voluptas assumenda est, 
                        omnis dolor repellendus.
                    </p>
                    <p>
                        Et harum quidem rerum facilis est et expedita distinctio, 
                        qui in ea voluptate velit esse, quam nihil molestiae consequatur, 
                        vel illum, quis nostrud exercitation ullamco laboris nisi ut aliquip ex 
                        ea commodo consequat. Ut enim ad minima veniam, nam libero tempore, cum 
                        soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, 
                        quod maxime placeat, qui dolorem eum fugiat, quo voluptas nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, quis nostrum exercitationem 
                        ullam corporis suscipit laboriosam, qui dolorem eum fugiat, quo voluptas 
                        nulla pariatur. Quis autem vel eum iure reprehenderit, 
                        qui in ea voluptate velit esse,
                    </p>
                </div>
            </div>

            <div class="model_design">
                <div id="md_1">
                    <h3>INNOVATIVE DESIGN</h3>
                </div>
                <img src="../../web/<?=$photo[3]['src']?>" alt="" id="img_3">
            </div>
            <div>
                <img src="../../web/<?=$photo[4]['src']?>" alt="" id="img_4">
            </div>

            <div class="parameters">
                <div>
                    <h5>Torque</h5>
                    <p>520 Nm[1]</p>
                </div>
                <div>
                    <h5>Acceleration</h5>
                    <p>4.5 s</p>
                    <p id="param_p2">from 0 to 100 km / h</p>
                </div>
                <div>
                    <h5>Power</h5>
                    <p>320 kW[1]</p>
                </div>
            </div>
        </div>
    </section>

    <!--<section class="section">
        <div class="equipment_box">
            <div class="img_box">
                <img src="img/first_screen_mercedes.jpg" alt="eq">
            </div>
            <div class="img_box">
                <img src="img/first_screen_mercedes.jpg" alt="eq">
            </div>
            <div class="img_box">
                <img src="img/first_screen_mercedes.jpg" alt="eq">
            </div>
        </div>
    </section>-->