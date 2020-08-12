import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl } from '@angular/forms';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
})
export class LoginComponent implements OnInit {
  constructor(private http: HttpClient) {}

  loginForm = new FormGroup({
    username: new FormControl(''),
    password: new FormControl(''),
  });

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json',
      Authorization: 'IVD24-missing-token', // add missing token here
    }),
  };

  ngOnInit(): void {}

  onSubmit() {
    // Request works with http://httpbin.org/post
    let url = 'https://www.ivd24immobilien.de/login/';
    this.http
      .post(url, JSON.stringify(this.loginForm.value), this.httpOptions)
      .subscribe(
        (res) => {
          console.log('POST call was successful', res);
        },
        (response) => {
          console.log('Error: ' + response.error);
          console.log('Name: ' + response.name);
          console.log('Message: ' + response.message);
          console.log('Status: ' + response.status);
        }
      );
  }
}
