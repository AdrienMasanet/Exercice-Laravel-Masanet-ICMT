@extends('admin-base')

@section('title', 'Réparateurs')

@section('page-title', 'Réparateurs')

@section('content')

    <livewire:data-table :index-fields="['name', 'phone', 'email', 'city', 'created_at', 'updated_at']" :model-name="App\Models\Repairer::class" />

@endsection
