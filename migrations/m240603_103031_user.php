<?php

use yii\db\Migration;

/**
 * Class m240603_103031_user
 */
class m240603_103031_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable("user", [
            "id"=> $this->primaryKey(),
            "username"=> $this->string(255)->notNull(),
            "auth_key"=> $this->text()->notNull(),
            "verification_token"=> $this->text()->notNull(),
            "password"=> $this->text()->notNull(),
            "password_reset_token"=> $this->text()->notNull(),
            "email"=> $this->string(255)->notNull(),
            "status"=> $this->smallInteger()->notNull()->defaultValue(0),
            "created_at"=> $this->integer()->notNull(),
            "updated_at"=> $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable("user");
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240603_103031_user cannot be reverted.\n";

        return false;
    }
    */
}
