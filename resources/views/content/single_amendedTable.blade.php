

<div class="row">
    <div class="col-md-12">

        <div class="container"><h5><b>{{ $amendedAct['name'] }}</b></h5></div>

        <div class="container" style="display: none">
            <a data-scroll-to="#main_act"
                data-scroll-focus="#main_act"
                data-scroll-speed="400"
                data-scroll-offset="-50"
                href="/post_1992_legislation/single-container-details-amendments/{{ $amendedAct['id'] }}" class="single_container_details_link_amend"><p>Click to View details</p>
            </a>
        </div>
        <hr style="margin-top: 0.5em;">
        <hr style="margin-top: 0.5em;">
           
        <div class="container">
            <a data-scroll-to="#main_act"
                data-scroll-focus="#main_act" 
                data-scroll-speed="400" 
                data-scroll-offset="-50" 
                href="/post_1992_legislation/single-acts-amended-preamble/{{ $amendedAct['id'] }}" class="single_preamble_amended_link"><p>Introductory Text</p>
            </a>
        </div>
                @include('content.singleAmendedContentDisplay')

                <div class="col-md-12 text-center">
                    <ul id="myPager" class="pagination"></ul>
                    <p><a href="#" data-scroll-to="body">Move to Top</button></p>
                </div>
    </div> 
                         
</div>
