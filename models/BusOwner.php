<?php

namespace app\models;
use Da\User\Model\User;
use Yii;

/**
 * This is the model class for table "busOwner".
 *
 * @property int $user_id
 * @property string $name
 * @property int $address
 * @property string $tin
 * @property int $created_by
 * @property int $created_at
 * @property int $updated_by
 * @property int $updated_at
 *
 * @property User $user
 * @property Address $address0
 * @property User $createdBy
 * @property User $updatedBy
 */
class BusOwner extends \yii\db\ActiveRecord
{
    use \app\components\Signature;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'busOwner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'address', 'tin'], 'required'],
            [['user_id', 'address', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['tin'], 'string', 'max' => 15],
            [['user_id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['address'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address' => 'id']],
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
            'user_id' => 'User ID',
            'name' => 'Name',
            'address' => 'Address',
            'tin' => 'Tin',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddress0()
    {
        return $this->hasOne(Address::className(), ['id' => 'address']);
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
