<?php
    $this->renderPartial('search', array(
        'model' => $model
    ));
?>
<?php
    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $model->search(),
        'filter' => $model,
        'columns' => array(
            'id',
            'name',
            'price'
        )
    ));
?>