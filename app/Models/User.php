<?php

namespace App\Models;

use Core\Database\Model;
use Core\Attributes\Required;
use Core\Attributes\Email;
use Core\Attributes\MinLength;

class User extends Model
{
    protected $table = 'users';

    public function __construct(
        public ?int $id = null,

        #[Required]
        public ?string $nome = null,

        #[Required]
        #[Email]
        public ?string $email = null,

        #[Required]
        #[MinLength(8)]
        public ?string $password = null,

        public ?string $created_at = null,
        public ?string $updated_at = null,
    )
    {
        parent::__construct();
    }
}
