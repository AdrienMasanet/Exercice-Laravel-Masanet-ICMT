@extends('admin-base')

@section('title', 'Réparateurs')

@section('page-title', 'Réparateurs')

@section('content')

    <livewire:data-table
    :index-fields="['name', 'phone', 'email', 'city', 'created_at', 'updated_at']"
    :show-fields="['is_internal', 'name', 'phone', 'email', 'siret', 'country', 'city', 'postal_code', 'address', 'created_at', 'updated_at']"
    :model-name="App\Models\Repairer::class"
    :can-create="true"
    />

@endsection
