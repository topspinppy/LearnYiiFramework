<?php
class Chapter3Controller extends Controller {
    public function actionIndex() {
        $this->render("Index");
    }

    public function actionForm() {
        if(!$empty($_POST)) {
            echo "myinput =".$_POST["myinput"];
        }
        $this->render("Form");
    }
}
?>