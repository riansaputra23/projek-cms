@extends('layouts.main')

@section('contents')

<div class="card shadow mb-4" style="margin: 10px;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
        <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">title1</th>
                        <th scope="col">title2</th>
                        <th scope="col">title3</th>
                        <th scope="col">button left</th>
                        <th scope="col">button right</th>
                        <th scope="col">about me title</th>
                        <th scope="col">about me description</th>
                        <th scope="col">image</th>
                        <th scope="col" style="width: 150px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($home as $home)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $home->title_1 }}</td>
                        <td>{{ $home->title_2}}</td>
                        <td>{{ $home->title_3}}</td>
                        <td>{{ $home->button_left}}</td>
                        <td>{{ $home->button_right}}</td>
                        <td>{{ $home->about_me_title}}</td>
                        <td>{{ $home->about_me_description}}</td>
                        <td>{{ $home->image_path}}</td>
                        {{-- <td>
                            <a href="/home/create{{ $home->id }}/edit"class="badge bg-warning p-2 m-1"><i class="bi bi-pencil-square m-1"></i></a>
                    
                            <form action="/dashboard/gaji/{{ $home->id }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger border-0 p-2" onclick="return confirm('Apakah Benar Dihapus?')"><i class="bi bi-trash-fill m-1"></i></button>
                            </form>
                            
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/home/create"><button type="button" class="btn btn-primary">Tambah Data</button></a>
        </div>
        </div>
    </div>


@endsection