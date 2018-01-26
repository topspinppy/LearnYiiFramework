<?php
class Chapter4Controller extends Controller {

    public function actionSession() {
        Yii::app()->session["my_session"] = 10;
        $this->render("Session");
    }
    public function actionCookie() {
        Yii::app()->request->cookies["x"] = new CHttpCookie("x", 20);
        $this->render("Cookie");
    }
    public function actionTemplate() {
        $this->render("Template");
    }
    public function actionPageA() {
        $this->render("PageA");
    }
    public function actionPageB() {
        $this->render("PageB");
    }
}

?>