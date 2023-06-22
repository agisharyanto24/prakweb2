@extends('admin.layout.app')

{{-- orangtua/parent dari setiap halaman --}}

{{-- extend itu perintah agar kita dapat menggunakan 
    semua kode yang ada di dalam file yang di extend --}} 

{{-- halaman dashbard adalah anak dari si parent/orangtua --}}


@section('dashboard')
<h1 style="text-align: center">Ini adalah halaman dashboard</h1>
@endsection