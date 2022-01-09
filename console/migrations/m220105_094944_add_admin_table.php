<?php

use yii\db\Migration;

/**
 * Class m220105_094944_add_admin_table
 */
class m220105_094944_add_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('admin', [
            'admin_id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'password' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('admin');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_094944_add_admin_table cannot be reverted.\n";

        return false;
    }
    */
}
