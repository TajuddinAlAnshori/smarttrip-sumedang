@extends('layouts.main')

@section('title', 'Data Package - ROOMING')

@section('header-title', 'Data Package')
    
@section('breadcrumbs')
  <div class="breadcrumb-item"><a href="#">Package</a></div>
  <div class="breadcrumb-item active">Data Package</div>
@endsection

@section('section-title', 'Package')
    
@section('section-lead')
  Berikut ini adalah daftar seluruh package.
@endsection

@section('content')

  @component('components.datatables')
    
    @slot('table_id', 'package-table')

    @slot('table_header')
      <tr>
        <th>#</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Kapasitas</th>
      </tr>
    @endslot
      
  @endcomponent

@endsection

@push('after-script')

  <script>
  $(document).ready(function() {
    $('#package-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: '{{ route('package-list.json') }}',
      order: [2, 'asc'],
      columns: [
      {
        name: 'DT_RowIndex',
        data: 'DT_RowIndex',
        orderable: false, 
        searchable: false
      },
      {
        name: 'photo',
        data: 'photo',
        orderable: false, 
        searchable: false,
        render: function ( data, type, row ) {
          if(data != null) {
            return `<div class="gallery gallery-fw">`
              + `<a href="{{ asset('storage/${data}') }}" data-toggle="lightbox">`
                + `<img src="{{ asset('storage/${data}') }}" class="img-fluid" style="min-width: 80px; height: auto;">`
              + `</a>`
            + '</div>';
          } else {
            return '-'
          }
        }
      },
      {
        name: 'name',
        data: 'name',
      },
      {
        name: 'description',
        data: 'description',
      },
      {
        name: 'price',
        data: 'price',
      },
      {
        name: 'capacity',
        data: 'capacity',
      },
    ],
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
  });

</script>

@include('includes.lightbox')

@endpush