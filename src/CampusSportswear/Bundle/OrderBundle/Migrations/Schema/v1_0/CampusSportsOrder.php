<?php
namespace CampusSportswear\Bundle\OrderBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CampusSportswearOrder implements Migration
{
    public function up(Schema $schema, QueryBag $queries)
    {
        $table = $schema->createTable('cs_orders');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('account_id', 'integer', ['notnull' => false]);
        $table->addColumn('user_id', 'integer', ['notnull' => false]);
        $table->addColumn('item_description', 'text', []);
        $table->addColumn('item_quantity', 'integer', []);
        $table->addColumn('item_quoted_price', 'float', []);
        $table->addColumn('item_recommended_price', 'float', []);
        $table->addColumn('order_address', 'string', ['length' => 255]);
        $table->addColumn('comment', 'text', []);
        $table->addColumn('item_graphic', 'string', ['length' => 255]);
        $table->addColumn('order_status', 'smallint', []);
        $table->addColumn('created_at', 'datetime', []);
        $table->addColumn('updated_at', 'datetime', []);
        $table->addColumn('updated_by', 'integer', ['notnull' => false]);
        $table->setPrimaryKey(['id']);
        $table->addForeignKeyConstraint(
            $schema->getTable('orocrm_account'),
            ['account_id'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['user_id'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['updated_by'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
    }
}