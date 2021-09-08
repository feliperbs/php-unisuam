<?php

namespace App\Services;

use App\Repositories\RecommendationRepository;

class RecommendationService{
    protected $recommendationService;

    public function __construct(RecommendationRepository $recommendationRepository)
    {
        $this->recommendationRepository = $recommendationRepository;
    }

    public function createRecommendation($request){
        return $this->recommendationRepository->createRecommendation($request);
    }

    public function updateRecommendationStatus($id, $request){
        return $this->recommendationRepository->updateRecommendationStatus($id, $request);
    }

    public function getAllRecommendations(){
        return $this->recommendationRepository->getAllRecommendations();
    }


    public function deleteOneRecommendation($id){
        return $this->recommendationRepository->deleteOneRecommendation($id);
    }


}