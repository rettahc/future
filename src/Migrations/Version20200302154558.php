<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200302154558 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(42) NOT NULL, `name` VARCHAR(42) NOT NULL, age INT NOT NULL, height INT NOT NULL, weight INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredient (id INT AUTO_INCREMENT NOT NULL, `name` VARCHAR(255) NOT NULL, calories NUMERIC(10, 2) NOT NULL, carbs NUMERIC(10, 2) NOT NULL, protein NUMERIC(10, 2) NOT NULL, fat NUMERIC(10, 2) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nutrion_plan (id INT AUTO_INCREMENT NOT NULL, fk_profil_id INT DEFAULT NULL, `name` VARCHAR(255) NOT NULL, `created` DATETIME NOT NULL, training_days INT NOT NULL, calories NUMERIC(10, 2) NOT NULL, carbs NUMERIC(10, 2) NOT NULL, protein NUMERIC(10, 2) NOT NULL, fat NUMERIC(10, 2) NOT NULL, INDEX IDX_D2CD7CB4460707E8 (fk_profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nutrion_plan ADD CONSTRAINT FK_D2CD7CB4460707E8 FOREIGN KEY (fk_profil_id) REFERENCES profil (id)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('ALTER TABLE nutrion_plan DROP FOREIGN KEY FK_D2CD7CB4460707E8');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE ingredient');
        $this->addSql('DROP TABLE nutrion_plan');
    }
}
