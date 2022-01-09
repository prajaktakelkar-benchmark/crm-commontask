<?php

use yii\db\Migration;

/**
 * Class m220105_095611_add_customer_table
 */
class m220105_095611_add_customer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('customer', [
            'cust_id' => $this->primaryKey(),
            'cust_name' => $this->string()->notNull(),
            'lead_id' => $this->integer()->notNull(),
            'plan_id' => $this->integer()->notNull(),

        ]);

        $this->addForeignKey(
            'fk-customer-lead_id',
            'customer',
            'lead_id',
            'leads',
            'lead_id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-customer-plan_id',
            'customer',
            'plan_id',
            'plan',
            'plan_id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
       $this->dropForeinKey(
        'fk-customer-lead_id',
        'leads'
       );
       $this->dropForeinKey(
        'fk-customer-plan_id',
        'plan'
       );
       $this->dropTable('customer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_095611_add_customer_table cannot be reverted.\n";

        return false;
    }
    */
}
