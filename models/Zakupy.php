<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakupy".
 *
 * @property int $id
 * @property int $id_ksiazki
 * @property string $data_zakupu
 * @property int $id_firma
 * @property float $cena
 *
 * @property Ksiazki $ksiazki
 * @property Kontrahenci $firma
 */
class Zakupy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakupy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ksiazki', 'data_zakupu', 'id_firma', 'cena'], 'required'],
            [['id_ksiazki', 'id_firma'], 'integer'],
            [['data_zakupu'], 'safe'],
            [['cena'], 'number'],
            [['id_ksiazki'], 'exist', 'skipOnError' => true, 'targetClass' => Ksiazki::className(), 'targetAttribute' => ['id_ksiazki' => 'id']],
            [['id_firma'], 'exist', 'skipOnError' => true, 'targetClass' => Kontrahenci::className(), 'targetAttribute' => ['id_firma' => 'id']],
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
            'data_zakupu' => 'Data Zakupu',
            'id_firma' => 'Id Firma',
            'cena' => 'Cena',
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
     * Gets query for [[Firma]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirma()
    {
        return $this->hasOne(Kontrahenci::className(), ['id' => 'id_firma']);
    }
}
