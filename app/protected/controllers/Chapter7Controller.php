<?php
class Chapter7Controller extends Controller 
{
    function actionFilter() 
    {
        $model = new Book("search");
        $model->unsetAttributes();

        if(isset($_GET['Book']))
        {
            $model->attributes = $_GET['Book'];
        }

        $this->render("Filter", array(
            "model" => $model
        ));
    }
    function actionCheckBoxAndGridView() 
    {
        if(!empty($_POST)) {
            $ids = $_POST["ids"];
            
            foreach ($ids as $id) 
            {
                echo "id = $id<br />";
            }
        }
        $model = new Book();
        $this->render("CheckBoxAndGridView", array(
            "model" => $model
        ));
    }
}
?>