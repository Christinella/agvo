<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240823123449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE form_reservation DROP FOREIGN KEY FK_B5A3D944912C90D4');
        $this->addSql('ALTER TABLE destinations DROP FOREIGN KEY FK_2D3343C3A6E44244');
        $this->addSql('ALTER TABLE destinations DROP FOREIGN KEY FK_2D3343C3A76ED395');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE destinations');
        $this->addSql('DROP INDEX IDX_B5A3D944912C90D4 ON form_reservation');
        $this->addSql('ALTER TABLE form_reservation DROP destinations_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE destinations (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, pays_id INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, image VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix INT NOT NULL, date_depart DATE NOT NULL, date_arrivee DATE NOT NULL, INDEX IDX_2D3343C3A76ED395 (user_id), INDEX IDX_2D3343C3A6E44244 (pays_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE destinations ADD CONSTRAINT FK_2D3343C3A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE destinations ADD CONSTRAINT FK_2D3343C3A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE form_reservation ADD destinations_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE form_reservation ADD CONSTRAINT FK_B5A3D944912C90D4 FOREIGN KEY (destinations_id) REFERENCES destinations (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_B5A3D944912C90D4 ON form_reservation (destinations_id)');
    }
}
