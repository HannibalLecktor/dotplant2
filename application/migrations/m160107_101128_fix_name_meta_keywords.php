<?php

use yii\db\Migration;
use app\modules\page\models\Page;
use app\modules\shop\models\Product;
use app\modules\shop\models\Category;
use app\models\PrefilteredPages;
use app\models\DynamicContent;

class m160107_101128_fix_name_meta_keywords extends Migration
{
    public function up()
    {
        $this->addColumn(
            Page::tableName(),
            'meta_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            Product::tableName(),
            'meta_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            Category::tableName(),
            'meta_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            PrefilteredPages::tableName(),
            'meta_keywords',
            $this->string()->defaultValue(null));

        $this->addColumn(
            DynamicContent::tableName(),
            'meta_keywords',
            $this->string()->defaultValue(null));

        $this->dropColumn(Page::tableName(), 'mate_keywords');
        $this->dropColumn(Product::tableName(), 'mate_keywords');
        $this->dropColumn(Category::tableName(), 'mate_keywords');
        $this->dropColumn(PrefilteredPages::tableName(), 'mate_keywords');
        $this->dropColumn(DynamicContent::tableName(), 'mate_keywords');
    }

    public function down()
    {
        echo "m160107_101128_fix_name_meta_keywords cannot be reverted.\n";

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
