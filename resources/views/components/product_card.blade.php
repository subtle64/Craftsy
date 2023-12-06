<div class="card border-0 p-4 d-flex flex-column" style="width: 100%; min-width: 150px; max-width: 300px;">
    <img class="card-img-top mb-4" style="border-radius:20%;width:100%" src="{{asset('storage/assets/'.$image)}}" alt="Card image cap">
    <div class="card-body d-flex flex-column justify-content-sm-between">
        <h5 style="font-weight: 600;font-size:14px;font-family:Abhaya Libre ExtraBold;margin-top:-10px; margin-bottom: 10px" class="card-title">{{$name}}</h5>
        <div class="">
            <div class="rating-container">
                @if (is_numeric(strval($rating)))
                    @php
                        $counter = 0;
                        $new_rating = intval(strval($rating)) * 10;
                        $remaining = 0;
                    @endphp
                        @for ($j = $new_rating; $j > 0; $j--)
                            @if ($j % 10 == 0)
                                <i class="fa fa-star"></i>
                                @php
                                    $counter++;
                                @endphp
                                @if ($counter == 5)
                                    @break
                                @endif
                            @elseif($j < 10)
                                @php
                                    $remaining = $j;
                                @endphp
                                @break
                            @endif
                        @endfor
                        @if ($remaining != 0)
                            <i class="fa fa-star-half-o"></i>
                            @php
                                $counter++;
                            @endphp
                        @endif
                        @for ($j = 0; $j < 5 - $counter; $j++)
                            <i class="fa fa-star-o"></i>
                        @endfor    
                    <span>{{strval($rating)}}</span>
                @endif
            </div>
            <h5 style="margin-bottom:-5px;font-family:ubuntu;font-weight: 700;">US${{$price}}</h5>
        </div>
    </div>
</div>