@extends('admin-base')

@section('title', 'Comptes')

@section('page-title', 'Comptes')

@section('content')

    <livewire:data-table
    :index-fields="['name', 'email', 'role_id', 'created_at', 'updated_at']"
    :show-fields="['name', 'email', 'role_id', 'created_at', 'updated_at']"
    :model-name="App\Models\User::class"
    :can-create="false"
    />

@endsection
