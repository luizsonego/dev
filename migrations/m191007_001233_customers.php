<?php

use yii\db\Migration;

/**
 * Class m191007_001233_customers
 */
class m191007_001233_customers extends Migration
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
        echo "m191007_001233_customers cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('customers', [
            'id'=>$this->primaryKey(),
            'name'=>$this->string(30)->notNull(),
            'cpf'=>$this->string(15)->notNull(),
            'email'=>$this->string(45)->notNull(),
            'created_at'=>$this->timestamp(),
            'updated_at'=>$this->timestamp()
        ]);
    }

    public function down()
    {
        $this->dropTable('customers');
    }
    
}
