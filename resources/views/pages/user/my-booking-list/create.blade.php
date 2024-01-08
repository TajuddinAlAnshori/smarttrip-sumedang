@extends('layouts.main')

@section('title')
  Buat Booking - ROOMING
@endsection 

@section('header-title')
  Buat Booking
@endsection 
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">Transaksi</a></div>
  <div class="breadcrumb-item"><a href="{{ route('my-booking-list.index') }}">My Booking</a></div>
  <div class="breadcrumb-item active">
    Buat Booking
  </div>
@endsection

@section('section-title')
  Buat Booking
@endsection 
    
@section('section-lead')
  Silakan isi form di bawah ini untuk membuat booking.
@endsection

@section('content')

  @component('components.form')
    @slot('row_class', 'justify-content-center')
    @slot('col_class', 'col-12 col-md-6')
    
    @slot('form_method', 'POST')
    @slot('form_action', 'my-booking-list.store')

    @slot('input_form')

      @component('components.input-field')
          @slot('input_label', 'Nama Package')
          @slot('input_type', 'select')
          @slot('select_content')
            <option value="">Pilih Package</option>
            @foreach ($packages as $package)
            <option value="{{ $package->id }}"
                {{ old('package_id') == $package->id ? 'selected' : '' }}>
                {{ $package->name }}</option>
            @endforeach
          @endslot
          @slot('input_name', 'package_id')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required autofocus')
      @endcomponent

      @component('components.input-field')
          @slot('input_label', 'Tanggal Booking')
          @slot('input_type', 'text')
          @slot('input_name', 'date')
          @slot('input_classes', 'datepicker')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      @component('components.input-field')
      @slot('form_row', 'open')
      @slot('col', 'col-md-6')
      @slot('input_label', 'Waktu Mulai')
      @slot('input_type', 'select')
      @slot('input_id', 'start_time')
      @slot('input_name', 'start_time')
      @slot('input_classes', 'form-control')
      @slot('form_group_class', 'col required')
      @slot('other_attributes', 'required')
  
      @slot('select_content')
          <option value="" disabled selected>Select Time</option>
          @for ($hour = 0; $hour <= 23; $hour++)
              @for ($minute = 0; $minute <= 45; $minute += 15)
                  <option value="{{ sprintf('%02d:%02d', $hour, $minute) }}">
                      {{ sprintf('%02d:%02d', $hour, $minute) }}
                  </option>
              @endfor
          @endfor
      @endslot
  
  @endcomponent
  
  
  @component('components.input-field')
      @slot('form_row', 'close')
      @slot('col', 'col-md-6')
      @slot('input_label', 'Waktu Selesai')
      @slot('input_type', 'select')
      @slot('input_id', 'end_time')
      @slot('input_name', 'end_time')
      @slot('input_classes', 'form-control')
      @slot('form_group_class', 'col required')
      @slot('other_attributes', 'required')
  
      @slot('select_content')
      <option value="" disabled selected>Select Time</option>
      @for ($hour = 0; $hour <= 23; $hour++)
          @for ($minute = 0; $minute <= 45; $minute += 15)
              <option value="{{ sprintf('%02d:%02d', $hour, $minute) }}">
                  {{ sprintf('%02d:%02d', $hour, $minute) }}
              </option>
          @endfor
      @endfor
  @endslot
  @endcomponent
  

      @component('components.input-field')
          @slot('input_label', 'Keperluan')
          @slot('input_type', 'text')
          @slot('input_name', 'purpose')
          @slot('form_group_class', 'required')
          @slot('other_attributes', 'required')
      @endcomponent

      

    @endslot

    @slot('card_footer', 'true')
    @slot('card_footer_class', 'text-right')
    @slot('card_footer_content')
      @include('includes.save-cancel-btn')
    @endslot 

  @endcomponent

@endsection

@push('after-style')
  {{-- datepicker  --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  {{-- datepicker  --}}
@endpush

@push('after-script')
  {{-- datepicker  --}}
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  {{-- datepicker  --}}
@endpush

@include('includes.notification')