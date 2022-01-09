<?php

use yii\db\Migration;

/**
 * Class m220105_094023_add_admin_employee_table
 */
class m220105_094023_add_admin_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {

        $this->createTable('admin_employee', [
            'emp_id' => $this->primaryKey(),
            'emp_name' => $this->string()->notNull(),
            'emp_email' => $this->string()->notNull(),
            'emp_phone' => $this->integer(20)->notNull(),
            'emp_pass' => $this->string()->notNull(),
            'created_at' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP')

        ]);
    }
    public function down()
    {
        $this->dropTable('admin_employee');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_094023_add_admin_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
