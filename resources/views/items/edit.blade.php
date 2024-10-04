@extends('layouts.app')
@section('title', '商品編集')
@section('content')
    {{ Form::open(['route' => ['items.update', $item->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', '商品名：') }}
        {{ Form::text('name', $item->name, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('name', '詳細：') }}
        {{ Form::text('description', $item->description, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', '値段：') }}
        {{ Form::number('price', $item->price, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('image_url', '画像URL:') }}
        {{ Form::text('image_url', $item->image_url, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('stock_quantity', 'stock quantity:') }}
        {{ Form::text('stock_quantity', $item->stock_quantity, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('category_id', '画像URL:') }}
        {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::submit('更新', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
