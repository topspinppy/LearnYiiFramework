<?php
Class Chapter6Controller extends Controller {

    function actionCPageSize() 
    {
        $model = new Book();
        $books = new CActiveDataProvider($model, array(
            "pagination" => array (
                "pageSize" => 3
            )
        ));

        $this->render("CPageSize", array( 
            "books" => $books
        )); 
    }
    function actionCSort() {
        $model = new Book();

        $criteria = new cDbCriteria();
        $criteria->order = "price DESC";

        $books = new CActiveDataProvider($model, array(
            "criteria" => $criteria
        ));

        $this->render("CSort", array(
            "books" => $books
        ));
    }
}
?>