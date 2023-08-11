<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811080408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acount (id INT AUTO_INCREMENT NOT NULL, business_acount VARCHAR(255) NOT NULL, event_acount VARCHAR(255) NOT NULL, last_event_acount VARCHAR(255) NOT NULL, file_number VARCHAR(255) NOT NULL, salutation VARCHAR(255) DEFAULT NULL, current_car_owner VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, lastname VARCHAR(255) DEFAULT NULL, street_number_name VARCHAR(255) NOT NULL, complement_adress VARCHAR(255) DEFAULT NULL, postal_code VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, phone VARCHAR(255) DEFAULT NULL, cell_phone VARCHAR(255) DEFAULT NULL, job_phone VARCHAR(255) DEFAULT NULL, mail VARCHAR(255) DEFAULT NULL, circulation_date DATETIME DEFAULT NULL, buy_date DATETIME DEFAULT NULL, event_last_date DATETIME NOT NULL, mark VARCHAR(255) NOT NULL, model VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) NOT NULL, matricule VARCHAR(255) DEFAULT NULL, prospect_type VARCHAR(255) NOT NULL, kilometrage INT DEFAULT NULL, fuel_type VARCHAR(255) DEFAULT NULL, seller_vn VARCHAR(255) DEFAULT NULL, seller_vo VARCHAR(255) DEFAULT NULL, facture_comment LONGTEXT DEFAULT NULL, vn_vo_type VARCHAR(10) DEFAULT NULL, dir_number VARCHAR(255) DEFAULT NULL, intermediate_sell VARCHAR(255) DEFAULT NULL, event_date DATETIME NOT NULL, origin_event VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE acount');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
