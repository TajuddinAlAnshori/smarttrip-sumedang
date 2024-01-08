@extends('layouts.main')

@section('title')
    Edit Data User - Smart Trip Sumedang
@endsection 

@section('header-title')
    Edit Data User
@endsection 

@section('breadcrumbs')
    <div class="breadcrumb-item"><a href="#">User</a></div>
    <div class="breadcrumb-item"><a href="{{ route('user.index') }}">Data User</a></div>
    <div class="breadcrumb-item">
        <a href="#">Edit Data User</a>
    </div>
    <div class="breadcrumb-item active">{{ $item->name }}</div>
@endsection

@section('section-title')
    Edit Data User
@endsection 

@section('section-lead')
    Silakan isi form di bawah ini untuk mengedit data {{ $item->name }}.
@endsection

@section('content')
    @component('components.form', ['update' => true])

        @slot('row_class', 'justify-content-center')
        @slot('col_class', 'col-12 col-md-6')

        @slot('form_method', 'POST')
        @slot('form_action', route('user.update-pass', ['id' => $item->id]))
        @slot('update_id', $item->id)

        @slot('input_form')

            @component('components.input-field')
                @slot('input_label', 'Email')
                @slot('input_type', 'email')
                @slot('input_name', 'email')
                @slot('input_value', $item->email)
                @slot('form_group_class', 'required')
                @slot('other_attributes', 'required autofocus')
            @endcomponent

            @component('components.input-field')
                @slot('input_label', 'Nama')
                @slot('input_type', 'text')
                @slot('input_name', 'name')
                @slot('input_value', $item->name)
            @endcomponent

            @component('components.input-field')
                @slot('input_label', 'Deskripsi')
                @slot('input_type', 'text')
                @slot('input_name', 'description')
                @slot('input_value', $item->description)
            @endcomponent

        @endslot

        @slot('card_footer', true)
        @slot('card_footer_class', 'text-right')
        @slot('card_footer_content')
            @include('includes.save-cancel-btn')
        @endslot 

    @endcomponent
@endsection
