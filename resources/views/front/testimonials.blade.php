
  @php
      
  @endphp
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
  
  <style type="text/css">
    .no-fouc {
      display: none;
    }
  </style>

  <style>
    /* Slick Slider */

    section {
      width: 100%;
      margin: 0 auto;
    }

    .simple blockquote {
      width: 100%;
      margin: 0px;
      height: 100%;
      display: block;
      padding-top: 100px;
      padding-bottom: 100px;
      min-height: 400px;
    }

    .simple blockquote#agedcare {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/henrycaville.jpg') }}") repeat scroll center center / cover;
    }

    .simple blockquote#breathe {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/aryana.jpg') }}") repeat scroll center center / cover;
    }
    .simple blockquote#test {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/elonmusk.jpg') }}") repeat scroll center center / cover;
    }

    .simple blockquote#ensohomes {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/dwayne.jpg') }}") repeat scroll center center / cover;
    }

    .simple blockquote p {
      font-family: Baskerville;
      color: #ffffff;
      padding: 25px;
      font-size: 35px;
      font-style: italic;
      text-align: center;
    }

    .simple cite {
      font-family: ProximaNova, Helvetica Neue;
      font-weight: bold;
      letter-spacing: 3px;
      font-style: normal;
      font-size: 13px;
      text-align: center;
      color: #b5b5b5;
      display: block;
      text-transform: uppercase;
    }

    .simple .play-button {
      width: 70px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
      cursor: pointer;
    }

    .slick-dots {
      bottom: -10px;
    }

    .slick-dots li {
      width: 80px;
      background: #ffffff;
      height: 80px;
      border-radius: 100px;
      text-align: center;
    }

    .slick-dots li button {
      height: 125px;
      width: 91px;
      opacity: 0.8;
      margin: 0;
    }

    .slick-dots li:nth-child(1) button {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/henryButton.png') }}") no-repeat scroll center center / 91px 125px;
    }

    .slick-dots li:nth-child(2) button {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/dwayneButton.png') }}") no-repeat scroll center top / 91px 125px;
    }

    .slick-dots li:nth-child(3) button {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/aryanaButton.png') }}") no-repeat scroll center top / 91px 125px;
    }
    .slick-dots li:nth-child(4) button {
      background: rgba(0, 0, 0, 0) url("{{ asset('front/img/elonButton.png') }}") no-repeat scroll center top / 91px 125px;
    }

    .slick-dots li.slick-active button::before {
      opacity: 1;
    }

    .slick-dots li button::before {
      content: "";
    }


    /* A custom cursor to let folks know they can drag things */

    .wistia_responsive_wrapper {
      visibility: hidden;
      height: 100%;
      left: 0;
      position: absolute;
      top: 0;
      width: 100%;
      transition: opacity 0.6s ease;
      opacity: 0;
    }

    .wistia_responsive_wrapper.playing {
      visibility: inherit;
      opacity: 1;
      z-index: 99999;
    }
    .panel{
        font-size: 19px
    }
  </style>
  <div class="bg">
    </bg>

    <section role="complementary" id="testimonial-videos" class="simple quotes no-fouc">
      <blockquote id="agedcare" class="current">
        <p class="text-md panel">“I'm impressed with GLOFEX's fast and reliable trades. Their team always provides me with the best investment options.”</p>
        <cite>Henry Caville, Hollywood Celebrity</cite>
        <img src="https://kingkong.com.au/wp-content/uploads/2017/03/play-button.png" class="play-button">

        <div class="wistia_responsive_wrapper"><iframe
            src="https://fast.wistia.net/embed/iframe/f1j7gsjv9x?videoFoam=true" title="IMG_1736 Video"
            allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed"
            allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%"
            height="100%"></iframe></div>

      </blockquote>
      <blockquote id="ensohomes">
        <p class="text-md panel">“GLOFEX's investment strategies are top-notch. They helped me grow my portfolio in just a few months.”
        </p>
        <cite>Dwayne Johnson, Hollywood Celebrity</cite>
        <img src="https://kingkong.com.au/wp-content/uploads/2017/03/play-button.png" class="play-button">


        <div class="wistia_responsive_wrapper"><iframe
           src="https://fast.wistia.net/embed/iframe/y6vytan0oj?videoFoam=true" title="IMG_1735 Video" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed"
            name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen
            msallowfullscreen width="100%" height="100%"></iframe></div>

      </blockquote>
      <blockquote id="breathe">
        <p class="text-md panel">“As a professional investor, I was skeptical at first. But GLOFEX's knowledgeable staff made me feel comfortable and helped me make sound investment decisions.”.</p>
        <cite>Ariana Grande, Celebrity Artiste</cite>
        <img src="https://kingkong.com.au/wp-content/uploads/2017/03/play-button.png" class="play-button">

        <div class="wistia_responsive_wrapper"><iframe
            src="https://fast.wistia.net/embed/iframe/0c2ufff92v?videoFoam=true" title="IMG_1738 Video"
            allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed"
            allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%"
            height="100%"></iframe></div>

      </blockquote>
      <blockquote id="test">
        <p class="text-md panel">“GLOFEX's customer support is fantastic. They are always available to answer any questions or concerns I have, and their expertise in investment and trading is evident.”.</p>
        <cite>Elon Musk, CEO Tesla Motors</cite>
        <img src="https://kingkong.com.au/wp-content/uploads/2017/03/play-button.png" class="play-button">
      
        <div class="wistia_responsive_wrapper"><iframe src="https://fast.wistia.net/embed/iframe/0zobsdlwe8?videoFoam=true" title="IMG_1737 Video" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed"
            name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen
            width="100%" height="100%"></iframe></div>
      
      </blockquote>

    </section>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
<script>
  /*
This is a super simple slider using Ken Wheeler's "Slick Slider." 
It's responsive, swipable and light weight.

Visit Ken's site for the source code and docs. 

Source: https://kenwheeler.github.io/slick/

*/


  /*
  The following executes Ken's Slick Slider with several options.
  */

  $('.quotes').slick({
    dots: true,
    infinite: true,
    autoplay: false,
    speed: 800,
    slidesToShow: 1,
    adaptiveHeight: false,
    draggable: false,
    fade: true,
  });


  /*
  To prevent the flashing of unstyled content (FOUC) I created a class ".no-fouc"
  which hides the slider.  When everything is ready to roll, I simply remove the
  .no-fouc class from the slider section using the script below.  I placed the CSS snippet in the head of the HTML
  page so that it's loaded before other things for obvious reasons.  What about folks with JS turned off?  
  Well, I don't worry about them too much anymore.  Oh my.  I feel the heat from the flames already.  :) 
  */

  $(document).ready(function () {
    $('.no-fouc').removeClass('no-fouc');
  });


  // on click of the play button show the video
  $('.play-button').click(function () {
    $('.wistia_responsive_wrapper').removeClass('playing');
    $(this).next().addClass('playing');
    $('.slick-dots')
  });

  $('.slick-dots').click(function () {
    $('.wistia_responsive_wrapper').removeClass('playing');
  });

  /*
  $('.slick-dots').click( function() {
    $(this).next().css('visibility', 'inherit');
  });
  */


</script>
  
