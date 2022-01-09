<?php

use yii\db\Migration;

/**
 * Class m220105_094756_add_plan_table
 */
class m220105_094756_add_plan_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('plan', [
            'plan_id' => $this->primaryKey(),
            'plan_name' => $this->string()->notNull(),
            'validity' => $this->string()->notNull(),
            'plan_data' => $this->string()->notNull(),
            'price' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('plan');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_094756_add_plan_table cannot be reverted.\n";

        return false;
    }
    */
}
