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

    echo CHtml::checkBox("book", false, array("value"=>"javascript"))."<br/>";
    echo CHtml::label("JAVASCRIPT",null);

    $data = array( 
        "1001" => "Windows",
        "1002" => "Ubuntu",
        "1003" => "Linux Tle"
    );
    echo CHtml::checkBoxList("os",null,$data);

    echo CHtml::radioButton("sex", false, array("value" => "f"));
    echo "Female";

    echo CHtml::radioButton("sex", false, array("value" => "m"));
    echo "Male";

    echo CHtml::fileField("myfile");
    echo CHtml::hiddenField("myhidden" , 10);

    $datas = array(
        "1001" => "Java",
        "1002" => "PHP",
        "1003" => "Yii Framework"
    );

    echo CHtml::dropDownList("ddl",NULL,$datas);
    echo CHtml::passwordField("mypassword");
    echo CHtml::endForm();

?>