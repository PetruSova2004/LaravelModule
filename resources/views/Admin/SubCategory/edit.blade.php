@extends('Admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Обновление Под-Категории</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Обновление Под-Категории</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post"
                              action={{route('admin.sub-categories.update', ['subCategory' => $subCategory->id])}} enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название для En</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название" value="{{$subCategory->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="title_ru">Название для Ru</label>
                                    <input type="text" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title_ru"
                                           placeholder="Название для Ru" value="{{$ru_subCategory->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="slug">Слуг для En</label>
                                    <input type="text" name="slug"
                                           class="form-control @error('slug') is-invalid @enderror"
                                           id="slug"
                                           placeholder="Описание" value="{{$subCategory->slug}}">
                                </div>

                                <div class="form-group">
                                    <label for="slug_ru">Слуг для Ru</label>
                                    <input type="text" name="slug_ru"
                                           class="form-control @error('slug_ru') is-invalid @enderror"
                                           id="slug_ru"
                                           placeholder="Описание для Ru" value="{{$ru_subCategory->slug}}">
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Категория</label>
                                    <select class="form-control @error('category') is-invalid @enderror"
                                            id="category" name="category">
                                        @foreach($categories as $category)
                                            <option value={{$category->id}}>
                                                {{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
