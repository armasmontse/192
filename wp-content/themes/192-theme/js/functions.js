/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	__webpack_require__(2);
	
	__webpack_require__(3);
	
	__webpack_require__(4);
	
	// import './modal-newsletter'
	// import './video'
	// import './scrollit'
	
	// w.load(() => {
	//     //Se ocupa para el wysiwig, si el p tiene una imagen se le agrega la clase single__content-image-image
	//     $('p:has(img)').addClass('single__content-image');
	// });
	
	// import './masonry'
	(0, _constants.$)(document).ready(function () {
	
	    (0, _constants.$)('.load-ajax-posts').click(function () {
	
	        var $this = (0, _constants.$)(this);
	        var $parent = $this.parent();
	        var $add_box = (0, _constants.$)('.add-ajax-posts');
	
	        var category_id = window.category_id != null ? category_id : '';
	
	        _constants.$.post(cltvo_js_vars.ajax_url, {
	            'action': 'LoadPosts',
	            'query_args': window.query_args,
	            'section': window.section
	        }).done(function (data) {
	            if (data) {
	                $add_box.append(data);
	                window.query_args['offset'] += window.query_args['posts_per_page'];
	            } else {
	                $this.hide();
	            }
	        });
	    });
	});
	// import './search'

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var $ = exports.$ = jQuery;
	var w = exports.w = $(window);

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	  (0, _constants.$)('.galeria__slider').each(function (key, item) {
	    (0, _constants.$)(this).slick({
	      prevArrow: (0, _constants.$)(this).next(),
	      nextArrow: (0, _constants.$)(this).next().next()
	    });
	  });
	});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	(0, _constants.$)(document).ready(function () {
	
	    var header = (0, _constants.$)('#menu');
	    var placeholder = (0, _constants.$)('#placeholder');
	    var sticky = header.offset().top;
	
	    _constants.w.scroll(function () {
	
	        makeSticky();
	    });
	
	    function makeSticky() {
	        if (window.pageYOffset > sticky) {
	            header.addClass("menu-fixed");
	            placeholder.addClass('show');
	        } else {
	            header.removeClass("menu-fixed");
	            placeholder.removeClass('show');
	        }
	    }
	
	    // - - - M e n ú   r e s p o n s i v e - - -
	
	    var btnAbrir = (0, _constants.$)(".header__menu_JS");
	    var btnCerrar = (0, _constants.$)("#menu__close_JS");
	    var menu = (0, _constants.$)(".menu");
	
	    // Abrir menu lateral
	    btnAbrir.click(function () {
	        menu.addClass('view');
	        btnAbrir.addClass('opacity');
	    });
	
	    // Cerrar menu lateral
	    btnCerrar.click(function () {
	        menu.removeClass('view');
	        btnAbrir.removeClass('opacity');
	    });
	});

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	  (0, _constants.$)('.slider-edicion').slick({
	    autoplay: true,
	    autoplaySpeed: 1000
	  });
	});

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map