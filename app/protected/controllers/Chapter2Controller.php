<?php
class Chapter2Controller extends Controller {
    public function actionHello ($name) {
        echo "Hello $name";
    }
    public function actionAddNumber ($x,$y) {
        echo $x + $y;
    }
    public function actionBindView () {
        $this->render("BindView");
    }
    public function actionViewData () {
        $this->render("ViewData", array( 
            "x"=> 10,
            "y"=> 15
        ));
    }
    public function actionShowImage () {
        $this->render("ShowImage");
    }
    public function actionParamFromView($x = null) {
        echo "x = $x";
        $this->render("ParamFromView");
    }
}
?>