@extends('layouts.admin')

@section('javascript')
<script>
    window.retailer = @json($retailer);
</script>
@endsection

@section('content')
    <add-retailer></add-retailer>
@endsection 