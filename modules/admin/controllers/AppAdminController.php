<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

/**
 * Default controller for the `admin` module
 */
class AppAdminController extends Controller
{
    public function behaviors(){
        return[
        'access'=>[
            'class'=> AccessControl::className(),
            'rules'=>[
               [ 
                'allow'=>true,
                'roles'=>['@'],
                ]   
            ]
        ]
        ];
    }
    public function actionIndex(){

    }

}
