@extends('layouts.app')

@section('title', $template->name . ' Wedding Website — Wedora')

@section('description', 'Lihat detail template ' . $template->name . ' dan pilih paket sesuai kebutuhan Anda.')

@section('content')

    <section class="detail-section">
        <div class="shell detail-grid">

            <div>

                <div class="device-switch" data-device-switch>

                    @foreach ([['desktop', 'monitor'], ['tablet', 'tablet'], ['mobile', 'phone']] as $d)
                        <button class="btn {{ $d[0] === 'desktop' ? 'btn-primary' : 'btn-ghost' }} btn-icon" type="button"
                            data-device="{{ $d[0] }}" aria-label="Preview {{ $d[0] }}">
                            <x-icon :name="$d[1]" />
                        </button>
                    @endforeach

                </div>

                <div class="detail-preview desktop" data-device-preview>

                    <img src="{{ asset('images/' . $template->image) }}" width="1408" height="1056"
                        alt="Preview template {{ $template->name }}">

                    <div class="detail-overlay">
                        <span>The Wedding of</span>
                        <strong>Nadira &amp; Aditya</strong>
                        <small>19 September 2026</small>
                    </div>

                </div>

            </div>


            <aside class="detail-info">

                <p class="eyebrow">
                    {{ $template->category }} collection
                </p>

                <h1>
                    {{ $template->name }}
                </h1>


                <div class="detail-rating">

                    <x-icon name="star" />

                    5.0

                    <span>· Template Wedora</span>

                </div>


                <p class="detail-desc">
                    {{ $template->description }}
                </p>


                <p class="detail-price">

                    Mulai dari

                    <strong>
                        Rp{{ number_format($template->price, 0, ',', '.') }}
                    </strong>

                </p>


                <ul>

                    @foreach (['Tampilan responsif', 'Warna dan foto dapat disesuaikan', 'RSVP & buku tamu digital', 'Optimasi untuk semua perangkat'] as $feature)
                        <li>
                            <x-icon name="check" />
                            {{ $feature }}
                        </li>
                    @endforeach

                </ul>


                <div class="detail-actions">

                    <button class="btn btn-outline btn-lg" type="button">
                        Live Demo

                        <x-icon name="external" />

                    </button>


                    <a class="btn btn-primary btn-lg" href="{{ url('/order?template=' . urlencode($template->slug)) }}">
                        Choose This Template
                    </a>

                </div>


                <p class="helper">
                    Belum yakin? Konsultasikan pilihan Anda secara gratis dengan tim Wedora.
                </p>

            </aside>

        </div>
    </section>


    <section class="section sage-band">

        <div class="shell">

            <x-section-heading center eyebrow="All in one place" title="What's included." />

            <div class="included-grid">

                @foreach (['Couple profile', 'Wedding event information', 'Gallery', 'RSVP', 'Digital guestbook', 'Google Maps', 'Music', 'Countdown', 'Gift information'] as $i => $feature)
                    <div>

                        <span>
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        {{ $feature }}

                    </div>
                @endforeach

            </div>

        </div>

    </section>


    <section class="section">

        <div class="shell">

            <x-section-heading eyebrow="You may also love" title="More designs to explore." />

            <div class="template-grid recommendations">

                @foreach (array_slice(array_values(array_filter($templates, fn($t) => $t['slug'] !== $template->slug)), 0, 3) as $related)
                    <x-template-card :item="$related" />
                @endforeach

            </div>

        </div>

    </section>

@endsection
