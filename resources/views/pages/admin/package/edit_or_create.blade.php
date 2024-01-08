@extends('layouts.main')

@section('title')
  {{ isset($item) ? 'Edit Data Package - Smart Trip Sumedang' : 'Tambah Data Package - Smart Trip Sumedang' }}
@endsection

@section('header-title')
  {{ isset($item) ? 'Edit Data Package' : 'Tambah Data Package' }}
@endsection

@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">Package</a></div>
  <div class="breadcrumb-item"><a href="{{ route('package.index') }}">Data Package</a></div>
  <div class="breadcrumb-item {{ isset($item) ? '' : 'active' }}">
    @if(isset($item))
      <a href="#">Edit Data Packages</a>
    @else 
      Tambah Data Packages
    @endif
  </div>
  @isset($item)
    <div class="breadcrumb-item active">{{ $item->name }}</div>
  @endisset
@endsection

@section('section-title')
  {{ isset($item) ? 'Edit Data Package' : 'Tambah Data Package' }}
@endsection

@section('section-lead')
  Silakan isi form di bawah ini untuk @if(isset($item)) mengedit data {{ $item->name }} @else menambah data Package. @endif
@endsection

@section('content')

  @component('components.form')

    @slot('row_class', 'justify-content-center')
    @slot('col_class', 'col-12 col-md-6')

    @if(isset($item))
      @slot('form_method', 'POST')
      @slot('method', 'PUT')
      @slot('form_action', 'package.update')
      @slot('update_id', $item->id)
    @else 
      @slot('form_method', 'POST')
      @slot('form_action', 'package.store')
    @endif

    @slot('is_form_with_file', 'true')

    @slot('input_form')

      @include('components.input-field', ['input_label' => 'Nama', 'input_type' => 'text', 'input_name' => 'name', 'input_value' => $item->name ?? '', 'form_group_class' => isset($item) ? '' : 'required', 'other_attributes' => isset($item) ? 'disabled' : 'required autofocus'])

      @include('components.input-field', ['input_label' => 'Deskripsi', 'input_type' => 'text', 'input_name' => 'description', 'input_value' => $item->description ?? '', 'other_attributes' => isset($item) ? 'autofocus' : ''])

      @include('components.input-field', ['input_label' => 'Price', 'input_type' => 'number', 'input_name' => 'price', 'input_value' => $item->price ?? '', 'other_attributes' => isset($item) ? 'autofocus' : ''])

      @include('components.input-field', ['input_label' => 'Kapasitas', 'input_type' => 'number', 'input_name' => 'capacity', 'input_value' => $item->capacity ?? ''])

      @include('components.input-field', ['input_label' => 'Foto', 'input_type' => 'file', 'input_name' => 'photo', 'help_text' => isset($item) ? 'Tidak perlu input foto jika tidak ingin mengeditnya' : ''])

    @endslot

    @slot('card_footer', 'true')
    @slot('card_footer_class', 'text-right')
    @slot('card_footer_content')
      @include('includes.save-cancel-btn')
    @endslot 

  @endcomponent

@endsection
