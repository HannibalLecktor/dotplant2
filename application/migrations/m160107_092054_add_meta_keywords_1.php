<?php

use yii\db\Migration;
use app\modules\page\models\Page;
use app\modules\shop\models\Product;
use app\modules\shop\models\Category;
use app\models\PrefilteredPages;

class m160107_092054_add_meta_keywords_1 extends Migration
{
    public function up()
    {
        $this->addColumn(
            Page::tableName(),
            'mate_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            Product::tableName(),
            'mate_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            Category::tableName(),
            'mate_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            PrefilteredPages::tableName(),
            'mate_keywords',
            $this->string()->defaultValue(null));

    }

    public function down()
    {
        echo "m160107_092054_add_meta_keywords_1 cannot be reverted.\n";

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
