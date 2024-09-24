@extends('layouts.admin')

@section('title', 'Reviews | Power Codex')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card rounded review-chart mb-4">
                <div id="reviewChart" class="card-body" style="width: 100%;"></div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card review-card">
                @if($testimonials->count() > 0)
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Rate</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>
                                    <img src="{{$testimonial->user->avatar_url}}" alt="{{$testimonial->created_at}}">
                                    <p>{{$testimonial->user->name}}</p>
                                </td>
                                <td>
                                    @for($i = 0; $i < $testimonial->star_count; $i++)
                                        <i class='bx bxs-star'></i>
                                    @endfor
                                </td>
                                <td>{{$testimonial->created_at->diffForHumans()}}</td>
                                <td>{{$testimonial->status}}</td>
                                <td>
                                    <form id="formReviewStatus" action="{{route('change.reviews.status')}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="review_id" value="{{$testimonial->id}}">
                                        <select class="form-select" name="review_status" onchange="document.querySelector('#formReviewStatus').submit()">
                                            <option selected>Change Status</option>
                                            <option value="Publish">Publish</option>
                                            <option value="Draft">Draft</option>
                                            <option value="Delete">Delete</option>
                                        </select>
                                    </form>
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

@section('script')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">

        Highcharts.chart('reviewChart', {
            chart: {
                @if(Auth::user()->mode === 1)
                backgroundColor: '#0C0C1E',
                polar: true,
                @else
                backgroundColor: '#F9F9F9',
                @endif
                type: 'spline',
                spacingTop: 20,
                spacingBottom: 20,
                spacingLeft: 20,
                spacingRight: 20
            },
            plotOptions: {
                pie: {
                    size:'100%',
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            title: {
                text: 'Reviews Chart',
                @if(Auth::user()->mode === 1)
                style: {
                    color: "#fff"
                },
                @endif
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep',
                    'Octo', 'Nov', 'Dec'
                ],
                gridLineWidth: 1,
                @if(Auth::user()->mode === 1)
                    gridLineColor: '#181838'
                @else
                    gridLineColor: '#eee'
                @endif
            },
            yAxis: {
                title: {
                    text: 'Number of Reviews',
                    style: {
                        color: "#fff"
                    },
                },
                @if(Auth::user()->mode === 1)
                    gridLineColor: '#181838'
                @else
                    gridLineColor: '#eee'
                @endif
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Reviews',
                data: [{{$testimonialArr[1]}}, {{$testimonialArr[2]}}, {{$testimonialArr[3]}}, {{$testimonialArr[4]}}, {{$testimonialArr[5]}}, {{$testimonialArr[6]}}, {{$testimonialArr[7]}}, {{$testimonialArr[8]}}, {{$testimonialArr[9]}}, {{$testimonialArr[10]}}, {{$testimonialArr[11]}}, {{$testimonialArr[12]}}],
                lineWidth: 1,
                @if(Auth::user()->mode === 1)
                color: '#363662',
                @else
                color: '#181838',
                @endif
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom',
                        }
                    }
                }]
            }
        });

    </script>
@endsection