<?php
Class Chapter5Controller extends Controller {
    function actionCGridView() {
        $model = new Book();
        $books = new CActiveDataProvider($model);

        $this->render("CGridView", array(
            "books" => $books
        ));
    }
    function actionForm($id = null) {
        $book = new Book();

        if (!empty($_POST)) {
            $id = $_POST["Book"]["id"];
            
            if(!empty($id)) {
                $book = Book::model()->findByPk($id);
            }
            $book->_attributes = $_POST["Book"];
            
            if($book->save()) {
                $this->redirect(array("CGridView"));
            }
        }

        if(!empty($id)) {
            $book = Book::model()->findByPk($id);
        }
        
        $this->render("Form", array(
            "book" => $book
        ));
    }
    function actionDelete($id) {
        Book::model()->deleteByPk($id);
        $this->redirect(array("CGridView"));
    }
}
?>