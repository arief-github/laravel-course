@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Create Products
        </div>
        <div class="card-body">
            @if($errors->any())
                <ul class="alert alert-danger alert-dismissible fade show list-unstyled">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @endforeach
                </ul>
            @endif

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" }>
                    Product Successfuly Added
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                Image:
                            </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="name" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                Name:
                            </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="name" name="name" value="{{ old('name') }}" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label for="price" class="col-lg-2 col-md-6 col-sm-12 col-form-label">
                                Price :
                            </label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input id="name" name="price" value="{{ old('price') }}" type="number"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Description :
                        </label>
                        <textarea class="form-control" name="description" rows="3">
                            {{ old('description') }}
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-25 mx-auto">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Manage Products
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($viewData["products"] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>
                        
                        
                        
                        
                        <a class="btn btn-primary"
                           href="{{ route("admin.product.edit", ['id' => $product->getId()] ) }}">
                            <i class="bi-pencil" id="edit"></i> Edit
                        </a>
                        
                   
                        
                    </td>
                    <td>
                        <form action="{{ route('admin.product.delete', $product->getId()) }}" method="post">
                            @csrf
                            @method("DELETE")
                                <button class="btn btn-danger" data-confirm-delete="true">
                                        
                                    <i class="bi-trash" id="delete"></i> Delete
                                </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <ul class="d-flex pagination">
            <li class="page-item">
                <a class="page-link">{{ $viewData["products"]->links() }}</a>
            </li>  
        </nav>
        
    </div>

@endsection
