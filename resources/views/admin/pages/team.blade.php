@extends('layouts.admin')

@section('title', 'Team | Power Codex')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="my-2">
                @if(session()->has('ok'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('ok') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @elseif(session()->has('fail'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="card team-card">
                @if($teams->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Joined</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teams as $team)
                            <tr>
                                <td>
                                    <img src="{{$team->avatar_url}}" alt="{{$team->created_at}}">
                                    <p>{{$team->name}}</p>
                                </td>
                                <td>{{$team->email}}</td>
                                <td>{{$team->created_at->diffForHumans()}}</td>
                                <td>
                                    <span class="position">{{$team->position}}</span>
                                </td>
                                <td>
                                    <i class='bx bx-dots-vertical-rounded bx-sm' data-bs-toggle="dropdown" aria-expanded="false"></i>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{route('edit.team',['name'=> $team->name, 'provider_id' => $team->provider_id])}}"><i class='bx bx-edit-alt'></i> Edit</a></li>
                                        <li><a class="dropdown-item" href="#"><i class='bx bx-trash-alt'></i> Remove</a></li>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @else 
                    <tr>No records found</tr>
                @endif
            </div>
        </div>
    </div>
@endsection
