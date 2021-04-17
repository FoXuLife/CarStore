<?
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Model;
class Photo extends ActiveRecord {
    public static function tableName() {
        return 'photo';
    }
    public function getModel() {
        return $this->hasOne(Model::className(), ['id_model' => 'id_model']);
    }
}

?>