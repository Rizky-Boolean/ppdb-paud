$(document).ready(function () {

    function footerPosition() {
        if ($('body').height() < $(window).height()) {
            $('#footer').removeClass('fixed-bottom');
            $('#footer').addClass('fixed-bottom');
        }else{
            $('#footer').removeClass('fixed-bottom');
        }
    }

    footerPosition();


    $('.nav-link').click(function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    // progress `step form
    $('.info-step:not(:first)').css('height', '0px');
    $('.info-step:not(:first)').css('overflow', 'hidden');
    $('.btn-step').click(function (e) {
        e.preventDefault();
        $('.info-step').css('height', '0px');
        $('.info-step').css('overflow', 'hidden');
        let tujuan = $(this).attr('data-target');
        $(tujuan).css('height', 'auto');
        $('html, body').animate({
            scrollTop: 0
        }, 500);
        footerPosition();
    });

    $('.btn-next').click(function (e) {
        e.preventDefault();
        let width = parseInt($('#progress').attr('aria-valuenow'));
        if( width < 100 && width >= 0){
            $('#progress').attr('aria-valuenow', width + 20);
            $('#progress').css('width', (width + 20) + "%");
        }
    });

    $('.btn-prev').click(function (e) {
        e.preventDefault();
        let width = parseInt($('#progress').attr('aria-valuenow'));
        if( width > 0 && width <= 100){
            $('#progress').attr('aria-valuenow', width - 20);
            $('#progress').css('width', (width - 20) + "%");
        }
    });

    // pindahan sekolah

    if ($('#opsi_pindahan').is(':checked')) {
        $('#opsi_baru').attr( 'href', "#info_pindahan");
        $('#opsi_pindahan').removeAttr( 'href');
    }

    $('#opsi_pindahan').click(function(){
        $('#opsi_baru').attr( 'href', "#info_pindahan");
        $('#opsi_pindahan').removeAttr( 'href');
    });

    $('#opsi_baru').click(function(){
        $('#opsi_pindahan').attr( 'href', "#info_pindahan");
        $('#opsi_baru').removeAttr( 'href');
    });





    function setActiveMenu() {
        if( $(document).scrollTop() >= 60 ){
            $('.navbar').addClass('fixed-top');
        }else{
            $('.navbar').removeClass('fixed-top');
        }

        if( $(document).scrollTop() < $('#profil').offset().top - 100 ){
            $('.nav-link').removeClass('active');
            $('.nav-link[href="#home"]').addClass('active');
        }

        if( $(document).scrollTop() >= $('#profil').offset().top - 100 ){
            $('.nav-link').removeClass('active');
            $('.nav-link[href="#profil"]').addClass('active');
        }

        if( $(document).scrollTop() >= $('#visi_misi').offset().top - 100 ){
            $('.nav-link').removeClass('active');
            $('.nav-link[href="#visi_misi"]').addClass('active');
          }

          if( $(document).scrollTop() >= $('#galeri').offset().top - 100 ){
              $('.nav-link').removeClass('active');
              $('.nav-link[href="#galeri"]').addClass('active');
            }

            if( $(document).scrollTop() >= $('#kontak').offset().top - 100 ){
                $('.nav-link').removeClass('active');
                $('.nav-link[href="#kontak"]').addClass('active');
              }
    }

    setActiveMenu();


    $(document).scroll(function () {
        setActiveMenu();
        if( $(document).scrollTop() >= $('#alur_daftar').offset().top - 100 ){
            $('.item-alur').addClass('show');
        }

        if( $(document).scrollTop() >= $('#visi_misi').offset().top - 100 ){
            $('.item-visi-misi-kiri').addClass('show');
            $('.item-visi-misi-kanan').addClass('show');
          }

          if( $(document).scrollTop() >= $('#galeri').offset().top - 100 ){
              $($('#galeri .galery-item').get()).each(function(i){
                  let item = $(this);
                  setTimeout(function(){
                      $(item).addClass('show');
                    }, i*350);
                });
            }

        });









});
