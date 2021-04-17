<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "model".
 *
 * @property int $id_model
 * @property int $id_brand
 * @property string $model
 * @property string $description
 * @property string $price
 *
 * @property CarBrand $brand
 * @property Photo[] $photos
 */
class Model1 extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'model';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_brand', 'model', 'description', 'price'], 'required'],
            [['id_brand'], 'integer'],
            [['model'], 'string', 'max' => 20],
            [['description', 'price'], 'string', 'max' => 255],
            [['id_brand'], 'exist', 'skipOnError' => true, 'targetClass' => CarBrand::className(), 'targetAttribute' => ['id_brand' => 'id_brand']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_model' => 'Id Model',
            'id_brand' => 'Id Brand',
            'model' => 'Model',
            'description' => 'Description',
            'price' => 'Price',
        ];
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(CarBrand::className(), ['id_brand' => 'id_brand']);
    }

    /**
     * Gets query for [[Photos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPhotos()
    {
        return $this->hasMany(Photo::className(), ['id_model' => 'id_model']);
    }
}
