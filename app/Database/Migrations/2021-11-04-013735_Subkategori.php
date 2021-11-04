<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subkategori extends Migration
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
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_kategori' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('subkategori');
    }

    public function down()
    {
        //
    }
}
