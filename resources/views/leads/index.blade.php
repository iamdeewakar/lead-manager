@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Leads</h1>
    <div class="row">
        @foreach (['WEB', 'MOBILE', 'AUTO', 'EMBEDDED'] as $type)
            <div class="col-md-6">
                @include('leads.partials.lead_table', ['type' => $type, 'leads' => $leads])
            </div>
        @endforeach
    </div>
</div>
@endsection
