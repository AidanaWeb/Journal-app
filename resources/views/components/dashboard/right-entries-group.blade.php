


<div class="right">

    @foreach ($entries as $entry)
    <a href="">
        <div class="card mb-3 entry-2">
            <div class="row">
                <div class="col-sm-8">
                    <h5 class="card-title">
                        {{$entry->entry_title}}
                    </h5>
                    <p class="card-text">
                        {{$entry->entry_body}}
                    </p>
                </div>
    
                {{-- image --}}
                <div class="col-sm-4"> 
                    <div class="entry-image-2">
                        <img src="https://media.licdn.com/dms/image/C4E0BAQHTtUsRzaJKGw/company-logo_200_200/0/1648215628718/day_oned1_logo?e=2147483647&v=beta&t=HXX_oSQUUvPu_5_-oIXYd2x0XrsxnhskX_X39ZaJErk"
                            class="img-fluid rounded-start entry-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach

</div>








{{-- <div class="card mb-3 entry-2">
    <div class="row">
        <div class="col-sm-8">
            <p class="card-title">
                title
            </p>
            <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit alias natus necessitatibus asperiores saepe dolorem praesentium dicta fugiat, ducimus placeat cum, odio atque sunt iusto eaque vitae. Sed, molestiae obcaecati.
            </p>
        </div>


        <div class="col-sm-4"> 
            <div class="entry-image-2">
                <img src="https://media.licdn.com/dms/image/C4E0BAQHTtUsRzaJKGw/company-logo_200_200/0/1648215628718/day_oned1_logo?e=2147483647&v=beta&t=HXX_oSQUUvPu_5_-oIXYd2x0XrsxnhskX_X39ZaJErk"
                    class="img-fluid rounded-start entry-img" alt="...">
            </div>
        </div>
    </div>
</div> --}}