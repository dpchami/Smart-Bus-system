<?php

namespace app\models;
use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "card".
 *
 * @property int $id
 * @property string $number
 * @property int $status
 * @property string $client_mobile
 * @property int $balance
 * @property int $category
 * @property string $student_id
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property User $updatedBy
 * @property User $createdBy
 */
class Card extends \yii\db\ActiveRecord
{
    use \app\components\Signature;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'card';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'required'],
            [['status', 'balance', 'category', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['number', 'student_id'], 'string', 'max' => 20],
            [['client_mobile'], 'string', 'max' => 15],
            [['updated_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['updated_by' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'status' => 'Status',
            'client_mobile' => 'Client Mobile',
            'balance' => 'Balance',
            'category' => 'Category',
            'student_id' => 'Student ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
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
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
