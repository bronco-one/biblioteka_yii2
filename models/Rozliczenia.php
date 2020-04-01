<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rozliczenia".
 *
 * @property int $id
 * @property int $id_uzytkownika
 * @property int $id_ksiazki
 * @property int $id_powod
 * @property string $data
 *
 * @property Uzytkownicy $uzytkownika
 * @property Ksiazki $ksiazki
 * @property Powody $powod
 */
class Rozliczenia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rozliczenia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_uzytkownika', 'id_ksiazki', 'id_powod', 'data'], 'required'],
            [['id_uzytkownika', 'id_ksiazki', 'id_powod'], 'integer'],
            [['data'], 'safe'],
            [['id_uzytkownika'], 'exist', 'skipOnError' => true, 'targetClass' => Uzytkownicy::className(), 'targetAttribute' => ['id_uzytkownika' => 'id']],
            [['id_ksiazki'], 'exist', 'skipOnError' => true, 'targetClass' => Ksiazki::className(), 'targetAttribute' => ['id_ksiazki' => 'id']],
            [['id_powod'], 'exist', 'skipOnError' => true, 'targetClass' => Powody::className(), 'targetAttribute' => ['id_powod' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_uzytkownika' => 'Id Uzytkownika',
            'id_ksiazki' => 'Id Ksiazki',
            'id_powod' => 'Id Powod',
            'data' => 'Data',
        ];
    }

    /**
     * Gets query for [[Uzytkownika]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUzytkownika()
    {
        return $this->hasOne(Uzytkownicy::className(), ['id' => 'id_uzytkownika']);
    }

    /**
     * Gets query for [[Ksiazki]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKsiazki()
    {
        return $this->hasOne(Ksiazki::className(), ['id' => 'id_ksiazki']);
    }

    /**
     * Gets query for [[Powod]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPowod()
    {
        return $this->hasOne(Powody::className(), ['id' => 'id_powod']);
    }
}
