@extends('admin-base')

@section('title', 'Ordinateurs')

@section('page-title', 'Ordinateurs')

@section('content')

    <livewire:data-table
    :index-fields="['is_available' ,'brand_id', 'name', 'created_at', 'updated_at']"
    :show-fields="['is_available' ,'brand_id', 'name', 'comment', 'image', 'created_at', 'updated_at']"
    :model-name="App\Models\Computer::class"
    :can-create="true"
    />

@endsection
