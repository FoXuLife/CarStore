<?
namespace app\controllers;

use yii\web\Controller;
use app\models\Model;
use app\models\Photo;
use app\models\Brand;
use Yii;
use app\models\ContactUsForm;
use app\models\OrderForm;
class PageController extends Controller {

        public function actionHome() {
                return $this->render('home');
        }

        public function actionBrandPage() {
                $model = Model::find()->asArray()->all();
                $photo = Photo::find()->asArray()->where(['like', 'name_photo', '1.4'])->all();
                $brands= Brand::find()->asArray()->all();
                $this->layout = 'main';
                return $this->render('brandPage', compact('model','photo','brands'));
                
        }
        public function actionModelPage($id=0) {
                $this->layout = 'main';
                if($id <= 0){
                        return $this->render('Error');
                }
                else{
                        $max_id=Model::find()->select('id_model')->orderBy('id_model desc')->asArray()->one();
                                if($max_id['id_model']<$id){
                                        return $this->render('Error');
                                }
                                else{
                                        $photo = Photo::find()->where(['id_model' => $id])->asArray()->all();
                                        $model = Model::find()->where(['id_model' => $id])->asArray()->one();
                                        $brand = Brand::find()->where(['id_brand' => $model['id_brand']])->asArray()->one();
                                        return $this->render('modelPage', compact('photo','model','brand'));
                                }
                }
        
        }
        /*public function actionTest(){
                $model = Model::find()->all();
                $photo = Photo::find()->where(['like', 'name_photo', '1.2'])->all();
                return $this->render('test', compact('model','photo'));
        }*/
        public function actionForm() {
                $model = new ContactUsForm();
                if ( $model->load(Yii::$app->request->post()) ) {
                if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Данные приняты');
                        return $this->refresh();
                } else {
                        Yii::$app->session->setFlash('error', 'Ошибка');
                }
                }

                return $this->render('Form', compact('model'));
        }

        // Нужно поправить, а то совсем пздц
        public function actionOrder() {
                $model = new OrderForm();
                return $this->render('order', compact('model'));
        }
}
?>