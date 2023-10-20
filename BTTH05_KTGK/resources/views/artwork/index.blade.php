@extends('layouts.base')

@section('main')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>ARTWORKS</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('artworks.create') }}" class="btn btn-success float-end">NEW ARTWORK</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name artist</th>
                <th scope="col">description</th>
                <th scope="col">art type</th>
                <th scope="col">link media</th>
                <th scope="col">cover image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($artworks as $artwork)
                <tr>
                    <td>{{$artwork->id}}</td>
                    <td>{{$artwork->artist_name}}</td>
                    <td>{{$artwork->description}}</td>
                    <td>{{$artwork->art_type}}</td>
                    <td>{{$artwork->media_link}}</td>
                    <td><img width="250" height="250" src="{{$artwork->cover_image}}" alt=""></td>
                    <td><a><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td><a data-bs-toggle="modal" data-bs-target="#exampleModal{{$artwork->id}}"><i class="fa-solid fa-trash" ></i></a></td>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$artwork->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    bạn có muốn xóa sách {{$artwork->id}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('artworks.destroy', ['artwork' => $artwork->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="sbmit" class="btn btn-primary">Yes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
            </tbody>
        </table>
            <ul class="pagination">
                <li class="page-item {{ ($artworks->currentPage() == 1) ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $artworks->previousPageUrl() }}">Previous</a>
                </li>
                @for ($i = 1; $i <= $artworks->lastPage(); $i++)
                    <li class="page-item {{ ($artworks->currentPage() == $i) ? 'active' : '' }}">
                        <a class="page-link" href="{{ $artworks->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ ($artworks->currentPage() == $artworks->lastPage()) ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $artworks->nextPageUrl() }}">Next</a>
                </li>
            </ul>
    </div>
@endsection
