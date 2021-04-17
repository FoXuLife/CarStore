<?
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Brand;
use app\models\Photo;

class Model extends ActiveRecord {
  public static function tableName() {
        return 'model';
    }
     public function getBrand() {
        return $this->hasOne(Brand::className(), ['id_brand' => 'id_brand']);
    }
 public function getPhoto() {
        return $this->hasMany(Photo::className(), ['id_model' => 'id_model']);
    }
}


?>