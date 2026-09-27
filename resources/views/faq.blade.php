@extends('layouts.app')
@section('title', 'Pertanyaan Umum — Wedora')
@section('description', 'Jawaban lengkap tentang template, pemesanan, revisi, domain, dan layanan Wedora.')
@section('content')@include('components.data')<x-page-hero eyebrow="Frequently asked questions"
        title="Everything you might want to know."
        copy="Kami merangkum pertanyaan yang paling sering ditanyakan agar proses Anda terasa lebih jelas sejak awal." />
    <section class="section">
        <div class="shell faq-page">
            <aside>
                <p class="eyebrow">Still need help?</p>
                <h2>Belum menemukan jawaban?</h2>
                <p>Ceritakan kebutuhan Anda. Tim kami dengan senang hati membantu melalui WhatsApp.</p><a
                    class="btn btn-primary" href="{{ url('/order') }}"><x-icon name="message" /> Hubungi Wedora</a>
            </aside><x-faq-list :items="$faqs" />
        </div>
</section>@endsection
