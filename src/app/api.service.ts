import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Policy } from './policy';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root',
})
export class ApiService {
  constructor(private httpClient: HttpClient) {}

  PHP_API_SERVER = 'http://127.0.0.1:8080';

  createPolicy(policy: Policy): Observable<Policy> {
    return this.httpClient.post<Policy>(
      `${this.PHP_API_SERVER}/api/create.php`,
      policy
    );
  }
}
