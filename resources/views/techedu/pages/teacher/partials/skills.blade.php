@if ( count($items))
    <span>

        <h5 class=""><i class="fa fa-star"></i>{{trans($label)}}: </h5>
        <span class="fa">
            <ul>
                @foreach( $items as $item)
                    <li ><i class="fa-check"></i >{{$item}}</li>
                @endforeach
            </ul>
        </span>
    </span>
@endif

