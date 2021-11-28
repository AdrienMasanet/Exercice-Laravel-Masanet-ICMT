@extends('admin-base')

@section('title', 'Locations')

@section('page-title', 'Locations')

@section('content')

    <livewire:data-table
    :index-fields="['is_returned', 'user_id', 'begin_at', 'ending_at', 'created_at', 'updated_at']"
    :show-fields="['is_returned', 'user_id', 'comment', 'begin_at', 'ending_at', 'created_at', 'updated_at']"
    :model-name="App\Models\Lend::class"
    :can-create="true"
    />

@endsection
