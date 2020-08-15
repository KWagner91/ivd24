import { User } from './../user';
import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],
})
export class RegisterComponent implements OnInit {
  constructor(private apiService: ApiService) {}

  ngOnInit(): void {}

  registerForm = new FormGroup({
    gender: new FormControl(''),
    firstName: new FormControl(''),
    lastName: new FormControl(''),
    address: new FormControl(''),
    postCode: new FormControl(''),
    city: new FormControl(''),
    country: new FormControl(''),
    company: new FormControl(''),
    phone: new FormControl(''),
    mobilePhone: new FormControl(''),
    fax: new FormControl(''),
    email: new FormControl(''),
    userName: new FormControl(''),
    password: new FormControl(''),
    passwordRepeat: new FormControl(''),
  });

  onSubmit(form) {
    this.apiService.createPolicy(form.value).subscribe((user: User) => {
      console.log('Policy created, ', user);
    });
  }
}
