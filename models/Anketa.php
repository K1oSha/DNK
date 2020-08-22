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

            [['id','fio','age','class','ucheb','interes','dnk_dir','dnk_prog','phone','email','fio_parent','phone_parent','personal_data'],'fields'],
            [['fio','age','class','ucheb','interes','dnk_dir','dnk_prog','phone','email','fio_parent','phone_parent'],'required','message'=>'Это поле должно быть заполнено'],
            [['age','class','interes','dnk_dir'],'integer','message'=>'В этом поле могут быть только числа'],
            [['email'],'email','message'=>'E-mail введен не корректно'],
            [['personal_data'],'errorPersonaldata']

        ];
    }
    public function attributeLabels()
    {
        return
            [
                'fio'=>'ФИО',
                'age'=>'Возраст',
                'class'=>'Класс',
                'ucheb'=>'Полное наименование учебного заведения',
                'interes'=>'Направление интересов',
                'dnk_dir'=>'Образовательное направление',
                'dnk_prog'=>'Образовательная программа ДНК',
                'phone'=>'Контактный телефон личный',
                'email'=>'E-mail',
                'fio_parent'=>'ФИО родителя',
                'phone_parent'=>'Контактный телефон родителя',
                'personal_data'=>'Согласие на обработку персональных данных',
            ];
    }
    public static function getInteressList()
    {
        return
            ['Программирование','VR','Робототехника','Квадрокоптеры','Конструирование и промышленный дизайн','Космос',
                'Биотехнологии','Человеко-машинные интерфейсы'];
    }

    public function getInteressName()
    {
        $list = $this->getInteressList();
        return $list[$this->interes];
    }
    public static function getDNKList()
    {
        return
            ['Малая','Академия','Урок технологии'];
    }

    public function getDNKName()
    {
        $list = $this->getDNKList();
        return $list[$this->dnk_dir];
    }
    public function errorPersonaldata()
    {
        if($this->personal_data==0)
        {
            $this->addError('personal_data',"Это поле должно быть заполнено");
        }

    }

}