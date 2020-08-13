import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css'],
})
export class RegisterComponent implements OnInit {
  constructor() {}

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
    agb: new FormControl(''),
  });

  onSubmit() {
    console.log(JSON.stringify(this.registerForm.value));
  }
}
