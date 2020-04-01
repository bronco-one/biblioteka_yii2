<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontrahenci".
 *
 * @property int $id
 * @property string $nazwa
 * @property string $adres
 * @property string $email
 * @property string|null $telefon
 *
 * @property Naprawy[] $naprawies
 * @property Zakupy[] $zakupies
 */
class Kontrahenci extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kontrahenci';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nazwa', 'adres', 'email'], 'required'],
            [['nazwa'], 'string', 'max' => 100],
            [['adres'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 90],
            [['telefon'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nazwa' => 'Nazwa',
            'adres' => 'Adres',
            'email' => 'Email',
            'telefon' => 'Telefon',
        ];
    }

    /**
     * Gets query for [[Naprawies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNaprawies()
    {
        return $this->hasMany(Naprawy::className(), ['id_firma' => 'id']);
    }

    /**
     * Gets query for [[Zakupies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakupies()
    {
        return $this->hasMany(Zakupy::className(), ['id_firma' => 'id']);
    }
}
