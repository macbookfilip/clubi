@extends('layouts.app')

@section('content')
<div class="container">
    <group-container
        :group="{{ $group }}"
        :posts="{{ $posts }}"
        next_page_url="{{ $next_page }}"
        :is_member="{{ $is_member?'true':'false' }}"
        :is_group_admin="{{ $editable?'true':'false' }}"
    />
</div>
@endsection
