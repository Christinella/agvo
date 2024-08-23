<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240823120612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE destinations_categories DROP FOREIGN KEY FK_61B1CB52912C90D4');
        $this->addSql('ALTER TABLE destinations_categories DROP FOREIGN KEY FK_61B1CB52A21214B7');
        $this->addSql('DROP TABLE destinations_categories');
        $this->addSql('ALTER TABLE destinations DROP categorie');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE destinations_categories (destinations_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_61B1CB52912C90D4 (destinations_id), INDEX IDX_61B1CB52A21214B7 (categories_id), PRIMARY KEY(destinations_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE destinations_categories ADD CONSTRAINT FK_61B1CB52912C90D4 FOREIGN KEY (destinations_id) REFERENCES destinations (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE destinations_categories ADD CONSTRAINT FK_61B1CB52A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE destinations ADD categorie VARCHAR(255) NOT NULL');
    }
}
