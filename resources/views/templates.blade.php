@extends('layouts.app')

@section('title','Template Wedding Website — Wedora')

@section('description','Jelajahi koleksi template wedding website modern, romantis, tradisional, dan mewah dari Wedora.')

@section('content')

<x-page-hero
    eyebrow="The Wedora collection"
    title="Find the perfect design for your love story."
    copy="Setiap template dibuat dengan perhatian pada detail, pengalaman tamu, dan karakter pasangan yang berbeda."
/>

<section class="catalog section" data-catalog>
    <div class="shell">

        <div class="catalog-tools">
            <div class="search-box">
                <x-icon name="search"/>
                <input
                    class="input"
                    data-template-search
                    placeholder="Search templates..."
                    aria-label="Cari template"
                >
            </div>

            <label class="sort-box">
                <x-icon name="sliders"/>
                <select data-template-sort aria-label="Urutkan template">
                    <option value="popular">Popular</option>
                    <option value="new">Newest</option>
                    <option value="low">Price Low to High</option>
                    <option value="high">Price High to Low</option>
                </select>
            </label>
        </div>

        <div class="filter-row" aria-label="Filter kategori">
            @foreach(['All','Minimalist','Romantic','Modern','Traditional','Luxury','Floral'] as $cat)
                <button
                    class="btn {{ $cat==='All'?'btn-primary':'btn-outline' }} btn-sm"
                    type="button"
                    data-category="{{ $cat }}"
                >
                    {{ $cat }}
                </button>
            @endforeach
        </div>

        <div class="results-head">
            <p>
                Menampilkan
                <strong>
                    <span data-result-count>{{ count($templates) }}</span>
                    template
                </strong>
            </p>
        </div>

        <div class="template-grid" data-template-grid>
            @foreach($templates as $item)
                <x-template-card :item="$item"/>
            @endforeach
        </div>

        <div class="empty-state" data-empty-state hidden>
            <x-icon name="search"/>
            <h2>Template belum ditemukan</h2>
            <p>Coba kata kunci atau kategori lain.</p>
            <button class="btn btn-primary" type="button" data-reset-search>
                Reset pencarian
            </button>
        </div>

    </div>
</section>

@endsection