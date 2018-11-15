<?php

use yii\db\Migration;

/**
 * Class m181115_094011_add_lastmod_to_sitemap
 */
class m181115_094011_add_lastmod_to_sitemap extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn(
            'sitemap',
            'lastmod',
            $this->string(9)
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('sitemap', 'lastmod');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181115_094011_add_lastmod_to_sitemap cannot be reverted.\n";

        return false;
    }
    */
}
