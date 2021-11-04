<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Iklan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '5',
                'auto_increament' => true
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => '15',
            ],
            'id_subkategori' => [
                'type' => 'INT',
                'constraint' => '5'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('iklan');
    }

    public function down()
    {
        //
    }
}
