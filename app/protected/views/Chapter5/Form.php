<?php $form = $this->beginWidget('CActiveForm', array()); ?>

<div>
    <?php echo $form->labelEx($book, "name"); ?>
    <?php echo $form->textField($book, "name"); ?>
</div>
<div>
    <?php echo $form->labelEx($book, "price"); ?>
    <?php echo $form->textField($book, "price"); ?>
</div>
<?php echo $form->hiddenField($book,"id"); ?>

<input type="submit" value="บันทึก" />

<?php $this->endWidget(); ?>

