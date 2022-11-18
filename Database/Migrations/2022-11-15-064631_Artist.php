<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artist extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id' =>[
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true
             ],
             'name' => [
                'type' => 'varchar',
                'constraint' => 255
             ],
             'status_id' => [
                'type' => 'int'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('artists', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('artists');
    }
}
