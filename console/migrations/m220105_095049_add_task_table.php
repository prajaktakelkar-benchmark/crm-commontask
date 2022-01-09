<?php

use yii\db\Migration;

/**
 * Class m220105_095049_add_task_table
 */
class m220105_095049_add_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('task', [
            'task_id' => $this->primaryKey(),
            'task_name' => $this->string()->notNull(),
            'task_desc' => $this->string()->notNull(),
            'start_date' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'emp_id' => $this->integer()->notNull(),

        ]);

        $this->addForeignKey(
            'fk-task-emp_id',
            'task',
            'emp_id',
            'admin_employee',
            'emp_id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropForeignKey(
            'fk-task-emp_id',
            'task'
        );
       

        $this->dropTable('task');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_095049_add_task_table cannot be reverted.\n";

        return false;
    }
    */
}
