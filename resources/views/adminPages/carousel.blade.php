{{-- @extends('layouts.adminLayout')

@section('title', 'Carousel')

@section('hideMainNavbar', true)
@section('hideFooter', true)

@section('content')


<h2>Carousel Manager</h2>

<!-- Upload -->
<form method="POST" action="{{ route('admin.carousel.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" required>
    <input type="text" name="caption" placeholder="Caption">
    <button type="submit">Upload</button>
</form>

<hr>

<!-- Images -->
@foreach($images as $img)
    <div style="margin-bottom: 20px;">
        <img src="{{ asset('storage/' . $img->image_path) }}" width="150">

        <!-- Update -->
        <form method="POST" action="{{ route('admin.carousel.update', $img->id) }}">
            @csrf
            @method('PUT')
            <input type="text" name="caption" value="{{ $img->caption }}">
            <button type="submit">Update</button>
        </form>

        <!-- Delete -->
        <form method="POST" action="{{ route('admin.carousel.delete', $img->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach

@endsection --}}