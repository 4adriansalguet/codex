@extends('layouts.admin')

@section('title', 'Inbox | Power Codex')

@section('content')
    <div class="row inbox h-100">
        @if($inbox->count() > 0)
        <div class="col-lg-3">
            <div class="card h-100 left-msg-container">
                <div class="card-body p-0">

                    
                        @php $delay = 1; @endphp
                        @foreach($inbox as $msg)
                           @php $delay++; @endphp
                            <a href="?email={{$msg->email}}&reference={{$msg->reference_id}}" >
                                <div class="card left-msg @if($msg->status == 0) unread @endif mb-2" data-aos="fade-up" data-aos-delay="{{$delay . '00'}}">
                                    <div class="card-body p-1">
                                        <div class="d-flex align-items-center gap-2 mb-1">
                                            <span class="inbox-avatar">{{substr($msg->name,0, 1)}}</span>
                                            <div class="d-flex flex-column">
                                                <h6 class="text-capitalize">{{$msg->name}}</h6>
                                                <div class="d-flex align-items-center gap-2">
                                                    <small>{{$msg->created_at->diffForHumans();}} | </small>
                                                    @if($msg->status == 0) <i class='bx bx-envelope'></i> @else <i class='bx bx-envelope-open'></i>@endif
                                                </div>
                                            </div>
                                        </div>
                                        <p class="ellipsis ">{{$msg->message}}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="d-flex align-items-center gap-2 mb-2 right-msg-title" data-aos="fade-up" data-aos-delay="200">
                <i class='bx bx-check-double bx-sm'></i></i>
                <h5 class="text-capitalize">{{!empty($messages) ? $messages->name : 'Messages'}}</h5>
            </div>
            @if(!empty($messages))
            <div class="card right-msg" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center gap-2">
                            <span class="inbox-right-avatar">{{substr($messages->name,0, 1)}}</span>
                            <div class="d-flex flex-column">
                                <small>{{$messages->email}}</small>
                                <small>{{$messages->created_at->diffForHumans()}}</small>
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <small>{{$messages->phone}}</small>
                        </div>
                    </div>
                    <p class="my-3">{{$messages->message}}</p>
                    
                    <div class="replied-history my-4 ps-4">
                        @if($messages->reply)
                        <small class="d-flex align-items-center gap-2"><i class='bx bxs-chat bx-xs'></i></i>Replies</small>
                            @foreach($reply as $rep)
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <img class="reply-avatar" src="{{$rep->avatar_url}}" alt="reply-avatar">
                                            <div class="d-flex flex-column">
                                                <small class="r-user-name">{{Auth::user()->email == $rep->sender_email ? 'me' : $rep->name}}</small>
                                                <small>{{$rep->created_at->diffForHumans()}}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{{$rep->message}}</p>
                                </div>
                            </div>
                            @endforeach
                        @else 

                        @endif
                    </div>
                        
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('inbox.send')}}" method="POST" class="d-flex justify-content-between align-items-center gap-2 mt-4">
                    @csrf
                    <input type="hidden" name="ref_id" value="{{$messages->id}}">
                    <input type="hidden" name="email" value="{{$messages->email}}">
                    <input type="hidden" name="reference" value="{{$messages->reference_id}}">
                    <input type="text" class="form-control border-0 py-2 btn text-start" name="message" placeholder="Write a reply">
                    <input type="submit" class="btn btn-primary" value="Send" onClick="this.form.submit(); this.disabled=true; this.value='Sending..';">
                </form>
            </div>
            @else 
                <p data-aos="fade-up" data-aos-delay="300">Empty message</p>
            @endif
        </div>
        @else
            <div class="card">
                <div class="card-body">
                    <div class="pt-4 d-flex align-items-center justify-content-center flex-column">
                        <img class="img-fluid" src="{{asset('./codex-assets/admin/empty-inbox.png')}}" alt="Empty Inbox">
                        <p class="mt-4">No messages</p>
                    </div>
                </div>
            </div>
        @endif
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