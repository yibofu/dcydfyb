;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-mima" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M521.939373 555.506886c-41.249473 0-74.679863 33.429367-74.679863 74.679863 0 29.720905 17.511839 55.17974 42.674938 67.188238l0 82.138742c0 17.659195 14.34573 32.005948 32.004925 32.005948 17.659195 0 32.005948-14.346753 32.005948-32.005948l0-82.140789c25.162076-12.009522 42.674938-37.46631 42.674938-67.187215C596.620259 588.936253 563.188846 555.506886 521.939373 555.506886zM831.296093 406.177859l-640.016629 0c-35.352159 0-64.011896 28.626991-64.011896 63.980173l0 426.676729c0 35.352159 28.659737 64.011896 64.011896 64.011896l640.016629 0c35.31839 0 63.978127-28.659737 63.978127-64.011896L895.27422 470.158033C895.275243 434.805874 866.615507 406.177859 831.296093 406.177859zM831.296093 854.160847c0 35.352159-7.321756 42.674938-42.674938 42.674938L233.919611 896.835785c-35.351136 0-42.640146-7.321756-42.640146-42.674938L191.279465 512.832971c0-35.352159 7.28901-42.674938 42.640146-42.674938l554.701544 0c35.352159 0 42.674938 7.321756 42.674938 42.674938L831.296093 854.160847zM208.867028 373.975437c17.768689 0 32.218796-14.161534 32.705889-31.812543l0.067538 0.004093c28.92375-122.258485 138.525983-213.338876 269.63095-213.338876 102.480023 0 191.682647 55.771211 239.628636 138.475841 4.988618 11.293207 16.279778 19.177781 29.41903 19.177781 17.758456 0 32.154327-14.395872 32.154327-32.154327 0-6.928806-2.199085-13.33982-5.925966-18.58938-58.985416-102.048187-168.918177-170.922834-295.276027-170.922834-165.111478 0-302.614156 113.305579-334.272179 268.980127-0.149403 0.641613-0.280386 1.289366-0.391926 1.945305-0.153496 0.778736-0.321318 1.551332-0.469698 2.332115l0.154519 0.00921c-0.100284 1.040702-0.154519 2.094708-0.154519 3.162016C176.136579 359.321692 190.790324 373.975437 208.867028 373.975437z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-yonghuming" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M1008.9312 963.184c-20.6912-72.7008-52.264-140.7968-98.344-202.4496-60.7616-81.296-139.6592-139.7968-240.8304-169.9728-0.8096-0.2416-1.528-0.7584-2.648-1.3296 2.9232-1.568 5.3872-2.8816 7.8432-4.208 117.9104-63.6512 183.632-187.6784 164.28-316.72-8.8672-59.1264-33.7216-111.8352-74.7488-157.2752C709.1488 49.9472 639.0672 13.6768 554.5312 2.704c-8.2448-1.0704-16.536-1.8112-24.8064-2.704-12.032 0-24.064 0-36.0976 0-1.4544 0.2688-2.9008 0.5984-4.3664 0.7968-16.3424 2.2096-32.9136 3.4272-48.9984 6.7456C271.4736 42.3552 153.2992 198.0768 186.3312 368.9616c18.6608 96.5424 75.3248 168.8256 165.1168 217.9008 1.4912 0.816 3.0016 1.6032 5.1104 2.728-1.8944 0.6432-2.9904 0.9808-4.0592 1.3856-21.1952 8.0304-42.9808 14.9136-63.4752 24.312-75.336 34.5504-134.4576 86.856-181.3632 151.8704-48.8656 67.7312-80.8496 142.3904-100.264 222.0576C4.6064 1000.6672 2.4784 1012.264 0 1024c341.4896 0 682.1264 0 1024 0C1018.9296 1003.3792 1014.6016 983.1104 1008.9312 963.184zM240.9504 312.768c0.1488-141.368 121.4-255.9232 270.8176-255.864 149.4464 0.0592 270.616 114.6928 270.6352 256.0368 0.0192 141.344-121.1296 256.0144-270.5664 256.096C362.2064 569.12 240.8016 454.2656 240.9504 312.768zM90.1488 967.1152c1.8208-10.6448 3.2416-21.08 5.424-31.3696 12.9488-61.0736 37.6832-117.3632 77.4544-167.2784 52.1728-65.48 121.4048-106.7104 204.8032-127.3136 52.7936-13.0416 106.5744-16.824 160.9488-14.6128 49.1648 1.9984 97.2608 9.4832 143.6016 25.5056 97.7744 33.8064 167.1392 96.7712 211.2512 185.2912 19.9168 39.9664 32.9392 81.9264 38.7648 125.8224 0.1616 1.2224 0.1712 2.4624 0.2688 3.9536C651.9792 967.1152 371.52 967.1152 90.1488 967.1152z"  ></path>' +
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