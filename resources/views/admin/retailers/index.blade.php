@extends('layouts.admin')

@section('javascript')
<script>
</script>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center" style="margin-bottom: 20px">
            <a class="btn btn-primary" href="/admin/retailers/add">Add Retailer</a>
        </div>
    </div>
    <div class="row">
        @if($retailers->isEmpty())
            <div class="col-sm-12 text-center">
                <h2>There are currently no retailers.</h2>
            </div>
        @else
            @foreach($retailers as $retailer)
                <div class="col-sm-12 col-md-4 text-center">
                    <img src="{{ $retailer->logo_url }}" />
                    <p>{{ $retailer->name }}</p>
                    <a class="btn btn-primary" href="/admin/retailer/edit/{{ $retailer->id }}">Edit</a>
                    <a class="btn btn-danger" href="/admin/retailer/delete/{{ $retailer->id }}">Delete</a>
                </div>
            @endforeach
        @endif
    </div>
</div>

@endsection 