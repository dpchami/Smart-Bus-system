<?php

namespace app\models;
use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "Scanner".
 *
 * @property int $id
 * @property string $scanner_code
 * @property string $status
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property Buses[] $buses
 * @property User $createdBy
 * @property User $updatedBy
 */
class Scanner extends \yii\db\ActiveRecord
{
    use \app\components\Signature;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scanners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['scanner_code'], 'required'],
            [['created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['scanner_code', 'status'], 'string', 'max' => 45],
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
            'scanner_code' => 'Scanner Code',
            'status' => 'Status',
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
        return $this->hasMany(Buses::className(), ['scanner' => 'id']);
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
