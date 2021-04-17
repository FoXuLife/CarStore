<?

$id = Yii::$app->request->get('id');

?>
<option VALUE='<?=\yii\helpers\Url::to(['brand/view', 'id' => $brand['id_brand']]) ?>'
<?php if ($brand['id_brand'] == $id) echo 'selected' ?>>

<?=$brand['brand']?></option>
