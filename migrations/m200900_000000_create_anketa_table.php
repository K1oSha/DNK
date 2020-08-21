<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m200900_000000_create_anketa_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%anketa}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'age' => $this->integer(),
            'class' => $this->integer(),
            'ucheb' => $this->string(),
            'interes' => $this->string(),
            'dnk_dir' => $this->string(),
            'dnk_prog' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'fio_parent' => $this->string(),
            'phone_parent' => $this->string(),
            'personal_data' => $this->integer(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%anketa}}',);
    }
}
