<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231218170501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, fk_page_id INT NOT NULL, fk_categorie_id INT NOT NULL, fk_user_id INT NOT NULL, date_article DATETIME NOT NULL, text_article LONGTEXT NOT NULL, title_article VARCHAR(255) NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_23A0E66FC695EC8 (fk_page_id), INDEX IDX_23A0E669D28E534 (fk_categorie_id), INDEX IDX_23A0E665741EEB9 (fk_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_img (article_id INT NOT NULL, img_id INT NOT NULL, INDEX IDX_29DDEBD67294869C (article_id), INDEX IDX_29DDEBD6C06A9F55 (img_id), PRIMARY KEY(article_id, img_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, name_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE center (id INT AUTO_INCREMENT NOT NULL, name_center VARCHAR(255) NOT NULL, num_way INT NOT NULL, type_way VARCHAR(255) NOT NULL, name_way VARCHAR(255) NOT NULL, zip_code INT NOT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, fk_article_id INT NOT NULL, fk_user_id INT DEFAULT NULL, date_comment DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, text_comment LONGTEXT NOT NULL, active TINYINT(1) NOT NULL, INDEX IDX_9474526C82FA4C0F (fk_article_id), INDEX IDX_9474526C5741EEB9 (fk_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, title_event VARCHAR(255) NOT NULL, description_event VARCHAR(255) NOT NULL, location_event VARCHAR(255) NOT NULL, active SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE img (id INT AUTO_INCREMENT NOT NULL, path_img VARCHAR(255) NOT NULL, description_img VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE page (id INT AUTO_INCREMENT NOT NULL, title_page VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phone (id INT AUTO_INCREMENT NOT NULL, center_id INT NOT NULL, fk_type_id INT NOT NULL, phone_number VARCHAR(255) NOT NULL, is_mobile TINYINT(1) NOT NULL, INDEX IDX_444F97DD5932F377 (center_id), INDEX IDX_444F97DD3563B1BF (fk_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phone_type (id INT AUTO_INCREMENT NOT NULL, name_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, last_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_user (user_id INT NOT NULL, event_id INT NOT NULL, INDEX IDX_92589AE2A76ED395 (user_id), INDEX IDX_92589AE271F7E88B (event_id), PRIMARY KEY(user_id, event_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visit (id INT AUTO_INCREMENT NOT NULL, ip VARCHAR(15) NOT NULL, origine VARCHAR(255) NOT NULL, date_visit DATETIME NOT NULL, current_page VARCHAR(255) NOT NULL, cookie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66FC695EC8 FOREIGN KEY (fk_page_id) REFERENCES page (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E669D28E534 FOREIGN KEY (fk_categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E665741EEB9 FOREIGN KEY (fk_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE article_img ADD CONSTRAINT FK_29DDEBD67294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_img ADD CONSTRAINT FK_29DDEBD6C06A9F55 FOREIGN KEY (img_id) REFERENCES img (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C82FA4C0F FOREIGN KEY (fk_article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C5741EEB9 FOREIGN KEY (fk_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE phone ADD CONSTRAINT FK_444F97DD5932F377 FOREIGN KEY (center_id) REFERENCES center (id)');
        $this->addSql('ALTER TABLE phone ADD CONSTRAINT FK_444F97DD3563B1BF FOREIGN KEY (fk_type_id) REFERENCES phone_type (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event_user ADD CONSTRAINT FK_92589AE2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_user ADD CONSTRAINT FK_92589AE271F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66FC695EC8');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E669D28E534');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E665741EEB9');
        $this->addSql('ALTER TABLE article_img DROP FOREIGN KEY FK_29DDEBD67294869C');
        $this->addSql('ALTER TABLE article_img DROP FOREIGN KEY FK_29DDEBD6C06A9F55');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C82FA4C0F');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C5741EEB9');
        $this->addSql('ALTER TABLE phone DROP FOREIGN KEY FK_444F97DD5932F377');
        $this->addSql('ALTER TABLE phone DROP FOREIGN KEY FK_444F97DD3563B1BF');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE event_user DROP FOREIGN KEY FK_92589AE2A76ED395');
        $this->addSql('ALTER TABLE event_user DROP FOREIGN KEY FK_92589AE271F7E88B');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_img');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE center');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE img');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE phone');
        $this->addSql('DROP TABLE phone_type');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE event_user');
        $this->addSql('DROP TABLE visit');
    }
}
