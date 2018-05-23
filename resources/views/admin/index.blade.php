@extends('layouts.admin')

@section('javascript')
<script>
    window.data = @json($page);
</script>
@endsection

@section('content')
    <home-editor></home-editor>
@endsection