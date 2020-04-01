<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "powody".
 *
 * @property int $id
 * @property string|null $powod
 *
 * @property Rozliczenia[] $rozliczenias
 */
class Powody extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'powody';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['powod'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'powod' => 'Powod',
        ];
    }

    /**
     * Gets query for [[Rozliczenias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRozliczenias()
    {
        return $this->hasMany(Rozliczenia::className(), ['id_powod' => 'id']);
    }
}
