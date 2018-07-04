<?php

namespace app\models;
use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "Address".
 *
 * @property int $id
 * @property string $municipal
 * @property string $region
 * @property string $street
 *
 * @property Agents[] $agents
 * @property BusOwner[] $busOwners
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['municipal', 'region', 'street'], 'required'],
            [['municipal', 'region', 'street'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'municipal' => 'Municipal',
            'region' => 'Region',
            'street' => 'Street',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgents()
    {
        return $this->hasMany(Agents::className(), ['address' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBusOwners()
    {
        return $this->hasMany(BusOwner::className(), ['address' => 'id']);
    }
}
