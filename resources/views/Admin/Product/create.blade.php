@extends('Admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новая статья</h1>
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
                            <h3 class="card-title">Новый Продукт</h3>
                        </div>
                        <!-- /.card-header -->

                        <form role="form" method="post"
                              action={{route('admin.products.store')}} enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название для En</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="title"
                                           placeholder="Название">
                                </div>

                                <div class="form-group">
                                    <label for="title_ru">Название для Ru</label>
                                    <input type="text" name="title_ru"
                                           class="form-control @error('title_ru') is-invalid @enderror" id="title_ru"
                                           placeholder="Название для Ru">
                                </div>

                                <div class="form-group">
                                    <label for="descr">Описание</label>
                                    <input type="text" name="descr"
                                           class="form-control @error('descr') is-invalid @enderror"
                                           id="descr"
                                           placeholder="Описание">
                                </div>

                                <div class="form-group">
                                    <label for="descr_ru">Описание для Ru</label>
                                    <input type="text" name="descr_ru"
                                           class="form-control @error('descr_ru') is-invalid @enderror"
                                           id="descr_ru"
                                           placeholder="Описание для Ru">
                                </div>

                                <div class="form-group">
                                    <label for="category_id">Под Категория</label>
                                    <select class="form-control @error('sub_category') is-invalid @enderror"
                                                   id="sub_category" name="sub_category">
                                        @foreach($subCategories as $subCategory)
                                            <option value={{$subCategory->id}}>
                                                {{$subCategory->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="price">Цена</label>
                                    <input type="text" name="price"
                                           class="form-control @error('price') is-invalid @enderror" id="price"
                                           placeholder="Цена">
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail">Изображение</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" id="image"
                                                   class="custom-file-input">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                    </div>
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
