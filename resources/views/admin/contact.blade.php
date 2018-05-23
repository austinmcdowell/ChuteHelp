@extends('layouts.admin')

@section('javascript')
<script>
    window.data = @json($page);
</script>
@endsection

@section('content')
    <contact-editor></contact-editor>
@endsection