<?php
    $this->widget('zii.widgets.grid.CGridView', array( 
        'dataProvider' => $books,
        'columns' => array (
            'id',
            'name',
            'price',
            array( 
                'header'=>'edit',
               // 'value' => 'CHtml::image("images/edit.png")',
               'class' => 'CLinkColumn',
               'imageUrl' => 'images/edit.png',
                'urlExpression' => 'Yii::app()->createUrl("Chapter5/Form", array("id"=>$data->id))',
                'htmlOptions' => array (
                    'width' => '35px',
                    'align' => 'center'
                )
            ),
            array(
                'header' => 'delete',
                'class' => 'CLinkColumn',
                'imageUrl' => 'images/delete.png',
                'urlExpression' => 'Yii::app()->createUrl("Chapter5/Delete", array("id"=>$data->id))',
                'htmlOptions' => array (
                    'width' => '35px',
                    'align' => 'center',
                    'onclick' => 'return confirm("ยืนยันการลบ")'
                )
            )
        )
    ));

?>