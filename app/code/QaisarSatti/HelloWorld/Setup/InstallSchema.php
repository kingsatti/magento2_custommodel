<?php

namespace QaisarSatti\HelloWorld\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable( 'sample_posts' )
        )->addColumn(
            'post_id',
            Table::TYPE_SMALLINT,
            null,
            [ 'identity' => true, 'nullable' => false, 'primary' => true ],
            'Post ID'
        )->addColumn(
            'title',
            Table::TYPE_TEXT,
            255,
            [ 'nullable' => false ],
            'Post Title'
        )->addColumn(
            'content',
            Table::TYPE_TEXT,
            '2M',
            [ ],
            'Post Content'
        )->setComment(
            'Sample Post Table'
        );

        $installer->getConnection()->createTable( $table );

        $installer->endSetup();
    }
}