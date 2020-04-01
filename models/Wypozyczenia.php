<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wypozyczenia".
 *
 * @property int $id
 * @property int $id_ksiazki
 * @property int $id_uzytkownika
 * @property string $data_wypozyczenia
 * @property string|null $data_zwrotu
 * @property string $termin_wypozyczenia
 *
 * @property Ksiazki $ksiazki
 * @property Uzytkownicy $uzytkownika
 */
class Wypozyczenia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wypozyczenia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ksiazki', 'id_uzytkownika', 'data_wypozyczenia', 'termin_wypozyczenia'], 'required'],
            [['id_ksiazki', 'id_uzytkownika'], 'integer'],
            [['data_wypozyczenia', 'data_zwrotu', 'termin_wypozyczenia'], 'safe'],
            [['id_ksiazki'], 'exist', 'skipOnError' => true, 'targetClass' => Ksiazki::className(), 'targetAttribute' => ['id_ksiazki' => 'id']],
            [['id_uzytkownika'], 'exist', 'skipOnError' => true, 'targetClass' => Uzytkownicy::className(), 'targetAttribute' => ['id_uzytkownika' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_ksiazki' => 'Id Ksiazki',
            'id_uzytkownika' => 'Id Uzytkownika',
            'data_wypozyczenia' => 'Data Wypozyczenia',
            'data_zwrotu' => 'Data Zwrotu',
            'termin_wypozyczenia' => 'Termin Wypozyczenia',
        ];
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
     * Gets query for [[Uzytkownika]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUzytkownika()
    {
        return $this->hasOne(Uzytkownicy::className(), ['id' => 'id_uzytkownika']);
    }
}
