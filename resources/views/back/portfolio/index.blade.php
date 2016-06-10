@extends('back.template')
@section('title')
    <title>Posts</title>
    <style>
        .pagination li.active {
            background-color: #448AFF !important;
        }
    </style>
@stop

@section('main')
    <div class="container">
        <h4 class="page-header">Portfolio Posts</h4>
        <div class="divider"></div>

        <div class="card-panel">

            <div class="row">
                {{--@foreach($data['portfolio'] as $item) --}}
                <div class="col l3 m6 s12">
                    <div class="card">
                        <div class="card-image">
                            {{-- pull from db $data['porfolio']->image --}}
                            <img src="assets/img/ny.jpg" alt="">
                            <span class="card-title">$data['portfolio']->title</span>
                        </div>
                        <div class="card-content">
                            <p>$data['portfolio']->description</p>
                        </div>
                        <div class="card-action">
                            {!! checkbox(false, ['name' => 'publish', 'value' => 1, 'class' => 'filled-in put-chk']) !!}
                            <span style="position: relative; bottom: 7px; font-size: 1.3em;">Publish</span>
                        </div>
                        <div class="card-action">
                            <form method="POST" action="{{url('/posts/' . 1 )}}" accept-charset="UTF-8">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                            <a href="{!! url('/posts/' . 1) !!}" class="btn btn-success">See</a>
                            <a href="{!! url('/posts/' . 1 . '/edit') !!}" class="btn btn-warning">Edit</a>
                                <button type="submit"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure you want to delete this post?')"
                                >
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                    {{--@endforeach--}}
                </div>
            </div>

        </div>{{--end card-panel --}}
    </div> {{--end container --}}
@stop

@section('script')
    <script>
        @if(session('ok'))
            Materialize.toast('{!! session('ok') !!}', 3000);
        @endif
    </script>
@stop