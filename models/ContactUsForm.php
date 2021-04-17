<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;


class ContactUsForm extends ActiveRecord {
     public static function tableName() {
        return 'posts';
    }
    

    public function attributeLabels() {
        return [
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
            'phone' => 'Номер телефона',
            'message' => 'Сообщение',
        ];
    }

    public function rules() {
        return [
            [['surname', 'name', 'patronymic', 'message'], 'required'],
            ['email', 'email'],
            ['message', 'trim'],
            [['email', 'phone'], 'myRequired', 'skipOnEmpty' => false, 'skipOnError' => false],
            
        ];
    }

    public function myRequired($attr, $params) {
        if (empty($this->email) && empty($this->phone)) {
            $this->addError($attr, 'Как минимум 1 поле должно быть заполнено правильно');
        }
    }
}
?>