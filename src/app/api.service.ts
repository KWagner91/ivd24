import { User } from './user';
import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  constructor(private httpClient: HttpClient) {}

  PHP_API_SERVER = 'http://127.0.0.1:8080';

  createPolicy(user: User): Observable<User> {
    return this.httpClient.post<User>(
      `${this.PHP_API_SERVER}/api/create.php`,
      user
    );
  }
}
