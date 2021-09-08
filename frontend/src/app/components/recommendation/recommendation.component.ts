import { Component, OnInit } from '@angular/core';
import { Recommendation } from 'src/app/recommendation';
import { RecommendationService } from 'src/app/service/recommendation.service';

@Component({
    selector: 'app-recommendation',
    templateUrl: './recommendation.component.html',
    styleUrls: ['./recommendation.component.scss']
})
export class RecommendationComponent implements OnInit {

    recommendation = new Recommendation()
    constructor(private recommendationService: RecommendationService) { }

    ngOnInit(): void {
    }

    createRecommendation() {
        this.recommendationService.createRecommendation(this.recommendation).subscribe(res => {
            if(res){
                alert('Registro incluído com sucesso !')
                window.location.reload()
            }
        }, err => console.log('erro'));
    }



}
