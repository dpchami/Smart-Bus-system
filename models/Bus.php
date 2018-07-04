<?php

namespace app\models;
use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "buses".
 *
 * @property string $plate_nbr
 * @property string $driver_name
 * @property int $scanner
 * @property int $route_id
 * @property string $model
 * @property int $owner
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Route $route
 * @property User $createdBy
 * @property User $updatedBy
 * @property User $owner0
 * @property Scanner $scanner0
 */
class Bus extends \yii\db\ActiveRecord
{
    use \app\components\Signature;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plate_nbr', 'driver_name', 'scanner', 'route_id', 'owner'], 'required'],
            [['scanner', 'route_id', 'owner', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['plate_nbr'], 'string', 'max' => 10],
            [['driver_name'], 'string', 'max' => 100],
            [['model'], 'string', 'max' => 45],
            [['plate_nbr'], 'unique'],
            [['route_id'], 'exist', 'skipOnError' => true, 'targetClass' => Route::className(), 'targetAttribute' => ['route_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['owner'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['owner' => 'id']],
            [['scanner'], 'exist', 'skipOnError' => true, 'targetClass' => Scanner::className(), 'targetAttribute' => ['scanner' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'plate_nbr' => 'Plate Number',
            'driver_name' => 'Driver Name',
            'scanner' => 'Scanner',
            'route_id' => 'Route ID',
            'model' => 'Model',
            'owner' => 'Owner',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoute()
    {
        return $this->hasOne(Route::className(), ['id' => 'route_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUpdatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'updated_by']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOwner0()
    {
        return $this->hasOne(User::className(), ['id' => 'owner']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getScanner0()
    {
        return $this->hasOne(Scanner::className(), ['id' => 'scanner']);
    }
}
