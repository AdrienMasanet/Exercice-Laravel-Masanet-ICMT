@extends('admin-base')

@section('title', 'Composants')

@section('page-title', 'Composants')

@section('content')

    <livewire:data-table :index-fields="['type', 'brand_id', 'name', 'created_at', 'updated_at']" :model-name="App\Models\Component::class" />

@endsection
