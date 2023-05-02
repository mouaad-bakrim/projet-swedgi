<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230502121415 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contrat ADD tache_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrat ADD CONSTRAINT FK_60349993D2235D39 FOREIGN KEY (tache_id) REFERENCES tache (id)');
        $this->addSql('CREATE INDEX IDX_60349993D2235D39 ON contrat (tache_id)');
        $this->addSql('ALTER TABLE tache CHANGE periodicite_id periodicite_id INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache CHANGE periodicite_id periodicite_id INT NOT NULL');
        $this->addSql('ALTER TABLE contrat DROP FOREIGN KEY FK_60349993D2235D39');
        $this->addSql('DROP INDEX IDX_60349993D2235D39 ON contrat');
        $this->addSql('ALTER TABLE contrat DROP tache_id');
    }
}
