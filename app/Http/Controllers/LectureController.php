<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Lecture;

class LectureController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(Lecture::all());
    }

    /*public function show($id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder|array|null
    {
        return Lecture::query()->findOrFail($id);
    }*/

    public function show(Lecture $lecture): JsonResponse
    {
        return JsonResponse::make($lecture);
    }

}
