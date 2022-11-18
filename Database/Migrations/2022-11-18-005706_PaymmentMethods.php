<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymmentMethods extends Migration
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
        $this->forge->createTable('payment_methods', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('payment_methods');
    }
}
