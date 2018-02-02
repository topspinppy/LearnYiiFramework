<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $books,
    'columns' => array(
        'id',
        'name',
        'price',
        array(
            'type'=>'html',
            'value'=>'CHtml::link("edit", array("Chapter5/Form", "id" => $data->id))'
        ),
        array(
            'type'=>'html',
            'value'=>'CHtml::link("delete",array("Chapter5/Delete", "id" => $data->id))',
            'htmlOptions' => array (
                'onclick' => 'return confirm("ยืนยันการลบ")'
            ) 
        )
    )
));
?>