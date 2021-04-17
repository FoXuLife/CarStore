<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "car_brand".
 *
 * @property int $id_brand
 * @property string $brand
 *
 * @property Model[] $models
 */
class CarBrand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand'], 'required'],
            [['brand'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_brand' => 'Id Brand',
            'brand' => 'Brand',
        ];
    }

    /**
     * Gets query for [[Models]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModels()
    {
        return $this->hasMany(Model::className(), ['id_brand' => 'id_brand']);
    }
}
