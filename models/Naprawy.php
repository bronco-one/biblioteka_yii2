<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "naprawy".
 *
 * @property int $id
 * @property int $id_ksiazki
 * @property string $data_naprawy
 * @property int $id_firma
 * @property float $cena
 *
 * @property Kontrahenci $firma
 * @property Ksiazki $ksiazki
 */
class Naprawy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'naprawy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ksiazki', 'data_naprawy', 'id_firma', 'cena'], 'required'],
            [['id_ksiazki', 'id_firma'], 'integer'],
            [['data_naprawy'], 'safe'],
            [['cena'], 'number'],
            [['id_firma'], 'exist', 'skipOnError' => true, 'targetClass' => Kontrahenci::className(), 'targetAttribute' => ['id_firma' => 'id']],
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
            'id_ksiazki' => 'Id Ksiazki',
            'data_naprawy' => 'Data Naprawy',
            'id_firma' => 'Id Firma',
            'cena' => 'Cena',
        ];
    }

    /**
     * Gets query for [[Firma]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirma()
    {
        return $this->hasOne(Kontrahenci::className(), ['id' => 'id_firma']);
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
