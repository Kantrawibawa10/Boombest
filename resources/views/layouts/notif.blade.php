
@foreach($notif as $item)
<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
    <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
    <a class="dropdown-item ">
        <div class="">
            <div class=" bg-success"
            style="width: 70px; border-radius: 20px;
            height: 70px; background-size: cover; background-position
            ">
                <img src="{{url('products/'. $item->img_barang)}}" alt=""
                style="width: 70px; border-radius: 20px;
                height: 70px; background-size: cover; background-position">
            </div>
        </div>

        <div class="item-content">
            <h6 class="font-weight-normal" style="line-height: 2px;">{{ $item->nama_barang }}</h6>
            <p class="font-weight-light small-text mb-0 text-muted">
                {{ $item->name }}
            </p>

        </div>
    </a>
</div>
@endforeach
