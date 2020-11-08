<?php

namespace App\Repositories\User;

use App\Exceptions\GeneralException;
use Illuminate\Support\Facades\DB;
use App\Models\BookReview\BookReview;
use App\Repositories\BaseRepository;
use App\Models\User\User;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param  User  $user
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}
