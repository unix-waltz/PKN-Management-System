@extends('layout.template')

@section('content')

<br><br><br><br>

<div class="container">

  <a href="/nomor/antrian/start?page=" class="btn btn-dark" name="start"><i class="bi bi-caret-right-fill"></i>&nbsp;Mulai Antrian</a>

  <br>
  <h4 align="center">Data Antrean</h4>
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Status</th>
        <th scope="col">Catatan Penguna</th>
      </tr>
    </thead>
    <tbody>
        @php
            $num =1;
        @endphp
        @foreach ($data as $d )
            @php
              switch ($d->status){
                case "Antrian Ditolak" :
                $col = 'danger';
                break;
                case "Selesai Mengantri" :
                $col = 'success';
                break;
                default :
                $col = 'secondary';

              }
            @endphp
      <tr>
        <a href="">
        <th>{{$num++}}</th>
        <td>{{$d->nama}}</td>
        <td>{{$d->alamat}}</td>
        <td>
          <span class="badge text-bg-{{$col}}">{{$d->status}}</span>

         </td>
        <td>{{$d->catatan}}</td>
      </a>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
@include('component.sidebar')


@endsection
