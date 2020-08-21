<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Anketa;

/**
 * AnketaSearch represents the model behind the search form of `app\models\Anketa`.
 */
class AnketaSearch extends Anketa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'age', 'class', 'personal_data'], 'integer'],
            [['fio', 'ucheb', 'interes', 'dnk_dir', 'dnk_prog', 'phone', 'email', 'fio_parent', 'phone_parent'], 'safe'],
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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'age' => $this->age,
            'class' => $this->class,
            'personal_data' => $this->personal_data,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'ucheb', $this->ucheb])
            ->andFilterWhere(['like', 'interes', $this->interes])
            ->andFilterWhere(['like', 'dnk_dir', $this->dnk_dir])
            ->andFilterWhere(['like', 'dnk_prog', $this->dnk_prog])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'fio_parent', $this->fio_parent])
            ->andFilterWhere(['like', 'phone_parent', $this->phone_parent]);

        return $dataProvider;
    }
}
