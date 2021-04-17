<?namespace app\components;
use yii\base\Widget;
use app\models\Brand;
use Yii;

class BrandWidget extends Widget {
    public $tpl;
    public $data;
    public $menuHtml;
    public $model;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }

        $this->tpl .= '.php';
    }   

    public function run() {
        $this->data = Brand::find()->asArray()->all();
       // debug($this->data);
        $this->menuHtml= $this->getMenuHtml($this->data);
        return $this->menuHtml;
    }
   
    protected function getMenuHtml($data) {
        $str = '';
        foreach($data as $brand) {
            $str .=$this->catToTemplate($brand);
        }
       
        return $str;
    }
    protected function catToTemplate($brand) {
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
}



?>
<?


        /*if($this->tpl == 'menu.php') {
            $menu = Yii::$app->cache->get('menu');
            if($menu) return $menu;
        }
        
        $this->data = Brand::find()->indexBy('id')->asArray()->all();
        $this->key = $this->getTree();
        $this->menuHtml = $this->getMenuHtml($this->key);
        
        //set cache
        if($this->tpl == 'menu.php') {
        Yii::$app->cache->set('menu', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }
    
    protected function getTree(){
        
        foreach($this->data as $key){
                $key;
        }
        return $key;
    }
    
    protected function getMenuHtml($key, $tab = '') {
        $str = '';
        foreach($key as $key['brand']) {
            $str .= $this->catToTemplate($key['brand'], $tab);
        }
        return $str;
    }
    
    protected function catToTemplate($key['brand'],) {
        ob_start();
        include __DIR__ . '/menu_tpl/' . $this->tpl;
        return ob_get_clean();
    }
    
    */
?>