<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use stdClass;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories(): Collection
    {
        return DB::table('categories')->get();
    }

    public function getNews(): Collection
    {
        return DB::table('news')->get();
    }

    public function getOneNews(int $id): stdClass
    {
        return DB::table('news')->find($id);
    }

    public function getCategory(int $id): stdClass
    {
        return DB::table('categories')->find($id);
    }
}
