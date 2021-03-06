<nav id="mh1">
  <a id="mh1-title" href="http://ourcomments.org/psyblog/">OurComments on Psychology </a>
      <div id="mh1-hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <nav id="mh1-menus">
      <nav id="mh1-menu">
        <ul>
          <li>
            <a href="http://ourcomments.org/psyblog/about/"
               title="Read about OurComments on Psychology"
               >
              About
              <span class="mh1-menu-details"> - Read about OurComments on Psychology</span>
            </a>
          </li>
          <li>
  <a href="http://ourcomments.org/psyblog/site-list/"
               title="Blogs in this site">
              Blogs
              <span class="mh1-menu-details"> - Get a list of blogs here</span>
            </a>
          </li>
        </ul>
      </nav>
      <nav id="mh1-search">
        <ul>
          <li>
            <span id="mh1-search-psyblog-span">
              <input type="text"
                     id="mh1-search-psyblog"
                     placeholder="Search all blogs"
                     />
              <a href="http://ourcomments.org/psyblog/about/"
                 class="mh1-help"
                 title="Help for Search OurComments on Psychology"
                 >?</a>
              <span class="mh1-menu-details"> - Search in our reference database with psychology related links.</span>
            </span>
          </li>
          <li>
            <span id="mh1-zotero-search">
              <input type="text" size="10" id="mh1-search-zotero"
                     placeholder="Search Zotero - From Some Psychologists" />
              <a href="http://ourcomments.org/psyblog/about-the-zotero-library-p/"
                 class="mh1-help"
     title="Help for Search Zotero"
     >?</a>
              <span class="mh1-menu-details"> - Search in our reference database with psychology related links.</span>
            </span>
          </li>
        </ul>
      </nav>
      </nav>

<?php
   /* You may use PHP to get content! Your context is add_action('wp_footer', ..., 1001) */
   // echo "Some text from PHP echo!";
?>
      <div style="clear:both"></div>
</nav>

<style type="text/css">

/* Tip: Use !important on all values - except those that you want to change with javascript. */

#mh1 {
    position:absolute;
    z-index: 400 !important; /* wp toolbar 500 */
    top:0;
    left:0!important;
    right:0 ! important;
    display: block !important;
    background:orange!important;
    padding: 6px!important;
    font-size: 14px !important;
    font-familiy: Arial !important;
}
#mh1 * { box-sizing: border-box !important; }

#mh1 ::-webkit-input-placeholder { /* WebKit browsers */
    color:    #ccc!important;
}
#mh1 ::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    #ccc!important;
}
#mh1 :-ms-input-placeholder { /* Internet Explorer 10+ */
    color:    #ccc!important;
}

#mh1 a {
    color: #AC0404!important;
    text-decoration: none!important;
}
#mh1 a:hover {
    color: #6D1D1D!important;
}
#mh1 a#mh1-title {
    font-weight: bold!important;
    color: #930!important;
    text-shadow: 1px 1px 1px rgba(1, 19, 46, 0.47)!important;
}
#mh1 a#mh1-title:hover {
    transition: all 0.5s ease-in-out;
    text-decoration: none!important;
    color: #FCFC16!important;
    text-shadow: 1px 1px 1px rgba(1, 19, 46, 0.37)!important;
}
#mh1 a.mh1-help {
    background-color:#E49403!important;
    border-radius: 6px!important;
    padding-left:3px!important;
    padding-right:3px!important;
    color: #eee!important;
}
#mh1 a.mh1-help:hover {
    text-decoration: none!important;
    color: black!important;
}

/* Mobile style menu icon */
#mh1 #mh1-hamburger {
    float: right !important;
    margin: 0 !important;
    margin-right: 4px !important;
    border: 1px solid #DD9C70 !important;
    border-radius: 3px 3px 3px 3px !important;
    cursor: pointer !important;
    display: inline-block !important;
    height: 24px !important;
    padding: 3px 4px 3px !important;
    position: relative !important;
    width: 25px !important;
    background: #D18552 !important;
    background: linear-gradient(to bottom, #B28645 0%,#A54040 100%) !important;
}

/* The white stripes in the hamburger button */
#mh1 #mh1-hamburger div {
    background-color: #FDE2AF !important;
    border: 1px solid #eee !important;
    border-radius: 2px 2px 2px 2px !important;
    height: 2px !important;
    margin-top: 3px !important;
    width: 90% !important;
}

#mh1 ul {
    margin: 0 !important;
    padding: 0 !important;
    display: inline-block !important;
    list-style-position: outside !important;
    list-style-type: none !important;
    list-style-image: none !important;
}
#mh1 ul li {
    padding: 0 !important;
    margin: 0 !important;
}
#mh1 ul li > * { display: inline-block !important; }

/* #mh1 * { z-index: inherit !important; } */

#mh1 #mh1-menus {
    float: right !important;
    transition: all 0.7s ease-in-out !important;
    z-index: 400 !important;
}

#mh1 input[type="text"] {
    display: inline-block !important;
    margin: 0 !important;
    padding: 2px!important;
    padding-top: 0px!important;
    padding-bottom: 0px!important;
    border-width: 1px!important;
    border-radius: 5px!important;
    background-color: #FDE2AF!important;
}
#mh1 input[type="text"]:hover {
    background-color: rgb(255, 255, 255) !important;
}
#mh1 input[type="text"]:focus {
    background-color: rgb(255, 255, 255) !important;
}


/* Screen width adjustments */
@media screen and ( min-width: 700px ) {
    #mh1 #mh1-hamburger { display: none !important; }
    #mh1 #mh1-menus {
        position: static !important;
        display: inline-block !important;
        overflow: visible !important;
        width: 460px !important;
        float: right !important;
    }
    #mh1 #mh1-menu {
        display: inline-block !important;
        position: static !important;
        background-color: transparent !important;
        width: 120px !important;
    }
    #mh1 #mh1-search {
        display: inline-block;
        position: static;
        margin-right: 8px !important;
        background-color: transparent !important;
        width: 300px !important;
        float: align: right;
    }
    #mh1 ul { display: inline-block !important; }
    #mh1 ul li { display: inline-block !important; border: none !important; }
    #mh1 ul li > * { display: inline-block !important; padding: 0 !important; margin-left: 20px !important; }
    #mh1 #mh1-search { float: right !important; }

    #mh1 .mh1-menu-details { display: none !important; }

    #mh1 input[type="text"] {
        width: 110px!important;
    }
    #mh1 input[type="text"]:focus {
        transition: all 0.7s ease-in-out !important;
        width: 280px !important;
        padding: 4px !important;
    }
    #mh1 input[type="text"]#mh1-search-psyblog:focus {
        background-position: right !important;
        background-repeat: no-repeat !important;
        background-image: url(http://www.google.com/cse/intl/en/images/google_custom_search_watermark.gif);
    }
    #mh1 input[type="text"]:hover {
        transition: all 0.5s ease-in-out !important;
    }
}
@media screen and ( max-width: 699px ) {
    #mh1 #mh1-hamburger { display: inline-block !important; }
    #mh1 #mh1-menus {
        position: absolute;
        display: none;
        height: 0;
        overflow: hidden !important;
        float: none !important;
        left: 0 !important;
        right: 0 !important;
        border: 2px solid white;
        border-radius: 30px !important;
        border-top-right-radius: 0px !important;
    }
    #mh1 ul {
        display: block !important;
        margin-left: 0 !important;
        background-color: orange !important;
        left: 0 !important;
        right: 0 !important;
    }
    #mh1 #mh1-menu a:hover {
        background-color: yellow !important;
    }
    #mh1 ul { display: block !important; }
    #mh1 ul li { display: block; border-bottom: 1px solid white !important; }
    #mh1 ul li > * { display: block !important; padding: 20px !important; padding-left: 20px !important; margin: 0 !important; }
    #mh1 #mh1-search { float: none !important; }

    #mh1 .mh1-menu-details { display: inline-block; color: #666; }

    #mh1 input[type="text"] {
        width: 100% !important;
        display: block !important;
        padding: 4px !important;
    }
}

</style>

<script type="text/javascript">
(function() {
    var ham = document.getElementById("mh1-hamburger");
    var menus = document.getElementById("mh1-menus");
    var banner = document.getElementById("mh1");
    var html = document.getElementsByTagName("html")[0];
    var wpadminbar = document.getElementById("wpadminbar");
    ham.addEventListener("click", function() {
        console.log(menus.style.display, menus.style.height);
        var menusShown = false;
        var menusCStyle = window.getComputedStyle(menus);
        var menusHeight = menusCStyle.height;
        console.log("---- menusHeight", menusHeight);
        if (0 != parseInt(menusHeight)) menusShown = true;
        if (!menusShown) {
            var bannerPosition = banner.style.position; // "absolute";
            if ("" == bannerPosition) {
                menus.style.position = "absolute";
            } else {
                menus.style.position = bannerPosition;
            }
            console.log("banner.style.position", banner.style.position);
            console.log("menus.style.position", menus.style.position);
            var bannerBR = banner.getBoundingClientRect();
            var menuTop = bannerBR.bottom;
            console.log("bannerBR.bottom", bannerBR.bottom, "bannerBR.height", bannerBR.height);
            menus.style.top = menuTop + "px";
            console.log("menus.style.top", menus.style.top);
            // Get height:        
            menus.style.visibility = "hidden";
            menus.style.display = "block";
            menus.style.height = "auto";
            var mr = menus.getBoundingClientRect();
            menus.style.visibility = null;
            var newHeight = mr.height;
            console.log("New height:", newHeight);
            if ("absolute" == menus.style.position) {
                var htmlMTopBcr = html.getBoundingClientRect().top;
                console.log("htmlMarginTop from bcr", htmlMTopBcr);
                var htmlMTopGcs = window.getComputedStyle(html).marginTop;
                console.log("htmlMarginTop from gcs", htmlMTopGcs);
                console.log("mr", mr, mr.top);
                console.log("window.scrollY", window.scrollY);
                menuTop += window.scrollY;
                // Fix-me: For some reason I do not understand at all
                // I have to subtract the height of wpadminbar here.
                var wpBR = wpadminbar.getBoundingClientRect();
                menuTop -= wpBR.height;
                menus.style.top = menuTop + "px";
                console.log("menus.style.top", menus.style.top);
                // Tell we want the position again:
                mr = menus.getBoundingClientRect();
                // Fix-me: Did not help since getBoundingClientRect
                // does not wait for display update.
            }
            // Unfortunately this prevents transition,
            // but we can work around it by:
            // 1. Set a height:
            menus.style.height = "1px";
            // 2. Set the real height in a timeout:
            setTimeout(function() {
                menus.style.height = newHeight+"px";
                menus.style.borderWidth = "2px";
            }, 10);
        } else {
            menus.style.height = "0";
            menus.style.borderWidth = "0";
        }
    });
})();
(function() {
    var menus = document.getElementById("mh1-menus");

    var zField = document.getElementById("mh1-search-zotero");
    zField.addEventListener("focus", function(ev) {
        menus.style.height = "auto";
    });
    zField.addEventListener("keyup", function(ev) {
        if (13 == ev.keyCode) {
            var url = "http://ourcomments.org/psych/zfsp.html?q="+encodeURIComponent(zField.value);
            // window.location.href = url;
            var eA = document.createElement("a");
            eA.setAttribute("href", url);
            eA.setAttribute("target", "_blank");
            eA.dispatchEvent(new MouseEvent("click"));
        }
    });
    var pField = document.getElementById("mh1-search-psyblog");
    pField.addEventListener("focus", function(ev) {
        menus.style.height = "auto";
    });
    pField.addEventListener("keyup", function(ev) {
        if (13 == ev.keyCode) {
            var url = "http://dl.dropboxusercontent.com/u/848981/it/cw/cse-psyblog.html?q="
                +encodeURIComponent(pField.value);
            // window.location.href = url;
            var eA = document.createElement("a");
            eA.setAttribute("href", url);
            eA.setAttribute("target", "_blank");
            eA.dispatchEvent(new MouseEvent("click"));
        } else {
            var len = pField.value.length;
            if (0 == len) {
                pField.style.backgroundImage = null;
            } else {
                pField.style.backgroundImage = "none";
            }
        }
    });
})();

(function() {
    // You probably do not want to change this function, but just in
    // case I leave it here right under your eyes.. ;-)

    function addPixels(oldPx, addPx) {
        var iOld = parseInt(oldPx);
        if (isNaN(iOld)) iOld = 0;
        var iAdd = parseInt(addPx);
        if (isNaN(iAdd)) iAdd = 0;
        return (iOld+iAdd)+"px";
    }
    var eltStyle = document.createElement("style");
    eltStyle.setAttribute("type", "text/css");
    eltStyle.appendChild(document.createTextNode("dummy"));
    document.getElementsByTagName("head")[0].appendChild(eltStyle);
    function setHtmlMarginTop(marg) {
        // We need to add a style element for the html margin-top
        // since it is set with !important and rules. Even direct
        // element styles with important are then overriden.
        eltStyle.replaceChild(
            document.createTextNode("html {margin-top:"+marg+"!important;}"),
            eltStyle.firstChild
        );
    }
    var eMh1 = document.getElementById("mh1");
    var mh1Height;
    var eltAdminFake;
    if (!document.body.classList.contains("admin-bar")) {
        // Looks like themes are looking for .admin-bar in body and then
        // #wpadminbar. Let us for the moment fake those if they are not there.
        console.log("did not find admin-bar");
        document.body.classList.add("admin-bar");
        eltAdminFake = document.createElement("div");
        eltAdminFake.setAttribute("id", "wpadminbar");
        var s = eltAdminFake.style;
        // Seems like we now must make us at least 32px tall (at least
        // for some themes):
        if (parseInt(mh1Height) < 32) {
            mh1Height = "32px";
            mh1.css("height", mh1Height);
        }
        s.height = mh1Height;
        s.minHeight = mh1Height;
        s.position = "fixed";
        s.top = "-"+mh1Height;
        s.left = "0";
        // Try to keep it small:
        s.padding = "0";
        s.margin = "0";
        s.fontSize = "8px";
        s.lineHeight = "10px";
        document.body.appendChild(eltAdminFake);
    } 
    var eAdmin = document.getElementById("wpadminbar");
    var eHtml = document.getElementsByTagName("html")[0];
    function doResizing() {
        console.log("doResizing ----------------");
        var rMh1 = eMh1.getBoundingClientRect();
        function adjustHtmlMarginTop() {
            // mh1Height = jqMh1.outerHeight();
            mh1Height = rMh1.height;
            console.log("mh1Height", mh1Height);
            var adminHeight = 0;
            if (!eltAdminFake) adminHeight = window.getComputedStyle(eAdmin).height;
            console.log("adminHeight", adminHeight);
            var newHtmlMarginTop = addPixels(adminHeight, mh1Height);
            console.log("newHtmlMarginTop", newHtmlMarginTop);
            console.log("adminHeight", adminHeight);
            eMh1.style.top = adminHeight;
            console.log(eMh1.style.top, eMh1);
            setHtmlMarginTop(newHtmlMarginTop);
        }
        adjustHtmlMarginTop();
        var htmlWidth = eHtml.clientWidth;
        console.log("htmlWidth", htmlWidth);
        if (htmlWidth > 699) {
        var menus = document.getElementById("mh1-menus");
        menus.style.height = null;
        menus.style.display = null;
        menus.style.position = null;
    }
    }

    // https://developer.mozilla.org/en-US/docs/Web/Reference/Events/resize
    var optimizedResize = (function() {

        var callbacks = [],
        changed = false,
        running = false;                     

        // fired on resize event
        function resize() {
            if (!running) {
                changed = true;
                loop();
            }
        }

        // resource conscious callback loop
        function loop() {
            if (!changed) {     
                running = false;       
            }
            else {
                changed = false;
                running = true;            

                callbacks.forEach(function(callback) {
                    callback();
                });

                window.requestAnimationFrame(loop);
            }
        }

        // adds callback to loop
        function addCallback(callback) {
            if (callback) {
                callbacks.push(callback);
            }
        }

        return {
            // initalize resize event listener
            init: function(callback) {
                if (window.requestAnimationFrame) { 
                    window.addEventListener('resize', resize);
                    addCallback(callback);
                }
            },

            // public method to add additional callback
            add: function(callback) {
                addCallback(callback);
            },
            fakeResize: function() { resize(); }
        }
    })();

    // start resizing process
    optimizedResize.init(
        doResizing
    );
    // Fix-me: This one does not work correctly - there is a 1px
    // glitch. Tried a fake resize event. Did not correct it, but
    // needed anyway.
    // 
    // adjustHtmlMarginTop();
    optimizedResize.fakeResize();

})();
</script>
