@extends('layouts.app')
@section('title', 'Wedora — Your Love Story, Beautifully Online')
@section('description', 'Buat website pernikahan elegan yang personal, mudah dibagikan, dan siap menyambut tamu Anda.')
@section('content')
    <section class="hero">
        <div class="shell hero-grid">
            <div class="hero-copy">
                <p class="eyebrow">Wedding website, made personal</p>
                <h1>Your Love Story,<br><em>Beautifully Online.</em></h1>
                <p class="lead">Buat website pernikahan elegan untuk membagikan momen spesial Anda kepada keluarga dan
                    teman.</p>
                <div class="button-row"><a class="btn btn-primary btn-lg" href="{{ url('/templates') }}">Lihat Template <x-icon
                            name="arrow-right" /></a><a class="btn btn-outline btn-lg" href="{{ url('/order') }}">Mulai
                        Membuat Website</a></div>
                <div class="micro-proof"><span>★★★★★</span>
                    <p><strong>4.9/5</strong> dari pasangan Wedora</p>
                </div>
            </div>
            <div class="hero-visual">
                <div class="laptop">
                    <div><img src="{{ asset('images/wedding-ivory.jpg') }}" width="1408" height="1056"
                            alt="Contoh website pernikahan Wedora"><span class="mockup-copy"><small>The Wedding
                                of</small><b>Alana &amp; Raka</b><i>12 · 12 · 2026</i></span></div>
                </div>
                <div class="phone"><img src="{{ asset('images/wedding-garden.jpg') }}" width="1408" height="1056"
                        alt="Tampilan mobile website pernikahan"><span>A &amp; R</span></div>
                <div class="floating-note"><x-icon name="heart" /><span><strong>Made for you</strong>Setiap detail terasa
                        personal</span></div>
            </div>
        </div>
    </section>
    <section class="trust">
        <div class="shell">
            <p>Trusted by couples to share their special day</p>
            <div class="stats">
                <div><strong>500+</strong><span>Wedding Websites</span></div>
                <div><strong>50+</strong><span>Curated Templates</span></div>
                <div><strong>10K+</strong><span>Guests Reached</span></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="shell">
            <div class="heading-row"><x-section-heading eyebrow="Curated collection"
                    title="Designed for every kind of love."
                    copy="Temukan tampilan yang paling mewakili kisah, suasana, dan hari bahagia Anda." /><a
                    class="btn btn-outline" href="{{ url('/templates') }}">Lihat semua template <x-icon
                        name="arrow-right" /></a></div>
            <div class="template-grid featured-grid">
                @foreach (array_slice($templates, 0, 6) as $item)
                    <x-template-card :item="$item" />
                @endforeach
            </div>
        </div>
    </section>
    @php $benefits=[['palette','Elegant Templates','Desain berkelas yang dibuat untuk beragam karakter kisah cinta.'],['monitor','Mobile Friendly','Tampil indah dan nyaman di setiap ukuran layar.'],['heart','Easy Customization','Warna, foto, dan cerita disesuaikan tanpa perlu coding.'],['calendar','RSVP Online','Kelola konfirmasi kehadiran tamu dalam satu tempat.'],['message','Digital Guestbook','Simpan doa dan ucapan hangat dari orang terdekat.'],['map','Google Maps','Bantu tamu menemukan lokasi acara dengan mudah.']]; @endphp
    <section class="section sage-band">
        <div class="shell"><x-section-heading center eyebrow="Everything you need"
                title="Beautiful, practical, and made easy."
                copy="Lebih dari sekadar undangan—semua kebutuhan tamu tersusun dalam satu pengalaman yang hangat." />
            <div class="benefit-grid">
                @foreach ($benefits as $b)
                    <article><x-icon :name="$b[0]" />
                        <h3>{{ $b[1] }}</h3>
                        <p>{{ $b[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section">
        <div class="shell"><x-section-heading center eyebrow="A simple journey"
                title="From template to happily ever after." />
            <div class="steps">
                @foreach ([['01', 'Choose Template', 'Pilih desain yang paling mewakili Anda.'], ['02', 'Customize Your Website', 'Kirim foto, cerita, dan detail acara.'], ['03', 'Review & Approve', 'Periksa hasil dan sampaikan revisi.'], ['04', 'Share Your Website', 'Bagikan tautan kepada semua tamu.']] as $s)
                    <article><span>{{ $s[0] }}</span>
                        <h3>{{ $s[1] }}</h3>
                        <p>{{ $s[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section pricing-preview">
        <div class="shell"><x-section-heading center eyebrow="Simple pricing" title="Choose what feels right."
                copy="Harga transparan, tanpa biaya tersembunyi." />
            <div class="pricing-grid">
                @foreach ($packages as $package)
                    <article class="price-card {{ $package['featured'] ? 'featured' : '' }}">
                        @if ($package['featured'])
                            <span class="popular">Paling populer</span>
                        @endif
                        <p class="category">
                            {{ $package['name'] }}</p>
                        <h3>{{ $package['price'] }}</h3>
                        <p>{{ $package['description'] }}</p>
                        <ul>
                            @foreach (array_slice($package['features'], 0, 5) as $feature)
                                <li>✓ {{ $feature }}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $package['featured'] ? 'btn-primary' : 'btn-outline' }}"
                            href="{{ url('/order?package=' . $package['name']) }}">Pilih {{ $package['name'] }}</a>
                    </article>
                @endforeach
            </div>
            <div class="center-action"><a class="btn btn-link" href="{{ url('/pricing') }}">Bandingkan semua fitur <x-icon
                        name="arrow-right" /></a></div>
        </div>
    </section>
    <section class="section testimonials">
        <div class="shell"><x-section-heading eyebrow="Love notes" title="Stories from our couples." />
            <div class="testimonial-grid">
                @foreach ([['Nadya & Reza', 'Bandung', 'Wedora membuat prosesnya terasa sangat ringan. Hasilnya bahkan lebih cantik dari yang kami bayangkan.', 'wedding-garden.jpg'], ['Tiara & Adit', 'Jakarta', 'Tamu kami suka karena informasi acara mudah ditemukan dan RSVP-nya sangat praktis.', 'wedding-ivory.jpg'], ['Citra & Bima', 'Yogyakarta', 'Timnya sabar membantu revisi sampai setiap detail benar-benar terasa seperti kami.', 'wedding-garden.jpg']] as $t)
                    <article><x-icon name="quote" />
                        <p>“{{ $t[2] }}”</p>
                        <div><img src="{{ asset('images/' . $t[3]) }}" width="80" height="80" loading="lazy"
                                alt="{{ $t[0] }}"><span><strong>{{ $t[0] }}</strong>{{ $t[1] }}</span>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section">
        <div class="shell faq-home"><x-section-heading eyebrow="Need to know" title="A few things couples often ask."
                copy="Tidak menemukan jawaban Anda? Tim kami siap membantu melalui WhatsApp." />
            <div><x-faq-list :items="array_slice($faqs, 0, 6)" /><a class="btn btn-link" href="{{ url('/faq') }}">Lihat semua pertanyaan
                    <x-icon name="arrow-right" /></a></div>
        </div>
    </section><x-final-cta />
@endsection
