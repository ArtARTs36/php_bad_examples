<?php

use App\Http\Controllers\Controller;
use App\Http\Resources\EduFacilityResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EduFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $model = new EduFacility();
        return EduFacilityResource::collection(
            request()->term ?
                $model
                    ->orWhere('name', 'LIKE', '%' . request()->term . '%')->get() :
                $model->get()
        );
    }
}
