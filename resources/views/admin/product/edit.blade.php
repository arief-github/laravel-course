@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="mb-4">
        <div class="card-header">
            Edit Product
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach($errors->all() as $error)
                        <li> - {{ $error }} </li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
                  enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                Name:
                            </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['product']->getName() }}" type="text"
                                       class="form-control">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label for="image" class="col-lg-12 col-md-6 col-sm-12 col-form-label">Image:</label>
                                        <div class="col-lg-10 col-md-6 col-sm-12">
                                            <input type="file" class="form-control" id="image" name="image">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                    Price:
                                </label>
                                <div class="col-lg-10 col-md-6 col-sm-12">
                                    <input value="{{ $viewData['product']->getPrice() }}" type="number"
                                           class="form-control" name="price">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3">
                                    {{ $viewData['product']->getDescription() }}
                                </textarea>
                          
                              
                            <button type="submit" class="btn btn-primary">
                                Edit
                            </button>
                           
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
