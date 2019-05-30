//-------------------------------------------------------------------------------------------------------------------------

// TOGGLE DISPLAY BETWEEN REGULATION PREAMBLE AND REGULATION CONTENT
$(document).ready(function(){

    var gsid = 0; 
    var psid = 0, nsid = 0;

  $('.tabPanedHide_amendments').hide();
  $('.tabPanedHide_amendments_table').hide();
  $('.tabPanedHide_amendments_content').hide();

  $('.tabPanedHide_regulations').hide();
  $('.tabPanedHide_regulations_table').hide();
  $('.tabPanedHide_regulations_content').hide();

  $('.tabPanedHide_acts_content').hide();

  $('.tabPanedHide_expanded_view').hide();

    //TOGGLE ALL AMENDMENTS AND REGULATION UNDER AN ACT
    //For all amendments
   $('#all_amendments_link_toggle').click(function (e) {
        e.preventDefault();
        $('#tabs a[href="#all_amendmentsTab"]').tab('show');
        $('.tabPanedHide_regulations').hide();
        $('.tabPanedHide_regulations_table').hide();
        $('.tabPanedHide_regulations_content').hide();
        $('.tabPanedHide_amendments_table').hide();
        $('.tabPanedHide_amendments_content').hide();
        $('.tabPanedHide_amendments').show();
   });
   $('.all_amendments_link').click(function(e){
    e.preventDefault();
    var xhr = new XMLHttpRequest();
    var link = $(this).attr("href");
    xhr.open("GET", link, true);
    xhr.onreadystatechange = function receiveUpdate(e) {
        $("#all_amendments").html(this.responseText); 
        $("#amend_datatable").DataTable();
    }
    xhr.send();
    });

    //For all regulations
   $('#all_regulations_link_toggle').click(function (e) {
    e.preventDefault();
        $('#tabs a[href="#all_regulationsTab"]').tab('show');
        $('.tabPanedHide_amendments').hide();
        $('.tabPanedHide_amendments_table').hide();
        $('.tabPanedHide_amendments_content').hide();
        $('.tabPanedHide_regulations').show();
    });
   $('.all_regulations_link').click(function(e){
    e.preventDefault();
    var xhr = new XMLHttpRequest();
    var link = $(this).attr("href");
    xhr.open("GET", link, true);
    xhr.onreadystatechange = function receiveUpdate(e) {
        $("#all_regulations").html(this.responseText);
        $("#regulated_datatable").DataTable();  
    }
    xhr.send();
    });



    //TOGGLE FUNCTION FOR AMENDMENT AND REGULATION
    //For a particular amendment...Toggle to table of content
   function amended_act_toggle() {
        $('#tabs a[href="#amended_table_of_Content_Tab"]').tab('show');
        $('.tabPanedHide_amendments_table').show();
   }
   function act_content_link_toggle()
    {
    $('#tabs a[href="#contentTab"]').tab('show');
    $('.tabPanedHide_acts_content').show();
    }   
    // For a particular amendment .....toggle to content
   function amended_act_toggle_content() {
    $('#tabs a[href="#amendmentcontentTab"]').tab('show');
    $('.tabPanedHide_amendments_content').show();
    }

    //for regulation
   function regulation_act_toggle() {
    $('#tabs a[href="#regulated_table_of_Content_Tab"]').tab('show');
    $('.tabPanedHide_regulations_table').show();

    }

   function regulation_act_toggle_content() {
    $('#tabs a[href="#regulatedcontentTab"]').tab('show');
    $('.tabPanedHide_regulations_content').show();
    }


   $(document).on('click','.amended_link', function(e){
        e.preventDefault();
        amended_act_toggle();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) { 
            $("#single_preamble_amended_content").html(""); 
            $("#single_amended_content").html("");
            $("#single_view_all_sections_amend").html("");
            $("#single_container_details_amend").hide();
            $("#amended_table_of_content").html(this.responseText);
        }
    xhr.send();
    });

    //regulations
    $(document).on('click','.regulated_link', function(e){
        e.preventDefault();
        regulation_act_toggle();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_regulation_content").html(""); 
            $("#single_regulation_content").html("");
            $("#single_view_all_sections_regulation").html("");
            $("#single_container_details_regulation").hide();
            $("#regulated_table_of_content").html(this.responseText);
        }
    xhr.send();
    });

    $(document).on('click','.single_preamble_amended_link', function(e){
        e.preventDefault();
        amended_act_toggle_content();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_amended_content").html(this.responseText); 
            $("#single_amended_content").html("");
            $("#single_view_all_sections_amend").html("");
            $('.single_container_details_link_amend').trigger("click");
            $(".show li").hide();
        }
    xhr.send();
    });

    $(document).on('click','.single_preamble_regulation_link', function(e){
        e.preventDefault();
        regulation_act_toggle_content();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_regulation_content").html(this.responseText); 
            $("#single_regulation_content").html("");
            $("#single_view_all_sections_regulation").html("");
            $('.single_container_details_link_regulation').trigger("click");
            $(".show li").hide();
        }
        xhr.send();
    });

    $(document).on('click','.sinlge_amended_act_content_link', function(e){
        e.preventDefault();
        amended_act_toggle_content();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_amended_content").html(""); 
            $("#single_amended_content").html(this.responseText);
            $("#single_view_all_sections_amend").html("");
            $('.single_container_details_link_amend').trigger("click");
            $(".show li").show();
            
        }
        xhr.send();
    }); 
    
    //Regulation
    $(document).on('click','.sinlge_regulation_act_content_link', function(e){
        e.preventDefault();
        regulation_act_toggle_content();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_regulation_content").html(""); 
            $("#single_regulation_content").html(this.responseText);
            $("#single_view_all_sections_regulation").html("");
            $('.single_container_details_link_regulation').trigger("click");
            $(".show li").show();
        }
        xhr.send();
    }); 

    $(document).on('click','.single_container_details_link_amend', function(e){
        e.preventDefault();
        amended_act_toggle_content();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_container_details_amend").html(this.responseText);
            $("#single_container_details_amend").show();
            
        }
        xhr.send();
    });

    $(document).on('click','.single_container_details_link_regulation', function(e){
        e.preventDefault();
        regulation_act_toggle_content();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_container_details_regulation").html(this.responseText);
            $("#single_container_details_regulation").show(); 
        }
        xhr.send();
    });

    //View all single amendments links
    $(document).on('click','.single_view_all_amendments_section_link', function(e){
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_amended_content").html("");
            $("#single_amended_content").html("");
            $("#single_view_all_sections_amend").html(this.responseText);
            $(".show li").show();
        }
        xhr.send();
    });
    //View all single regulation links
    $(document).on('click','.single_view_all_regulation_section_link', function(e){
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#single_preamble_regulation_content").html("");
            $("#single_regulation_content").html("");
            $("#single_view_all_sections_regulation").html(this.responseText);
            $(".show li").show();
        }
        xhr.send();
    });
    //-----------------------------------------------------end

//    $('.amended_link_content').click(function(e){
//         e.preventDefault();
//         var xhr = new XMLHttpRequest();
//         var link = $(this).attr("href");
//         xhr.open("GET", link, true);
//         xhr.onreadystatechange = function receiveUpdate(e) {
//             $("#amended_content").html(this.responseText); 
//         }
//         xhr.send();
//     });


    //GENERAL PREAMBLE LINK
    // General preamble click to show on content tab
    $('#preamble_link_toggle').click(function (e) {
         e.preventDefault();
         $('#tabs a[href="#contentTab"]').tab('show');
         $('.tabPanedHide_acts_content').show();
        //  $('.tabPanedHide_amendments').hide();
        //  $('.tabPanedHide_regulations').hide();
    });
    
    //GENERAL CONTENT LINK
    // General content click to show on content tab
    $('.content_link_toggle').click(function (e) {
        e.preventDefault();
         $('#tabs a[href="#contentTab"]').tab('show');
    });
    
    // GENERAL
    // General View all section links
    $('.view_all_section_link').click(function(e){
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#display_content").html("");
            $("#display_preamble").html("");
            $("#display_view_all_section").html(this.responseText);   
        }
        xhr.send();
    });

    
    // PREVIOUS AND NEXT BUTTON FOR REGULATION
    //previous for regulation------------------------------------the clicking
    $('#previous_content_reg').click(function (e) {
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        setPrevNext(psid);

        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#regulation_preamble").html("");
            $("#view_regulations_section").html("");
            $("#regulation_content").html(this.responseText);
        }
        xhr.send();
    });

     //next for regulation
    $('#next_content_reg').click(function (e) {
        e.preventDefault();
        var ids = $('#regulation_contents').val();
 
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        setPrevNext(nsid);

        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#regulation_preamble").html("");
            $("#view_regulations_section").html("");
            $("#regulation_content").html(this.responseText);
        }
        xhr.send();
    });

    // END OF PREVIOUS AND NEXT BUTTON for regulation--------end of the clicking
    







    // PREVIOUS AND NEXT BUTTON FOR ACTS
    //previous for act----------------------------------------the clicking
    $('#previous_content_act').click(function (e) {
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        setPrevNext(psid);

        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#act_preamble").html("");
            $("#view_acts_section").html("");
            $("#act_content").html(this.responseText);
        }
        xhr.send();
    });

     //next for act
    $('#next_content_act').click(function (e) {
        e.preventDefault();
        var ids = $('#act_contents').val();
 
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        setPrevNext(nsid);

        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#act_preamble").html("");
            $("#view_acts_section").html("");
            $("#act_content").html(this.responseText);
        }
        xhr.send();
    });
    // END OF PREVIOUS AND NEXT BUTTON for act--------end of the clicking



    // BUILDING THE PREVIOUS AND NEXT--------the process for the act
    function setPrevNext(gsid1){
        var sid = gsid1;       
        var ids = $('#act_contents').val();
        console.log('ids', JSON.parse(ids)); //showing all ids
        var previous = '', next = '';
        //find index of sid in ids array
        var aay = JSON.parse(ids);
        
        var arrayLength = aay.length;
        var index = 0;
        for (var i = 0; i < arrayLength; i++) {
            if(aay[i] == sid){
                index = i;
            }
        }

        console.log('index', index); // showing the clicked index
        previous = (index > 0) ? index - 1: 0;
        next = (index == arrayLength-1)?arrayLength-1:index + 1;
        console.log('previous', aay[previous], 'next',aay[next]); //showing the next and previous ids
        psid = aay[previous]; nsid = aay[next];
        var pLink = '/post_1992_legislation/act-content/'+aay[previous];
        var nLink = '/post_1992_legislation/act-content/'+aay[next];
        $('#previous_content_act').attr('href', pLink);
        $('#next_content_act').attr('href', nLink);

    }
    //------------------------------------------end of the process for act 







    // DISPLAY PREAMBLE AND CONTENT IN TAB
    //Acts preamble
    // $('.act_preamble_link').click(function(e){
    //     e.preventDefault();
    //     var xhr = new XMLHttpRequest();
    //     var link = $(this).attr("href");
    //     xhr.open("GET", link, true);
    //     xhr.onreadystatechange = function receiveUpdate(e) {
    //         $("#act_content").html("");
    //         $("#view_acts_section").html("");
    //         $("#act_preamble").html(this.responseText);  

    //         $("#display_content").html("");
    //         $("#display_view_all_section").html("");
    //         $("#display_preamble").html(this.responseText);
    //     }
    //     xhr.send();
    // });

    //Acts content ---------- for the previous and next upon clicking
    // $('.act_content_link').click(function(e){
    //     e.preventDefault();
    //     var xhr = new XMLHttpRequest();
    //     var link = $(this).attr("href");        
    //     //set previous and next function
    //     gsid = $(this).attr("sid"); 
    //     setPrevNext(gsid);
        
    //     xhr.open("GET", link, true);

    //     xhr.onreadystatechange = function receiveUpdate(e) {
    //         $("#act_preamble").html("");
    //         $("#view_acts_section").html("");
    //         $("#act_content").html(this.responseText);
    //     }
    //     xhr.send();
    // });

    //EXPANDED VIEW
    $('.expanded_link').click(function(e){
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#acts_expanded_view").html(this.responseText);
        }
        xhr.send();
    });
    $('#expanded_link_toggle').click(function (e) {
        e.preventDefault();
        $('#tabs a[href="#expandedTab"]').tab('show');
        $('.tabPanedHide_expanded_view').show();
   });


    //GENERAL PREAMBLE LINK
    // General Preamble link: Click and go to Display Preamble at Content
    $('.preamble_link').click(function(e){
        e.preventDefault();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#display_content").html("");
            $("#display_view_all_section").html("");
            $("#display_preamble").html(this.responseText);
        }
        xhr.send();
    });

    //GENERAL CONTENT LINK
    // General content link: Click and go to Display section at Content
    $('.content_link').click(function(e){
        e.preventDefault();
        act_content_link_toggle();
        var xhr = new XMLHttpRequest();
        var link = $(this).attr("href");
        xhr.open("GET", link, true);
        xhr.onreadystatechange = function receiveUpdate(e) {
            $("#display_preamble").html("");
            $("#display_view_all_section").html("");
            $("#display_content").html(this.responseText);
            
        }
        xhr.send();
    });

    //GENERAL PREVIOUS AND NEXT SHOW/HIDE
    // hide next and previous for General preamble and content
    $(".preamble_link").click(function(){
        $(".show li").hide();
    });
    $(".content_link, .view_all_section_link").click(function(){
        $(".show li").show();
    });


    //click to scroll to top
    $("[data-scroll-to]").click(function() {
      var $this = $(this),
      $toElement      = $this.attr('data-scroll-to'),
      $focusElement   = $this.attr('data-scroll-focus'),
      $offset         = $this.attr('data-scroll-offset') * 1 || 0,
      $speed          = $this.attr('data-scroll-speed') * 1 || 500;

      $('html, body').animate({
        scrollTop: $($toElement).offset().top + $offset
      }, $speed);
  
      if ($focusElement) $($focusElement).focus();
    });


    // FILTERING FOR POST 1992 LEGISLATION
    /* For all Post 1992 Legislation */
    $('#allPost1992_filter').click(function(e){
        e.preventDefault();
        var year = $(".allPost1992_filter_year").val();
        var category = $("#filter_category").val();
        if(year === ""){
            year = 0;
        }
        if(category === ""){
             category = 0;
        }        
        window.location.href = '/post_1992_legislation/filter/'+year+'/'+category;
    });
    /* For the acts of parliament */
    $('#acts_of_parliament_filter').click(function(e){
        e.preventDefault();
        var year = $(".acts_of_parliament_filter_year").val();
        var id=1;
        var category = $(".act_filter_category").val();
        if(year === ""){
            year = 0;
        }
        if(category === ""){
             category = 0;
        }
        window.location.href = '/post_1992_legislation/acts_of_parliament/'+id+'/'+year+'/'+category;
    });
    /* For the regulation */
    $('#regulation_filter').click(function(e){
        e.preventDefault();
        var year = $(".regulation_filter_year").val();
        var category = $(".regulation_filter_category").val();
        if(year === ""){
            year = 0;
        }
        if(category === ""){
             category = 0;
        }
        window.location.href = '/post_1992_legislation/regulations/'+year+'/'+category;
    });
    /* For the amendment */
    $('#amendment_filter').click(function(e){
        e.preventDefault();
        var year = $(".amendment_filter_year").val();
        var category = $(".amendment_filter_category").val();
        if(year === ""){
            year = 0;
        }
        if(category === ""){
             category = 0;
        }
       window.location.href = '/post_1992_legislation/amendments/'+year+'/'+category;
    }); 
});

// FILTERING FOR LAW JUDGEMENTS
    /* For all law judgements */
    $('#all_judgement').click(function(e){
        e.preventDefault();
        var year = $(".judgement_filter_year").val();
        var category = $(".judgement_filter_category").val();
        if(year === ""){
            year = 0;
        }
        if(category === ""){
             category = 0;
        }
        window.location.href = '/judgement/Ghana/filter/'+year+'/'+category;
    });

// PAGINATION FOR THE ACCORDION
/* pagination plugin */
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: 7,
            showPrevNext: false,
            numbersPerPage: 1,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.pagination');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    var numPages = Math.ceil(numItems/perPage);

    var curr = 0;
    pager.data("curr",curr);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
    }
    
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
  
    if (settings.numbersPerPage>1) {
       $('.page_link').hide();
       $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
      pager.children().eq(0).addClass("active");
    
    children.hide();
    children.slice(0, perPage).show();
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    
    function goTo(page){
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        children.css('display','none').slice(startAt, endOn).show();
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
       
        if (settings.numbersPerPage>1) {
               $('.page_link').hide();
               $('.page_link').slice(page, settings.numbersPerPage+page).show();
        }
      
          pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};

/* end plugin */
$(document).ready(function(){ 
  $('#accordion').pageMe({pagerSelector:'#myPager',childSelector:'.panel',showPrevNext:true,hidePageNumbers:false,perPage:6});   
});

        




