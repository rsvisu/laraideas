<div class="dropdown dropdown-end">
    <label tabindex="0" class="btn btn-ghost">
        <img src="{{ config('languages')[app()->getLocale()]['flag'] }}" alt="{{ app()->getLocale() }}">
        <span>{{ strtoupper(app()->getLocale()) }}</span>
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7"/>
        </svg>
    </label>
    <ul tabindex="0" class="dropdown-content z-[50] menu p-2 shadow bg-base-100 rounded-box w-32">
        @foreach(config('languages') as $language => $data)
            @continue(app()->getLocale() == $language)
            <li>
                <a href="{{ route('lang.switch', $language) }}">
                    <img src="{{ $data['flag'] }}" alt="{{ $data['name'] }}">
                    <span>{{ $data['name'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
