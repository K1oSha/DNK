<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anketa;

/**
 * CowSearch represents the model behind the search form of `app\models\Cow`.
 */
class AnketaSearch extends Anketa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','fio','age','class','ucheb','interes','dnk_dir','dnk_prog','phone','email','fio_parent','phone_parent','personal_data'],'fields']

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Anketa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // [['id','fio','age','class','ucheb','interes','dnk_dir','dnk_prog','phone','email','fio_parent','phone_parent','personal_data'],'fields']
        $query->andFilterWhere([
            'id' => $this->id,
            'fio' => $this->fio,
            'age' => $this->age,
            'class' => $this->class,
            'ucheb' => $this->ucheb,
            'interes' => $this->interes,
            'dnk_dir' => $this->dnk_dir,
            'dnk_prog' => $this->dnk_prog,
            'phone' => $this->phone,
            'email' => $this->email,
            'phone_parent' => $this->fio_parent,
            'personal_data' => $this->personal_data,
        ]);
        return $dataProvider;
    }
}
