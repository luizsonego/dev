<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $id
 * @property int $name
 * @property string $cpf
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 */
class Customers extends \yii\db\ActiveRecord
{
    const SCENARIO_CREATE = 'create';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'cpf', 'email'], 'required'],
            [['name'], 'string', 'max' => 60],
            [['created_at', 'updated_at'], 'safe'],
            [['cpf'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 30],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['name','cpf', 'email']; 
        return $scenarios; 
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cpf' => 'Cpf',
            'email' => 'Email',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
