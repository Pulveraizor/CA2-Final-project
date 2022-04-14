@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ URL::asset('storage/no_picture.png') }}" class="card-img-top" alt="...">
                            
                        </div>
                    </div>
                    <div class="col-6">
                      <div class="" style="width: 18rem;">
                          <div class="">
                              <h5 class="card-title">Username: {{ Auth::user()->username }}</h5>
                          </div>
                          <ul class="list-group list-group-flush">
                              <li class="list-group-item"><strong>Full name:</strong> {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}
                              </li>
                              <li class="list-group-item"><strong>Email:</strong> {{ Auth::user()->email }}</li>
                              <li class="list-group-item"><strong>Member since</strong> {{ Auth::user()->created_at }}</li>
                          </ul>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
