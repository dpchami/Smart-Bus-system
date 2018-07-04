<?php

namespace app\models;
use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "Route".
 *
 * @property int $id
 * @property string $name
 * @property string $start_at
 * @property string $end_at
 * @property int $normal_price
 * @property int $student_price
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Buses[] $buses
 * @property User $createdBy
 * @property User $updatedBy
 */
class Route extends \yii\db\ActiveRecord
{
    use \app\components\Signature;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'routes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'start_at', 'end_at', 'normal_price'], 'required'],
            [['normal_price', 'student_price', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['start_at', 'end_at'], 'string', 'max' => 45],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'start_at' => 'Start At',
            'end_at' => 'End At',
            'normal_price' => 'Normal Price',
            'student_price' => 'Student Price',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuses()
    {
        return $this->hasMany(Buses::className(), ['route_id' => 'id']);
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
}
