<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260911144637 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            INSERT INTO role (role_id, role_name) 
            VALUES (1, 'ADMIN'),
                (2, 'USER'),
                (3, 'GUEST');
        ");

        $this->addSql("
            INSERT INTO mode (mode_id, mode_name, time_limit) 
            VALUES (1, 'SPEED ROUND', 60),
                (2, '3 MINUTES', 180);
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DELETE FROM role WHERE role_id IN (1, 2, 3);");
        $this->addSql("DELETE FROM mode WHERE mode_id IN (1, 2);");
    }
}
