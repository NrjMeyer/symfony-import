<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230811120043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acount CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE postal_code postal_code VARCHAR(255) DEFAULT NULL, CHANGE city city VARCHAR(255) DEFAULT NULL, CHANGE event_last_date event_last_date DATETIME DEFAULT NULL, CHANGE mark mark VARCHAR(255) DEFAULT NULL, CHANGE vin vin VARCHAR(255) DEFAULT NULL, CHANGE prospect_type prospect_type VARCHAR(255) DEFAULT NULL, CHANGE event_date event_date DATETIME DEFAULT NULL, CHANGE origin_event origin_event VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acount CHANGE name name VARCHAR(255) NOT NULL, CHANGE postal_code postal_code VARCHAR(255) NOT NULL, CHANGE city city VARCHAR(255) NOT NULL, CHANGE event_last_date event_last_date DATETIME NOT NULL, CHANGE mark mark VARCHAR(255) NOT NULL, CHANGE vin vin VARCHAR(255) NOT NULL, CHANGE prospect_type prospect_type VARCHAR(255) NOT NULL, CHANGE event_date event_date DATETIME NOT NULL, CHANGE origin_event origin_event VARCHAR(255) NOT NULL');
    }
}
