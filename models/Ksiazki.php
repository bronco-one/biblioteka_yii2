<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ksiazki".
 *
 * @property int $id
 * @property string $isbn
 * @property string $tytul
 * @property string $autor
 * @property int $id_dzial
 * @property int $id_stan
 *
 * @property Dzial $dzial
 * @property StanKsiazki $stan
 * @property Naprawy[] $naprawies
 * @property Rezerwacje[] $rezerwacjes
 * @property Rozliczenia[] $rozliczenias
 * @property Wypozyczenia[] $wypozyczenias
 * @property Zakupy[] $zakupies
 */
class Ksiazki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ksiazki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isbn', 'tytul', 'autor', 'id_dzial', 'id_stan'], 'required'],
            [['id_dzial', 'id_stan'], 'integer'],
            [['isbn'], 'string', 'max' => 17],
            [['tytul'], 'string', 'max' => 90],
            [['autor'], 'string', 'max' => 100],
            [['id_dzial'], 'exist', 'skipOnError' => true, 'targetClass' => Dzial::className(), 'targetAttribute' => ['id_dzial' => 'id']],
            [['id_stan'], 'exist', 'skipOnError' => true, 'targetClass' => StanKsiazki::className(), 'targetAttribute' => ['id_stan' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isbn' => 'Isbn',
            'tytul' => 'Tytuł',
            'autor' => 'Autor',
            'id_dzial' => 'Dział',
            'id_stan' => 'Stan książki',
        ];
    }

    /**
     * Gets query for [[Dzial]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDzial()
    {
        return $this->hasOne(Dzial::className(), ['id' => 'id_dzial']);
    }

    /**
     * Gets query for [[Stan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStan()
    {
        return $this->hasOne(StanKsiazki::className(), ['id' => 'id_stan']);
    }

    /**
     * Gets query for [[Naprawies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNaprawies()
    {
        return $this->hasMany(Naprawy::className(), ['id_ksiazki' => 'id']);
    }

    /**
     * Gets query for [[Rezerwacjes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRezerwacjes()
    {
        return $this->hasMany(Rezerwacje::className(), ['id_ksiazki' => 'id']);
    }

    /**
     * Gets query for [[Rozliczenias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRozliczenias()
    {
        return $this->hasMany(Rozliczenia::className(), ['id_ksiazki' => 'id']);
    }

    /**
     * Gets query for [[Wypozyczenias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWypozyczenias()
    {
        return $this->hasMany(Wypozyczenia::className(), ['id_ksiazki' => 'id']);
    }

    /**
     * Gets query for [[Zakupies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakupies()
    {
        return $this->hasMany(Zakupy::className(), ['id_ksiazki' => 'id']);
    }
}
