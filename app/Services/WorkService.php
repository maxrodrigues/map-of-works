<?php

namespace App\Services;

use App\Models\Work;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class WorkService
{
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

    public function getMapLocations(): Collection
    {
        return $this->model
            ->query()
            ->whereNotNull('latitude')
            ->whereNotNull('longitude')
            ->get(['location', 'description', 'latitude', 'longitude'])
            ->map(fn (Work $work): array => [
                'location' => $work->location,
                'description' => $work->description,
                'latitude' => (float) $work->latitude,
                'longitude' => (float) $work->longitude,
            ])
            ->values();
    }

    public function getWorksMunicipality(): Collection
    {
        return $this->model
            ->query()
            ->selectRaw('municipality, COUNT(1) as count')
            ->groupBy('municipality')
            ->get();
    }
}
