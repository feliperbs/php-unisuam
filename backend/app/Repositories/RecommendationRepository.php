<?php
namespace App\Repositories;

use App\Models\Recommendation;
use Exception;

class RecommendationRepository{
    protected $recommendation;

    public function __construct(Recommendation $recommendation)
    {
        $this->recommendation = $recommendation;
    }

    public function createRecommendation($request){
        try{
            return $this->recommendation->create($request->all());
        }catch(Exception $e){
            echo $e;
        }
    }

    public function updateRecommendationStatus($id, $request){
        try{
            $recommendation =  Recommendation::find($id);
            $recommendation->status_id = $request->status_id;
            $recommendation->save();
            return $recommendation;
        }catch(Exception $e){
            echo $e;
        }
    }

    public function getAllRecommendations(){
        return $this->recommendation::with('status')->orderBy('name');
    }


    public function deleteOneRecommendation($id){
        $recommendation = $this->recommendation::find($id);
        return $recommendation->delete();
    }


}