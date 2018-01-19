<?php
    echo CHtml::form();

    echo CHtml::label("ชื่อ","fname");
    //ปรับกล่องข้อความ
    echo CHtml::textField("fname",null,array("size"=>50));

    echo CHtml::label("นามสกุล","lname");
    echo CHtml::textField("lname")."<br/>";

    $textAreaOptions = array("cols" => 50,"rows" => 8);
    echo CHtml::label("เขียนประวัติตนเอง","portfolio");
    echo CHtml::textArea("textname",null,$textAreaOptions);

    echo CHtml::checkBox("book", false, array("value"=>"php"));
    echo CHtml::label("PHP",null);

    echo CHtml::checkBox("book", false, array("value"=>"javascript"));
    echo CHtml::label("JAVASCRIPT",null);

    echo CHtml::endForm();

?>