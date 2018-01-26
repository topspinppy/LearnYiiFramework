<?php
Class Chapter5Controller extends Controller {
    function actionCGridView() {
        $model = new Book();
        $books = new CActiveDataProvider($model);

        $this->render("CGridView", array(
            "books" => $books
        ));
    }
}
?>