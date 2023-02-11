<ul>
    @foreach ($imageList as $list)
        <li>
            <div class="overLay">
                <img src="{{ $list->img }}" alt="" class="img-responsive w-100">
            </div>
        </li>
    @endforeach
</ul>