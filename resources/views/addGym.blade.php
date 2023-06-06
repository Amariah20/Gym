@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Gym</div>

                <div class="card-body">
                    <form method="POST" action="/storeGym">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Gym Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" name="description" class="form-control"required  autofocus > </textarea>
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control" name="location"  required  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="opening_hours" class="col-md-4 col-form-label text-md-end">Opening Hours</label>

                            <div class="col-md-6">
                                <input id="opening_hours" type="text" class="form-control" name="opening_hours"  required  autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">contact Information</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact"  required  autofocus>
                            </div>
                        </div>
                        

                        

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

Note: add logo later
@endsection
