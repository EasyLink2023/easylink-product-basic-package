@php
    $page_url = Request::url();
    $data = _get_page_seo_by_url($page_url);
@endphp
@section('title', $data->title ?? '')
@section('description', $data->description ?? '')
@section('keywords', $data->keyword ?? '')
@section('canonical', $page_url)