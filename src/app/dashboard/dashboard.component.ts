import { Policy } from './../policy';
import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css'],
})
export class DashboardComponent implements OnInit {
  policies: Policy[];
  selectedPolicy: Policy = { id: null, number: null, amount: null };
  constructor(private apiService: ApiService) {}

  ngOnInit() {}

  createPolicy(form) {
    this.apiService.createPolicy(form.value).subscribe((policy: Policy) => {
      console.log('Policy created, ', policy);
    });
  }

  selectPolicy(policy: Policy) {
    this.selectedPolicy = policy;
  }
}
