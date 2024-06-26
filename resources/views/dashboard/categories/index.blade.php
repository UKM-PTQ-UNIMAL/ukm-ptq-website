@extends('dashboard.layouts.main')

@section('container')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="/dashboard/posts">Blog</a></div>
                    <div class="breadcrumb-item">Kategori</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="text-primary">Tambah Kategori</h4>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/categories" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                placeholder="Jenis Kategori" id="name" name="name" required
                                                autofocus value="{{ old('name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            {{-- input slug hidden --}}
                                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                                placeholder="Slug" id="slug" name="slug" required
                                                value="{{ old('slug') }}">
                                            @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                            {{-- end input slug hidden --}}
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>
                                                    Tambah</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="text-primary">Kategori</h4>
                            </div>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <strong>{{ session('success') }}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table table-striped text-center" id="table-1">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Jenis</th>
                                                <th>Jumlah Post</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $category->name }}</td>
                                                    <td>{{ $category->posts->count() }}</td>
                                                    <td>
                                                        <div class="btn-group mb-3" role="group"
                                                            aria-label="Basic example">
                                                            <a href="/dashboard/categories/{{ $category->slug }}/edit"
                                                                type="button" class="btn btn-warning"><i
                                                                    class="fas fa-pen-alt"></i></a>
                                                            <form action="/dashboard/categories/{{ $category->slug }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger btn-del"><i
                                                                        class="fas fa-trash-alt"></i></button>
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
        </section>
    </div>
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection
