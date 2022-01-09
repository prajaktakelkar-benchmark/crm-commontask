<?php

use yii\db\Migration;

/**
 * Class m220105_095221_add_leads_table
 */
class m220105_095221_add_leads_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('leads', [
            'lead_id' => $this->primaryKey(),
            'lead_name' => $this->string()->notNull(),
            'created_at' => $this->datetime()->null()->defaultExpression('CURRENT_TIMESTAMP'),
            'plan_id' => $this->integer()->notNull(),

        ]);

        $this->addForeignKey(
            'fk-leads-plan_id',
            'leads',
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
        $this->dropForeignKey(
            'fk-leads-plan_id',
            'leads'
        );
       

        $this->dropTable('leads');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220105_095221_add_leads_table cannot be reverted.\n";

        return false;
    }
    */
}
