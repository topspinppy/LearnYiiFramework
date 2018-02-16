<?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $model->search(),
        'columns' => array(
            'id',
            'name',
            'price',
            array(
                'header' => 'edit',
                'type' => 'html',
                'value' => array($model, "getButtonEdit"),
                'htmlOptions' => array(
                    'align' => 'center',
                    'width' => '35px'
                )
            )
        )
    ));
?>