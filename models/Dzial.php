<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dzial".
 *
 * @property int $id
 * @property string $nazwa
 *
 * @property Ksiazki[] $ksiazkis
 */
class Dzial extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dzial';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nazwa'], 'required'],
            [['nazwa'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * Gets query for [[Ksiazkis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKsiazkis()
    {
        return $this->hasMany(Ksiazki::className(), ['id_dzial' => 'id']);
    }
}
