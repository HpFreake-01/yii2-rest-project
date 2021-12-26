<?php

use yii\db\Migration;

/**
 * Class m211225_152620_create_product_in_order
 */
class m211225_152620_create_product_in_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('product_in_order',[
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(),
            'price' => $this->decimal(10,2),
            'product_id' => $this->integer(),
            'order_id' => $this->integer(),
        ],$tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product_in_order');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211225_152620_create_product_in_order cannot be reverted.\n";

        return false;
    }
    */
}
