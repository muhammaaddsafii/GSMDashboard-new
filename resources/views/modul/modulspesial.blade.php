@extends('layout/masterdashboard')

@section('container')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Modul Spesial</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th class="text-center">
                        Judul
                      </th>
                      <th class="text-center">
                        Kategori
                      </th>
                      <th class="text-center">
                        Deskripsi
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($spesial as $spesial)
                    <tr>
                      <td>
                        {{$spesial->judul_modul}}
                      </td>
                      <td>
                        {{$spesial->kategori}}
                      </td>
                      <td class="text-wrap">
                        {{$spesial->deskripsi_modul}}
                      </td>
                      <td>
                        <div class="text-center">
                        <a href="/modul/modulspesial/{{$spesial->id}}" type="button" class="btn btn-warning btn-sm">Edit</a>
                        <form class="d-inline" action="/modul/modulspesial/{{$spesial->id}}" method="POST">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
@endsection