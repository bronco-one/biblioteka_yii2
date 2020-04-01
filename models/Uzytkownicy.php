<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uzytkownicy".
 *
 * @property int $id
 * @property string $imie
 * @property string $nazwisko
 * @property string $adres
 * @property string $email
 * @property string|null $telefon
 * @property string $data_rejestracji
 * @property int|null $aktywny
 *
 * @property Rezerwacje[] $rezerwacjes
 * @property Rozliczenia[] $rozliczenias
 * @property Wypozyczenia[] $wypozyczenias
 */
class Uzytkownicy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uzytkownicy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['imie', 'nazwisko', 'adres', 'email', 'data_rejestracji'], 'required'],
            [['data_rejestracji'], 'safe'],
            [['aktywny'], 'integer'],
            [['imie', 'nazwisko'], 'string', 'max' => 50],
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
            'imie' => 'Imie',
            'nazwisko' => 'Nazwisko',
            'adres' => 'Adres',
            'email' => 'Email',
            'telefon' => 'Telefon',
            'data_rejestracji' => 'Data Rejestracji',
            'aktywny' => 'Aktywny',
        ];
    }

    /**
     * Gets query for [[Rezerwacjes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRezerwacjes()
    {
        return $this->hasMany(Rezerwacje::className(), ['id_uzytkownika' => 'id']);
    }

    /**
     * Gets query for [[Rozliczenias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRozliczenias()
    {
        return $this->hasMany(Rozliczenia::className(), ['id_uzytkownika' => 'id']);
    }

    /**
     * Gets query for [[Wypozyczenias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWypozyczenias()
    {
        return $this->hasMany(Wypozyczenia::className(), ['id_uzytkownika' => 'id']);
    }
}
