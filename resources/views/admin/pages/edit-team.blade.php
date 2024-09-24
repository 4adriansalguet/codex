@extends('layouts.admin')

@section('title', 'Edit Team | Power Codex')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body edit-team">
                    <div class="row">
                        <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center">
                            <img class="img-fluid" src="{{$team->avatar_url}}" alt="avatar">
                            <h3 class="mt-4">{{$team->name}}</h3>
                            <small>{{$team->email}}</small>
                            <p class="p-1 rounded">{{$team->position}}</p>
                        </div>
                        <div class="col-lg-8">
                            <form action="{{route('update.team')}}" method="POST">
                                @csrf
                                <input type="hidden" name="name" value="{{$_GET['name']}}">
                                <input type="hidden" name="provider_id" value="{{$_GET['provider_id']}}">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="my-3">
                                            <label for="firstname" class="form-label">Firstname</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-3">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control " id="lastname" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-3">
                                            <label for="position" class="form-label">Position</label>
                                            <select name="position" id="position" class="form-control">
                                                <option selected>{{$team->position}}</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Project Manager">Project Manager</option>
                                                <option value="Designer">Designer</option>
                                                <option value="Content Writer">Content Writer</option>
                                            </select>
                                            @error('position')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-3">
                                            <label for="role" class="form-label">Role</label>
                                            <select name="role" id="role" class="form-control">
                                                <option selected>{{$team->role == 1 ? 'Administrator' : 'User'}}</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="User">User</option>
                                            </select>
                                            @error('role')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-3">
                                            <label for="password" class="form-label">Password <small>(Default none)</small></label>
                                            <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}" placeholder="Password">
                                            @error('password')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="my-3">
                                            <label for="password_confirm" class="form-label">Confirm Password</label>
                                            <input type="text" class="form-control" id="password_confirm" name="password_confirm" value="{{ old('password_confirm') }}" placeholder="Confirm your password">
                                            @error('password_confirm')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="my-3">
                                        <input type="submit" value="Update" class="btn btn-primary"  onclick="this.form.submit(); this.disabled=true; this.value='Processing..';">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
