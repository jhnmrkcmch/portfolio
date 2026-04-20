@extends('layouts.adminLayout')


@section('title', 'Cards')

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

    #addNewCardFormLeaders, #addNewCardFormElders {
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

    <h2>Elders Card Manager</h2>
    <div>
        <button type="button" class="btn btn-primary" id="addNewCardBtnElders">
            Add New Elders Card
        </button>
    </div>

    <div class="container py-5" style="display: none" id="addNewCardFormElders">
        <div class="mx-auto" style="max-width: 600px;">
            <div class="form-overlay" style="z-index: -333; width:200%; height:200%; margin:-10rem;"></div>
    
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm" style="border: 1px solid #f1f1f1;">
                <img src="{{ asset('images/remove.png') }}" id="remove" class="remove">
                <h4 class="mb-1 fw-semibold">Create Card</h4>
                <p class="text-muted mb-4" style="font-size: 14px;">
                    Add a new card to your website content.
                </p>
                
                <form method="POST" action="{{ route('admin.card.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="elders">
                    <!-- Title -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Title</label>
                        <input type="text" name="title"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px; height: 45px;"
                            placeholder="Enter title" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Description</label>
                        <textarea name="description"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px;"
                            rows="3"
                            placeholder="Write something..."></textarea>
                    </div>

                    <!-- Upload -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Upload Image</label>

                        <div class="p-3 text-center"
                            style="border: 2px dashed #e5e7eb; border-radius: 12px; cursor: pointer;">
                            <input type="file" name="image" class="form-control border-0" style="background: none;">
                            <small class="text-muted">Drag & drop or click to upload</small>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" 
                            class="btn fw-semibold"
                            style="background: #6366f1; color: white; border-radius: 10px; height: 45px;">
                            + Add Card
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <br>

    <div id="team-card-form" style="display:none;">
        <div class="form-overlay"></div>

        <div class="form-modal mx-auto">
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm form-box">

                <h4 class="mb-1 fw-semibold">Edit Card</h4>
                <p class="text-muted mb-4" style="font-size: 14px;">
                    Update your card content.
                </p>

                <form method="POST" action="{{ route('admin.card.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="card_id" id="edit-card-id">
                    <!-- IMAGE PREVIEW -->
                    <div class="mb-4 text-center">
                        <img id="card-image-preview" 
                            src="{{ isset($cards) && $cards->first() && $cards->first()->image ? asset('storage/' . $cards->first()->image) : '' }}" 
                            class="rounded shadow-sm cardImg"
                            style="max-width: 120px; height:200px; object-fit:cover;">
                    </div>

                    <!-- IMAGE INPUT -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Change Image</label>
                        <input type="file" name="image" id="card-image-input"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px;">
                    </div>

                    <!-- TITLE -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Title</label>
                        <input type="text" name="title"
                            value="{{ $cards->first()->title ?? '' }}"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px; height: 45px;"
                            placeholder="Enter title">
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Description</label>
                        <textarea name="description"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px;"
                            rows="3"
                            placeholder="Write something...">{{ $cards->first()->description ?? '' }}</textarea>
                    </div>

                    <!-- BUTTON -->
                    
                    <div class="row">
                        <div class="col-6">
                            <button type="button"
                                onclick="deleteSelectedCard()"
                                class="btn fw-semibold w-100"
                                style="background: #b60c0c; color: white; border-radius: 10px; height: 45px;">
                                Delete
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit"
                                class="btn fw-semibold w-100"
                                style="background: #6366f1; color: white; border-radius: 10px; height: 45px;">
                                Save Changes
                            </button>
                        </div>
                    
                    </div>
                    <!-- Close button -->
                <img src="{{ asset('images/remove.png') }}" id="closeEditForm">
                </form>
            </div>
        </div>
    </div>

    <div class="row g-3" id="cardPreview">
        @foreach($cardsByType['elders'] ?? [] as $card)

            <div class="col-md-2">
                <div class="image-card team-card" data-id="{{ $card->id }}">
                    <input type="hidden" name="card_id" value="">
                    <!-- IMAGE -->  
                    @if($card->image)
                        <img src="{{ asset('storage/' . $card->image) }}">
                    @endif
                    
                    <!-- TITLE -->
                    <h5 class="mt-2">{{ $card->title ?? 'No Title' }}</h5>

                    <!-- DESCRIPTION -->
                    <p>{{ $card->description ?? 'No Description' }}</p>

                    <!-- DELETE -->
                    <form method="POST" action="{{ route('admin.card.delete', $card->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="remove-btn delete-btn" style="display:none;">x</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>


<hr>




<div class="container py-4">
    <h2>Leaders Card Manager</h2>
    
    <div>
        <button type="button" class="btn btn-primary" id="addNewCardBtnLeaders">
            Add New Leaders Card
        </button>
    </div>

    <div class="container py-5" style="display: none" id="addNewCardFormLeaders">
        <div class="form-overlay" style="z-index: -333; width:200%; height:200%; margin:-10rem;"></div>
        <div class="mx-auto" style="max-width: 600px;">
    
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm" style="border: 1px solid #f1f1f1;">
                <img src="{{ asset('images/remove.png') }}" id="remove2" class="remove">
                <h4 class="mb-1 fw-semibold">Create Card</h4>
                <p class="text-muted mb-4" style="font-size: 14px;">
                    Add a new card to your website content.
                </p>
                
                <form method="POST" action="{{ route('admin.card.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="leaders">
                    <!-- Title -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Title</label>
                        <input type="text" name="title"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px; height: 45px;"
                            placeholder="Enter title" required>
                    </div>

                    <!-- Description -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Description</label>
                        <textarea name="description"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px;"
                            rows="3"
                            placeholder="Write something..."></textarea>
                    </div>

                    <!-- Upload -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Upload Image</label>

                        <div class="p-3 text-center"
                            style="border: 2px dashed #e5e7eb; border-radius: 12px; cursor: pointer;">
                            <input type="file" name="image" class="form-control border-0" style="background: none;">
                            <small class="text-muted">Drag & drop or click to upload</small>
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit" 
                            class="btn fw-semibold"
                            style="background: #6366f1; color: white; border-radius: 10px; height: 45px;">
                            + Add Card
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <br>

    <div id="team-card-form" style="display:none;">
        <div class="form-overlay"></div>

        <div class="form-modal mx-auto">
            <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm form-box">

                <h4 class="mb-1 fw-semibold">Edit Card</h4>
                <p class="text-muted mb-4" style="font-size: 14px;">
                    Update your card content.
                </p>

                <form method="POST" action="{{ route('admin.card.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="card_id" id="edit-card-id">
                    <!-- IMAGE PREVIEW -->
                    <div class="mb-4 text-center">
                        <img id="card-image-preview" 
                            src="{{ isset($cards) && $cards->first() && $cards->first()->image ? asset('storage/' . $cards->first()->image) : '' }}" 
                            class="rounded shadow-sm cardImg"
                            style="max-width: 120px; height:200px; object-fit:cover;">
                    </div>

                    <!-- IMAGE INPUT -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Change Image</label>
                        <input type="file" name="image" id="card-image-input"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px;">
                    </div>

                    <!-- TITLE -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Title</label>
                        <input type="text" name="title"
                            value="{{ $cards->first()->title ?? '' }}"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px; height: 45px;"
                            placeholder="Enter title">
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="mb-4">
                        <label class="form-label small text-muted">Description</label>
                        <textarea name="description"
                            class="form-control border-0 shadow-sm"
                            style="border-radius: 10px;"
                            rows="3"
                            placeholder="Write something...">{{ $cards->first()->description ?? '' }}</textarea>
                    </div>

                    <!-- BUTTON -->
                    
                    <div class="row">
                        <div class="col-6">
                            <button type="button"
                                onclick="deleteSelectedCard()"
                                class="btn fw-semibold w-100"
                                style="background: #b60c0c; color: white; border-radius: 10px; height: 45px;">
                                Delete
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit"
                                class="btn fw-semibold w-100"
                                style="background: #6366f1; color: white; border-radius: 10px; height: 45px;">
                                Save Changes
                            </button>
                        </div>
                    
                    </div>
                    <!-- Close button -->
                <img src="{{ asset('images/remove.png') }}" id="closeEditForm">
                </form>
            </div>
        </div>
    </div>

    <div class="row g-3" id="cardPreview">
        @foreach($cardsByType['leaders'] ?? [] as $card)

            <div class="col-md-2">
                <div class="image-card team-card" data-id="{{ $card->id }}">
                    <input type="hidden" name="card_id" value="">
                    <!-- IMAGE -->  
                    @if($card->image)
                        <img src="{{ asset('storage/' . $card->image) }}">
                    @endif
                    
                    <!-- TITLE -->
                    <h5 class="mt-2">{{ $card->title ?? 'No Title' }}</h5>

                    <!-- DESCRIPTION -->
                    <p>{{ $card->description ?? 'No Description' }}</p>

                    <!-- DELETE -->
                    <form method="POST" action="{{ route('admin.card.delete', $card->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="remove-btn delete-btn" style="display:none;">x</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>



<script>
    const cards = document.querySelectorAll(".team-card");
    

    cards.forEach(card => {
        card.addEventListener("click", function() {
            // show the edit form
            document.getElementById("team-card-form").style.display = "block";

            // OPTIONAL: populate form with clicked card's data
            const title = card.querySelector("h5").innerText;
            const description = card.querySelector("p").innerText;
            const img = card.querySelector("img") ? card.querySelector("img").src : "";

            document.querySelector("#team-card-form input[name='title']").value = title;
            document.querySelector("#team-card-form textarea[name='description']").value = description;
            if(img){
                document.querySelector("#team-card-form img").src = img;
            }
        });
    });

    const imageInput = document.getElementById('card-image-input');
    const imagePreview = document.getElementById('card-image-preview');

    imageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(e){
                imagePreview.src = e.target.result; // update preview
            }
            reader.readAsDataURL(file);
        }
    });

    let selectedCardId = null;

    cards.forEach(card => {
        card.addEventListener("click", function() {
            selectedCardId = card.dataset.id;

            document.getElementById("team-card-form").style.display = "block";

            const title = card.querySelector("h5").innerText;
            const description = card.querySelector("p").innerText;
            const img = card.querySelector("img") ? card.querySelector("img").src : "";

            document.querySelector("#team-card-form input[name='title']").value = title;
            document.querySelector("#team-card-form textarea[name='description']").value = description;
            document.getElementById("edit-card-id").value = selectedCardId;

            if(img){
                document.querySelector("#card-image-preview").src = img;
            }
        });
    });

    function deleteSelectedCard() {
        if (!selectedCardId) return;

        const form = document.querySelector(`.team-card[data-id='${selectedCardId}'] form`);
        
        if (form) {
            form.submit();
        }
    }
    
    
    document.getElementById("addNewCardBtnElders").addEventListener("click", function() {
        document.getElementById("addNewCardFormElders").style.display = "block";
    });

    document.getElementById("addNewCardBtnLeaders").addEventListener("click", function() {
        document.getElementById("addNewCardFormLeaders").style.display = "block";
    });

    document.getElementById("remove").addEventListener("click", function() {
        document.getElementById("addNewCardFormElders").style.display = "none";
    });

    document.getElementById("remove2").addEventListener("click", function() {
        document.getElementById("addNewCardFormLeaders").style.display = "none";
    });

    document.getElementById("remove").addEventListener("click", function() {
        document.getElementById("addNewCardFormElders").style.display = "none";
    });


    document.getElementById("closeEditForm").addEventListener("click", function() {
        document.getElementById("team-card-form").style.display = "none";
    });

</script>

@endsection