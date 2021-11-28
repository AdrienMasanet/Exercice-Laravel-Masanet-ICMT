@extends('admin-base')

@section('title', 'Demandes de location')

@section('page-title', 'Demandes de location')

@section('content')

    <livewire:data-table
    :index-fields="['is_accepted', 'user_id', 'computer_id', 'start_date', 'created_at', 'updated_at']"
    :show-fields="['is_accepted', 'user_id', 'computer_id', 'start_date', 'created_at', 'updated_at']"
    :model-name="App\Models\Request::class"
    :can-create="false"
    />

@endsection
