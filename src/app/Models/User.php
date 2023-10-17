<?php

declare(strict_types=1);

namespace App\Models;
use App\Model;

class User extends Model
{
    public function create(string $email, string $name, bool $isActime = true): int
    {

        $stmt = $this->db->prepare('INSERT into users (email, full_name, is_active, created_at) values (?,?,?, now())');

        $stmt->execute([$email, $name, $isActime]);

        return (int) $this->db->lastInsertId();
    }
}
