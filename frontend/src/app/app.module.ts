import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { RecommendationComponent } from './components/recommendation/recommendation.component';
import { NavbarComponent } from './components/navbar/navbar.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { ListRecommendationComponent } from './list-recommendation/list-recommendation.component';

const routes: Routes = [
    {path: '', component: RecommendationComponent}
]

@NgModule({
  declarations: [
    AppComponent,
    RecommendationComponent,
    NavbarComponent,
    ListRecommendationComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule,
    RouterModule.forRoot(routes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
