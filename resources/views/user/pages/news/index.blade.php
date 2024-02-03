@extends('user.layouts.layout-news')
@section('bodyClass', 'page-template page-template-templates page-template-projects page-template-templatesprojects-php
page page-id-78 wp-custom-logo wp-embed-responsive right-sidebar nav-float-right separate-containers header-aligned-left
dropdown-hover vsc-initialized using-mouse')
@section('news')
<div class="grid_box grid_2 box_hot_posts tablet_grid_1">
    @foreach($posts as $post)
    <div class="item relative">
        <a href="/bai-viet/{{ $post->slug }}" class="wrap_link"></a>
        <div class="img_wrap">
            <img width="902" height="508" src="{{ $post->image }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image lazyloaded" alt="" decoding="async" data-ll-status="loaded">
            <noscript>
                <img width="902" height="508" src="{{ $post->image }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" decoding="async" />
            </noscript>
        </div>
        <div class="cont_wrap">
            <div class="date_cat flex_box al_center">
                <a href="/chu-de/{{ $post->topic->slug }}">{{ $post->topic->name }}</a>
                <div class="date">{{ $post->created_at->format('d/m/Y') }}</div>
            </div>
            <h3 class="font_oswald fw300 limit_line limit_5 fs_24 lh_34 text_uppercase m_0">
                {{ $post->title }}
            </h3>
        </div>
    </div>
    @endforeach
</div>
@endsection
