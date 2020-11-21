<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stan_ksiazki".
 *
 * @property int $id
 * @property string|null $stan
 *
 * @property Ksiazki[] $ksiazkis
 */
class StanKsiazki extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stan_ksiazki';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'stan' => 'Stan',
        ];
    }

    /**
     * Gets query for [[Ksiazkis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKsiazkis()
    {
        return $this->hasMany(Ksiazki::className(), ['id_stan' => 'id']);
    }
}
