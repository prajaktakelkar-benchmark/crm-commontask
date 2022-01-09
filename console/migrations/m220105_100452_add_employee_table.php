<?php

use yii\db\Migration;

/**
 * Class m220105_100452_add_employee_table
 */
class m220105_100452_add_employee_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'emp_id' => $this->integer()->notNull(),
            'cust_id' => $this->integer()->notNull(),

        ]);

        $this->addForeignKey(
            'fk-employee-emp_id',
            'employee',
            'emp_id',
            'admin_employee',
            'emp_id',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk-employee-cust_id',
            'employee',
            'cust_id',
            'customer',
            'cust_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropForeinKey(
            'fk-employee-emp_id',
            'leads'
           );
           $this->dropForeinKey(
            'fk-employee-cust_id',
            'plan'
           );
           $this->dropTable('employee');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_100452_add_employee_table cannot be reverted.\n";

        return false;
    }
    */
}
