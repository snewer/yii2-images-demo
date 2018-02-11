<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "demo".
 *
 * @property string $id
 * @property string $name
 * @property string $image_id
 * @property \snewer\images\models\Image $image
 */
class Demo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'demo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_id', 'name'], 'required'],
            ['image_id', 'exist', 'targetAttribute' => 'id', 'targetClass' => 'snewer\images\models\Image'],
            ['name', 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'image_id' => 'Изображение',
        ];
    }

    public function getImage()
    {
        return $this->hasOne(\snewer\images\models\Image::className(), ['id' => 'image_id'])->with();
    }

}
