<?php
class BookType extends CActiveRecord {
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return "book_types";
    }
    public function attributeLabels()
    {
        return array(
            "id" => "id",
            "book_type_name" => "ชื่อประเภทหนังสือ"
        );
    }
    public function relations()
    {
        return array(
            "books" => array(self::HAS_MANY, "Book" , "Book_type_id")
        );
    }
}
?>