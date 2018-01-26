<?php
class Book extends CActiveRecord {
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return "books";
    }
    public function attributeLabels() {
        return array(
            "id"=>"รหัส",
            "name"=>"ชื่อหนังสือ",
            "price"=>"ราคา"
        );
    }
}

?>