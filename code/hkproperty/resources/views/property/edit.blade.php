@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('property.update', ['estate' => $estate, 'property' => $property]) }}">
        @csrf
        @method('PATCH')
        <div class="card">
            <div class="card-header">
                <h3 class="font-weight-bold">{{ __('property.title') }}</h3>
            </div>
            <div class="card-body">@include('property.fields')</div>
            @include('common.form-btns', ['url' => route('property.show', [$estate, $property])])
        </div>
        
        @if($errors->any())
        <div class="container py-2">
            @foreach($errors->all() as $error)
                @include('common.error')
            @endforeach
        </div>
        @endif
    </form>
</div>
@endsection