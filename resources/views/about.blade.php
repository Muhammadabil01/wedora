@extends('layouts.app')
@section('title', 'Tentang Wedora')
@section('description', 'Kenali Wedora dan misi kami membuat setiap kisah cinta mudah dibagikan.')
@section('content')<x-page-hero eyebrow="Our story" title="Making every love story easy to share."
        copy="Wedora lahir untuk membantu pasangan merayakan cerita mereka melalui pengalaman digital yang hangat, indah, dan mudah digunakan." />
    <section class="section story">
        <div class="shell story-grid">
            <div class="story-images"><img src="{{ asset('images/wedding-ivory.jpg') }}" width="1408" height="1056"
                    alt="Pasangan Wedora"><img src="{{ asset('images/wedding-traditional.jpg') }}" width="1408"
                    height="1056" loading="lazy" alt="Pernikahan tradisional"></div>
            <div>
                <p class="eyebrow">Why we started</p>
                <h2>Karena setiap kisah layak disampaikan dengan sepenuh hati.</h2>
                <p>Kami melihat undangan bukan hanya sebagai informasi tanggal dan lokasi, tetapi sebagai pintu pertama
                    menuju perayaan Anda. Karena itu, Wedora menggabungkan desain yang peka, teknologi yang sederhana, dan
                    pelayanan yang personal.</p>
                <p>Kami ingin siapa pun—tanpa pengalaman teknis—dapat memiliki ruang digital yang terasa istimewa dan
                    sepenuhnya milik mereka.</p><a class="btn btn-outline" href="{{ url('/templates') }}">Lihat karya kami
                    <x-icon name="arrow-right" /></a>
            </div>
        </div>
    </section>
    <section class="section sage-band">
        <div class="shell"><x-section-heading center eyebrow="What guides us" title="Thoughtful in every detail." />
            <div class="values">
                @foreach ([['heart', 'Personal', 'Setiap pasangan unik. Kami mendengar sebelum mulai merancang.'], ['gem', 'Beautiful', 'Keindahan hadir dari detail yang tepat, bukan dari hal yang berlebihan.'], ['leaf', 'Simple', 'Proses yang jelas dan pengalaman yang mudah untuk pasangan maupun tamu.'], ['users', 'Human', 'Kami hadir sebagai tim yang responsif, hangat, dan dapat diandalkan.']] as $v)
                    <article><x-icon :name="$v[0]" />
                        <h3>{{ $v[1] }}</h3>
                        <p>{{ $v[2] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section team">
        <div class="shell"><x-section-heading center eyebrow="The people behind Wedora"
                title="A small team with a big heart."
                copy="Desainer, penulis, dan customer experience yang bekerja bersama untuk menjaga setiap detail." />
            <div class="team-list">
                @foreach ([['A', 'Alya', 'Creative Director'], ['D', 'Dimas', 'Product Designer'], ['N', 'Nara', 'Couple Experience']] as $person)
                    <div><span>{{ $person[0] }}</span>
                        <h3>{{ $person[1] }}</h3>
                        <p>{{ $person[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
</section>@endsection
