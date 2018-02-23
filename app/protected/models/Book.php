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
    public function rules() {
        return array(
            array('name,price','required'),
            array('price','numerical','integerOnly' => true),
            array('name','length','max' => 255),
            array('id,name,price','safe','on' => 'search')
        );
    }
    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('price', $this->price);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    public function getButtonEdit($data,$row) {
        if($data->author_id == 1) 
        {
            $url = array("Chapter5/Form", "id"=>$data->id);
            $link = CHtml::link("edit", $url);

            return $link;
        }
        return null;
    }
    public function attributeLabels()
    {
        return array(
            "id" => "รหัส",
            "name" => "ชื่อหนังสือ",
            "price" => "ราคา",
            "book_type_id" => "ประเภทหนังสือ"
        );
    }
    public function relations(){
        return array
        (
            'book_types' => array(self::BELONGS_TO,"BookType","book_type_id")
        );
    }
}

?>