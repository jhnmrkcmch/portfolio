@php
    $layout = (auth()->check() && auth()->user()->role === 'admin' || 'editor') 
                ? 'layouts.adminLayout' 
                : 'layouts.layout';
@endphp

@extends($layout)
    
@section('title', 'Carousel')

@section('hideMainNavbar', true)
@section('hideFooter', true)

@section('content')
<style>
    .image-card {
        position: relative;
    }

    .image-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 6px;
    }

    .remove-btn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: red;
        color: white;
        border: none;
        border-radius: 50%;
        width: 22px;
        height: 22px;
        font-size: 14px;
        line-height: 18px;
        cursor: pointer;
    }

    .expanded img {
        height: 220px;
    }
    
    .image-card {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 10px;
    text-align: center;
    }

    .image-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }

    #addNewCardForm {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        z-index: 9999;
    }
    #closeEditForm{
        float: right;
        width: 30px;
        height: 30px;
        cursor: pointer;
        margin-top: -136.5%; 
        margin-right: -2rem;
    }
    .remove {
        float: right;
        width: 30px;
        height: 30px;
        cursor: pointer;
        margin-top: -2rem;
        margin-right: -2rem;
    }
    .form-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        background: rgba(0,0,0,0.5);
        z-index: 9998;
    }

    .form-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

        width: 100%;
        max-width: 600px;
        z-index: 9999;
    }

    .form-box {
        border: 1px solid #f1f1f1;
    }
    #cardPreview {
        cursor: pointer;
    }
</style>


<div class="container py-4">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif
    <h2>Carousel Manager</h2>
    <!-- Controls -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <form method="POST" action="{{ route('admin.content.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="images[]" id="imageInput" multiple hidden>
            <button type="button" class="btn btn-primary"
                onclick="document.getElementById('imageInput').click()">
                Add Images
            </button>
            <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>

    <!-- Image Grid -->
    <div class="row g-3" id="imagePreview">
        @foreach($images as $img)
            <div class="col-md-3">
                <div class="image-card">
                    <img src="{{ asset('storage/' . $img->image_path) }}">
                    <form method="POST" action="{{ route('admin.content.delete', $img->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="remove-btn">x</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>


<hr>




<script>
    document.getElementById("remove").addEventListener("click", function() {
        document.getElementById("addNewCardForm").style.display = "none";
    });

    document.getElementById("closeEditForm").addEventListener("click", function() {
        document.getElementById("team-card-form").style.display = "none";
    });
</script>

@endsection