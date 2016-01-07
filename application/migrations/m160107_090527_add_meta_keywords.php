<?php

use yii\db\Migration;
use app\models\DynamicContent;

class m160107_090527_add_meta_keywords extends Migration
{
    public function up()
    {
        $this->addColumn(
            DynamicContent::tableName(),
            'mate_keywords',
            $this->string()->defaultValue(null));
    }

    public function down()
    {
        echo "m160107_090527_add_meta_keywords cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
