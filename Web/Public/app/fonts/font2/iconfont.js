;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-querenmima" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M823.743582 886.342804 823.743582 495.207545c0-3.387144-0.339738-6.089695-0.684592-8.138354L200.596156 487.069191c-0.233314 2.266623-0.340761 5.217838-0.340761 8.80555l0 390.467039L823.743582 886.34178M898.632199 961.130114 125.365754 961.130114c0 0 0-314.111001 0-465.25435 0-52.332902 22.776749-83.570347 74.889641-83.570347 148.870586 0 480.350163 0 626.64304 0 48.496527 0 71.733765 38.570457 71.733765 82.902128C898.632199 646.12679 898.632199 961.130114 898.632199 961.130114L898.632199 961.130114 898.632199 961.130114z"  ></path>' +
    '' +
    '<path d="M326.122057 439.384146l-74.888618 0L251.23344 242.791675c0-99.149161 80.526011-179.566702 179.782619-179.566702l161.842015 0c99.370195 0 179.908486 80.416518 179.908486 179.566702l0 179.671079-74.899874 0L697.866686 242.791675c0-57.753355-47.02092-104.666828-105.007589-104.666828L431.016059 138.124847c-57.861826 0-104.894002 46.913473-104.894002 104.666828L326.122057 439.384146"  ></path>' +
    '' +
    '<path d="M287.211862 350.624613c-19.85214 0-35.978423-16.140609-35.978423-36.005029 0-19.833721 16.126282-35.854603 35.978423-35.854603 19.84907 0 35.975353 16.020882 35.975353 35.854603C323.187215 334.484004 307.060933 350.624613 287.211862 350.624613L287.211862 350.624613zM511.994372 709.736527c-44.663222 0-80.978313-36.216853-80.978313-80.771605 0-44.655036 36.31509-80.861656 80.978313-80.861656 44.670385 0 80.863702 36.20662 80.863702 80.861656C592.858074 673.519674 556.664757 709.736527 511.994372 709.736527L511.994372 709.736527zM511.994372 835.482439c-24.808012 0-45.003983-20.068058-45.003983-44.878117L466.990389 646.906549c0-24.819269 20.194948-44.893466 45.003983-44.893466 24.815175 0 44.88835 20.074198 44.88835 44.893466l0 143.697773C556.882722 815.414381 536.809547 835.482439 511.994372 835.482439L511.994372 835.482439z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)