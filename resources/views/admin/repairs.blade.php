@extends('admin-base')

@section('title', 'Réparations')

@section('page-title', 'Réparations')

@section('content')

    <livewire:data-table :index-fields="['is_repaired', 'is_broken', 'repairer_id', 'client_id', 'returned_at', 'created_at', 'updated_at']" :model-name="App\Models\Repair::class" />

@endsection
