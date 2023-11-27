<?php
namespace App\DTO;

class CenterDTO
{
    private $articlecontacts;
    private $centers;

    public function __construct(array $articlecontacts, array $centers)
    {
        $this->articlecontacts = $articlecontacts;
        $this->centers = $centers;
    }

    public function getArticleContacts(): array
    {
        return $this->articlecontacts;
    }

    public function getCenters(): array
    {
        return $this->centers;
    }
}
