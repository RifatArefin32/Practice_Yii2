<?php

use yii\db\Migration;

/**
 * Class m240603_095425_blog
 */
class m240603_095425_blog extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("blog", [
            "id"=> $this->primaryKey(),
            "title"=> $this->string(512)->notNull(),
            "content"=> $this->text()->notNull(),
            "created_at"=> $this->integer()->notNull(),
            "updated_at"=> $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("blog");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240603_095425_blog cannot be reverted.\n";

        return false;
    }
    */
}
