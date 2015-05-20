<?php

namespace app\modules\admfarmacia;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proveedor;

/**
 * ProveedorSearch represents the model behind the search form about `app\models\Proveedor`.
 */
class ProveedorSearch extends Proveedor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idProveedor'], 'integer'],
            [['RazonSocial', 'CUIT', 'Direccion', 'Telefono'], 'safe'],
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
        $query = Proveedor::find();

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
            'idProveedor' => $this->idProveedor,
        ]);

        $query->andFilterWhere(['like', 'RazonSocial', $this->RazonSocial])
            ->andFilterWhere(['like', 'CUIT', $this->CUIT])
            ->andFilterWhere(['like', 'Direccion', $this->Direccion])
            ->andFilterWhere(['like', 'Telefono', $this->Telefono]);

        return $dataProvider;
    }
}
