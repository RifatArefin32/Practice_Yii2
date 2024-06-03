<?php

use yii\db\Migration;

/**
 * Class m240603_085406_product
 */
class m240603_085406_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("product", [
            "id"=> $this->primaryKey(),
            "name"=> $this->string()->notNull(),
            "price"=> $this->decimal(10,2)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("product");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240603_085406_product cannot be reverted.\n";

        return false;
    }
    */
}
