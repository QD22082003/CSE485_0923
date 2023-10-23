@extends('layouts.base')
@section('main')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>EDIT ARTWORK</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('artworks.index') }}" class="btn btn-primary float-end">ARTWORK LIST</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('artworks.update', $artwork->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        {{-- HoTen --}}
                        <div class="form-group">
                            <label for="">Name artist</label>
                            <input type="text" name="artist_name" class="form-control" placeholder="ChannelName" value="{{$artwork->artist_name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Description" value="{{$artwork->description}}">
                        </div>
                        <div class="form-group">
                            <label for="SubscribersCount">SubscribersCount</label>
                            <select name="art_type" class="form-control" value="{{$artwork->art_type}}">
                                <option value="music">music</option>
                                <option value="literature">literature</option>
                                <option value="art">art</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Link media</label>
                            <input type="text" name="media_link" class="form-control" placeholder="URL" value="{{$artwork->media_link}}">
                        </div>
                        <div class="form-group">
                            <label for="">Image Cover</label>
                            @if ($artwork->cover_image)
                            <input type="file" name="cover_image" class="form-control-file" value="{{$artwork->cover_image}}">
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-4">Save</button>
            </form>
        </div>
    </div>
@endsection
