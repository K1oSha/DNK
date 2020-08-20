<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class Anketa extends ActiveRecord{

    public static function tableName()
    {
        return "anketa";
    }
    // $this->createTable('{{%anketa}}', [
    //     'id' => $this->primaryKey(),
    //     'fio' => $this->string(),
    //     'age' => $this->integer(),
    //     'class' => $this->integer(),
    //     'ucheb' => $this->string(),
    //     'interes' => $this->string(),
    //     'dnk_dir' => $this->string(),
    //     'dnk_prog' => $this->string(),
    //     'phone' => $this->string(),
    //     'email' => $this->string(),
    //     'fio_parent' => $this->string(),
    //     'phone_parent' => $this->string(),
    //     'personal_data' => $this->integer(),
        
    public function rules()
    {
        return 
        [

            [['id','fio','age','class','ucheb','interes','dnk_dir','dnk_prog','phone','email','fio_parent','phone_parent','personal_data'],'fields']
        ];
    }
}