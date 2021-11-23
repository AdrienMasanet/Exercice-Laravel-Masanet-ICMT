@extends('admin-base')

@section('title', 'Ordinateurs')

@section('page-title', 'Ordinateurs')

@section('content')

    <livewire:data-table :fields="['name', 'slug']" :model-name="App\Models\Brand::class" />

@endsection
