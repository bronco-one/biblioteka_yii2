<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rezerwacje".
 *
 * @property int $id
 * @property int $id_uzytkownika
 * @property int $id_ksiazki
 *
 * @property Uzytkownicy $uzytkownika
 * @property Ksiazki $ksiazki
 */
class Rezerwacje extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rezerwacje';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_uzytkownika', 'id_ksiazki'], 'required'],
            [['id_uzytkownika', 'id_ksiazki'], 'integer'],
            [['id_uzytkownika'], 'exist', 'skipOnError' => true, 'targetClass' => Uzytkownicy::className(), 'targetAttribute' => ['id_uzytkownika' => 'id']],
            [['id_ksiazki'], 'exist', 'skipOnError' => true, 'targetClass' => Ksiazki::className(), 'targetAttribute' => ['id_ksiazki' => 'id']],
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
}
