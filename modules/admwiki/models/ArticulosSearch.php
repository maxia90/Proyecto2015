<?php

namespace app\modules\admwiki\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Articulos;

/**
 * ArticulosSearch represents the model behind the search form about `app\models\Articulos`.
 */
class ArticulosSearch extends Articulos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idArticulo', 'idEstado', 'idEmpleado'], 'integer'],
            [['Codigo', 'Titulo', 'Texto', 'FechaAlta'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Articulos::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idArticulo' => $this->idArticulo,
            'FechaAlta' => $this->FechaAlta,
            'idEstado' => $this->idEstado,
            'idEmpleado' => $this->idEmpleado,
        ]);

        $query->andFilterWhere(['like', 'Codigo', $this->Codigo])
            ->andFilterWhere(['like', 'Titulo', $this->Titulo])
            ->andFilterWhere(['like', 'Texto', $this->Texto]);

        return $dataProvider;
    }
}
