@extends('layouts.app')
@section('title', 'Harga Wedding Website — Wedora')
@section('description', 'Bandingkan paket Basic, Premium, dan Exclusive untuk website pernikahan Anda.')
@section('content')@include('components.data')<x-page-hero eyebrow="Clear and honest pricing"
        title="A beautiful beginning, at the right fit."
        copy="Pilih layanan yang sesuai dengan kebutuhan Anda. Semua paket aktif selama 12 bulan dan sudah termasuk bantuan dari tim Wedora." />
    <section class="section pricing-page">
        <div class="shell">
            <div class="pricing-grid">
                @foreach ($packages as $package)
                    <article class="price-card {{ $package['featured'] ? 'featured' : '' }}">
                        @if ($package['featured'])
                            <span class="popular">Most Popular</span>
                        @endif
                        <p class="category">
                            {{ $package['name'] }}</p>
                        <h2>{{ $package['price'] }}</h2>
                        <p>{{ $package['description'] }}</p>
                        <ul>
                            @foreach ($package['features'] as $feature)
                                <li><x-icon name="check" /> {{ $feature }}</li>
                            @endforeach
                        </ul>
                        <a class="btn {{ $package['featured'] ? 'btn-primary' : 'btn-outline' }}"
                            href="{{ url('/order?package=' . $package['name']) }}">Pilih {{ $package['name'] }}</a>
                    </article>
                @endforeach
            </div>
            @php $rows=[['Template pilihan',true,true,true],['Profil & detail acara',true,true,true],['Galeri foto','10 foto','25 foto','Tak terbatas'],['Google Maps',true,true,true],['RSVP online',false,true,true],['Buku tamu digital',false,true,true],['Musik & countdown',false,true,true],['Warna khusus',false,true,true],['Domain khusus',false,false,true],['Revisi','1x','3x','5x'],['Dukungan','Standar','Prioritas','Prioritas']]; @endphp
            <div class="comparison">
                <h2>Bandingkan setiap detail</h2>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Fitur</th>
                                <th>Basic</th>
                                <th>Premium</th>
                                <th>Exclusive</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $row)
                                <tr>
                                    <td>{{ $row[0] }}</td>
                                    @foreach (array_slice($row, 1) as $value)
                                        <td>
                                            @if ($value === true)
                                                <x-icon class="check" name="check" />
                                            @elseif($value === false)
                                                <x-icon name="minus" />@else{{ $value }}
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section><x-final-cta />@endsection
