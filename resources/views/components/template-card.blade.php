@props(['item'])<article class="template-card" data-template-card data-name="{{ strtolower($item['name']) }}"
    data-category="{{ $item['category'] }}" data-price="{{ $item['price'] }}" data-rating="{{ $item['rating'] }}"
    data-new="{{ ($item['label'] ?? '') === 'Baru' ? 1 : 0 }}">
    <a href="{{ url('/templates/' . $item['slug']) }}" class="template-image-wrap"
        aria-label="Lihat {{ $item['name'] }}"><img src="{{ asset('images/' . $item['image']) }}" width="1408"
            height="1056" loading="lazy" alt="Template undangan {{ $item['name'] }}">
        @if (!empty($item['label']))
            <span class="image-badge">{{ $item['label'] }}</span>
        @endif
        <span class="preview-hover">Lihat preview <x-icon name="arrow-right" /></span>
    </a>
    <div class="template-meta">
        <div>
            <p class="category">{{ $item['category'] }}</p>
            <h3>{{ $item['name'] }}</h3>
        </div>
        <div class="rating"><x-icon name="star" /> {{ $item['rating'] }}</div>
    </div>
    <div class="template-bottom">
        <p>Mulai dari <strong>Rp{{ number_format($item['price'], 0, ',', '.') }}</strong></p>
        <div><a class="btn btn-ghost btn-sm" href="{{ url('/templates/' . $item['slug']) }}">Preview</a><a
                class="btn btn-primary btn-sm" href="{{ url('/order?template=' . urlencode($item['name'])) }}">Pilih</a>
        </div>
    </div>
</article>
