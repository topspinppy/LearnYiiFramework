<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $books,
    'columns' => array(
        'id',
        'name',
        'price'
    )
));
?>