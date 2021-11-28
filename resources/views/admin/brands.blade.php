@extends('admin-base')

@section('title', 'Marques')

@section('page-title', 'Marques')

@section('content')

    <livewire:data-table
    :index-fields="['name', 'created_at', 'updated_at']"
    :show-fields="['name', 'created_at', 'updated_at']"
    :model-name="App\Models\Brand::class"
    :can-create="true"
    />

@endsection
