<?php
    $this->beginWidget('CActiveForm');

    $this->widget('zii.widgets.grid.CGridView' , array(
        'dataProvider' => $model->search(),
        'selectableRows' => 2,
        'columns' => array(
            array(
                'class' => 'CCheckBoxColumn',
                'id' => 'ids'
            ),
            'id',
            'name',
            'price'
        )
    ));
    
    echo CHtml::submitButton("Send Data");
    $this->endWidget();
?>