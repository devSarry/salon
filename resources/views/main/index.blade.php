@extends('main.layout')

@section('content')

    @include('main.banner.title')

    @include('main.services.section')

    @include('main.portfolio.section')

    @include('main.about.section')

    @include('main.team.section')

    {{--@include('main.partners.section')--}}
    {% include about.html %}
    {% include team.html %}
    {% include clients.html %}
    {% include contact.html %}
    {% include footer.html %}
    {% include modals.html %}
    {% include js.html %}

@endsection