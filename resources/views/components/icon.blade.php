@props(['name'])
<svg
    {{ $attributes->merge(['viewBox' => '0 0 24 24', 'fill' => 'none', 'stroke' => 'currentColor', 'stroke-width' => '2', 'stroke-linecap' => 'round', 'stroke-linejoin' => 'round', 'aria-hidden' => 'true']) }}>
    @switch($name)
        @case('arrow-right')
            <path d="M5 12h14M13 6l6 6-6 6" />
        @break

        @case('menu')
            <path d="M4 6h16M4 12h16M4 18h16" />
        @break

        @case('x')
            <path d="M18 6 6 18M6 6l12 12" />
        @break

        @case('star')
            <path d="m12 2 3.1 6.3 6.9 1-5 4.9 1.2 6.8-6.2-3.3L5.8 21 7 14.2l-5-4.9 6.9-1z" />
        @break

        @case('search')
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" />
        @break

        @case('sliders')
            <path d="M4 21v-7M4 10V3M12 21v-9M12 8V3M20 21v-5M20 12V3M1 14h6M9 8h6M17 16h6" />
        @break

        @case('check')
            <path d="m20 6-11 11-5-5" />
        @break

        @case('minus')
            <path d="M5 12h14" />
        @break

        @case('chevron')
            <path d="m6 9 6 6 6-6" />
        @break

        @case('monitor')
            <rect x="2" y="3" width="20" height="14" rx="2" />
            <path d="M8 21h8M12 17v4" />
        @break

        @case('tablet')
            <rect x="5" y="2" width="14" height="20" rx="2" />
            <path d="M12 18h.01" />
        @break

        @case('phone')
            <rect x="7" y="2" width="10" height="20" rx="2" />
            <path d="M12 18h.01" />
        @break

        @case('external')
            <path d="M15 3h6v6M10 14 21 3M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
        @break

        @case('heart')
            <path
                d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.6l-1-1a5.5 5.5 0 0 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z" />
        @break

        @case('palette')
            <circle cx="13.5" cy="6.5" r=".5" />
            <circle cx="17.5" cy="10.5" r=".5" />
            <circle cx="8.5" cy="7.5" r=".5" />
            <circle cx="6.5" cy="12.5" r=".5" />
            <path
                d="M12 2a10 10 0 0 0 0 20c1.1 0 2-.9 2-2 0-.5-.2-1-.6-1.4-.4-.4-.6-.9-.6-1.4a2 2 0 0 1 2-2H17a5 5 0 0 0 5-5C22 5.7 17.5 2 12 2z" />
        @break

        @case('calendar')
            <rect x="3" y="4" width="18" height="18" rx="2" />
            <path d="M16 2v4M8 2v4M3 10h18m-9 4-2 2-1-1" />
        @break

        @case('map')
            <path d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0z" />
            <circle cx="12" cy="10" r="2" />
        @break

        @case('message')
            <path d="M21 15a4 4 0 0 1-4 4H8l-5 3V7a4 4 0 0 1 4-4h10a4 4 0 0 1 4 4z" />
        @break

        @case('globe')
            <circle cx="12" cy="12" r="10" />
            <path d="M2 12h20M12 2a15 15 0 0 1 0 20M12 2a15 15 0 0 0 0 20" />
        @break

        @case('file')
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
            <path d="M14 2v6h6M8 13h8M8 17h8" />
        @break

        @case('layers')
            <path d="m12 2 10 5-10 5L2 7zM2 12l10 5 10-5M2 17l10 5 10-5" />
        @break

        @case('gem')
            <path d="M6 3h12l4 6-10 12L2 9zM11 3 8 9l4 12 4-12-3-6M2 9h20" />
        @break

        @case('leaf')
            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 19 2 19 2c1 8.5-3.5 15.5-8 16M2 21c0-3 1.8-5.3 5-7" />
        @break

        @case('users')
            <path
                d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8M22 21v-2a4 4 0 0 0-3-3.9M16 3.1a4 4 0 0 1 0 7.8" />
        @break

        @case('lock')
            <rect x="3" y="11" width="18" height="10" rx="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
        @break

        @case('quote')
            <path
                d="M3 21c3 0 7-1 7-8V5c0-1.3-.8-2-2-2H4c-1.2 0-2 .7-2 2v6c0 1.2.8 2 2 2h2c0 4-1 5-3 6M14 21c3 0 7-1 7-8V5c0-1.3-.8-2-2-2h-4c-1.2 0-2 .7-2 2v6c0 1.2.8 2 2 2h2c0 4-1 5-3 6" />
        @break

        @case('instagram')
            <rect x="2" y="2" width="20" height="20" rx="5" />
            <circle cx="12" cy="12" r="4" />
            <circle cx="18" cy="6" r=".5" />
        @break

        @case('mail')
            <rect x="2" y="4" width="20" height="16" rx="2" />
            <path d="m22 7-10 7L2 7" />
        @break

        @default
            <circle cx="12" cy="12" r="9" />
    @endswitch
</svg>
