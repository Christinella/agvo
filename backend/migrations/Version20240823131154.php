<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240823131154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE destinations ADD user_id INT DEFAULT NULL, ADD pays_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE destinations ADD CONSTRAINT FK_2D3343C3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE destinations ADD CONSTRAINT FK_2D3343C3A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_2D3343C3A76ED395 ON destinations (user_id)');
        $this->addSql('CREATE INDEX IDX_2D3343C3A6E44244 ON destinations (pays_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE destinations DROP FOREIGN KEY FK_2D3343C3A76ED395');
        $this->addSql('ALTER TABLE destinations DROP FOREIGN KEY FK_2D3343C3A6E44244');
        $this->addSql('DROP INDEX IDX_2D3343C3A76ED395 ON destinations');
        $this->addSql('DROP INDEX IDX_2D3343C3A6E44244 ON destinations');
        $this->addSql('ALTER TABLE destinations DROP user_id, DROP pays_id');
    }
}
