<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apple}}`.
 */
class m220324_045443_create_apple_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%apple}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->comment('Наименование'),
            'create_at' => $this->integer()->comment('Дата появления'),
            'update_at' => $this->integer()->comment('Дата обновления'),
            'fall_at' => $this->integer()->comment('Дата падения'),
            'color' => $this->string(100)->notNull()->comment('Цвет'),
            'size' => $this->tinyInteger(3)->notNull()->comment('Размер'),
            'status' => $this->tinyInteger(1)->notNull()->comment('Статус'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%apple}}');
    }
}
