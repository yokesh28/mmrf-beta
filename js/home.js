//                __             __  _                               __ 
//    ____  ___  / /_____ ______/ /_(_)___  ____  _____  ____  ___  / /_
//   / __ \/ _ \/ __/ __ `/ ___/ __/ / __ \/ __ \/ ___/ / __ \/ _ \/ __/
//  / / / /  __/ /_/ /_/ / /__/ /_/ / /_/ / / / (__  ) / / / /  __/ /_  
// /_/ /_/\___/\__/\__,_/\___/\__/_/\____/_/ /_/____(_)_/ /_/\___/\__/  
//                                                                    
//                                                  
//  01101110 01100101 01110100 01100001 01100011 01110100 01101001 01101111 01101110 01110011 00101110 01101110 01100101 01110100 

 /*----------------------------------------------------------
 *  Script JS chargé uniquement sur la home
 *---------------------------------------------------------- */

// Variables générales
var pulseScrollTeaserRunning = false;

$(document).ready( function() {

  // ---------------------------------------------
  // Resize de la 1ère slide
  // ---------------------------------------------

  function homeImgResize() {
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var homeImg = $('#home img');

    homeImg.width(windowWidth);
    if(homeImg.width() < 939) {
      homeImg.width(939);
    }
  }

  homeImgResize();
  $(window).resize(function () {
    homeImgResize();
  });

  // ---------------------------------------------
  // Pulse Scroller
  // ---------------------------------------------

  function runPulseScrollTeaser() {
    $('#scrollTeaser').show();
    var pulseSpeed = 500;
    $('#scrollTeaser-down1').fadeIn(pulseSpeed).delay(0).fadeOut(pulseSpeed);
    $('#scrollTeaser-down2').delay(300).fadeIn(pulseSpeed).delay(0).fadeOut(pulseSpeed);
    $('#scrollTeaser-down3').delay(500).fadeIn(pulseSpeed).delay(0).fadeOut(pulseSpeed,runPulseScrollTeaser);
  }

  function startPulseScrollTeaser() {
    $('#scrollTeaser').show();
    runPulseScrollTeaser();
    return true;
  }

  // Init des flèches animées sur la home
  startPulseScrollTeaser();

  // ---------------------------------------------
  // Fonctions de navigation via le menu (One page nav + Scroll To)
  // ---------------------------------------------

  /**
   * Copyright (c) 2007-2012 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
   * Dual licensed under MIT and GPL.
   * @author Ariel Flesler
   * @version 1.4.3.1
   */
  ;(function($){var h=$.scrollTo=function(a,b,c){$(window).scrollTo(a,b,c)};h.defaults={axis:'xy',duration:parseFloat($.fn.jquery)>=1.3?0:1,limit:true};h.window=function(a){return $(window)._scrollable()};$.fn._scrollable=function(){return this.map(function(){var a=this,isWin=!a.nodeName||$.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!isWin)return a;var b=(a.contentWindow||a).document||a.ownerDocument||a;return/webkit/i.test(navigator.userAgent)||b.compatMode=='BackCompat'?b.body:b.documentElement})};$.fn.scrollTo=function(e,f,g){if(typeof f=='object'){g=f;f=0}if(typeof g=='function')g={onAfter:g};if(e=='max')e=9e9;g=$.extend({},h.defaults,g);f=f||g.duration;g.queue=g.queue&&g.axis.length>1;if(g.queue)f/=2;g.offset=both(g.offset);g.over=both(g.over);return this._scrollable().each(function(){if(e==null)return;var d=this,$elem=$(d),targ=e,toff,attr={},win=$elem.is('html,body');switch(typeof targ){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(targ)){targ=both(targ);break}targ=$(targ,this);if(!targ.length)return;case'object':if(targ.is||targ.style)toff=(targ=$(targ)).offset()}$.each(g.axis.split(''),function(i,a){var b=a=='x'?'Left':'Top',pos=b.toLowerCase(),key='scroll'+b,old=d[key],max=h.max(d,a);if(toff){attr[key]=toff[pos]+(win?0:old-$elem.offset()[pos]);if(g.margin){attr[key]-=parseInt(targ.css('margin'+b))||0;attr[key]-=parseInt(targ.css('border'+b+'Width'))||0}attr[key]+=g.offset[pos]||0;if(g.over[pos])attr[key]+=targ[a=='x'?'width':'height']()*g.over[pos]}else{var c=targ[pos];attr[key]=c.slice&&c.slice(-1)=='%'?parseFloat(c)/100*max:c}if(g.limit&&/^\d+$/.test(attr[key]))attr[key]=attr[key]<=0?0:Math.min(attr[key],max);if(!i&&g.queue){if(old!=attr[key])animate(g.onAfterFirst);delete attr[key]}});animate(g.onAfter);function animate(a){$elem.animate(attr,f,g.easing,a&&function(){a.call(this,e,g)})}}).end()};h.max=function(a,b){var c=b=='x'?'Width':'Height',scroll='scroll'+c;if(!$(a).is('html,body'))return a[scroll]-$(a)[c.toLowerCase()]();var d='client'+c,html=a.ownerDocument.documentElement,body=a.ownerDocument.body;return Math.max(html[scroll],body[scroll])-Math.min(html[d],body[d])};function both(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);
  
  //https://raw.github.com/davist11/jQuery-One-Page-Nav/master/jquery.nav.js
  (function($){$.fn.onePageNav=function(options){var opts=$.extend({},$.fn.onePageNav.defaults,options),onePageNav={};onePageNav.sections={};onePageNav.bindNav=function($el,$this,curClass,changeHash,scrollSpeed){var $par=$el.parent(),newLoc=$el.attr('href'),$doc=$(document);if(!$par.hasClass(curClass)){onePageNav.adjustNav($this,$par,curClass);$doc.unbind('.onePageNav');$.scrollTo(newLoc,scrollSpeed,{easing:'easeOutExpo',onAfter:function(){if(changeHash){window.location.hash=newLoc;}
  $doc.bind('scroll.onePageNav',function(){onePageNav.scrollChange($this,curClass);});}});}};onePageNav.adjustNav=function($this,$el,curClass){$this.find('.'+curClass).removeClass(curClass);$el.addClass(curClass);};onePageNav.getPositions=function($this){$this.find('a').each(function(){var linkHref=$(this).attr('href'),divPos=$(linkHref).offset(),topPos=divPos.top;onePageNav.sections[linkHref.substr(1)]=Math.round(topPos);});};onePageNav.getSection=function(windowPos){var returnValue='',windowHeight=Math.round($(window).height()/2);for(var section in onePageNav.sections){if((onePageNav.sections[section]-windowHeight)<windowPos){returnValue=section;}}
  return returnValue;};onePageNav.scrollChange=function($this,curClass){onePageNav.getPositions($this);var windowTop=$(window).scrollTop(),position=onePageNav.getSection(windowTop);if(position!==''){onePageNav.adjustNav($this,$this.find('a[href=#'+position+']').parent(),curClass);}};onePageNav.init=function($this,o){$this.find('a').bind('click',function(e){onePageNav.bindNav($(this),$this,o.currentClass,o.changeHash,o.scrollSpeed);e.preventDefault();});onePageNav.getPositions($this);var didScroll=false;$(document).bind('scroll.onePageNav',function(){didScroll=true;});setInterval(function(){if(didScroll){didScroll=false;onePageNav.scrollChange($this,o.currentClass);}},250);};return this.each(function(){var $this=$(this),o=$.meta?$.extend({},opts,$this.data()):opts;onePageNav.init($this,o);});};$.fn.onePageNav.defaults={currentClass:'current',changeHash:false,scrollSpeed:840};})(jQuery);
  
  $('#primary ul').onePageNav({
    scrollSpeed: 250
  });

  // ---------------------------------------------
  // Gestion du Parallax Scrolling sur les images des diapos
  // ---------------------------------------------

  /* Auto Instantiate */

  $.fn.Instantiate = function (settings) {
    var config = {};
    if (settings) $.extend(config, settings);
    this.each(function () {
      var $self = $(this),
          $controller = $self.attr('data-controller');
      if ($self[$controller]) $self[$controller]();
    });
  }
    
  $.Body = $('body');
  $.Window = $(window);
  $.Scroll = ($.browser.mozilla || $.browser.msie) ? $('html') : $.Body;
  $.Mobile = ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)));
  if ($.Mobile) {
    $.Body.addClass('mobile');
  }
  $('[data-controller]').Instantiate();

  /* Events */
  $.Events = {
    SECTION_ENTER: 'sectionEnter',
    SCROLL_TO: 'scrollTo',
    SCROLL: 'windowScroll',
    SCROLL_ENTER: 'windowScrollEnter',
    SCROLL_LEAVE: 'windwScrollLeave'
  } // Events  
  $.Views = {} // Views 

  /* Scrollable */

  $.fn.Scrollable = function (settings) {
    var config = {
      threshold: -100,
      offset_scroll: 6,
      offset_intertia: .2
    };
    if (settings) $.extend(config, settings);
    this.each(function () {
      var $self = $(this),
          $id = $self.attr('id');
      config.threshold = 0
      if ($.Mobile) {
        $self.css({
          backgroundAttachment: 'scroll'
        })
      } else {
        $.Window.bind('scroll', function (e) {
          if ($.inview($self, {
            threshold: config.threshold
          })) {
            if (!$self.hasClass('_active')) {
              $self.addClass('_active');
              $self.triggerHandler($.Events.SCROLL_ENTER);
            }
            _scroll_background();
            $self.triggerHandler($.Events.SCROLL, $.distancefromfold($self, {
              threshold: config.threshold
            }) - config.threshold)
          } else {
            if ($self.hasClass('_active')) {
              $self.removeClass('_active');
              $self.triggerHandler($.Events.SCROLL_LEAVE);
            }
          }
        })
      }

      function _scroll_background() {
        var _x = '50% '
        var _z = '40% '
        var bpos = _x + (-($.distancefromfold($self, {
          threshold: config.threshold
        }) - config.threshold) * config.offset_intertia) + 'px';
        $self.css({
          'backgroundPosition': bpos
        })
      }
    });
    return this;
  }

  $('.slide-home').Scrollable();

  /* Worker */
  $.distancefromfold = function ($element, settings) {
    if (settings.container === undefined || settings.container === window) {
      var fold = $(window).height() + $(window).scrollTop();
    } else {
      var fold = $(settings.container).offset().top + $(settings.container).height();
    }
    return (fold + settings.threshold) - $element.offset().top;
  };
  $.belowthefold = function ($element, settings) {
    if (settings.container === undefined || settings.container === window) {
      var fold = $(window).height() + $(window).scrollTop();
    } else {
      var fold = $(settings.container).offset().top + $(settings.container).height();
    }
    return fold <= $element.offset().top - settings.threshold;
  };
  $.abovethetop = function ($element, settings) {
    if (settings.container === undefined || settings.container === window) {
      var fold = $(window).scrollTop();
    } else {
      var fold = $(settings.container).offset().top;
    }
    return fold >= $element.offset().top + settings.threshold + $element.height();
  };
  $.inview = function ($element, settings) {
    return ($.abovethetop($element, settings) != true && $.belowthefold($element, settings) != true)
  };

  // ---------------------------------------------
  // Gestion du Parallax Scrolling sur les blocs, fleuve, menu, footer, …
  // ---------------------------------------------
  var s = skrollr.init({
    beforerender: function(data) {},
    render: function() {},
      easing: {
        WTF: Math.random,
        inverted: function(p) {
          return 1-p;
        }
      }
  });


  // ---------------------------------------------
  // Modif du type de background size quand le ratio < 4/3
  // ---------------------------------------------

  function backgroundResize() {
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var ratio = windowWidth / windowHeight;
    // console.log("Ratio = " + ratio);
    // console.log("windowWidth = " + windowWidth);

    if ( (ratio < 1.7) && (windowWidth < 1900) ) {
      // $(".slide-home").css("background-attachment","scroll");
      $(".slide-home").css("background-size","auto");
    } else {
      // $(".slide-home").css("background-attachment","fixed");
      $(".slide-home").css("background-size","cover");
    }
  }

  backgroundResize();
  $(window).resize(function () {
    backgroundResize();
  });

  // ---------------------------------------------
  // Actus de la home
  // ---------------------------------------------
  
  $('#fancyNews').fancyNews({slideTime:5000, maxWords:50});
  $("#fancyNews").hide();
  $("#fn-newsFooterBar").hide();    
  
  // ---------------------------------------------
  // Fonctions pour masquer les légendes
  // ---------------------------------------------

  $(".show_hide").show();
  $('.show_hide').click(function(){
    $("#fancyNews").slideToggle();
    $("#fn-newsFooterBar").slideToggle();
  });   
    
  $('.cacher-legendes').click(function(){
    $(".bloc-description").css('display','none');
    $(".bloc-description").css('visibility','hidden');
    $(".bloc-description").css('margin-right','-99999px');
    $(".bloc-description").css('z-index','-99999');
    $("#home-legende-on a").removeClass('active');
    $("#home-legende-off a").addClass('active'); 
  });
    
  $('.montrer-legendes').click(function(){
    $(".bloc-description").css('display','block');
    $(".bloc-description").css('visibility','visible');
    $(".bloc-description").css('margin-right','0');
    $(".bloc-description").css('z-index','99999');
    $("#home-legende-off a").removeClass('active');
    $("#home-legende-on a").addClass('active');    
  });
  
  // ---------------------------------------------
  // Tooltip
  // ---------------------------------------------

  $('.survol-tooltip').tooltip({
    track: true, 
    delay: 0,
    fade : 500
  });

  // ---------------------------------------------
  // Player audio
  // ---------------------------------------------
  
  $('audio,video').mediaelementplayer({
    // Chemin vers plugins Flash et Silverlight
    pluginPath: '/wp-content/themes/netactions/mediaplayer/',
    autosizeProgress:false
  });

  // ---------------------------------------------
  // Fin du chargement de la page : on affiche les éléments masqués par défaut
  // ---------------------------------------------
  $('.bloc-description').show();
  $('#bloc-onoff').css('display','table');
  $('#bloc-actus').show();
  $('#primary').css('display', 'block');

  // ---------------------------------------------
  // On charge le preloader sur les images
  // ---------------------------------------------
  $("#home-diapos").preloader();


});