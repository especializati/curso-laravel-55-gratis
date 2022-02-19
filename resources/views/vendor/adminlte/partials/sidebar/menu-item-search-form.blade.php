<li>

    <form class="form-inline my-2" action="{{ $item['href'] }}" method="{{ $item['method'] }}">
        {{ csrf_field() }}

        <div class="input-group">

            {{-- Search input --}}
            <input class="form-control form-control-sidebar" type="search"
                @isset($item['id']) id="{{ $item['id'] }}" @endisset
                name="{{ $item['input_name'] }}"
                placeholder="{{ $item['text'] }}"
                aria-label="{{ $item['text'] }}">

            {{-- Search button --}}
            <div class="input-group-append">
                <button class="btn btn-sidebar" type="submit">
                    <i class="fas fa-fw fa-search"></i>
                </button>
            </div>

        </div>
    </form>

</li>
