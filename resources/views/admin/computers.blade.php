@extends('admin-base')

@section('title', 'Ordinateurs')

@section('page-title', 'Ordinateurs')

@section('content')

    <livewire:data-table :index-fields="['name', 'slug']" :model-name="App\Models\Computer::class" />

@endsection
