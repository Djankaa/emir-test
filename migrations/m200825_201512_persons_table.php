<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m200825_201512_persons_table
 */
class m200825_201512_persons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200825_201512_persons_table cannot be reverted.\n";

        return false;
    }

    public function up()
    {
        $this->createTable('persons', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING . ' NOT NULL',
            'last_name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('persons');
    }
}
