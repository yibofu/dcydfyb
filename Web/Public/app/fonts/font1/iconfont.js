;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-duanxin" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M957.164291 213.276455c-0.116657-0.409322 0.116657-0.880043 0-1.319042-0.116657-0.174985-0.234337-0.234337-0.234337-0.352017-1.87572-4.631484-4.924149-8.29492-8.734942-11.286044-0.877997-0.644683-1.641383-1.14201-2.578732-1.729387-4.104481-2.550079-8.619308-4.337795-13.777795-4.337795L91.360266 194.252169c-5.218862 0-9.733689 1.787716-13.837146 4.337795-0.937348 0.587378-1.75804 1.084705-2.578732 1.729387-3.871167 2.991124-6.918573 6.65456-8.734942 11.286044-0.058328 0.11768-0.176009 0.176009-0.234337 0.352017-0.174985 0.438998 0.058328 0.908696-0.058328 1.319042-0.821715 2.579755-1.641383 5.160533-1.641383 8.002254l0 578.064648c0 14.94948 12.07706 26.997887 27.085892 26.997887l420.238087 0 420.240133 0c14.890128 0 26.967188-12.047384 26.967188-26.997887L958.806697 221.278709C958.805674 218.436988 958.044334 215.856209 957.164291 213.276455M858.144066 248.276596 606.926488 461.240943l0 0c0 0.059352 0 0.059352 0 0.059352l-95.327112 80.786954-346.604042-293.810652L858.144066 248.276596zM511.598352 772.316817 118.327454 772.316817 118.327454 279.554974l241.309928 204.608028L208.378399 654.649907c-9.907651 11.169387-8.909927 28.229948 2.287089 38.137599 5.15951 4.544503 11.55108 6.830569 17.941628 6.830569 7.444553 0 14.8318-3.107781 20.166295-9.116635l152.138002-171.395602 93.217055 79.000262c5.04183 4.249791 11.19804 6.418176 17.470907 6.418176 6.213515 0 12.370749-2.168386 17.412578-6.418176l93.158726-78.941933 152.079674 171.337273c5.392824 6.008854 12.779048 9.116635 20.283975 9.116635 6.331195 0 12.780071-2.285043 17.939581-6.830569 11.079336-9.907651 12.07706-26.968212 2.228761-38.137599L663.384337 484.22133l241.368256-204.666356 0 492.761843L511.598352 772.316817z"  ></path>' +
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