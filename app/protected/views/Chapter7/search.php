<?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => get ,
    ));

?>
<div>   
    <?php echo $form->label($model, 'id'); ?>
    <?php echo $form->textField($model, 'id'); ?>
</div>
<div>
    <?php echo $form->label($model, 'name'); ?>
    <?php echo $form->textField($model, 'name'); ?>
</div>
<div>
    <?php echo $form->label($model, 'price'); ?>
    <?php echo $form->textField($model, 'price'); ?>
</div>

<div class="row buttons">
    <?php echo CHtml::submitButton('Search'); ?>
</div>

<?php $this->endWidget(); ?>