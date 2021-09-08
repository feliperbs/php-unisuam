import { Component, OnInit } from '@angular/core';
import { RecommendationService } from '../service/recommendation.service';

@Component({
    selector: 'app-list-recommendation',
    templateUrl: './list-recommendation.component.html',
    styleUrls: ['./list-recommendation.component.scss']
})
export class ListRecommendationComponent implements OnInit {
    recommendations: any;

    constructor(private recommendationService: RecommendationService) { }

    ngOnInit(): void {
        this.getAllRecommendations();
    }

    getAllRecommendations() {
        this.recommendationService.getAllRecommendations().subscribe(res => {
            this.recommendations = res;
        });
    }

    getStatus(status: number): number {
        switch (status) {
            case 1: {
                return 2;
            }
            case 2: {
                return 3;
            }
            default: {
                return 3;
            }

        }
    }

    updateStatus(id: number, status_id: number): any {
        let statusUpdate = this.getStatus(status_id);
        this.recommendationService.updateRecommendationStatus(id, statusUpdate).subscribe(res => {
            if(res){
                alert('Status alterado com sucesso !')
                window.location.reload()
            }
        }, err => console.log('erro'));
    }

    deleteRecommendation(id: number) {
        this.recommendationService.deleteRecommendation(id).subscribe(res => {
            if(res){
                alert('Registro deletado com sucesso !')
                window.location.reload()
            }
        }, err => console.log('erro'));
    }

}
