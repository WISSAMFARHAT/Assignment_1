<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210114133034 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post_persist (id INT AUTO_INCREMENT NOT NULL, name_class VARCHAR(255) NOT NULL, datecreat VARCHAR(255) NOT NULL, about VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_update (id INT AUTO_INCREMENT NOT NULL, name_class VARCHAR(255) NOT NULL, date_update VARCHAR(255) NOT NULL, coloun_update VARCHAR(255) NOT NULL, old VARCHAR(255) NOT NULL, new VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE students_grade DROP FOREIGN KEY fk_classe');
        $this->addSql('ALTER TABLE students_grade DROP FOREIGN KEY fk_course');
        $this->addSql('ALTER TABLE students_grade DROP FOREIGN KEY fk_student');
        $this->addSql('DROP INDEX clase_id ON students_grade');
        $this->addSql('DROP INDEX course_id ON students_grade');
        $this->addSql('DROP INDEX student_id ON students_grade');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE pre_persist');
        $this->addSql('DROP TABLE pre_update');
        $this->addSql('ALTER TABLE students_grade ADD CONSTRAINT fk_classe FOREIGN KEY (clase_id) REFERENCES clase (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE students_grade ADD CONSTRAINT fk_course FOREIGN KEY (course_id) REFERENCES course (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE students_grade ADD CONSTRAINT fk_student FOREIGN KEY (student_id) REFERENCES student (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX clase_id ON students_grade (clase_id)');
        $this->addSql('CREATE INDEX course_id ON students_grade (course_id)');
        $this->addSql('CREATE INDEX student_id ON students_grade (student_id)');
    }
}
