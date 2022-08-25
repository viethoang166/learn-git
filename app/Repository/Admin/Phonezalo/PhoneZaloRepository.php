<?php

namespace App\Repository\Admin\Phonezalo;

use App\Models\Phonezalo;
use App\Repository\Admin\Phonezalo\PhonezaloRepositoryInterface;
use App\Repository\Eloquent\BaseRepository;

class PhonezaloRepository extends BaseRepository implements PhonezaloRepositoryInterface
{
    public function __construct(PhoneZalo $model)
    {
        $this->model = $model;
    }
}
