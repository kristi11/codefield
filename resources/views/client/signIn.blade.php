@extends('client.client')
@include('errors')
@section('signIn')
<div class="wrapper">
    @include('client.partials.header')
    @include('client.partials.signInPartial')
    @include('client.partials.services')
    @include('client.partials.products')
    @include('client.partials.photos')
    @include('client.partials.licenses')
    @include('guest.partials.footer')
</div>
@endsection