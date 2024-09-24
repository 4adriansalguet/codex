@extends('layouts.admin')

@section('title', 'Dashboard | Power Codex')

@section('content')
<ul class="box-info">
    <li data-aos="fade-up" data-aos-delay="200">
        <i class='bx bxs-group shadow-sm'></i>
        <span class="text">
            <h3>{{$users->count()}}</h3>
            <p>Users</p>
        </span>
    </li>
    <li data-aos="fade-up" data-aos-delay="200">
        <i class='bx bxs-calendar-check shadow-sm'></i>
        <span class="text">
            <h3>2834</h3>
            <p>Projects</p>
        </span>
    </li>
    <li data-aos="fade-up" data-aos-delay="200">
        <i class='bx bxs-dollar-circle shadow-sm'></i>
        <span class="text">
            <h3>$2543</h3>
            <p>Total Sales</p>
        </span>
    </li>
</ul>

<div class="row db-users">
    <div class="col-lg-7">
        <div class="card" data-aos="fade-up" data-aos-delay="300">
            <h5 class="mb-4">List of Users</h5>
                @if($users->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date Registered</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)

                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="{{$user->avatar_url}}" alt="{{$user->created_at}}">
                                        <p>{{$user->name}}</p>
                                    </div>
                                </td>
                                <td>
                                    <small>{{$user->email}}</small>
                                </td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td class="user-status">Active</td>
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

@section('script')
    <script src="{{asset('js/aos.js')}}" defer></script>
    <script type="module">
        AOS.init({
          duration: 1200,
          once: true
        })
      </script>
@endsection