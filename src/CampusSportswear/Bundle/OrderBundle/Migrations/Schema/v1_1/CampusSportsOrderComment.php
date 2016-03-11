<?php
namespace CampusSportswear\Bundle\OrderBundle\Migrations\Schema\v1_0;

use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;

class CampusSportswearOrderComment implements Migration
{
    public function up(Schema $schema, QueryBag $queries)
    {
        $table = $schema->createTable('cs_order_comments');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('order_id', 'integer', ['notnull' => false]);
        $table->addColumn('description', 'text');
        $table->addColumn('created_at', 'datetime', []);
        $table->addColumn('created_by', 'integer', ['notnull' => false]);
        $table->setPrimaryKey(['id']);
        $table->addForeignKeyConstraint(
            $schema->getTable('cs_orders'),
            ['order_id'],
            ['id'],
            ['onDelete' => 'NO ACTION', 'onUpdate' => null]
        );
        $table->addForeignKeyConstraint(
            $schema->getTable('oro_user'),
            ['created_by'],
            ['id'],
            ['onDelete' => 'SET NULL', 'onUpdate' => null]
        );
    }
}