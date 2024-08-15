<?php

class Migration_add_clientefornecedor extends CI_Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `clientes` ADD `fornecedor` BOOLEAN NOT NULL DEFAULT FALSE';
        $this->db->query($sql);

        $sql = 'ALTER TABLE `clientes` ADD `auxiliar` BOOLEAN NOT NULL DEFAULT FALSE';
        $this->db->query($sql);

        $sql = 'ALTER TABLE `clientes` ADD `tecnico` BOOLEAN NOT NULL DEFAULT FALSE';
        $this->db->query($sql);
    }

    public function down()
    {
        $this->db->query('ALTER TABLE `clientes` DROP `fornecedor`;');
        $this->db->query('ALTER TABLE `clientes` DROP `auxiliar`;');
        $this->db->query('ALTER TABLE `clientes` DROP `tecnico`;');
    }
}
