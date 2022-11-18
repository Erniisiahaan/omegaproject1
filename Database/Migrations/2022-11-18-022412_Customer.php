<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
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
             'phone_number' => [
                'type' => 'int',
             ],
             'email' => [
                'type' => 'varchar',
                'constraint' => 255
             ],
             'status_id' => [
                'type' => 'int'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('customer', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
