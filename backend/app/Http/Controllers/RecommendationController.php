<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecommendationPostRequest;
use App\Services\RecommendationService;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function __construct(
        RecommendationService $recommendationService,)
    {
        $this->recommendationService = $recommendationService;
    }

    public function createRecommendation(RecommendationPostRequest $request){
        $recommendation =  $this->recommendationService->createRecommendation($request);
        if($recommendation){
            return response($recommendation, 201);
        }
    }

    public function updateRecommendationStatus($id, Request $request){
        $recommendationUpdated =  $this->recommendationService->updateRecommendationStatus($id, $request);
        if($recommendationUpdated){
            return $recommendationUpdated;
        }
    }

    public function getAllRecommendations(){
        $result = $this->recommendationService->getAllRecommendations()->get();
        return $result;
    }

    public function deleteOneRecommendation($id){
        if($this->recommendationService->deleteOneRecommendation($id)){
           return true;
        }
    }

}
