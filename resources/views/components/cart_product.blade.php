<div class="cartCard">
    <div class="imageContainer">
        <img src="{{ asset('storage/assets/'.$product_image)}}" alt="" class="cartImage">
        <div class="textContainer">
            <h2 class="productName">
                {{$name}}
            </h2>
            <div class="d-flex align-items-center justify-content-sm-center">
                <img src="{{asset('storage/assets/'.$shop_image)}}" alt="" class="shopProfile">
                <div class="valueText d-flex align-items-center">{{$shop_name}}</div>
            </div>
        </div>
    </div>
    <div class="rightContainer">
        <div class="price">
            ${{$price}}
        </div>
        <div class="quantityContainer">
            <form action="/quantity" method="POST" class="input-group">
                @csrf
                <input type="hidden" name="id" value="{{$id}}">
                <input id="minus" class="operator" type="submit" name="operation" value="-" width="">
                <input class="quantityField" type="text" name="quantity" id="quantityField" value="{{$quantity}}" readonly>
                <input id="plus" class="operator" type="submit" name="operation" value="+" width="">
            </form>
        </div>
    </div>
</div>