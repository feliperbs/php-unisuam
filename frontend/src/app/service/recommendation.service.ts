import { Injectable } from '@angular/core';
import { HttpClient, HttpErrorResponse } from '@angular/common/http'
import { Recommendation } from '../recommendation';
import { throwError } from 'rxjs';

@Injectable({
    providedIn: 'root'
})
export class RecommendationService {
    constructor(private httpClient: HttpClient) { }

    URL_NAMESPACE = '/api/recommendations';
    getAllRecommendations() {
        return this.httpClient.get(this.URL_NAMESPACE + '/get-all')
    }
    handleError(error:HttpErrorResponse){
        console.log(error);
        return throwError(error.message);
     }

    createRecommendation(recommendation: Recommendation){
        return this.httpClient.post(this.URL_NAMESPACE + '/create', recommendation)
    }

    updateRecommendationStatus(id:number, status_id: number){
        return this.httpClient.patch(this.URL_NAMESPACE + '/update-status/' + id, {status_id})
    }

    deleteRecommendation(id:number){
        return this.httpClient.delete(this.URL_NAMESPACE + '/delete/' + id)
    }
}
