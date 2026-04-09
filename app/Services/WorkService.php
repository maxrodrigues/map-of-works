<?php

namespace App\Services;

use App\Models\Work;
use Illuminate\Pagination\LengthAwarePaginator;

class WorkService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected Work $model){}

    public function countAllWorks(): int
    {
        return $this->model->count();
    }

    public function getWorks(): LengthAwarePaginator
    {
        return $this->model
            ->paginate(10);
    }
}
