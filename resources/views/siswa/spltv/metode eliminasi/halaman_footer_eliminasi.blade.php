<div class="card">
    <div class="card-body shadow">
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if (Request()->routeIs('spltv_eliminasi_1'))
                        <li class="page-item">
                            <a class="page-link" href="{{ route('spltv_subtitusi_1') }}" aria-label="Previous">
                                <span aria-hidden="true">Sebelumnya</span>
                            </a>
                        </li>
                    @endif
                    <li
                        class="page-item
                    @if (Request()->routeIs('spltv_eliminasi_1'))
                        active
                    @endif
                    ">
                        <a class="page-link" href="{{ route('spltv_eliminasi_1') }}">1</a>
                    </li>
                    @php
                        use App\Models\MariMencobaSpltvEliminasi;
                        $mari_mencoba = MariMencobaSpltvEliminasi::first();
                    @endphp
                    <li class="page-item
                    @if (Request()->routeIs('spltv_eliminasi_2'))
                        active
                    @endif">
                        <a class="page-link" href="{{ route('spltv_eliminasi_2')}}">2</a>
                    </li>
                    {{-- <li class="page-item
                    @if (Request()->routeIs('spltv_eliminasi_3'))
                        active
                    @endif">
                        <a class="page-link" href="{{ route('spltv_eliminasi_3', [$mari_mencoba->id, 1]) }}">3</a>
                    </li> --}}
                    @if (Request()->routeIs('spltv_eliminasi_2'))
                        <li class="page-item">
                            <a class="page-link" href="{{route('spltv_gabungan_1')}}" aria-label="Next">
                                <span aria-hidden="true">Selanjutnya</span>

                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</div>
