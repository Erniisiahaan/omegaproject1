<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Event extends Migration
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
             'image_name' => [
                'type' => 'varchar',
                'constraint' => 255
            ],
            'artist_id' => [
                'type' => 'int'
            ],
            'ticket_limit' => [
                'type' => 'int'
            ],
             'status_id' => [
                'type' => 'int'
            ],
            'event_date' => [
                'type' => 'datetime',
            ],
            'user_id' => [
                'type' => 'int'
            ],
            'price' => [
                'type' => 'int'
            ],
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('event', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('event');
    }
}
