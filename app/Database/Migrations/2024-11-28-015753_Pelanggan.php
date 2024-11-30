<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pelanggan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' =>[
            'type'      => 'INT',
            'constraint'=> 11,
            'unsigned'  => true,
            'auto_increment' => true,
            ],

            'nama' =>[
                'type' => 'VARCHAR',
                'constraint' =>'255',
            ],

            'alamat' =>[
                'type' => 'VARCHAR',
                'constraint' =>'255',
            ],

            'no_telp' =>[
                'type' => 'VARCHAR',
                'constraint' =>'100',
            ],

            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ]
            ]);
            
        $this->forge->addPrimaryKey('id');
        
        $this->forge->createTable('pelanggan');
    }


    public function down()
    {
        $this->forge->dropTable('pelanggan');
    }

}