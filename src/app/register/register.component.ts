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

  passwordEntered: String;
  passwordEnteredRepeat: String;

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
    if (this.passwordEntered === this.passwordEnteredRepeat) {
      this.apiService.createPolicy(form.value).subscribe((user: User) => {
        console.log('New User was created, ', JSON.stringify(user));
        alert('Sie haben sich erfolgreich registriert!');
      });
    } else {
      alert('Bitte wiederholen Sie Ihre Passworteingabe');
    }
  }

  /*
  phone number fields should only accept numbers (type="number" does not work in Angular): https://stackoverflow.com/questions/41465542/angular2-input-field-to-accept-only-numbers
  */
  numberOnly(event): boolean {
    const charCode = event.which ? event.which : event.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }
}
