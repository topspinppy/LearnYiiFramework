<?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $model->search(),
        'columns' => array(
            'id',
            'name',
            'price',
            'book_types.book_type_name'
        )
    ));

?>