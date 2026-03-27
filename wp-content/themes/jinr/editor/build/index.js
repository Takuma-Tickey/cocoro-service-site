(window["webpackJsonp_jinr_blocks"] = window["webpackJsonp_jinr_blocks"] || []).push([["style-index"],{

/***/ "./src/style.scss":
/*!************************!*\
  !*** ./src/style.scss ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ })

}]);

/******/ (function(modules) { // webpackBootstrap
/******/ 	// install a JSONP callback for chunk loading
/******/ 	function webpackJsonpCallback(data) {
/******/ 		var chunkIds = data[0];
/******/ 		var moreModules = data[1];
/******/ 		var executeModules = data[2];
/******/
/******/ 		// add "moreModules" to the modules object,
/******/ 		// then flag all "chunkIds" as loaded and fire callback
/******/ 		var moduleId, chunkId, i = 0, resolves = [];
/******/ 		for(;i < chunkIds.length; i++) {
/******/ 			chunkId = chunkIds[i];
/******/ 			if(Object.prototype.hasOwnProperty.call(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 				resolves.push(installedChunks[chunkId][0]);
/******/ 			}
/******/ 			installedChunks[chunkId] = 0;
/******/ 		}
/******/ 		for(moduleId in moreModules) {
/******/ 			if(Object.prototype.hasOwnProperty.call(moreModules, moduleId)) {
/******/ 				modules[moduleId] = moreModules[moduleId];
/******/ 			}
/******/ 		}
/******/ 		if(parentJsonpFunction) parentJsonpFunction(data);
/******/
/******/ 		while(resolves.length) {
/******/ 			resolves.shift()();
/******/ 		}
/******/
/******/ 		// add entry modules from loaded chunk to deferred list
/******/ 		deferredModules.push.apply(deferredModules, executeModules || []);
/******/
/******/ 		// run deferred modules when all chunks ready
/******/ 		return checkDeferredModules();
/******/ 	};
/******/ 	function checkDeferredModules() {
/******/ 		var result;
/******/ 		for(var i = 0; i < deferredModules.length; i++) {
/******/ 			var deferredModule = deferredModules[i];
/******/ 			var fulfilled = true;
/******/ 			for(var j = 1; j < deferredModule.length; j++) {
/******/ 				var depId = deferredModule[j];
/******/ 				if(installedChunks[depId] !== 0) fulfilled = false;
/******/ 			}
/******/ 			if(fulfilled) {
/******/ 				deferredModules.splice(i--, 1);
/******/ 				result = __webpack_require__(__webpack_require__.s = deferredModule[0]);
/******/ 			}
/******/ 		}
/******/
/******/ 		return result;
/******/ 	}
/******/
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// object to store loaded and loading chunks
/******/ 	// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 	// Promise = chunk loading, 0 = chunk loaded
/******/ 	var installedChunks = {
/******/ 		"index": 0
/******/ 	};
/******/
/******/ 	var deferredModules = [];
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	var jsonpArray = window["webpackJsonp_jinr_blocks"] = window["webpackJsonp_jinr_blocks"] || [];
/******/ 	var oldJsonpFunction = jsonpArray.push.bind(jsonpArray);
/******/ 	jsonpArray.push = webpackJsonpCallback;
/******/ 	jsonpArray = jsonpArray.slice();
/******/ 	for(var i = 0; i < jsonpArray.length; i++) webpackJsonpCallback(jsonpArray[i]);
/******/ 	var parentJsonpFunction = oldJsonpFunction;
/******/
/******/
/******/ 	// add entry module to deferred list
/******/ 	deferredModules.push(["./src/index.js","style-index"]);
/******/ 	// run deferred modules when ready
/******/ 	return checkDeferredModules();
/******/ })
/************************************************************************/
/******/ ({

/***/ "../lib/font/jin-icons/icon-loder.json":
/*!*********************************************!*\
  !*** ../lib/font/jin-icons/icon-loder.json ***!
  \*********************************************/
/*! exports provided: iconNames, iconParts, default */
/***/ (function(module) {

module.exports = JSON.parse("{\"iconNames\":{\"BlogParts\":\"ブログアイコン\",\"GeneralParts\":\"一般アイコン\",\"MarkParts\":\"マークアイコン\",\"ArrowParts\":\"矢印アイコン\",\"MoneyParts\":\"お金アイコン\",\"CharactorParts\":\"キャラクターアイコン\",\"NatureParts\":\"自然アイコン\",\"GadgetParts\":\"ガジェットアイコン\",\"BeautyParts\":\"美容アイコン\",\"EntertainmentParts\":\"エンタメアイコン\",\"VehicleParts\":\"乗り物アイコン\",\"FoodParts\":\"食べ物アイコン\",\"CreativeParts\":\"クリエイティブアイコン\",\"SnsParts\":\"SNSアイコン\",\"OtherParts\":\"その他アイコン\"},\"iconParts\":{\"BlogParts\":[\"home\",\"v2home\",\"account\",\"v2account\",\"search\",\"v2search\",\"folder\",\"v2folder\",\"post\",\"v2post\",\"relatedpost\",\"v2relatedpost\",\"copy\",\"v2copy\",\"clipboard\",\"v2clipboard\",\"mail\",\"v2mail\",\"share\",\"v2share\",\"cart\",\"v2cart\",\"basket\",\"v2basket\",\"shoppingbag\",\"v2shoppingbag\",\"download\",\"v2download\",\"telephone\",\"v2telephone\",\"star\",\"starhalf\",\"starblank\",\"link\",\"v2link\",\"navi\",\"v2navi\",\"archive\",\"v2archive\",\"tag\",\"v2tag\",\"beginer\"],\"GeneralParts\":[\"bulb\",\"v2bulb\",\"caution\",\"v2caution\",\"bookmark\",\"v2bookmark\",\"speaker\",\"v2speaker\",\"comment\",\"v2comment\",\"pencil\",\"v2pencil\",\"blogtext\",\"heart\",\"v2heart\",\"book\",\"v2book\",\"bookopen\",\"v2bookopen\",\"books\",\"v2books\",\"crown\",\"v2crown\",\"flag\",\"v2flag\",\"information\",\"v2information\",\"like\",\"v2like\",\"unlike\",\"v2dislike\",\"fingerbottom\",\"v2fingerbottom\",\"fingerright\",\"v2fingerright\",\"watch\",\"v2watch\",\"timer\",\"v2timer\",\"hourglass\",\"v2hourglass\",\"camera\",\"v2camera\",\"cameraretro\",\"v2cameraretro\",\"photo\",\"v2photo\",\"movie\",\"v2movie\",\"video\",\"v2video\",\"videocamera\",\"v2videocamera\",\"badge\",\"v2badge\",\"birthdaycake\",\"v2birthdaycake\",\"present\",\"v2present\",\"graph\",\"v2graph\",\"diamond\",\"v2diamond\",\"cafe\",\"v2cafe\",\"bell\",\"v2bell\",\"compass\",\"v2compass\",\"gear\",\"v2gear\",\"spanner\",\"v2spanner\",\"lock\",\"v2lock\",\"key\",\"v2key\",\"academic\",\"v2academic\",\"droppin\",\"v2droppin\",\"calendar\",\"v2calendar\",\"cardboardbox\",\"v2cardboardbox\",\"cardboadbox3\",\"v2cardboardbox3\",\"businessman\",\"v2businessman\"],\"MarkParts\":[\"maru\",\"batu\",\"plus\",\"v2plus\",\"question\",\"v2question\",\"circle\",\"check\",\"v2check\",\"checkcircle\",\"v2checkcircle\",\"starcircle\",\"heartcircle\",\"prbadge\",\"v2prbadge\",\"number1square\",\"number2square\",\"number3square\",\"number4square\",\"number5square\",\"number6square\",\"number7square\",\"number8square\",\"number9square\",\"number10square\",\"number1circle\",\"number2circle\",\"number3circle\",\"number4circle\",\"number5circle\",\"number6circle\",\"number7circle\",\"number8circle\",\"number9circle\",\"number10circle\",\"answerbox\",\"questionbox\",\"answertxt\",\"questiontxt\",\"backslash\",\"slash\",\"male\",\"v2male\",\"female\",\"v2female\",\"malefemale\",\"v2malefemale\"],\"ArrowParts\":[\"arrow\",\"arrowm\",\"arrowthin\",\"v2arrow\",\"arrowleft\",\"arrowleftm\",\"arrowleftthin\",\"v2arrowleft\",\"arrowtop\",\"arrowtopm\",\"arrowtopthin\",\"v2arrowtop\",\"arrowbottom\",\"arrowbottomm\",\"arrowbottomthin\",\"v2arrowbottom\",\"doublearrow\",\"v2arrowdouble\",\"arrowb\",\"arrowclear\",\"arrowcircle\",\"v2arrowcircle\",\"arrowbcircle\",\"v2arrowbcircle\",\"arrowrsquare\"],\"MoneyParts\":[\"coin\",\"coincover\",\"moneybag\",\"v2moneybag\",\"moneywallet\",\"v2moneywallet\",\"bitcoin\",\"v2bitcoin\",\"bitcoinwallet\",\"v2bitcoinwallet\",\"dollar\",\"v2dollar\",\"creditcard\",\"v2creditcard\",\"saving\",\"v2saving\",\"trade\",\"qrpay\",\"rpoint\"],\"CharactorParts\":[\"smile\",\"v2smile\",\"baby\",\"v2baby\",\"kid\",\"v2kid\",\"girl\",\"v2girl\",\"couple\",\"v2couple\",\"dog\",\"v2dog\",\"cat\",\"v2cat\",\"chick\",\"v2chick\",\"fish\",\"v2fish\",\"jin\",\"v2jin\",\"nikukyu\",\"v2nikukyu\",\"petfood\",\"v2petfood\"],\"NatureParts\":[\"fire\",\"v2fire\",\"aqua\",\"v2aqua\",\"sun\",\"v2sun\",\"moon\",\"v2moon\",\"inazuma\",\"v2inazuma\",\"flower\",\"v2flower\",\"leaf\",\"v2leaf\",\"plant\",\"v2plant\",\"seedleaf\",\"v2seedleaf\",\"clover\",\"v2clover\",\"camp\",\"v2camp\",\"anchor\",\"v2anchor\",\"beachparasol\",\"v2beachparasol\"],\"GadgetParts\":[\"mobile\",\"v2mobile\",\"pc\",\"v2pc\",\"website\",\"v2website\",\"simcard\",\"v2simcard\",\"smartphone\",\"v2smartphone\",\"tv\",\"v2tv\",\"wifi\",\"v2wifi\",\"pocketwifi\",\"v2pocketwifi\",\"homewifi\",\"v2homewifi\",\"earphone\",\"v2earphone\",\"wirelessearphone\",\"v2wirelessearphone\",\"headphone\",\"v2headphone\",\"plug\",\"v2plug\",\"smartspeaker\",\"v2smartspeaker\"],\"BeautyParts\":[\"kirakira\",\"v2kirakira\",\"conditioner\",\"v2conditioner\",\"cosme\",\"v2cosme\",\"makeup\",\"v2makeup\",\"lipstick\",\"v2lipstick\",\"drier\",\"v2drier\",\"dumbbell\",\"v2dumbbell\",\"weightscale\",\"v2weightscale\",\"weddingring\",\"v2weddingring\",\"tops\",\"v2tops\",\"bottoms\",\"v2bottoms\",\"skirt\",\"v2skirt\",\"shoes\",\"v2shoes\",\"rucksack\",\"v2rucksack\",\"handbag\",\"v2handbag\",\"datsumou\"],\"EntertainmentParts\":[\"game\",\"v2game\",\"baseball\",\"v2baseball\",\"basketball\",\"v2basketball\",\"onpu\",\"v2onpu\"],\"VehicleParts\":[\"car\",\"v2car\",\"bike\",\"v2bike\",\"scooter\",\"v2scooter\",\"airline\",\"v2airline\",\"rocket\",\"v2rocket\",\"sailing\",\"v2sailing\"],\"FoodParts\":[\"dinner\",\"v2dinner\",\"folkspoon\",\"v2folkspoon\",\"wine\",\"v2wine\",\"hamburger\",\"v2hamburger\",\"tapioka\",\"v2tapioka\",\"rice\",\"v2rice\",\"carrot\",\"v2carrot\",\"drag\",\"supplement\",\"v2supplement\",\"supplement2\",\"v2supplement2\"],\"CreativeParts\":[\"writer\",\"v2writer\",\"program\",\"v2program\",\"illust\",\"v2illust\",\"paint\",\"v2paint\",\"mailsend\",\"v2mailsend\"],\"SnsParts\":[\"twitter\",\"facebook\",\"facebookt\",\"youtube\",\"pocket\",\"instagram\",\"pinterest\",\"amazon\",\"wordpress\",\"info\",\"v2rss\"],\"OtherParts\":[\"reload\",\"v2reload\",\"reply\",\"v2reply\",\"quote\",\"copyright\"]}}");

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/arrayLikeToArray.js":
/*!*****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/arrayLikeToArray.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _arrayLikeToArray(r, a) {
  (null == a || a > r.length) && (a = r.length);
  for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e];
  return n;
}
module.exports = _arrayLikeToArray, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/arrayWithHoles.js":
/*!***************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/arrayWithHoles.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _arrayWithHoles(r) {
  if (Array.isArray(r)) return r;
}
module.exports = _arrayWithHoles, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/arrayWithoutHoles.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/arrayWithoutHoles.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var arrayLikeToArray = __webpack_require__(/*! ./arrayLikeToArray.js */ "./node_modules/@babel/runtime/helpers/arrayLikeToArray.js");
function _arrayWithoutHoles(r) {
  if (Array.isArray(r)) return arrayLikeToArray(r);
}
module.exports = _arrayWithoutHoles, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/defineProperty.js":
/*!***************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/defineProperty.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var toPropertyKey = __webpack_require__(/*! ./toPropertyKey.js */ "./node_modules/@babel/runtime/helpers/toPropertyKey.js");
function _defineProperty(e, r, t) {
  return (r = toPropertyKey(r)) in e ? Object.defineProperty(e, r, {
    value: t,
    enumerable: !0,
    configurable: !0,
    writable: !0
  }) : e[r] = t, e;
}
module.exports = _defineProperty, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/extends.js":
/*!********************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/extends.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _extends() {
  return (module.exports = _extends = Object.assign ? Object.assign.bind() : function (n) {
    for (var e = 1; e < arguments.length; e++) {
      var t = arguments[e];
      for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]);
    }
    return n;
  }, module.exports.__esModule = true, module.exports["default"] = module.exports), _extends.apply(null, arguments);
}
module.exports = _extends, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/iterableToArray.js":
/*!****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/iterableToArray.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _iterableToArray(r) {
  if ("undefined" != typeof Symbol && null != r[Symbol.iterator] || null != r["@@iterator"]) return Array.from(r);
}
module.exports = _iterableToArray, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/iterableToArrayLimit.js":
/*!*********************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/iterableToArrayLimit.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _iterableToArrayLimit(r, l) {
  var t = null == r ? null : "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"];
  if (null != t) {
    var e,
      n,
      i,
      u,
      a = [],
      f = !0,
      o = !1;
    try {
      if (i = (t = t.call(r)).next, 0 === l) {
        if (Object(t) !== t) return;
        f = !1;
      } else for (; !(f = (e = i.call(t)).done) && (a.push(e.value), a.length !== l); f = !0);
    } catch (r) {
      o = !0, n = r;
    } finally {
      try {
        if (!f && null != t["return"] && (u = t["return"](), Object(u) !== u)) return;
      } finally {
        if (o) throw n;
      }
    }
    return a;
  }
}
module.exports = _iterableToArrayLimit, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/nonIterableRest.js":
/*!****************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/nonIterableRest.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _nonIterableRest() {
  throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}
module.exports = _nonIterableRest, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/nonIterableSpread.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/nonIterableSpread.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _nonIterableSpread() {
  throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
}
module.exports = _nonIterableSpread, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/slicedToArray.js":
/*!**************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/slicedToArray.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var arrayWithHoles = __webpack_require__(/*! ./arrayWithHoles.js */ "./node_modules/@babel/runtime/helpers/arrayWithHoles.js");
var iterableToArrayLimit = __webpack_require__(/*! ./iterableToArrayLimit.js */ "./node_modules/@babel/runtime/helpers/iterableToArrayLimit.js");
var unsupportedIterableToArray = __webpack_require__(/*! ./unsupportedIterableToArray.js */ "./node_modules/@babel/runtime/helpers/unsupportedIterableToArray.js");
var nonIterableRest = __webpack_require__(/*! ./nonIterableRest.js */ "./node_modules/@babel/runtime/helpers/nonIterableRest.js");
function _slicedToArray(r, e) {
  return arrayWithHoles(r) || iterableToArrayLimit(r, e) || unsupportedIterableToArray(r, e) || nonIterableRest();
}
module.exports = _slicedToArray, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/toConsumableArray.js":
/*!******************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/toConsumableArray.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var arrayWithoutHoles = __webpack_require__(/*! ./arrayWithoutHoles.js */ "./node_modules/@babel/runtime/helpers/arrayWithoutHoles.js");
var iterableToArray = __webpack_require__(/*! ./iterableToArray.js */ "./node_modules/@babel/runtime/helpers/iterableToArray.js");
var unsupportedIterableToArray = __webpack_require__(/*! ./unsupportedIterableToArray.js */ "./node_modules/@babel/runtime/helpers/unsupportedIterableToArray.js");
var nonIterableSpread = __webpack_require__(/*! ./nonIterableSpread.js */ "./node_modules/@babel/runtime/helpers/nonIterableSpread.js");
function _toConsumableArray(r) {
  return arrayWithoutHoles(r) || iterableToArray(r) || unsupportedIterableToArray(r) || nonIterableSpread();
}
module.exports = _toConsumableArray, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/toPrimitive.js":
/*!************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/toPrimitive.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var _typeof = __webpack_require__(/*! ./typeof.js */ "./node_modules/@babel/runtime/helpers/typeof.js")["default"];
function toPrimitive(t, r) {
  if ("object" != _typeof(t) || !t) return t;
  var e = t[Symbol.toPrimitive];
  if (void 0 !== e) {
    var i = e.call(t, r || "default");
    if ("object" != _typeof(i)) return i;
    throw new TypeError("@@toPrimitive must return a primitive value.");
  }
  return ("string" === r ? String : Number)(t);
}
module.exports = toPrimitive, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/toPropertyKey.js":
/*!**************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/toPropertyKey.js ***!
  \**************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var _typeof = __webpack_require__(/*! ./typeof.js */ "./node_modules/@babel/runtime/helpers/typeof.js")["default"];
var toPrimitive = __webpack_require__(/*! ./toPrimitive.js */ "./node_modules/@babel/runtime/helpers/toPrimitive.js");
function toPropertyKey(t) {
  var i = toPrimitive(t, "string");
  return "symbol" == _typeof(i) ? i : i + "";
}
module.exports = toPropertyKey, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/typeof.js":
/*!*******************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/typeof.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(o) {
  "@babel/helpers - typeof";

  return (module.exports = _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) {
    return typeof o;
  } : function (o) {
    return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o;
  }, module.exports.__esModule = true, module.exports["default"] = module.exports), _typeof(o);
}
module.exports = _typeof, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/unsupportedIterableToArray.js":
/*!***************************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/unsupportedIterableToArray.js ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var arrayLikeToArray = __webpack_require__(/*! ./arrayLikeToArray.js */ "./node_modules/@babel/runtime/helpers/arrayLikeToArray.js");
function _unsupportedIterableToArray(r, a) {
  if (r) {
    if ("string" == typeof r) return arrayLikeToArray(r, a);
    var t = {}.toString.call(r).slice(8, -1);
    return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? arrayLikeToArray(r, a) : void 0;
  }
}
module.exports = _unsupportedIterableToArray, module.exports.__esModule = true, module.exports["default"] = module.exports;

/***/ }),

/***/ "./node_modules/classnames/index.js":
/*!******************************************!*\
  !*** ./node_modules/classnames/index.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
	Copyright (c) 2018 Jed Watson.
	Licensed under the MIT License (MIT), see
	http://jedwatson.github.io/classnames
*/
/* global define */

(function () {
	'use strict';

	var hasOwn = {}.hasOwnProperty;

	function classNames () {
		var classes = '';

		for (var i = 0; i < arguments.length; i++) {
			var arg = arguments[i];
			if (arg) {
				classes = appendClass(classes, parseValue(arg));
			}
		}

		return classes;
	}

	function parseValue (arg) {
		if (typeof arg === 'string' || typeof arg === 'number') {
			return arg;
		}

		if (typeof arg !== 'object') {
			return '';
		}

		if (Array.isArray(arg)) {
			return classNames.apply(null, arg);
		}

		if (arg.toString !== Object.prototype.toString && !arg.toString.toString().includes('[native code]')) {
			return arg.toString();
		}

		var classes = '';

		for (var key in arg) {
			if (hasOwn.call(arg, key) && arg[key]) {
				classes = appendClass(classes, key);
			}
		}

		return classes;
	}

	function appendClass (value, newClass) {
		if (!newClass) {
			return value;
		}
	
		if (value) {
			return value + ' ' + newClass;
		}
	
		return value + newClass;
	}

	if ( true && module.exports) {
		classNames.default = classNames;
		module.exports = classNames;
	} else if (true) {
		// register as 'classnames', consistent with npm package name
		!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function () {
			return classNames;
		}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	} else {}
}());


/***/ }),

/***/ "./src/DetailSettings.js":
/*!*******************************!*\
  !*** ./src/DetailSettings.js ***!
  \*******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ "./node_modules/@babel/runtime/helpers/extends.js");
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/hooks */ "@wordpress/hooks");
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_4__);





var _lodash = lodash,
  assign = _lodash.assign;
var __ = wp.i18n.__;
var Fragment = wp.element.Fragment;
var InspectorControls = wp.blockEditor.InspectorControls;
var _wp$components = wp.components,
  PanelBody = _wp$components.PanelBody,
  TextareaControl = _wp$components.TextareaControl,
  RadioControl = _wp$components.RadioControl,
  SelectControl = _wp$components.SelectControl,
  ToggleControl = _wp$components.ToggleControl,
  TextControl = _wp$components.TextControl,
  BaseControl = _wp$components.BaseControl;

//導入ブロック
var enableBlocks = ["core/paragraph", "core/list", "core/image", "core/heading", "core/columns", "jinr-blocks/simplebox", "jinr-blocks/accordion", "jinr-blocks/background", "jinr-blocks/blogcard", "jinr-blocks/button", "jinr-blocks/designborder", "jinr-blocks/designtitle", "jinr-blocks/fukidashi", "jinr-blocks/fullwidth", "jinr-blocks/iconbox", "jinr-blocks/profile", "jinr-blocks/postlist", "jinr-blocks/category", "jinr-blocks/profile", "jinr-blocks/richmenu", "jinr-blocks/syntax-hl", "jinr-blocks/timeline"];
//アニメーション設定導入ブロック
var animationEnableBlocks = ["core/columns", "jinr-blocks/designtitle", "jinr-blocks/timeline", "jinr-blocks/button"];
//個別アニメーション設定導入ブロック
var animationEachEnableBlocks = ["jinr-blocks/postlist", "jinr-blocks/richmenu"];

//attribute登録
var setDetailSettingsAttribute = function setDetailSettingsAttribute(settings, name) {
  if (enableBlocks.includes(settings.name)) {
    return Object.assign({}, settings, {
      attributes: Object.assign({}, settings.attributes, {
        topMarginPcAttribute: {
          type: "string",
          default: "auto"
        },
        bottomMarginPcAttribute: {
          type: "string",
          default: "auto"
        },
        topMarginSpAttribute: {
          type: "string",
          default: "auto"
        },
        bottomMarginSpAttribute: {
          type: "string",
          default: "auto"
        },
        animationApply: {
          type: "boolean",
          default: false
        }
      })
    });
  }
  return settings;
};
wp.hooks.addFilter("blocks.registerBlockType", "custom-attributes/set-detail-settings-attribute", setDetailSettingsAttribute);

//UI設定
var jinrDetailSettings = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockEdit) {
  return function (props) {
    if (!enableBlocks.includes(props.name)) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props);
    }
    var attributes = props.attributes,
      setAttributes = props.setAttributes;
    var topMarginPcAttribute = attributes.topMarginPcAttribute,
      bottomMarginPcAttribute = attributes.bottomMarginPcAttribute,
      topMarginSpAttribute = attributes.topMarginSpAttribute,
      bottomMarginSpAttribute = attributes.bottomMarginSpAttribute,
      animationApply = attributes.animationApply;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InspectorControls, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "o--jinr-inspector o--jinr-blank-setting"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(PanelBody, {
      title: __("余白設定"),
      initialOpen: false
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BaseControl, {
      label: "\u30D6\u30ED\u30C3\u30AF\u306E\u4F59\u767D\u3010PC\u3011"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(RadioControl, {
      label: "\u4E0A\u90E8",
      selected: topMarginPcAttribute,
      options: [{
        label: "極小",
        value: "d--top-margin-xs-pc"
      }, {
        label: "小",
        value: "d--top-margin-s-pc"
      }, {
        label: "中",
        value: "auto"
      }, {
        label: "大",
        value: "d--top-margin-l-pc"
      }, {
        label: "極大",
        value: "d--top-margin-xl-pc"
      }],
      onChange: function onChange(value) {
        setAttributes({
          topMarginPcAttribute: value
        });
      },
      className: "a--jinr-radio d--list-horizon"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(RadioControl, {
      label: "\u4E0B\u90E8",
      selected: bottomMarginPcAttribute,
      options: [{
        label: "極小",
        value: "d--bottom-margin-xs-pc"
      }, {
        label: "小",
        value: "d--bottom-margin-s-pc"
      }, {
        label: "中",
        value: "auto"
      }, {
        label: "大",
        value: "d--bottom-margin-l-pc"
      }, {
        label: "極大",
        value: "d--bottom-margin-xl-pc"
      }],
      onChange: function onChange(value) {
        setAttributes({
          bottomMarginPcAttribute: value
        });
      },
      className: "a--jinr-radio d--list-horizon"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BaseControl, {
      label: "\u30D6\u30ED\u30C3\u30AF\u306E\u4F59\u767D\u3010\u30B9\u30DE\u30DB\u3011"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(RadioControl, {
      label: "\u4E0A\u90E8",
      selected: topMarginSpAttribute,
      options: [{
        label: "極小",
        value: "d--top-margin-xs-sp"
      }, {
        label: "小",
        value: "d--top-margin-s-sp"
      }, {
        label: "中",
        value: "auto"
      }, {
        label: "大",
        value: "d--top-margin-l-sp"
      }, {
        label: "極大",
        value: "d--top-margin-xl-sp"
      }],
      onChange: function onChange(value) {
        setAttributes({
          topMarginSpAttribute: value
        });
      },
      className: "a--jinr-radio d--list-horizon"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(RadioControl, {
      label: "\u4E0B\u90E8",
      selected: bottomMarginSpAttribute,
      options: [{
        label: "極小",
        value: "d--bottom-margin-xs-sp"
      }, {
        label: "小",
        value: "d--bottom-margin-s-sp"
      }, {
        label: "中",
        value: "auto"
      }, {
        label: "大",
        value: "d--bottom-margin-l-sp"
      }, {
        label: "極大",
        value: "d--bottom-margin-xl-sp"
      }],
      onChange: function onChange(value) {
        setAttributes({
          bottomMarginSpAttribute: value
        });
      },
      className: "a--jinr-radio d--list-horizon"
    }))), animationEnableBlocks.includes(props.name) && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(PanelBody, {
      title: __("アニメーション設定"),
      initialOpen: false
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BaseControl, {
      label: "\u30A2\u30CB\u30E1\u30FC\u30B7\u30E7\u30F3\u3092\u9069\u7528\u3057\u306A\u3044"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(ToggleControl, {
      label: animationApply ? "ON" : "OFF",
      checked: animationApply,
      onChange: function onChange(value) {
        setAttributes({
          animationApply: value
        });
      },
      className: "jinr-toggle"
    }))))));
  };
}, "jinrDetailSettings");
wp.hooks.addFilter("editor.BlockEdit", "custom-attributes/jinr-detail-settings", jinrDetailSettings);

//執筆画面上での表示設定

var jinrDetailSettingsProp = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockListBlock) {
  return function (props) {
    if (!enableBlocks.includes(props.name)) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props);
    }
    var attributes = props.attributes,
      className = props.className,
      isValid = props.isValid;
    var topMarginPcAttribute = attributes.topMarginPcAttribute,
      bottomMarginPcAttribute = attributes.bottomMarginPcAttribute,
      topMarginSpAttribute = attributes.topMarginSpAttribute,
      bottomMarginSpAttribute = attributes.bottomMarginSpAttribute,
      animationApply = attributes.animationApply;
    var detailSettingsClass = "".concat(topMarginPcAttribute !== "auto" ? topMarginPcAttribute + " " : "") + "".concat(bottomMarginPcAttribute !== "auto" ? bottomMarginPcAttribute + " " : "") + "".concat(topMarginSpAttribute !== "auto" ? topMarginSpAttribute + " " : "") + "".concat(bottomMarginSpAttribute !== "auto" ? bottomMarginSpAttribute + " " : "");
    if (animationEachEnableBlocks.includes(props.name)) {
      detailSettingsClass = detailSettingsClass + "".concat(animationApply ? "d--block-animation-off" : "");
    } else if (animationEnableBlocks.includes(props.name)) {
      detailSettingsClass = detailSettingsClass + "".concat(animationApply ? "d--block-animation-off" : "js--scr-animation");
    }
    if (detailSettingsClass) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default()({}, props, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, detailSettingsClass)
      }));
    } else {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props);
    }
  };
}, "jinrDetailSettingsProp");
wp.hooks.addFilter("editor.BlockListBlock", "jinr-custom/jinr-detail-settings-prop", jinrDetailSettingsProp);

//記事ページでの表示設定

var saveDetailSettingsAttribute = function saveDetailSettingsAttribute(props, blockType, attributes) {
  if (enableBlocks.includes(blockType.name)) {
    var topMarginPcAttribute = attributes.topMarginPcAttribute,
      bottomMarginPcAttribute = attributes.bottomMarginPcAttribute,
      topMarginSpAttribute = attributes.topMarginSpAttribute,
      bottomMarginSpAttribute = attributes.bottomMarginSpAttribute,
      animationApply = attributes.animationApply;
    var detailSettingsClass = "".concat(topMarginPcAttribute !== "auto" ? topMarginPcAttribute + " " : "") + "".concat(bottomMarginPcAttribute !== "auto" ? bottomMarginPcAttribute + " " : "") + "".concat(topMarginSpAttribute !== "auto" ? topMarginSpAttribute + " " : "") + "".concat(bottomMarginSpAttribute !== "auto" ? bottomMarginSpAttribute + " " : "");
    if (animationEachEnableBlocks.includes(blockType.name)) {
      detailSettingsClass = detailSettingsClass + "".concat(animationApply ? "d--block-animation-off" : "");
    } else if (animationEnableBlocks.includes(blockType.name)) {
      detailSettingsClass = detailSettingsClass + "".concat(animationApply ? "d--block-animation-off" : "js--scr-animation");
    }
    var className = props.className;
    if (detailSettingsClass) {
      return assign({}, props, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, detailSettingsClass)
      });
    }
  }
  return props;
};
wp.hooks.addFilter("blocks.getSaveContent.extraProps", "custom-attributes/save-detail-settings-attribute", saveDetailSettingsAttribute);

/***/ }),

/***/ "./src/DeviceDisplay.js":
/*!******************************!*\
  !*** ./src/DeviceDisplay.js ***!
  \******************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ "./node_modules/@babel/runtime/helpers/extends.js");
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/hooks */ "@wordpress/hooks");
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/rich-text */ "@wordpress/rich-text");
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _icons_jinr_display_all_svg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./icons/jinr-display-all.svg */ "./src/icons/jinr-display-all.svg");
/* harmony import */ var _icons_jinr_display_pc_svg__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./icons/jinr-display-pc.svg */ "./src/icons/jinr-display-pc.svg");
/* harmony import */ var _icons_jinr_display_sp_svg__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./icons/jinr-display-sp.svg */ "./src/icons/jinr-display-sp.svg");











var _lodash = lodash,
  assign = _lodash.assign;
var __ = wp.i18n.__;
var Fragment = wp.element.Fragment;
var _wp$components = wp.components,
  PanelBody = _wp$components.PanelBody,
  TextareaControl = _wp$components.TextareaControl,
  RadioControl = _wp$components.RadioControl,
  SelectControl = _wp$components.SelectControl,
  ToggleControl = _wp$components.ToggleControl,
  TextControl = _wp$components.TextControl,
  BaseControl = _wp$components.BaseControl,
  Toolbar = _wp$components.Toolbar,
  ToolbarButton = _wp$components.ToolbarButton,
  ToolbarGroup = _wp$components.ToolbarGroup;
var enableDisplayOnBlocks = ['jinr-blocks/accordion', 'jinr-blocks/accordion', 'jinr-blocks/background', 'jinr-blocks/blogcard', 'jinr-blocks/box', 'jinr-blocks/button', 'jinr-blocks/category', 'jinr-blocks/designborder', 'jinr-blocks/designtitle', 'jinr-blocks/fukidashi', 'jinr-blocks/fullwidth', 'jinr-blocks/iconbox', 'jinr-blocks/postlist', 'jinr-blocks/profile', 'jinr-blocks/richmenu', 'jinr-blocks/syntaxhl', 'jinr-blocks/timeline', 'core/column', 'core/paragraph', 'core/spacer'];
var setDisplayAttribute = function setDisplayAttribute(settings, name) {
  if (enableDisplayOnBlocks.includes(settings.name) == 1) {
    return Object.assign({}, settings, {
      attributes: Object.assign({}, settings.attributes, {
        displayDeviceAttribute: {
          type: 'string',
          default: ''
        },
        displayDevicePCAttribute: {
          type: 'string',
          default: 'off'
        },
        displayDeviceSPAttribute: {
          type: 'string',
          default: 'off'
        }
      })
    });
  }
  return settings;
};
wp.hooks.addFilter('blocks.registerBlockType', 'custom-attributes/set-display-attribute', setDisplayAttribute);
var withDisplay = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockEdit) {
  return function (props) {
    if (!enableDisplayOnBlocks.includes(props.name)) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props);
    }
    var attributes = props.attributes,
      setAttributes = props.setAttributes;
    var displayDeviceAttribute = attributes.displayDeviceAttribute,
      displayDevicePCAttribute = attributes.displayDevicePCAttribute,
      displayDeviceSPAttribute = attributes.displayDeviceSPAttribute;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["BlockControls"], {
      group: "other"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(ToolbarGroup, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(ToolbarButton, {
      icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_display_all_svg__WEBPACK_IMPORTED_MODULE_8__["ReactComponent"], null),
      label: "\u5168\u3066\u306E\u7AEF\u672B\u3067\u8868\u793A",
      isActive: displayDeviceAttribute === '',
      onClick: function onClick() {
        if (displayDeviceAttribute === 'jinr-display-pc' || displayDeviceAttribute === 'jinr-display-sp') {
          setAttributes({
            displayDeviceAttribute: ''
          });
          setAttributes({
            displayDevicePCAttribute: 'off'
          });
          setAttributes({
            displayDeviceSPAttribute: 'off'
          });
        } else {
          setAttributes({
            displayDeviceAttribute: ''
          });
        }
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(ToolbarButton, {
      icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_display_pc_svg__WEBPACK_IMPORTED_MODULE_9__["ReactComponent"], null),
      label: "PC\u306E\u307F\u8868\u793A",
      isActive: displayDevicePCAttribute === 'jinr-display-pc',
      onClick: function onClick() {
        if (displayDevicePCAttribute === 'off') {
          setAttributes({
            displayDevicePCAttribute: 'jinr-display-pc'
          });
          setAttributes({
            displayDeviceAttribute: 'jinr-display-pc'
          });
          setAttributes({
            displayDeviceSPAttribute: 'off'
          });
        } else {
          setAttributes({
            displayDevicePCAttribute: 'jinr-display-pc'
          });
        }
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(ToolbarButton, {
      icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_display_sp_svg__WEBPACK_IMPORTED_MODULE_10__["ReactComponent"], null),
      label: "\u30B9\u30DE\u30DB\u306E\u307F\u8868\u793A",
      isActive: displayDeviceSPAttribute === 'jinr-display-sp',
      onClick: function onClick() {
        if (displayDeviceSPAttribute === 'off') {
          setAttributes({
            displayDeviceSPAttribute: 'jinr-display-sp'
          });
          setAttributes({
            displayDevicePCAttribute: 'off'
          });
          setAttributes({
            displayDeviceAttribute: 'jinr-display-sp'
          });
        } else {
          setAttributes({
            displayDeviceSPAttribute: 'jinr-display-sp'
          });
        }
      }
    }))));
  };
}, 'withDisplay');
wp.hooks.addFilter('editor.BlockEdit', 'custom-attributes/with-display', withDisplay);
var withDisplayProp = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockListBlock) {
  return function (props) {
    if (!enableDisplayOnBlocks.includes(props.name)) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props);
    }
    var attributes = props.attributes,
      className = props.className;
    var displayDeviceAttribute = attributes.displayDeviceAttribute,
      displayDevicePCAttribute = attributes.displayDevicePCAttribute,
      displayDeviceSPAttribute = attributes.displayDeviceSPAttribute;
    if (displayDeviceSPAttribute === 'jinr-display-sp') {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default()({}, props, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, 'jinr-display-sp')
      }));
    } else if (displayDevicePCAttribute === 'jinr-display-pc') {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default()({}, props, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, 'jinr-display-pc')
      }));
    } else {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props);
    }
  };
}, 'withDisplayProp');
wp.hooks.addFilter('editor.BlockListBlock', 'custom-attributes/with-display-prop', withDisplayProp);
var saveDisplayAttribute = function saveDisplayAttribute(extraProps, blockType, attributes) {
  if (enableDisplayOnBlocks.includes(blockType.name)) {
    var displayDeviceAttribute = attributes.displayDeviceAttribute,
      displayDevicePCAttribute = attributes.displayDevicePCAttribute,
      displayDeviceSPAttribute = attributes.displayDeviceSPAttribute;
    var className = extraProps.className;
    if (displayDeviceSPAttribute === 'jinr-display-sp') {
      return assign({}, extraProps, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, 'jinr-display-sp')
      });
    } else if (displayDevicePCAttribute === 'jinr-display-pc') {
      return assign({}, extraProps, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, 'jinr-display-pc')
      });
    }
  }
  return extraProps;
};
wp.hooks.addFilter('blocks.getSaveContent.extraProps', 'custom-attributes/save-display-attribute', saveDisplayAttribute);

/***/ }),

/***/ "./src/Document.js":
/*!*************************!*\
  !*** ./src/Document.js ***!
  \*************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_plugins__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/plugins */ "@wordpress/plugins");
/* harmony import */ var _wordpress_plugins__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_plugins__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/edit-post */ "@wordpress/edit-post");
/* harmony import */ var _wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__);



var __ = wp.i18n.__;

var _wp$blocks = wp.blocks,
  registerBlockType = _wp$blocks.registerBlockType,
  createBlock = _wp$blocks.createBlock;




var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useLayoutEffect = _wp$element.useLayoutEffect,
  useState = _wp$element.useState,
  useEffect = _wp$element.useEffect,
  useRef = _wp$element.useRef;
var PluginDocumentSettingPanelDemo = function PluginDocumentSettingPanelDemo() {
  function JinrHideTemplateName(templateName) {
    var selectBox = document.querySelector('.edit-post-post-template__dialog select');
    if (!selectBox) return;
    var options = selectBox.querySelectorAll('option');
    options.forEach(function (option) {
      if (option.textContent === templateName) {
        option.classList.add('jinr-hide-template');
      } else {
        option.classList.remove('jinr-hide-template');
      }
    });
  }
  var observer = new MutationObserver(function (mutations) {
    mutations.forEach(function (mutation) {
      if (mutation.type === 'childList' && mutation.addedNodes.length > 0) {
        JinrHideTemplateName('決済完了画面');
      }
    });
  });
  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
  var postType = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getCurrentPostType();
  });
  if (postType !== 'post') {
    if (postType !== 'page') {
      return null;
    }
  }
  var _useSelect = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
      var wpBodyWrapper = document.getElementsByTagName('body')[0];
      var wpBlockPostTitle = document.getElementsByClassName('wp-block-post-title')[0];
      if (newTemplate == 'template-full-width.php') {
        wpBodyWrapper.classList.add('page-template-template-full-width');
        wpBlockPostTitle.classList.add("d--display-none-title");
      }
      return {
        newTemplate: select("core/editor").getEditedPostAttribute("template")
      };
    }),
    newTemplate = _useSelect.newTemplate;
  var columnType = JINR_VAR.articleColumn;
  var youtube_url = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_url_youtube"];
  });
  var youtube_pip = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_pip_youtube"];
  });
  var youtube_time = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_time_youtube"];
  });
  var youtube_thumb = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_thumb_youtube"];
  });
  var youtube_media = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_media_youtube"];
  });
  var categoryEdit = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_category_edit"];
  });
  var titleDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_title_display"];
  });
  var snsButtonDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_snsbutton_display"];
  });
  var adsDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_ads_display"];
  });
  var thumbnailDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_thumbnail_display"];
  });
  var profileDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_profile_display"];
  });
  var representationsDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_representations_display"];
  });
  var relatedPostDisplay = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_relatedpost_display"];
  });
  var sidebarDisplay1col = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_sidebar1col_display"];
  });
  var sidebarDisplay2col = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_sidebar2col_display"];
  });
  var titleSEO = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_seotitle_display"];
  });
  var descriptionSEO = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_description_display"];
  });
  var keywordSEO = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_keyword_display"];
  });
  var hastagSEO = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_hastag_display"];
  });
  var canonicalSEO = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_canonical_display"];
  });
  var noindexSEO = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_noindex_display"];
  });
  var headTag = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_headtag_article"];
  });
  var _useDispatch = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useDispatch"])("core/editor"),
    editPost = _useDispatch.editPost;
  var category = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__["useSelect"])(function (select) {
    return select("core/editor").getEditedPostAttribute("meta")["_jinr_category"];
  });
  var _useState = useState([{
      label: "カテゴリーを選択",
      value: "",
      disabled: true
    }]),
    _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default()(_useState, 2),
    categoryList = _useState2[0],
    setCategoryList = _useState2[1];
  useEffect(function () {
    var newCategorryList = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default()(categoryList);
    JINR_VAR.categories.forEach(function (category) {
      newCategorryList.push({
        label: category.cat_name,
        value: category.cat_ID
      });
    });
    setCategoryList(newCategorryList);
  }, []);
  var YoutubeSettings = function YoutubeSettings(value) {
    if (!value) {
      editPost({
        meta: {
          _jinr_url_youtube: ""
        }
      });
      editPost({
        meta: {
          _jinr_time_youtube: ""
        }
      });
      editPost({
        meta: {
          _jinr_thumb_youtube: ""
        }
      });
      editPost({
        meta: {
          _jinr_media_youtube: ""
        }
      });
      return;
    }
    var uploaddir = JINR_VAR.upload_dir;
    editPost({
      meta: {
        _jinr_url_youtube: value
      }
    });
    var jinrPlayer = {};
    // YoutubeのURLに限定
    var pattern1 = /^(https|http):\/\/([a-z]{1,}\.|)(youtube\.com)(\/(.*)|\?(.*)|$)$/g;
    var pattern2 = /^(https|http):\/\/([a-z]{1,}\.|)(youtu\.be)(\/(.*)|\?(.*)|$)$/g;
    var result1 = pattern1.test(value);
    var result2 = pattern2.test(value);
    if (result1 || result2) {
      var youtube_id = value.match(/[\/?=]([a-zA-Z0-9_-]{11})[&\?]?/)[1];
      if (youtube_id.length == 11) {
        var youtube_thumb_url = "https://img.youtube.com/vi/".concat(youtube_id, "/maxresdefault.jpg");
        editPost({
          meta: {
            _jinr_thumb_youtube: youtube_thumb_url
          }
        });
        editPost({
          meta: {
            _jinr_media_youtube: uploaddir + '/youtube-thumbnail-' + youtube_id + '.jpg'
          }
        });
        window.YT.ready(function () {
          jinrPlayer = new YT.Player("jinrYoutubeView", {
            width: 1,
            height: 1,
            videoId: youtube_id,
            events: {
              'onReady': jinrOnPlayerReady
            },
            playerVars: {
              origin: location.protocol + "//" + location.hostname + "/" //Failed to execute 'postMessage' on 'DOMWindow'への対応
            }
          });
          function jinrOnPlayerReady(event) {
            var time = jinrPlayer.getDuration();
            var hour = "";
            var min = "";
            var rem = "";
            // １時間以上の動画の場合も考慮
            if (time >= 3600) {
              hour = Math.floor(time / 3600);
              min = Math.floor(time % 3600 / 60);
              rem = time % 60;
              if (hour < 10) {
                hour = "0" + hour;
              }
              if (min < 10) {
                min = "0" + min;
              }
              if (rem < 10) {
                rem = "0" + rem;
              }
              editPost({
                meta: {
                  _jinr_time_youtube: "".concat(hour, ":").concat(min, ":").concat(rem)
                }
              });
            } else if (time <= 59) {
              // １分もない動画だった場合
              editPost({
                meta: {
                  _jinr_time_youtube: "00:".concat(time)
                }
              });
            } else {
              min = Math.floor(time % 3600 / 60);
              rem = time % 60;
              if (min < 10) {
                min = "0" + min;
              }
              if (rem < 10) {
                rem = "0" + rem;
              }
              editPost({
                meta: {
                  _jinr_time_youtube: "".concat(min, ":").concat(rem)
                }
              });
            }
          }
        });
      }
    } else {
      editPost({
        meta: {
          _jinr_url_youtube: ""
        }
      });
      editPost({
        meta: {
          _jinr_time_youtube: ""
        }
      });
      editPost({
        meta: {
          _jinr_thumb_youtube: ""
        }
      });
      editPost({
        meta: {
          _jinr_media_youtube: ""
        }
      });
      alert("Youtubeの動画URLをコピペで入力してください。");
      return;
    }
  };
  var icon = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("svg", {
    viewBox: "0 0 200 200",
    size: "24"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("path", {
    d: "M168.4 82l-.2-.2.2-3.1c.5-8.4-1.9-16.7-6.5-22.8-3.6-4.8-10.3-10.7-21.9-11.7-2.8-8.4-10.2-14.7-19.9-17-2.4-.6-4.9-.9-7.4-.9-7.7 0-14.9 2.9-20 8.1-2.1-.6-4.3-.9-6.5-.9-5.1 0-10 1.7-14 4.8-6 4.7-9.6 11.9-9.6 19.5-5.5 2.7-8.6 8.2-11.3 13.1l-.1.1c-3.6 6.6-6.5 11.8-14.2 11.8-2.7 0-6-.6-9.7-1.9-.5-.2-1.1-.3-1.6-.3-1.7 0-3.3.9-4.2 2.4-5.3 8.7-6 25.1 1.9 37.5 5.9 9.2 15.6 14.2 27.3 14.2h1.1c2 4.8 5.3 8.9 9.6 11.7 3.6 2.2 7.7 3.4 12.1 3.4h1.3c3.1 5 8.3 8.9 15 11.2 4.1 1.4 8.2 2.1 12.3 2.1s8.1-.7 11.9-2.1l3.9-1.4c.2.1.4.1.4.1 5.1 1.7 10.4 2.6 15.8 2.6 26.9-.1 47.1-20.5 47-47.4-.1-12.9-4.6-24.4-12.7-32.9zM102 88.6c-1 2-.1 4.4 1.9 5.4.7.3 1.5.4 2.2.4 11.6-1.6 22.2 6.6 23.8 18.2 0 .2 0 .3.1.5.7 6-1.2 12-5.2 16.5-6.5 7.2-17.1 9.2-25.7 4.7-1.9-1.1-4.4-.5-5.5 1.4-.8 1.3-.7 3 .1 4.3 3.1 5 7.1 9.4 11.8 12.9-.8 0-1.5.1-2.2.1-3.7 0-7.1-.6-10.3-1.7-5.4-1.8-9.2-5-10.8-9-.7-1.9-2.5-3.2-4.5-3.2-.4 0-.9.1-1.2.2-1 .2-2 .4-3 .4-2.4 0-4.8-.7-6.7-2-3.5-2.3-5.8-5.7-6.6-9.6-.4-2.2-2.5-3.9-4.8-3.9h-.6c-1.4.2-2.9.3-4.2.3-10.4 0-16-5.3-18.9-9.7-3.7-5.7-5.8-16-3.3-23.7 3.1.8 6 1.2 8.7 1.2 13.6 0 18.9-9.7 22.9-16.9 2.8-5 4.9-8.9 8.8-9.5 1.3-.2 2.4-.9 3.1-2 .8-1.1 1-2.4.8-3.6-.9-5.3 1.3-10.9 5.6-14.2 2.4-1.8 5.3-2.8 8.2-2.8 2 0 4 .5 5.9 1.4.6.3 1.3.5 2 .5 1.6 0 3-.7 4-2.1 3.2-4.3 8.6-6.9 14.5-6.9 1.7 0 3.4.2 5.2.6 5.7 1.4 12.2 5.5 13.5 13 .3 2.4 2.4 4.1 4.9 4.1h.4c7.6 0 13.6 2.7 17.5 7.9 2.7 3.7 4.2 8 4.5 12.3v.2c-6.8-3.8-14.5-5.7-22.3-5.6-15.8.2-29 7.8-34.6 19.9z"
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("path", {
    d: "M70.9 80.6c-4 0-7.2 4.4-7.2 10.1s3.2 10.1 7.2 10.1 7.2-4.4 7.2-10.1-3.2-10.1-7.2-10.1z"
  }));
  var panelYoutubeClassname = youtube_url ? "jinr-youtube-setting jinr-icon-viaual jinr-panel-enabled" : "jinr-youtube-setting jinr-icon-viaual";
  var panelDisplayClassName = 0 < Object(lodash__WEBPACK_IMPORTED_MODULE_3__["compact"])([snsButtonDisplay, adsDisplay, thumbnailDisplay, profileDisplay, representationsDisplay, relatedPostDisplay]).length ? "jinr-display-setting jinr-icon-viaual jinr-panel-enabled" : "jinr-display-setting jinr-icon-viaual";
  var panelCategoryClassName = 0 < Object(lodash__WEBPACK_IMPORTED_MODULE_3__["compact"])([categoryEdit]).length ? "jinr-category-setting jinr-icon-viaual jinr-panel-enabled" : "jinr-category-setting jinr-icon-viaual";
  var panelSEOClassName = 0 < Object(lodash__WEBPACK_IMPORTED_MODULE_3__["compact"])([titleSEO, descriptionSEO, keywordSEO, hastagSEO, canonicalSEO, noindexSEO]).length ? "jinr-seo-setting jinr-icon-viaual jinr-panel-enabled" : "jinr-seo-setting jinr-icon-viaual";
  var panelTagClassname = headTag ? "jinr-tag-setting jinr-icon-viaual jinr-panel-enabled" : "jinr-tag-setting jinr-icon-viaual";
  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, !categoryEdit && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__["PluginDocumentSettingPanel"], {
    name: "youtube-panel",
    title: "Youtube\u306E\u8A2D\u5B9A",
    icon: icon,
    className: panelYoutubeClassname
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextareaControl"], {
    value: youtube_url,
    onChange: YoutubeSettings,
    placeholder: "\u3053\u3053\u306B\u52D5\u753B\u306EURL\u3092\u5165\u529B"
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u52D5\u753B\u3092PIP\uFF08Pinture in Picture\uFF09\u3067\u8868\u793A",
    help: "ON\u306B\u3059\u308B\u3068\u52D5\u753B\u304C\u8FFD\u5C3E\u3057\u307E\u3059"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: youtube_pip ? "ON" : "OFF",
    checked: youtube_pip,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_pip_youtube: value
        }
      });
    },
    className: "jinr-toggle"
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    id: "jintYoutubeReload"
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: youtube_time,
    className: "jinr-youtube-time",
    id: "jinrYoutubeTime"
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: youtube_thumb,
    className: "jinr-youtube-thumbnail",
    id: "jinrYoutubeThumbnail"
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: youtube_media,
    className: "jinr-youtube-media",
    id: "jinrYoutubeMedia"
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    id: "jinrYoutubeView"
  })), postType === "page" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__["PluginDocumentSettingPanel"], {
    name: "select-category",
    title: "\u30AB\u30C6\u30B4\u30EA\u30FC\u30DA\u30FC\u30B8\u306E\u8A2D\u5B9A",
    icon: icon,
    className: panelCategoryClassName
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30AB\u30C6\u30B4\u30EA\u30FC\u30DA\u30FC\u30B8\u3092\u30AB\u30B9\u30BF\u30DE\u30A4\u30BA"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: categoryEdit ? "ON" : "OFF",
    checked: categoryEdit,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_category_edit: value
        }
      });
    },
    className: "jinr-toggle"
  })), categoryEdit && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["SelectControl"], {
    label: "\u30AB\u30B9\u30BF\u30DE\u30A4\u30BA\u3059\u308B\u30AB\u30C6\u30B4\u30EA\u30FC\u3092\u9078\u629E",
    value: category,
    options: categoryList,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_category: value
        }
      });
    }
  })), newTemplate === 'template-full-width.php' && categoryEdit ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__["PluginDocumentSettingPanel"], {
    name: "jinr-display-setting",
    title: "\u8868\u793A\u8A2D\u5B9A",
    icon: icon,
    className: panelDisplayClassName
  }, newTemplate !== "template-full-width.php" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "SNS\u30DC\u30BF\u30F3\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: snsButtonDisplay ? "ON" : "OFF",
    checked: snsButtonDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_snsbutton_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), postType === "post" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u5E83\u544A\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: adsDisplay ? "ON" : "OFF",
    checked: adsDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_ads_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30A2\u30A4\u30AD\u30E3\u30C3\u30C1\u753B\u50CF\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: thumbnailDisplay ? "ON" : "OFF",
    checked: thumbnailDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_thumbnail_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), postType === "page" && newTemplate !== "template-full-width.php" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30BF\u30A4\u30C8\u30EB\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: titleDisplay ? "ON" : "OFF",
    checked: titleDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_title_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), postType === "post" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30D7\u30ED\u30D5\u30A3\u30FC\u30EB\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: profileDisplay ? "ON" : "OFF",
    checked: profileDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_profile_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), postType === "post" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u3053\u306E\u8A18\u4E8B\u3067\u95A2\u9023\u8A18\u4E8B\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: relatedPostDisplay ? "ON" : "OFF",
    checked: relatedPostDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_relatedpost_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), columnType === "t--post-one-column" && newTemplate !== "template-full-width.php" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30B5\u30A4\u30C9\u30D0\u30FC\u3092\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "\u30B5\u30A4\u30C9\u30D0\u30FC\u30A6\u30A3\u30B8\u30A7\u30C3\u30C8\u306B\u30D6\u30ED\u30C3\u30AF\u3092\u914D\u7F6E\u3059\u308B\u5FC5\u8981\u304C\u3042\u308A\u307E\u3059\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: sidebarDisplay1col ? "ON" : "OFF",
    checked: sidebarDisplay1col,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_sidebar1col_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), columnType === "t--post-two-column" && newTemplate !== "template-full-width.php" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30B5\u30A4\u30C9\u30D0\u30FC\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: sidebarDisplay2col ? "ON" : "OFF",
    checked: sidebarDisplay2col,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_sidebar2col_display: value
        }
      });
    },
    className: "jinr-toggle"
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u666F\u54C1\u8868\u793A\u6CD5\u306E\u30C6\u30AD\u30B9\u30C8\u3092\u975E\u8868\u793A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: representationsDisplay ? "ON" : "OFF",
    checked: representationsDisplay,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_representations_display: value
        }
      });
    },
    className: "jinr-toggle"
  }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__["PluginDocumentSettingPanel"], {
    name: "jinr-seo-setting",
    title: "SEO\u8A2D\u5B9A",
    icon: icon,
    className: panelSEOClassName
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "titie\u8A2D\u5B9A"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "\u3053\u3053\u306B\u5165\u529B\u3057\u305F\u30BF\u30A4\u30C8\u30EB\u304C\u3001\u8A18\u4E8B\u306Etitle\u30BF\u30B0\u3068\u3057\u3066\u6700\u512A\u5148\u3055\u308C\u307E\u3059\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: titleSEO,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_seotitle_display: value
        }
      });
    }
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "description\u8A2D\u5B9A",
    className: "jinr-kugiri"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "\u691C\u7D22\u7D50\u679C\u3067\u8868\u793A\u3055\u308C\u308B\u8A18\u4E8B\u306E\u8AAC\u660E\u3092120\u6587\u5B57\u4EE5\u5185\u3067\u8A18\u8F09\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextareaControl"], {
    value: descriptionSEO,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_description_display: value
        }
      });
    }
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "keyword\u8A2D\u5B9A",
    className: "jinr-kugiri"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "\u30AD\u30FC\u30EF\u30FC\u30C9\u3092\u300C,\u300D\u3067\u533A\u5207\u3063\u3066\u8A18\u8F09\uFF08\u4F8B:JIN , JIN:R , \u30C6\u30FC\u30DE\uFF09"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: keywordSEO,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_keyword_display: value
        }
      });
    }
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "\u30CF\u30C3\u30B7\u30E5\u30BF\u30B0\u8A2D\u5B9A",
    className: "jinr-kugiri"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "\u8A18\u4E8B\u304C\u30B7\u30A7\u30A2\u3055\u308C\u305F\u3068\u304D\u306B\u8868\u793A\u3059\u308B\u30CF\u30C3\u30B7\u30E5\u30BF\u30B0\u3092\u8A2D\u5B9A\uFF08\u4F8B:#JINR\uFF09"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: hastagSEO,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_hastag_display: value
        }
      });
    }
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "canonical\u306EURL\u8A2D\u5B9A",
    className: "jinr-kugiri"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "https\u3092\u542B\u3093\u3060\u6B63\u898FURL\u3092\u8A18\u8F09\uFF08\u4F8B:https://jinr.jp/\uFF09"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["__experimentalInputControl"], {
    value: canonicalSEO,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_canonical_display: value
        }
      });
    }
  })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
    label: "noindex\u8A2D\u5B9A",
    className: "jinr-kugiri"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
    className: "jinr-label-description"
  }, "\u3053\u306E\u8A18\u4E8B\u3092\u691C\u7D22\u7D50\u679C\u306B\u8868\u793A\u3055\u305B\u305F\u304F\u306A\u3044\u5834\u5408\u306FON\u306B\u3057\u3066\u304F\u3060\u3055\u3044\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
    label: noindexSEO ? "ON" : "OFF",
    checked: noindexSEO,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_noindex_display: value
        }
      });
    },
    className: "jinr-toggle"
  }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_edit_post__WEBPACK_IMPORTED_MODULE_7__["PluginDocumentSettingPanel"], {
    name: "jinr-tag-setting",
    title: "head\u5185\u3067\u8AAD\u307F\u8FBC\u3080\u30BF\u30B0\u8A2D\u5B9A",
    icon: icon,
    className: panelTagClassname
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextareaControl"], {
    value: headTag,
    onChange: function onChange(value) {
      return editPost({
        meta: {
          _jinr_headtag_article: value
        }
      });
    }
  }))));
};
Object(_wordpress_plugins__WEBPACK_IMPORTED_MODULE_4__["registerPlugin"])("jinr-plugin-document-setting-panel", {
  render: PluginDocumentSettingPanelDemo,
  icon: null
});

/***/ }),

/***/ "./src/PatternBlock.js":
/*!*****************************!*\
  !*** ./src/PatternBlock.js ***!
  \*****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _icons_jinr_template_button_svg__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./icons/jinr-template-button.svg */ "./src/icons/jinr-template-button.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);



var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  render = _wp$element.render;
wp.domReady(function () {
  setTimeout(function () {
    if (!document.querySelector(".edit-post-header-toolbar")) {
      return;
    }
    if (document.querySelector(".edit-post-header-toolbar")) {
      var toolbalEl = document.querySelector(".edit-post-header-toolbar");
      toolbalEl.insertAdjacentHTML("beforeend", '<div id="jinrPatternBlockButton"></div>');
    }
    render(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, "\u30C7\u30B6\u30A4\u30F3\u898B\u672C\u5E33")), document.getElementById("jinrPatternBlockButton"));
  }, 100);
});
wp.domReady(function () {
  setTimeout(function () {
    if (!document.querySelector(".edit-post-header-toolbar")) {
      return;
    }
    if (document.querySelector(".edit-post-header-toolbar")) {
      var toolbalEl = document.querySelector(".edit-post-header-toolbar");
      toolbalEl.insertAdjacentHTML("beforeend", '<div id="jinrShortCutListButton"></div>');
    }
    render(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, "\u30B7\u30E7\u30FC\u30C8\u30AB\u30C3\u30C8\u30AD\u30FC")), document.getElementById("jinrShortCutListButton"));
  }, 100);
});

/***/ }),

/***/ "./src/SelectIcon.js":
/*!***************************!*\
  !*** ./src/SelectIcon.js ***!
  \***************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../lib/font/jin-icons/icon-loder.json */ "../lib/font/jin-icons/icon-loder.json");
var _lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2___namespace = /*#__PURE__*/__webpack_require__.t(/*! ../../lib/font/jin-icons/icon-loder.json */ "../lib/font/jin-icons/icon-loder.json", 1);



var SelectIcon = function SelectIcon(_ref) {
  var isOpen = _ref.isOpen,
    closeModal = _ref.closeModal,
    onChangeIcon = _ref.onChangeIcon;
  var handleClose = function handleClose() {
    closeModal(false);
  };
  var handleClick = function handleClick(e) {
    onChangeIcon(e.currentTarget.dataset.icon);
    closeModal(false);
  };
  var iconList = [];
  Object.keys(_lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2__["iconParts"]).forEach(function (key, index) {
    var iconTitle = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h2", {
      key: "title-".concat(key),
      className: "a--customizer-icontitle"
    }, _lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2__["iconNames"][key]);
    iconList.push(iconTitle);
    var iconContainer = [];
    for (var i = 0; i < _lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2__["iconParts"][key].length; i++) {
      var iconFont = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("li", {
        key: "icon-".concat(key, "-").concat(i),
        className: "c--icon-item",
        onClick: handleClick,
        "data-icon": _lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2__["iconParts"][key][i]
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
        className: "jin-icons jin-ifont-" + _lib_font_jin_icons_icon_loder_json__WEBPACK_IMPORTED_MODULE_2__["iconParts"][key][i]
      }));
      iconContainer.push(iconFont);
    }
    var iconWrapper = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("ul", {
      key: "list-".concat(key),
      className: "c--customizer-iconlist"
    }, iconContainer);
    iconList.push(iconWrapper);
  });
  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["Fragment"], null, isOpen && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__["Modal"], {
    title: "\u30A2\u30A4\u30B3\u30F3\u9078\u629E",
    onRequestClose: handleClose
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "o--heading-iconlist"
  }, iconList)));
};
/* harmony default export */ __webpack_exports__["default"] = (SelectIcon);

/***/ }),

/***/ "./src/blocks.js":
/*!***********************!*\
  !*** ./src/blocks.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ "./node_modules/@babel/runtime/helpers/extends.js");
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/hooks */ "@wordpress/hooks");
/* harmony import */ var _wordpress_hooks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_4__);





var _lodash = lodash,
  assign = _lodash.assign;
var __ = wp.i18n.__;
var Fragment = wp.element.Fragment;
var InspectorControls = wp.blockEditor.InspectorControls;
var _wp$components = wp.components,
  PanelBody = _wp$components.PanelBody,
  TextareaControl = _wp$components.TextareaControl,
  RadioControl = _wp$components.RadioControl,
  SelectControl = _wp$components.SelectControl,
  ToggleControl = _wp$components.ToggleControl,
  TextControl = _wp$components.TextControl,
  BaseControl = _wp$components.BaseControl;
var withCustomBlockClass = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockListBlock) {
  return function (props) {
    var name = props.name,
      className = props.className;
    var customClassList = 'jinr-list';
    var customClassHeading = 'jinr-heading d--bold';
    if (name == "core/list") {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default()({}, props, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, customClassList)
      }));
    } else if (name == "core/heading") {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0___default()({}, props, {
        className: classnames__WEBPACK_IMPORTED_MODULE_4___default()(className, customClassHeading)
      }));
    }
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props);
  };
}, "withYourCustomBlockClass");
Object(_wordpress_hooks__WEBPACK_IMPORTED_MODULE_2__["addFilter"])("editor.BlockListBlock", "jinr/custom-class", withCustomBlockClass);
var saveListAttribute = function saveListAttribute(extraProps, blockType, attributes) {
  var customClassList = 'jinr-list';
  var customClassHeading = 'jinr-heading d--bold';
  var className = extraProps.className;
  if (blockType.name == "core/list") {
    extraProps.className = extraProps.className !== undefined ? extraProps.className + " " + customClassList : customClassList;
  } else if (blockType.name == "core/heading") {
    extraProps.className = extraProps.className !== undefined ? extraProps.className + " " + customClassHeading : customClassHeading;
  }
  return extraProps;
};
wp.hooks.addFilter('blocks.getSaveContent.extraProps', 'custom-attributes/save-list-attribute', saveListAttribute);
var disableDisplayOnBlocks = ['jinr-blocks/richmenuchild', 'jinr-blocks/accordionchild', 'jinr-blocks/timelinechild'];
var setSidebarSelectAttribute = function setSidebarSelectAttribute(settings, name) {
  return Object.assign({}, settings, {
    attributes: Object.assign({}, settings.attributes, {
      jinrBlocksCSSAttribute: {
        type: 'string'
      }
    })
  });
};
wp.hooks.addFilter('blocks.registerBlockType', 'custom-attributes/set-sidebar-select-attribute', setSidebarSelectAttribute);

/**
 * Add Custom Select to Image Sidebar
 */
var withSidebarSelect = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockEdit) {
  return function (props) {
    if (disableDisplayOnBlocks.includes(props.name)) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props);
    }
    var attributes = props.attributes,
      setAttributes = props.setAttributes;
    var jinrBlocksCSSAttribute = attributes.jinrBlocksCSSAttribute;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockEdit, props), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InspectorControls, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(PanelBody, {
      title: __('追加CSS'),
      initialOpen: false,
      onToggle: function onToggle(e) {
        return e === true ? jQuery(document).ready(function ($) {
          function setNativeValue(element, value) {
            var lastValue = element.value;
            element.value = value;
            var event = new Event("input", {
              target: element,
              bubbles: true
            });
            var tracker = element._valueTracker;
            if (tracker) {
              tracker.setValue(lastValue);
            }
            element.dispatchEvent(event);
          }
          $(".code-input textarea").each(function (index, element) {
            var cssEditor = wp.codeEditor.initialize(element, codeEditorSettings);
            element.value = cssEditor.codemirror.getValue();
            var observer = new MutationObserver(function () {
              setNativeValue(element, cssEditor.codemirror.getValue());
            });
            var elem = element.nextElementSibling;
            var config = {
              childList: true,
              attributes: true,
              subtree: true
            };
            observer.observe(elem, config);
          });
        }) : "";
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BaseControl, {
      label: "\u30D6\u30ED\u30C3\u30AF\u5C02\u7528CSS",
      className: "code-input"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(TextareaControl, {
      value: jinrBlocksCSSAttribute,
      onChange: function onChange(value) {
        setAttributes({
          jinrBlocksCSSAttribute: value
        });
      },
      rows: "20"
    })))));
  };
}, 'withSidebarSelect');
wp.hooks.addFilter('editor.BlockEdit', 'custom-attributes/with-sidebar-select', withSidebarSelect);

/**
 * Add custom class to block in Edit
 */
var withSidebarSelectProp = Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_3__["createHigherOrderComponent"])(function (BlockListBlock) {
  return function (props) {
    var attributes = props.attributes,
      isValid = props.isValid;
    if (disableDisplayOnBlocks.includes(props.name)) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props);
    }
    var jinrBlocksCSSAttribute = attributes.jinrBlocksCSSAttribute;
    if (jinrBlocksCSSAttribute) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("style", {
        jsx: "true"
      }, jinrBlocksCSSAttribute));
    } else {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(BlockListBlock, props));
    }
  };
}, 'withSidebarSelectProp');
wp.hooks.addFilter('editor.BlockListBlock', 'custom-attributes/with-sidebar-select-prop', withSidebarSelectProp);

/**
 * Save our custom attribute
 */
var saveSidebarSelectAttribute = function saveSidebarSelectAttribute(element, blockType, attributes, props) {
  if (disableDisplayOnBlocks.includes(blockType.name)) {
    return element;
  }
  var jinrBlocksCSSAttribute = attributes.jinrBlocksCSSAttribute;
  if (jinrBlocksCSSAttribute) {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "jinr-add-class-container"
    }, element, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("style", {
      jsx: "true"
    }, jinrBlocksCSSAttribute));
  }
  return element;
};
wp.hooks.addFilter('blocks.getSaveElement', 'custom-attributes/save-sidebar-select-attribute', saveSidebarSelectAttribute);

/***/ }),

/***/ "./src/blocks/accordion.js":
/*!*********************************!*\
  !*** ./src/blocks/accordion.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_accordion_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-accordion.svg */ "./src/icons/jinr-accordion.svg");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_6__);






var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useEffect = _wp$element.useEffect;

var ALLOWED_BLOCK = ["jinr-blocks/accordionchild"];
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/accordion", {
  title: "アコーディオン",
  category: "jinr-blocks",
  description: "Q&Aなどでよく使用されるクリック・タップで開閉できるラベル文章を作成できるブロックです。",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_accordion_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    accType: {
      type: "string",
      default: "d--accordion-default"
    },
    accDesign: {
      type: "string",
      default: "d--accordion-outline"
    },
    accDefaultColor: {
      type: "string",
      default: "#dddddd"
    },
    accTextColor: {
      type: "string",
      default: "#444444"
    },
    accContentsColor: {
      type: "string",
      default: "#ffffff"
    },
    blockId: {
      type: "string",
      default: ""
    }
  },
  edit: Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_4__["withSelect"])(function (select, blockData) {
    return {
      innerBlockProps: select("core/block-editor").getBlocks(blockData.clientId)
    };
  })(function (_ref) {
    var clientId = _ref.clientId,
      attributes = _ref.attributes,
      setAttributes = _ref.setAttributes,
      isSelected = _ref.isSelected,
      children = _ref.children;
    var accContentsColor = attributes.accContentsColor,
      accDefaultColor = attributes.accDefaultColor,
      accTextColor = attributes.accTextColor,
      accType = attributes.accType,
      accDesign = attributes.accDesign,
      blockId = attributes.blockId;
    var updateChildAttributes = Object(lodash__WEBPACK_IMPORTED_MODULE_6__["debounce"])(function () {
      setAttributes({
        blockId: clientId
      });
    }, 500);
    useEffect(function () {
      updateChildAttributes();
    }, [attributes, clientId]);
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "light-gray",
      color: "#dddddd"
    }, {
      name: "black",
      color: "#222222"
    }, {
      name: "light-blue",
      color: "#BED7F8"
    }, {
      name: "light-green",
      color: "#ade9d0"
    }, {
      name: "light-yellow",
      color: "#eddda5"
    }, {
      name: "light-orange",
      color: "#F8C6BE"
    }, {
      name: "light-pink",
      color: "#facbde"
    }, {
      name: "light-purple",
      color: "#d9c0f3"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var openColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "light-gray",
      color: "#dddddd"
    }, {
      name: "pale-gray",
      color: "#f8f8f8"
    }, {
      name: "pale-blue",
      color: "#f5f9fd"
    }, {
      name: "pale-green",
      color: "#f6fdfa"
    }, {
      name: "pale-yellow",
      color: "#fffbf0"
    }, {
      name: "pale-orange",
      color: "#fff6f2"
    }, {
      name: "pale-pink",
      color: "#fff5f9"
    }, {
      name: "pale-purple",
      color: "#faf5ff"
    }, {
      name: "transparent",
      color: "rgba(255,255,255,0)"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var textColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "black",
      color: "#444444"
    }, {
      name: "light-blue",
      color: "#74adf7"
    }, {
      name: "light-green",
      color: "#5ddf7e"
    }, {
      name: "light-yellow",
      color: "#f3d35e"
    }, {
      name: "light-orange",
      color: "#f77662"
    }, {
      name: "light-pink",
      color: "#f764a4"
    }, {
      name: "light-purple",
      color: "#8d3be6"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrOpenColorPallet = openColorPallet.concat(favoriteColorPallet);
    var jinrTextColorPallet = textColorPallet.concat(favoriteColorPallet);
    var onChangeaccContentsColor = function onChangeaccContentsColor(newValue) {
      setAttributes({
        accContentsColor: newValue
      });
    };
    var onChangeaccDefaultColor = function onChangeaccDefaultColor(newValue) {
      setAttributes({
        accDefaultColor: newValue
      });
    };
    var onChangeaccType = function onChangeaccType(newValue) {
      setAttributes({
        accType: newValue
      });
    };
    var onChangeaccTextColor = function onChangeaccTextColor(newValue) {
      setAttributes({
        accTextColor: newValue
      });
    };
    var onChangeaccDesign = function onChangeaccDesign(newValue) {
      setAttributes({
        accDesign: newValue
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("style", null, accDesign === "d--accordion-outline" ? accType === "d--accordion-default" ? "\n\t\t\t\t\t\t\t\t#block-".concat(clientId, " .a--accordion-title {\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .b--jinr-accordion-item{\n\t\t\t\t\t\t\t\t\tborder-color: ").concat(accDefaultColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .a--accordion-toggle span{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t") : "\n\t\t\t\t\t\t\t\t#block-".concat(clientId, " .a--accordion-title,\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .a--acc-question{\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .b--jinr-accordion-item{\n\t\t\t\t\t\t\t\t\tborder-color: ").concat(accDefaultColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .a--accordion-toggle span {\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t") : accType === "d--accordion-default" ? "\n\t\t\t\t\t\t\t\t#block-".concat(clientId, " .a--accordion-title{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accDefaultColor, ";\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .c--accordion-contents{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accContentsColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t") : "\n\t\t\t\t\t\t\t\t#block-".concat(clientId, " .a--accordion-title{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accDefaultColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .a--accordion-title,\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .a--acc-question{\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .a--accordion-toggle span {\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accTextColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t#block-").concat(clientId, " .c--accordion-contents{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accContentsColor, ";\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["RadioControl"], {
      selected: accDesign,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "accordion-outline.png"
        }),
        value: "d--accordion-outline"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "accordion-fill.png"
        }),
        value: "d--accordion-solid"
      }],
      onChange: onChangeaccDesign,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30BF\u30A4\u30D7\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["RadioControl"], {
      selected: accType,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "accordion-basic.png"
        }),
        value: "d--accordion-default"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "accordion-qa.png"
        }),
        value: "d--accordion-qa"
      }],
      onChange: onChangeaccType,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30A2\u30B3\u30FC\u30C7\u30A3\u30AA\u30F3\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ColorPalette"], {
      colors: jinrColorPallet,
      value: accDefaultColor,
      enableAlpha: true,
      onChange: onChangeaccDefaultColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30A2\u30B3\u30FC\u30C7\u30A3\u30AA\u30F3\u306E\u30BF\u30A4\u30C8\u30EB\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ColorPalette"], {
      colors: jinrTextColorPallet,
      value: accTextColor,
      enableAlpha: true,
      onChange: onChangeaccTextColor
    })), accDesign == "d--accordion-solid" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30A2\u30B3\u30FC\u30C7\u30A3\u30AA\u30F3\u5C55\u958B\u90E8\u306E\u80CC\u666F\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ColorPalette"], {
      colors: jinrOpenColorPallet,
      value: accContentsColor,
      enableAlpha: true,
      onChange: onChangeaccContentsColor
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-accordion ".concat(accType, " ").concat(accDesign, " ").concat(attributes.className == undefined ? "" : attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--parent-select"
    }, "\u89AA\u30D6\u30ED\u30C3\u30AF\u3092\u9078\u629E"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"], {
      allowedBlocks: ALLOWED_BLOCK,
      template: [["jinr-blocks/accordionchild", {}]]
    })));
  }),
  save: function save(props) {
    var attributes = props.attributes;
    var accTitleColorSelect = attributes.accTitleColorSelect,
      accTitleColor = attributes.accTitleColor,
      accTitleBackColorSelect = attributes.accTitleBackColorSelect,
      accTitleBackColor = attributes.accTitleBackColor,
      accContentsColorSelect = attributes.accContentsColorSelect,
      accContentsColor = attributes.accContentsColor,
      accDefaultColorSelect = attributes.accDefaultColorSelect,
      accDefaultColor = attributes.accDefaultColor,
      accTextColor = attributes.accTextColor,
      accQColorSelect = attributes.accQColorSelect,
      accQColor = attributes.accQColor,
      accType = attributes.accType,
      accDesign = attributes.accDesign,
      blockId = attributes.blockId;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-accordion block-".concat(blockId, " ").concat(accType, " ").concat(accDesign, " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("style", null, accDesign === "d--accordion-outline" ? accType === "d--accordion-default" ? "\n\t\t\t\t\t\t\t\t.block-".concat(blockId, " .a--accordion-title {\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .b--jinr-accordion-item{\n\t\t\t\t\t\t\t\t\tborder-color: ").concat(accDefaultColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .a--accordion-toggle span{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t") : "\n\t\t\t\t\t\t\t\t.block-".concat(blockId, " .a--accordion-title,\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .a--acc-question{\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .b--jinr-accordion-item{\n\t\t\t\t\t\t\t\t\tborder-color: ").concat(accDefaultColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .a--accordion-toggle span {\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t") : accType === "d--accordion-default" ? "\n\t\t\t\t\t\t\t\t.block-".concat(blockId, " .a--accordion-title{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accDefaultColor, "!important;\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .c--accordion-contents{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accContentsColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t") : "\n\t\t\t\t\t\t\t\t.block-".concat(blockId, " .a--accordion-title{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accDefaultColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .a--accordion-title,\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .a--acc-question{\n\t\t\t\t\t\t\t\t\tcolor: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .a--accordion-toggle span {\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accTextColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t.block-").concat(blockId, " .c--accordion-contents{\n\t\t\t\t\t\t\t\t\tbackground-color: ").concat(accContentsColor, "!important;\n\t\t\t\t\t\t\t\t}\n\t\t\t\t\t\t\t\t")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"].Content, null));
  }
}));

/***/ }),

/***/ "./src/blocks/accordionchild.js":
/*!**************************************!*\
  !*** ./src/blocks/accordionchild.js ***!
  \**************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__);




var useEffect = wp.element.useEffect;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/accordionchild", {
  title: "アコーディオンアイテム",
  parent: ["jinr-blocks/accordion"],
  description: "アコーディオンブロック専用のブロックです。",
  category: "jinr-blocks",
  icon: "admin-home",
  attributes: {
    accTitleContent: {
      type: "array",
      default: "",
      selector: "dt",
      source: "children"
    },
    contentColor: {
      type: "string",
      default: ""
    },
    defaultColor: {
      type: "string",
      default: ""
    },
    textColor: {
      type: "string",
      default: ""
    },
    design: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var clientId = props.clientId,
      attributes = props.attributes,
      setAttributes = props.setAttributes;
    var design = attributes.design,
      accTitleContent = attributes.accTitleContent,
      contentColor = attributes.contentColor,
      defaultColor = attributes.defaultColor,
      textColor = attributes.textColor;
    var parentArray = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__["select"])("core/block-editor").getBlockParents(clientId);
    var parent = parentArray[parentArray.length - 1];
    var parentAttributes = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__["select"])("core/block-editor").getBlockAttributes(parent);

    // 親ブロックの値をインナーブロックで新しく登録したattributesに代入

    if (parentAttributes.accContentsColor !== undefined) {
      setAttributes({
        contentColor: parentAttributes.accContentsColor
      });
    } else {
      setAttributes({
        contentColor: "#ffffff"
      });
    }
    if (parentAttributes.accDefaultColor !== undefined) {
      setAttributes({
        defaultColor: parentAttributes.accDefaultColor
      });
    } else {
      setAttributes({
        defaultColor: "#dddddd"
      });
    }
    if (parentAttributes.accTextColor !== undefined) {
      setAttributes({
        textColor: parentAttributes.accTextColor
      });
    } else {
      setAttributes({
        textColor: "#444444"
      });
    }
    setAttributes({
      design: parentAttributes.accDesign
    });
    var onChangeAccTitleContents = function onChangeAccTitleContents(newValue) {
      setAttributes({
        accTitleContent: newValue
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, design == "d--accordion-outline" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dl", {
      className: "b--jinr-accordion-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--accordion-toggle"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--acc-question ef"
    }, "Q"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"], {
      tagName: "dt",
      className: "a--accordion-title d--bold",
      value: accTitleContent,
      placeholder: "\u30A2\u30B3\u30FC\u30C7\u30A3\u30AA\u30F3\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B\u3057\u307E\u3059\u3002",
      onChange: onChangeAccTitleContents
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dd", {
      className: "c--accordion-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"], null))) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dl", {
      className: "b--jinr-accordion-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--accordion-toggle"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--acc-question ef"
    }, "Q"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"], {
      tagName: "dt",
      className: "a--accordion-title d--bold",
      value: accTitleContent,
      placeholder: "\u30A2\u30B3\u30FC\u30C7\u30A3\u30AA\u30F3\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B\u3057\u307E\u3059\u3002",
      onChange: onChangeAccTitleContents
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dd", {
      className: "c--accordion-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"], null))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var accTitleContent = attributes.accTitleContent,
      contentColor = attributes.contentColor,
      defaultColor = attributes.defaultColor,
      textColor = attributes.textColor,
      aColor = attributes.aColor,
      design = attributes.design;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", null, design == "d--accordion-outline" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dl", {
      className: "b--jinr-accordion-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--accordion-toggle"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--acc-question ef"
    }, "Q"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"].Content, {
      tagName: "dt",
      className: "a--accordion-title d--bold",
      value: accTitleContent
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dd", {
      className: "c--accordion-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"].Content, null))) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dl", {
      className: "b--jinr-accordion-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--accordion-toggle"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--acc-question ef"
    }, "Q"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"].Content, {
      tagName: "dt",
      className: "a--accordion-title d--bold",
      value: accTitleContent
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("dd", {
      className: "c--accordion-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"].Content, null))));
  }
}));

/***/ }),

/***/ "./src/blocks/background.js":
/*!**********************************!*\
  !*** ./src/blocks/background.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_background_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-background.svg */ "./src/icons/jinr-background.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);





var Fragment = wp.element.Fragment;
var _wp$blockEditor = wp.blockEditor,
  MediaUpload = _wp$blockEditor.MediaUpload,
  MediaUploadCheck = _wp$blockEditor.MediaUploadCheck,
  InnerBlocks = _wp$blockEditor.InnerBlocks;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/background", {
  title: "背景",
  description: "背景に色や柄をつけて情報を整理して見やすくするブロックです。カラムブロックやフルワイドブロックの中で使うのもおすすめです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_background_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    backgroundDesign: {
      type: "string",
      default: "d--background-design-flat"
    },
    backgroundShadowType: {
      type: "string",
      default: "d--background-shadow-s"
    },
    backgroundBgColorSelect: {
      type: "string",
      default: "simple"
    },
    backgroundBgColor: {
      type: "string",
      default: "#f5f5f5"
    },
    backgroundBorderDesign: {
      type: "string",
      default: "d--border-none"
    },
    backgroundBorderPosition: {
      type: "string",
      default: "d--border-outset"
    },
    backgroundBorderWidth: {
      type: "string",
      default: "d--border-1px"
    },
    backgroundBorderColor: {
      type: "string",
      default: "#c5c5c5"
    },
    backgroundPattern: {
      type: "string",
      default: "d--background-pattern1"
    },
    backgroundOpacity: {
      type: "number",
      default: 70
    },
    backgroundSize: {
      type: "number",
      default: 50
    },
    backgroundRepeat: {
      type: "string",
      default: "d--background-repeat-on"
    },
    backgroundX: {
      type: "number",
      default: 50
    },
    backgroundY: {
      type: "number",
      default: 50
    },
    imageID: {
      type: "number",
      default: 0
    },
    imageUrl: {
      type: "string",
      default: ""
    },
    toggleAnotherTab: {
      type: "boolean",
      default: false
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      clientId = props.clientId;
    var backgroundDesign = attributes.backgroundDesign,
      backgroundShadowType = attributes.backgroundShadowType,
      backgroundBgColorSelect = attributes.backgroundBgColorSelect,
      backgroundBgColor = attributes.backgroundBgColor,
      backgroundBorderPosition = attributes.backgroundBorderPosition,
      backgroundBorderDesign = attributes.backgroundBorderDesign,
      backgroundBorderWidth = attributes.backgroundBorderWidth,
      backgroundBorderColor = attributes.backgroundBorderColor,
      backgroundPattern = attributes.backgroundPattern,
      backgroundOpacity = attributes.backgroundOpacity,
      backgroundSize = attributes.backgroundSize,
      backgroundRepeat = attributes.backgroundRepeat,
      backgroundX = attributes.backgroundX,
      backgroundY = attributes.backgroundY,
      imageID = attributes.imageID,
      imageUrl = attributes.imageUrl,
      toggleAnotherTab = attributes.toggleAnotherTab;
    var onChangeBackgroundDesign = function onChangeBackgroundDesign(newValue) {
      setAttributes({
        backgroundDesign: newValue
      });
    };
    var onChangeBackgroundShadowType = function onChangeBackgroundShadowType(newValue) {
      setAttributes({
        backgroundShadowType: newValue
      });
    };
    var onChangeBackgroundBgColorSelect = function onChangeBackgroundBgColorSelect(newValue) {
      setAttributes({
        backgroundBgColorSelect: newValue
      });
    };
    var onChangeBackgroundBgColor = function onChangeBackgroundBgColor(newValue) {
      setAttributes({
        backgroundBgColor: newValue
      });
    };
    var onChangeBackgroundBorderDesign = function onChangeBackgroundBorderDesign(newValue) {
      setAttributes({
        backgroundBorderDesign: newValue
      });
      newValue === "d--border-double" && backgroundBorderWidth === "d--border-1px" && setAttributes({
        backgroundBorderWidth: "d--border-2px"
      });
    };
    var onChangeBackgroundBorderWidth = function onChangeBackgroundBorderWidth(newValue) {
      setAttributes({
        backgroundBorderWidth: newValue
      });
    };
    var onChangeBackgroundBorderColor = function onChangeBackgroundBorderColor(newValue) {
      setAttributes({
        backgroundBorderColor: newValue
      });
    };
    var onChangeBackgroundBorderPosition = function onChangeBackgroundBorderPosition(newValue) {
      setAttributes({
        backgroundBorderPosition: newValue
      });
    };
    var onChangeBackgroundRepeat = function onChangeBackgroundRepeat(newValue) {
      setAttributes({
        backgroundRepeat: newValue
      });
    };
    var onChangeBackgroundPattern = function onChangeBackgroundPattern(newValue) {
      newValue === "d--background-pattern2" && setAttributes({
        backgroundSize: 5
      });
      newValue === "d--background-pattern3" && setAttributes({
        backgroundSize: 5
      });
      newValue === "d--background-pattern4" && setAttributes({
        backgroundSize: 30
      });
      newValue === "d--background-pattern5" && setAttributes({
        backgroundSize: 90
      });
      newValue === "d--background-pattern6" && setAttributes({
        backgroundSize: 20
      });
      setAttributes({
        backgroundPattern: newValue
      });
    };
    var onChangeBackgroundOpacity = function onChangeBackgroundOpacity(newValue) {
      setAttributes({
        backgroundOpacity: newValue
      });
    };
    var onChangeBackgroundSize = function onChangeBackgroundSize(newValue) {
      setAttributes({
        backgroundSize: newValue
      });
    };
    var onChangeBackgroundX = function onChangeBackgroundX(newValue) {
      setAttributes({
        backgroundX: newValue
      });
    };
    var onChangeBackgroundY = function onChangeBackgroundY(newValue) {
      setAttributes({
        backgroundY: newValue
      });
    };
    var onChangeToggleAnotherTab = function onChangeToggleAnotherTab(newValue) {
      setAttributes({
        toggleAnotherTab: newValue
      });
    };
    var onSelectMedia = function onSelectMedia(media) {
      setAttributes({
        imageID: media.id,
        imageUrl: media.url
      });
    };
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ultra-light-gray",
      color: "#fcfcfc"
    }, {
      name: "pale-gray",
      color: "#f8f8f8"
    }, {
      name: "pale-blue",
      color: "#f5f9fd"
    }, {
      name: "pale-green",
      color: "#f6fdfa"
    }, {
      name: "pale-yellow",
      color: "#fffbf0"
    }, {
      name: "pale-orange",
      color: "#fff6f2"
    }, {
      name: "pale-pink",
      color: "#fff5f9"
    }, {
      name: "pale-purple",
      color: "#faf5ff"
    }, {
      name: "light-black",
      color: "#222222"
    }, {
      name: "white-transparent",
      color: "rgba(255,255,255,0.51)"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var borderColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "light-gray",
      color: "#c5c5c5"
    }, {
      name: "pale-gray",
      color: "#f8f8f8"
    }, {
      name: "pale-blue",
      color: "#f5f9fd"
    }, {
      name: "pale-green",
      color: "#f6fdfa"
    }, {
      name: "pale-yellow",
      color: "#fffbf0"
    }, {
      name: "pale-orange",
      color: "#fff6f2"
    }, {
      name: "pale-pink",
      color: "#fff5f9"
    }, {
      name: "pale-purple",
      color: "#faf5ff"
    }, {
      name: "light-black",
      color: "#222222"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrBorderColorPallet = borderColorPallet.concat(favoriteColorPallet);
    var bg_gradation_color_options = [{
      name: "Cherry Blossom",
      gradient: "linear-gradient(135deg, #ffeae4 0%, #ff9a9e 100%)",
      slug: "cherry-blossom"
    }, {
      name: "Sahara Sunset",
      gradient: "linear-gradient(135deg, #ffefe2 0%, #ff9b66 100%)",
      slug: "sahara-sunset"
    }, {
      name: "Tropical Sand",
      gradient: "linear-gradient(135deg, #fffed1 0%, #fddb92 100%)",
      slug: "tropical-sand"
    }, {
      name: "Milky Lime",
      gradient: "linear-gradient(135deg, #f8ffd1 0%, #a1e6b5 100%)",
      slug: "milky-lime"
    }, {
      name: "Spring Sky",
      gradient: "linear-gradient(135deg, #dffdff 0%, #95c1ff 100%)",
      slug: "spring-sky"
    }, {
      name: "Soft Violet",
      gradient: "linear-gradient(135deg, #edebff 0%, #c993f0 100%)",
      slug: "soft-violet"
    }];
    var patternRadioOptions = Array(6).fill(null).map(function (_, i) {
      return {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--jinr-item"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--background-preview d--background-pattern".concat(i + 1)
        })),
        value: "d--background-pattern".concat(i + 1)
      };
    });
    var patternOriginal = [{
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--jinr-block-button-style1"
      }, "\u30AA\u30EA\u30B8\u30CA\u30EB\u753B\u50CF\u3092\u4F7F\u3046"),
      value: "d--background-pattern-original"
    }];
    var totalPatternOptions = patternRadioOptions.concat(patternOriginal);
    var removeImage = function removeImage() {
      setAttributes({
        imageID: 0,
        imageUrl: ""
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("style", null, "\n\t\t\t\t\t\t.d--background-pattern2{\n\t\t\t\t\t\t\tbackground-image: url(".concat(JINR_VAR.image_path, "dot.png);\n\t\t\t\t\t\t}\n\t\t\t\t\t\t.d--background-pattern3 {\n\t\t\t\t\t\t\tbackground-image: url(").concat(JINR_VAR.image_path, "border.png);\n\t\t\t\t\t\t}\n\t\t\t\t\t\t.d--background-pattern4 {\n\t\t\t\t\t\t\tbackground-image: url(").concat(JINR_VAR.image_path, "stripe.png);\n\t\t\t\t\t\t\tbackground-position-x: 2px;\n\t\t\t\t\t\t}\n\t\t\t\t\t\t.d--background-pattern5 {\n\t\t\t\t\t\t\tbackground-image: url(").concat(JINR_VAR.image_path, "jigsaw.png);\n\t\t\t\t\t\t}\n\t\t\t\t\t\t.d--background-pattern6 {\n\t\t\t\t\t\t\tbackground-image: url(").concat(JINR_VAR.image_path, "grid.png);\n\t\t\t\t\t\t}\n\t\t\t\t\t\t")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A",
      className: "o--box-settings"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30BF\u30A4\u30D7\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: backgroundDesign,
      options: [{
        label: "フラット",
        value: "d--background-design-flat"
      }, {
        label: "影",
        value: "d--background-design-shadow"
      }],
      onChange: onChangeBackgroundDesign,
      className: "a--jinr-radio"
    })), backgroundDesign === "d--background-design-shadow" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5F71\u306E\u7A2E\u985E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: backgroundShadowType,
      options: [{
        label: "小",
        value: "d--background-shadow-s"
      }, {
        label: "中",
        value: "d--background-shadow-m"
      }, {
        label: "大",
        value: "d--background-shadow-l"
      }, {
        label: "ふんわり",
        value: "d--background-shadow-float"
      }],
      onChange: onChangeBackgroundShadowType,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u67A0\u7DDA\u30C7\u30B6\u30A4\u30F3"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: backgroundBorderDesign,
      options: [{
        label: "なし",
        value: "d--border-none"
      }, {
        label: "実線",
        value: "d--border-solid"
      }, {
        label: "点線",
        value: "d--border-dotted"
      }, {
        label: "破線",
        value: "d--border-dashed"
      }, {
        label: "二重線",
        value: "d--border-double"
      }],
      onChange: onChangeBackgroundBorderDesign,
      className: "a--jinr-radio"
    })), backgroundBorderDesign !== "d--border-none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u914D\u7F6E",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: backgroundBorderPosition,
      options: [{
        label: "アウトセット",
        value: "d--border-outset"
      }, {
        label: "インセット",
        value: "d--border-inset"
      }],
      onChange: onChangeBackgroundBorderPosition,
      className: "a--jinr-radio"
    })), backgroundBorderDesign !== "d--border-none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u592A\u3055",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: backgroundBorderWidth,
      options: backgroundBorderDesign !== "d--border-double" ? [{
        label: "1",
        value: "d--border-1px"
      }, {
        label: "2",
        value: "d--border-2px"
      }, {
        label: "3",
        value: "d--border-3px"
      }, {
        label: "4",
        value: "d--border-4px"
      }, {
        label: "5",
        value: "d--border-5px"
      }] : [{
        label: "2",
        value: "d--border-2px"
      }, {
        label: "3",
        value: "d--border-3px"
      }, {
        label: "4",
        value: "d--border-4px"
      }, {
        label: "5",
        value: "d--border-5px"
      }],
      onChange: onChangeBackgroundBorderWidth,
      className: "a--jinr-radio"
    })), backgroundBorderDesign !== "d--border-none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u8272",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrBorderColorPallet,
      value: backgroundBorderColor,
      enableAlpha: true,
      onChange: onChangeBackgroundBorderColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u80CC\u666F\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ButtonGroup"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: backgroundBgColorSelect === "simple" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          backgroundBgColorSelect: "simple",
          backgroundBgColor: "#f5f5f5"
        });
      }
    }, "\u5358\u8272"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: backgroundBgColorSelect === "grad" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          backgroundBgColorSelect: "grad",
          backgroundBgColor: "linear-gradient(135deg, #ffeae4 0%, #ff9a9e 100%)"
        });
      }
    }, "\u30B0\u30E9\u30C7\u30FC\u30B7\u30E7\u30F3")), backgroundBgColorSelect === "simple" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: backgroundBgColor,
      enableAlpha: true,
      onChange: onChangeBackgroundBgColor
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["GradientPicker"], {
      value: backgroundBgColor,
      onChange: onChangeBackgroundBgColor,
      gradients: bg_gradation_color_options
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30D1\u30BF\u30FC\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--bg-design-list c--box-list d--jinr-radio-image"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: backgroundPattern,
      options: totalPatternOptions,
      onChange: onChangeBackgroundPattern
    }))), backgroundPattern === "d--background-pattern-original" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u753B\u50CF\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, imageUrl !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: imageUrl
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: JINR_VAR.no_image
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUpload, {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: imageID,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u9078\u629E");
      }
    })), imageID != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), backgroundPattern !== "d--background-pattern1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u753B\u50CF\u306E\u30B5\u30A4\u30BA"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RangeControl"], {
      value: backgroundSize,
      onChange: onChangeBackgroundSize,
      min: 0,
      max: 100
    })), backgroundPattern !== "d--background-pattern1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u753B\u50CF\u306E\u900F\u660E\u5EA6"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RangeControl"], {
      value: backgroundOpacity,
      onChange: onChangeBackgroundOpacity,
      min: 0,
      max: 100
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-block b--jinr-background ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--background-container ".concat(backgroundDesign, " ").concat(backgroundShadowType, " ").concat(backgroundBorderPosition)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--background-inner ".concat(backgroundBorderDesign, " ").concat(backgroundBorderWidth, " t--round"),
      style: {
        borderColor: "".concat(backgroundBorderColor)
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-color",
      style: {
        background: backgroundBgColor
      }
    }), backgroundPattern === "d--background-pattern-original" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-image d--background-pattern-original t--round d--background-repeat-on",
      style: {
        opacity: "".concat(1 - backgroundOpacity * 0.01),
        backgroundImage: "url(".concat(imageUrl, ")"),
        backgroundSize: "".concat(backgroundSize, "%")
      }
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-image t--round ".concat(backgroundPattern),
      style: {
        opacity: "".concat(1 - backgroundOpacity * 0.01),
        backgroundSize: "".concat(backgroundSize / 3, "%")
      }
    }), backgroundShadowType === "d--background-shadow-float" && backgroundDesign === "d--background-design-shadow" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-float-item-top"
    }), backgroundShadowType === "d--background-shadow-float" && backgroundDesign === "d--background-design-shadow" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-float-item-bottom"
    })));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var backgroundDesign = attributes.backgroundDesign,
      backgroundShadowType = attributes.backgroundShadowType,
      backgroundBgColorSelect = attributes.backgroundBgColorSelect,
      backgroundBgColor = attributes.backgroundBgColor,
      backgroundBorderDesign = attributes.backgroundBorderDesign,
      backgroundBorderPosition = attributes.backgroundBorderPosition,
      backgroundBorderWidth = attributes.backgroundBorderWidth,
      backgroundBorderColor = attributes.backgroundBorderColor,
      backgroundPattern = attributes.backgroundPattern,
      backgroundOpacity = attributes.backgroundOpacity,
      backgroundSize = attributes.backgroundSize,
      backgroundRepeat = attributes.backgroundRepeat,
      backgroundX = attributes.backgroundX,
      backgroundY = attributes.backgroundY,
      imageID = attributes.imageID,
      imageUrl = attributes.imageUrl,
      toggleAnotherTab = attributes.toggleAnotherTab;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-block b--jinr-background ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--background-container ".concat(backgroundDesign, " ").concat(backgroundShadowType, " ").concat(backgroundBorderPosition)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--background-inner ".concat(backgroundBorderDesign, " ").concat(backgroundBorderWidth, " t--round"),
      style: {
        borderColor: "".concat(backgroundBorderColor)
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks.Content, null))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-color",
      style: {
        background: backgroundBgColor
      }
    }), backgroundPattern === "d--background-pattern-original" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-image d--background-pattern-original t--round d--background-repeat-on",
      style: {
        opacity: "".concat(1 - backgroundOpacity * 0.01),
        backgroundImage: "url(".concat(imageUrl, ")"),
        backgroundSize: "".concat(backgroundSize, "%")
      }
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-image t--round ".concat(backgroundPattern),
      style: {
        opacity: "".concat(1 - backgroundOpacity * 0.01),
        backgroundSize: "".concat(backgroundSize / 3, "%")
      }
    }), backgroundShadowType === "d--background-shadow-float" && backgroundDesign === "d--background-design-shadow" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-float-item-top"
    }), backgroundShadowType === "d--background-shadow-float" && backgroundDesign === "d--background-design-shadow" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--background-float-item-bottom"
    }));
  }
}));

/***/ }),

/***/ "./src/blocks/blogcard.js":
/*!********************************!*\
  !*** ./src/blocks/blogcard.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _icons_jinr_blogcard_svg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../icons/jinr-blogcard.svg */ "./src/icons/jinr-blogcard.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6__);






var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState;

/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__["registerBlockType"])("jinr-blocks/blogcard", {
  title: "ブログカード",
  description: "記事中で関連する記事をカード化して表示させることができるブロックです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_blogcard_svg__WEBPACK_IMPORTED_MODULE_4__["ReactComponent"], null),
  attributes: {
    postUrl: {
      type: "string",
      default: ""
    },
    postHiddenUrl: {
      type: "string",
      default: ""
    },
    postTitle: {
      type: "string",
      default: ""
    },
    thumbnailUrl: {
      type: "string",
      default: ""
    },
    toggleTab: {
      type: "boolean"
    },
    blogcardDesign: {
      type: "string",
      default: JINR_VAR.blogcard_design
    },
    blogcardTitle: {
      type: "string",
      default: JINR_VAR.blogcard_title
    },
    blogcardType: {
      type: "string",
      default: "d--blogcard-mysite"
    },
    postUrlExternal: {
      type: "string",
      default: ""
    },
    postTitleExternal: {
      type: "string",
      default: ""
    },
    blogcardLabel: {
      type: "string",
      default: JINR_VAR.blogcard_title
    },
    postImageExternal: {
      type: "string",
      default: JINR_VAR.no_image
    },
    mediaId: {
      type: "number",
      default: 0
    },
    jinrBlocksClassName: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected;
    var postUrl = attributes.postUrl,
      postHiddenUrl = attributes.postHiddenUrl,
      postTitle = attributes.postTitle,
      thumbnailUrl = attributes.thumbnailUrl,
      toggleTab = attributes.toggleTab,
      blogcardDesign = attributes.blogcardDesign,
      blogcardTitle = attributes.blogcardTitle,
      blogcardType = attributes.blogcardType,
      postUrlExternal = attributes.postUrlExternal,
      postTitleExternal = attributes.postTitleExternal,
      postImageExternal = attributes.postImageExternal,
      mediaId = attributes.mediaId,
      blogcardLabel = attributes.blogcardLabel;
    var _useState = useState(false),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState, 2),
      loading = _useState2[0],
      setLoading = _useState2[1];
    var _useState3 = useState(false),
      _useState4 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState3, 2),
      selected = _useState4[0],
      setSelected = _useState4[1];
    var onSubmitUrl = function onSubmitUrl(url) {
      setLoading(true);
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6___default()({
        path: "/jinr/post_by_url?url=".concat(url)
      }).then(function (res) {
        if (res.thumbnail_youtube_medium) {
          setAttributes({
            thumbnailUrl: res.thumbnail_youtube_medium ? res.thumbnail_youtube_medium : ""
          });
        } else {
          setAttributes({
            thumbnailUrl: res.thumbnail_small_url ? res.thumbnail_small_url : JINR_VAR.no_image
          });
        }
        setAttributes({
          postTitle: res.title
        });
        setSelected(true);
        setLoading(false);
      });
    };
    var onSubmitExternalUrl = function onSubmitExternalUrl(url) {
      setLoading(true);
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6___default()({
        path: "/jinr/external_url?url=".concat(url)
      }).then(function (res) {
        setAttributes({
          thumbnailUrl: JINR_VAR.no_image
        });
        setAttributes({
          postTitle: "記事がありません"
        });
        setSelected(true);
        setLoading(false);
      });
    };
    var this_site_domain = JINR_VAR.this_site_domain;
    var onChangePostUrl = function onChangePostUrl(newValue) {
      setAttributes({
        postUrl: newValue
      });
      if (newValue.indexOf(this_site_domain) === -1) {
        onSubmitExternalUrl(newValue);
        return;
      }
      onSubmitUrl(newValue);
    };
    var onChangeToggleTab = function onChangeToggleTab(newValue) {
      setAttributes({
        toggleTab: newValue
      });
    };
    var onChangeBlogcardDesign = function onChangeBlogcardDesign(newValue) {
      setAttributes({
        blogcardDesign: newValue
      });
    };
    var onChangeBlogcardTitle = function onChangeBlogcardTitle(newValue) {
      setAttributes({
        blogcardTitle: newValue
      });
    };
    var onChangeBlogcardType = function onChangeBlogcardType(newValue) {
      setAttributes({
        blogcardType: newValue
      });
    };
    var onChangePostTitleExternal = function onChangePostTitleExternal(newValue) {
      setAttributes({
        postTitleExternal: newValue
      });
    };
    var onChangePostUrlExternal = function onChangePostUrlExternal(newValue) {
      setAttributes({
        postUrlExternal: newValue
      });
    };
    var onSelectMedia = function onSelectMedia(media) {
      setAttributes({
        mediaId: media.id,
        postImageExternal: media.url
      });
    };
    var onChangeBlogcardLabel = function onChangeBlogcardLabel(newValue) {
      setAttributes({
        blogcardLabel: newValue
      });
    };
    var removeImage = function removeImage() {
      setAttributes({
        mediaId: 0,
        postImageExternal: JINR_VAR.no_image
      });
    };
    var postTitleFn = function postTitleFn() {
      if (!postUrl) {
        setAttributes({
          postTitle: "記事がありません"
        });
      } else if (postHiddenUrl) {
        _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6___default()({
          path: "/jinr/post_by_url?url=".concat(postHiddenUrl)
        }).then(function (res) {
          setAttributes({
            postTitle: "外部リンクは「手入力」にて設定してください"
          });
        });
        setAttributes({
          postHiddenUrl: ""
        });
      } else {
        if (postUrl === JINR_VAR.home_url || postUrl === JINR_VAR.home_url_slash) {
          setAttributes({
            postTitle: JINR_VAR.home_title
          });
        }
      }
      return postTitle;
    };
    var thumbnailFn = function thumbnailFn() {
      if (!postUrl) {
        setAttributes({
          thumbnailUrl: JINR_VAR.no_image
        });
      } else if (postHiddenUrl) {
        _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6___default()({
          path: "/jinr/post_by_url?url=".concat(postHiddenUrl)
        }).then(function (res) {
          if (res.thumbnail_youtube_medium) {
            setAttributes({
              thumbnailUrl: res.thumbnail_youtube_medium ? res.thumbnail_youtube_medium : ""
            });
          } else {
            setAttributes({
              thumbnailUrl: res.thumbnail_small_url ? res.thumbnail_small_url : JINR_VAR.no_image
            });
          }
        });
        setAttributes({
          postHiddenUrl: ""
        });
      } else {
        if (postUrl === JINR_VAR.home_url || postUrl === JINR_VAR.home_url_slash) {
          setAttributes({
            thumbnailUrl: JINR_VAR.home_thumbnail
          });
        }
      }
      return thumbnailUrl;
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["RadioControl"], {
      selected: blogcardDesign,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
          src: JINR_VAR.image_path + "blogcard-basic.png"
        }),
        value: "d--blogcard-style1"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
          src: JINR_VAR.image_path + "blogcard-compact.png"
        }),
        value: "d--blogcard-style2"
      }],
      onChange: onChangeBlogcardDesign,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30EA\u30F3\u30AF\u306E\u7A2E\u985E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["RadioControl"], {
      selected: blogcardType,
      options: [{
        label: "内部リンク",
        value: "d--blogcard-mysite"
      }, {
        label: "外部リンク",
        value: "d--blogcard-external"
      }],
      onChange: onChangeBlogcardType,
      className: "a--jinr-radio"
    })), blogcardType === "d--blogcard-mysite" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u8A18\u4E8BURL"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["URLInput"], {
      value: postUrl,
      onChange: onChangePostUrl
    })), blogcardType === "d--blogcard-external" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u5916\u90E8URL"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: postUrlExternal,
      placeholder: "URL\u3092\u5165\u529B\u3057\u3066\u304F\u3060\u3055\u3044",
      onChange: onChangePostUrlExternal
    })), blogcardType === "d--blogcard-external" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u8A18\u4E8B\u30BF\u30A4\u30C8\u30EB"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: postTitleExternal,
      onChange: onChangePostTitleExternal
    })), blogcardType === "d--blogcard-external" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30A2\u30A4\u30AD\u30E3\u30C3\u30C1\u753B\u50CF"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, postImageExternal !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
      src: postImageExternal
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
      src: JINR_VAR.no_image
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["MediaUploadCheck"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["MediaUpload"], {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: mediaId,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u7F6E\u304D\u63DB\u3048");
      }
    })), mediaId != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["MediaUploadCheck"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), blogcardDesign === "d--blogcard-style1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30E9\u30D9\u30EB\u306E\u30C6\u30AD\u30B9\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: blogcardLabel,
      onChange: onChangeBlogcardLabel
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u5225\u30BF\u30D6\u3067\u958B\u304F"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
      label: toggleTab ? "ON" : "OFF",
      checked: toggleTab,
      onChange: onChangeToggleTab,
      className: "jinr-toggle"
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "b--jinr-block b--jinr-blogcard ".concat(blogcardDesign, " ").concat(blogcardType, " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, blogcardDesign === "d--blogcard-style1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "a--blogcard-label ef"
    }, blogcardLabel === JINR_VAR.blogcard_title ? JINR_VAR.blogcard_title : blogcardLabel), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("a", {
      className: "o--blogcard-link t--round"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "c--blogcard-image"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
      className: "a--blogcard-img-src",
      src: blogcardType === "d--blogcard-mysite" ? thumbnailFn() : postImageExternal,
      alt: blogcardType === "d--blogcard-mysite" ? postTitleFn() : postTitleExternal
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "a--blogcard-title d--bold"
    }, blogcardType === "d--blogcard-mysite" ? postTitleFn() : postTitleExternal !== "" ? postTitleExternal : "ブロック設定でタイトルを入力してください"))));
  },
  save: function save() {
    return null;
  }
}));

/***/ }),

/***/ "./src/blocks/box.js":
/*!***************************!*\
  !*** ./src/blocks/box.js ***!
  \***************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_box_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-box.svg */ "./src/icons/jinr-box.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);





var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useEffect = _wp$element.useEffect;
var InnerBlocks = wp.blockEditor.InnerBlocks;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/simplebox", {
  title: "ボックス",
  description: "情報を整理して見やすくする装飾ボックスを作成するブロックです。見出しをつけることもできます。カスタマイザーでよく使うボックスの色をを設定しておくと便利です。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_box_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    registerData: {
      type: "string",
      default: ""
    },
    boxTitleContent: {
      type: "string",
      default: ""
    },
    quoteTitleContent: {
      type: "string",
      default: ""
    },
    boxColor: {
      type: "string",
      default: ""
    },
    boxDesign: {
      type: "string",
      default: "d--simple-box1"
    },
    toggleBoxTitleDisplay: {
      type: "boolean",
      default: false
    },
    boxEditToggle: {
      type: "boolean"
    },
    clientId: {
      type: 'string'
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var registerData = attributes.registerData,
      boxColor = attributes.boxColor,
      boxDesign = attributes.boxDesign,
      toggleBoxTitleDisplay = attributes.toggleBoxTitleDisplay,
      boxTitleContent = attributes.boxTitleContent,
      quoteTitleContent = attributes.quoteTitleContent,
      boxEditToggle = attributes.boxEditToggle;
    function hex2rgba(hex) {
      var alpha = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
      // ロングバージョンの場合（例：#FF0000）
      var r = hex.match(/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i);
      var c = null;
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return parseInt(x, 16);
        });
      }
      // ショートバージョンの場合（例：#F00）
      r = hex.match(/^#([0-9a-f])([0-9a-f])([0-9a-f])$/i);
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return 0x11 * parseInt(x, 16);
        });
      }
      // 該当しない場合は、nullを返す.
      if (!c) {
        return null;
      }
      return "rgba(".concat(c[0], ", ").concat(c[1], ", ").concat(c[2], ", ").concat(alpha, ")");
    }
    var onChangeRadioboxDesign = function onChangeRadioboxDesign(newValue) {
      setAttributes({
        boxDesign: newValue
      });
      if (newValue == "d--simple-box1") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[0]
        });
      } else if (newValue == "d--simple-box2") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[1]
        });
      } else if (newValue == "d--simple-box3") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[2]
        });
      } else if (newValue == "d--simple-box4") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[3]
        });
      } else if (newValue == "d--simple-box5") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[4]
        });
      } else if (newValue == "d--simple-box6") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[5]
        });
      } else if (newValue == "d--simple-box7") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[6]
        });
      } else if (newValue == "d--simple-box8") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[7]
        });
      } else if (newValue == "d--simple-box9") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[8]
        });
      } else if (newValue == "d--simple-box10") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[9]
        });
      } else if (newValue == "d--simple-box11") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[10]
        });
      } else if (newValue == "d--simple-box12") {
        setAttributes({
          boxColor: JINR_VAR.simple_box_color[11]
        });
      } else if (newValue == "d--heading-box1") {
        //ここからタイトル付き
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[0]
        });
      } else if (newValue == "d--heading-box2") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[1]
        });
      } else if (newValue == "d--heading-box3") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[2]
        });
      } else if (newValue == "d--heading-box4") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[3]
        });
      } else if (newValue == "d--heading-box5") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[4]
        });
      } else if (newValue == "d--heading-box6") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[5]
        });
      } else if (newValue == "d--heading-box7") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[6]
        });
      } else if (newValue == "d--heading-box8") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[7]
        });
      } else if (newValue == "d--heading-box9") {
        setAttributes({
          boxColor: JINR_VAR.heading_box_color[8]
        });
      }
      if (boxEditToggle == true) {
        setAttributes({
          boxEditToggle: false
        });
      }
    };
    var onChangeBoxColor = function onChangeBoxColor(newValue) {
      setAttributes({
        boxColor: newValue
      });
    };
    var onChangeToggleBoxTitleDisplay = function onChangeToggleBoxTitleDisplay(newValue) {
      setAttributes({
        toggleBoxTitleDisplay: newValue
      });
    };
    var onChangeBoxTitleContent = function onChangeBoxTitleContent(newValue) {
      setAttributes({
        boxTitleContent: newValue
      });
    };
    var onChangeQuoteTitleContent = function onChangeQuoteTitleContent(newValue) {
      setAttributes({
        quoteTitleContent: newValue
      });
    };
    var onChangeBoxEditToggle = function onChangeBoxEditToggle(newValue) {
      setAttributes({
        boxEditToggle: newValue
      });
      if (newValue == false) {
        setAttributes({
          boxColor: hex2rgba(registerDataSet())
        });
      }
    };
    var SimpleBoxRadioOptions = Array(12).fill(null).map(function (_, i) {
      return {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--jinr-item a--box-item"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
          className: "b--jinr-box d--simple-box".concat(i + 1)
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "c--simple-box-inner"
        }, "\u3053\u3053\u306B\u30C6\u30AD\u30B9\u30C8\u304C\u5165\u308A\u307E\u3059\u3002"))),
        value: "d--simple-box".concat(i + 1)
      };
    });
    var TitleBoxRadioOptions = Array(9).fill(null).map(function (_, i) {
      return {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--jinr-item a--box-item"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
          className: "b--jinr-box d--heading-box".concat(i + 1)
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--simple-box-title"
        }, "\u30BF\u30A4\u30C8\u30EB\u304C\u5165\u308A\u307E\u3059"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "c--simple-box-inner"
        }, "\u3053\u3053\u306B\u30C6\u30AD\u30B9\u30C8\u304C\u5165\u308A\u307E\u3059\u3002"))),
        value: "d--heading-box".concat(i + 1)
      };
    });
    var TotalBoxRadioOptions = SimpleBoxRadioOptions.concat(TitleBoxRadioOptions);
    var registerDataSet = function registerDataSet() {
      if (boxDesign == "d--simple-box1") {
        return JINR_VAR.simple_box_color[0];
      } else if (boxDesign == "d--simple-box2") {
        return JINR_VAR.simple_box_color[1];
      } else if (boxDesign == "d--simple-box3") {
        return JINR_VAR.simple_box_color[2];
      } else if (boxDesign == "d--simple-box4") {
        return JINR_VAR.simple_box_color[3];
      } else if (boxDesign == "d--simple-box5") {
        return JINR_VAR.simple_box_color[4];
      } else if (boxDesign == "d--simple-box6") {
        return JINR_VAR.simple_box_color[5];
      } else if (boxDesign == "d--simple-box7") {
        return JINR_VAR.simple_box_color[6];
      } else if (boxDesign == "d--simple-box8") {
        return JINR_VAR.simple_box_color[7];
      } else if (boxDesign == "d--simple-box9") {
        return JINR_VAR.simple_box_color[8];
      } else if (boxDesign == "d--simple-box10") {
        return JINR_VAR.simple_box_color[9];
      } else if (boxDesign == "d--simple-box11") {
        return JINR_VAR.simple_box_color[10];
      } else if (boxDesign == "d--simple-box12") {
        return JINR_VAR.simple_box_color[11];
      } else if (boxDesign == "d--heading-box1") {
        //ここからタイトル付き
        return JINR_VAR.heading_box_color[0];
      } else if (boxDesign == "d--heading-box2") {
        return JINR_VAR.heading_box_color[1];
      } else if (boxDesign == "d--heading-box3") {
        return JINR_VAR.heading_box_color[2];
      } else if (boxDesign == "d--heading-box4") {
        return JINR_VAR.heading_box_color[3];
      } else if (boxDesign == "d--heading-box5") {
        return JINR_VAR.heading_box_color[4];
      } else if (boxDesign == "d--heading-box6") {
        return JINR_VAR.heading_box_color[5];
      } else if (boxDesign == "d--heading-box7") {
        return JINR_VAR.heading_box_color[6];
      } else if (boxDesign == "d--heading-box8") {
        return JINR_VAR.heading_box_color[7];
      } else if (boxDesign == "d--heading-box9") {
        return JINR_VAR.heading_box_color[8];
      }
    };
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ghostwhite",
      color: "#f8f8ff"
    }, {
      name: "azure",
      color: "#f2fdfd"
    }, {
      name: "ivory",
      color: "#fffcf0"
    }, {
      name: "cherry-blossom",
      color: "#fff5fa"
    }, {
      name: "pale-purple",
      color: "#f1f1fe"
    }, {
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "pale-blue",
      color: "#D2E9FD"
    }, {
      name: "pale-red",
      color: "#FBE3E6"
    }, {
      name: "pale-green",
      color: "#e8fce8"
    }, {
      name: "pale-brown",
      color: "#f7eee9"
    }, {
      name: "ultra-light-grayish-green",
      color: "#e9f2f0"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var defaultColorPallet2 = [{
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "english-green",
      color: "#70a9a1"
    }, {
      name: "grayish-brown",
      color: "#b89a89"
    }, {
      name: "light-purple",
      color: "#cdbbf2"
    }, {
      name: "light-blue",
      color: "#98ebde"
    }, {
      name: "light-yellow",
      color: "#fde791"
    }, {
      name: "light-pink",
      color: "#ff85c2"
    }, {
      name: "black",
      color: "#000000"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrColorPallet2 = defaultColorPallet2.concat(favoriteColorPallet);
    var jinrColorPallet3 = defaultColorPallet.concat(defaultColorPallet2).concat(favoriteColorPallet);
    var colorPalletSet = function colorPalletSet() {
      if (boxDesign == "d--simple-box5" || boxDesign == "d--simple-box8" || boxDesign == "d--simple-box10") {
        return jinrColorPallet;
      } else {
        return jinrColorPallet2;
      }
    };
    var overRideBox = function overRideBox() {
      var overRideValues = "";
      if (boxEditToggle === true) {
        if (boxDesign == "d--simple-box1") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[0]) {
            overRideValues += "#block-" + clientId + " .d--simple-box1{border-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box1 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box2") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[1]) {
            overRideValues += "#block-" + clientId + " .d--simple-box2{border-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box2::before{border-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box2 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box3") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[2]) {
            overRideValues += "#block-" + clientId + " .d--simple-box3{border-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box3 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box4") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[3]) {
            overRideValues += "#block-" + clientId + " .d--simple-box4::before{background-image:linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px),linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px);} #block-" + clientId + " .d--simple-box4 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box5") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[4]) {
            overRideValues += "#block-" + clientId + " .d--simple-box5{background-color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box6") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[5]) {
            overRideValues += "#block-" + clientId + " .d--simple-box6{border-color:" + boxColor + ";background-color:" + hex2rgba(boxColor, 0.1) + ";} #block-" + clientId + " .d--simple-box6 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box7") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[6]) {
            overRideValues += "#block-" + clientId + " .d--simple-box7{border-color:" + boxColor + ";background-color:" + hex2rgba(boxColor, 0.1) + ";} #block-" + clientId + " .d--simple-box7 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box8") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[7]) {
            overRideValues += "#block-" + clientId + " .d--simple-box8{background-color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box9") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[8]) {
            overRideValues += "#block-" + clientId + " .d--simple-box9{background-color:" + hex2rgba(boxColor, 0.1) + ";} #block-" + clientId + " .d--simple-box9::after{background-image:linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px),linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px);} #block-" + clientId + " .d--simple-box9 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box10") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[9]) {
            overRideValues += "#block-" + clientId + " .d--simple-box10{background-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box10::after{background:linear-gradient(45deg, " + boxColor + " 50%, transparent 52%),linear-gradient(315deg, " + boxColor + " 50%, transparent 52%);background-size: 12px 24px;background-repeat: repeat-x;}";
          }
        } else if (boxDesign == "d--simple-box11") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[10]) {
            overRideValues += "#block-" + clientId + " .d--simple-box11{border-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box11::before,#block-" + clientId + " .d--simple-box11::after{border-color:" + boxColor + ";} #block-" + clientId + " .d--simple-box11 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--heading-box1") {
          //ここからタイトル付き
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[0]) {
            overRideValues += "#block-" + clientId + " .d--heading-box1{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box1 .a--simple-box-title{background-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box1 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box2") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[1]) {
            overRideValues += "#block-" + clientId + " .d--heading-box2{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box2 .a--simple-box-title{background-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box2 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box3") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[2]) {
            overRideValues += "#block-" + clientId + " .d--heading-box3{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box3 .a--simple-box-title{background-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box3 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box4") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[3]) {
            overRideValues += "#block-" + clientId + " .d--heading-box4{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box4 .a--simple-box-title{background-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box4 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box6") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[5]) {
            overRideValues += "#block-" + clientId + " .d--heading-box6{background-color:" + hex2rgba(boxColor, 0.1) + ";} #block-" + clientId + " .d--heading-box6 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--heading-box7") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[6]) {
            overRideValues += "#block-" + clientId + " .d--heading-box7{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box7 .a--simple-box-title{color:" + boxColor + "; border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box7 .a--simple-box-title::before{background-color:" + hex2rgba(boxColor, 0.6) + ";}";
          }
        } else if (boxDesign == "d--heading-box8") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[7]) {
            overRideValues += "#block-" + clientId + " .d--heading-box8{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box8 .a--simple-box-title{color:" + boxColor + "; border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box8 .a--simple-box-title::before{background-color:" + hex2rgba(boxColor, 0.6) + ";}";
          }
        } else if (boxDesign == "d--heading-box9") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[8]) {
            overRideValues += "#block-" + clientId + " .d--heading-box9{border-color:" + boxColor + ";} #block-" + clientId + " .d--heading-box9 .a--simple-box-title{background-color:" + boxColor + ";}";
          }
        }
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("style", {
          dangerouslySetInnerHTML: {
            __html: overRideValues
          }
        });
      }
      return overRideValues;
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A",
      className: "o--box-settings"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--box-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: boxDesign,
      options: TotalBoxRadioOptions,
      onChange: onChangeRadioboxDesign
    }))), boxDesign.includes("d--heading-box") == false && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30BF\u30A4\u30C8\u30EB\u3092\u3064\u3051\u308B",
      className: "jinr-kugiri"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ToggleControl"], {
      label: toggleBoxTitleDisplay ? "ON" : "OFF",
      checked: toggleBoxTitleDisplay,
      onChange: onChangeToggleBoxTitleDisplay,
      className: "jinr-toggle"
    })), boxDesign !== "d--simple-box12" && boxDesign !== "d--heading-box5" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30DC\u30C3\u30AF\u30B9\u3092\u7DE8\u96C6",
      className: "jinr-kugiri"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ToggleControl"], {
      label: boxEditToggle ? "ON" : "OFF",
      checked: boxEditToggle,
      onChange: onChangeBoxEditToggle,
      className: "jinr-toggle"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "jinr-block-description"
    }, boxEditToggle === true ? "OFFにすると設定した情報がリセットされ、登録したデザインに戻ります。他のボックスを選択すると自動でOFFになります。" : "ONにすると登録したボックスを個別に編集できます。")), boxEditToggle === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30DC\u30C3\u30AF\u30B9\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: colorPalletSet(),
      value: !boxColor ? hex2rgba(registerDataSet()) : boxColor,
      enableAlpha: false,
      onChange: onChangeBoxColor
    })))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-block b--jinr-box ".concat(boxDesign, " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, function () {
      if (boxDesign.indexOf("d--simple-box") != -1 && toggleBoxTitleDisplay === true) return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"], {
        tagName: "div",
        className: "a--simple-box-title d--bold",
        value: boxTitleContent,
        placeholder: "\u3053\u3053\u306B\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B\u3057\u307E\u3059",
        onChange: onChangeBoxTitleContent
      });else if (boxDesign.indexOf("d--heading-box") != -1) return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"], {
        tagName: "div",
        className: "a--simple-box-title d--bold",
        value: boxTitleContent,
        placeholder: "\u3053\u3053\u306B\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B\u3057\u307E\u3059",
        onChange: onChangeBoxTitleContent
      });
    }(), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--simple-box-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null)), boxDesign === "d--simple-box12" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"], {
      tagName: "div",
      className: "a--simple-box-quotetitle",
      value: quoteTitleContent,
      placeholder: "\u3053\u3053\u306B\u5F15\u7528\u5143\u3092\u5165\u529B\u3057\u307E\u3059",
      onChange: onChangeQuoteTitleContent
    })), overRideBox()));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var registerData = attributes.registerData,
      boxColor = attributes.boxColor,
      boxDesign = attributes.boxDesign,
      boxTitleContent = attributes.boxTitleContent,
      quoteTitleContent = attributes.quoteTitleContent,
      toggleBoxTitleDisplay = attributes.toggleBoxTitleDisplay,
      boxEditToggle = attributes.boxEditToggle,
      clientId = attributes.clientId;
    function hex2rgba(hex) {
      var alpha = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
      // ロングバージョンの場合（例：#FF0000）
      var r = hex.match(/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i);
      var c = null;
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return parseInt(x, 16);
        });
      }
      // ショートバージョンの場合（例：#F00）
      r = hex.match(/^#([0-9a-f])([0-9a-f])([0-9a-f])$/i);
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return 0x11 * parseInt(x, 16);
        });
      }
      // 該当しない場合は、nullを返す.
      if (!c) {
        return null;
      }
      return "rgba(".concat(c[0], ", ").concat(c[1], ", ").concat(c[2], ", ").concat(alpha, ")");
    }
    var overRideBox = function overRideBox() {
      var overRideValues = "";
      if (boxEditToggle === true) {
        if (boxDesign == "d--simple-box1") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[0]) {
            overRideValues += ".block-" + clientId + ".d--simple-box1{border-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box1 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box2") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[1]) {
            overRideValues += ".block-" + clientId + ".d--simple-box2{border-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box2::before{border-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box2 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box3") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[2]) {
            overRideValues += ".block-" + clientId + ".d--simple-box3{border-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box3 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box4") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[3]) {
            overRideValues += ".block-" + clientId + ".d--simple-box4::before{background-image:linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px),linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px);} .block-" + clientId + ".d--simple-box4 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box5") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[4]) {
            overRideValues += ".block-" + clientId + ".d--simple-box5{background-color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box6") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[5]) {
            overRideValues += ".block-" + clientId + ".d--simple-box6{border-color:" + boxColor + ";background-color:" + hex2rgba(boxColor, 0.1) + ";} .block-" + clientId + ".d--simple-box6 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box7") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[6]) {
            overRideValues += ".block-" + clientId + ".d--simple-box7{border-color:" + boxColor + ";background-color:" + hex2rgba(boxColor, 0.1) + ";} .block-" + clientId + ".d--simple-box7 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box8") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[7]) {
            overRideValues += ".block-" + clientId + ".d--simple-box8{background-color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box9") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[8]) {
            overRideValues += ".block-" + clientId + ".d--simple-box9{background-color:" + hex2rgba(boxColor, 0.1) + ";} .block-" + clientId + ".d--simple-box9::after{background-image:linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px),linear-gradient(to right," + boxColor + "," + boxColor + " 4px,transparent 4px,transparent 8px);} .block-" + clientId + ".d--simple-box9 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--simple-box10") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[9]) {
            overRideValues += ".block-" + clientId + ".d--simple-box10{background-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box10::after{background:linear-gradient(45deg, " + boxColor + " 50%, transparent 52%),linear-gradient(315deg, " + boxColor + " 50%, transparent 52%);background-size: 12px 24px;background-repeat: repeat-x;}";
          }
        } else if (boxDesign == "d--simple-box11") {
          if (boxColor && boxColor !== JINR_VAR.simple_box_color[10]) {
            overRideValues += ".block-" + clientId + ".d--simple-box11{border-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box11::before,.block-" + clientId + ".d--simple-box11::after{border-color:" + boxColor + ";} .block-" + clientId + ".d--simple-box11 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--heading-box1") {
          //ここからタイトル付き
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[0]) {
            overRideValues += ".block-" + clientId + ".d--heading-box1{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box1 .a--simple-box-title{background-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box1 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box2") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[1]) {
            overRideValues += ".block-" + clientId + ".d--heading-box2{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box2 .a--simple-box-title{background-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box2 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box3") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[2]) {
            overRideValues += ".block-" + clientId + ".d--heading-box3{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box3 .a--simple-box-title{background-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box3 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box4") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[3]) {
            overRideValues += ".block-" + clientId + ".d--heading-box4{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box4 .a--simple-box-title{background-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box4 .a--simple-box-title::before{border-top-color:" + boxColor + "!important;}";
          }
        } else if (boxDesign == "d--heading-box6") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[5]) {
            overRideValues += ".block-" + clientId + ".d--heading-box6{background-color:" + hex2rgba(boxColor, 0.1) + ";} .block-" + clientId + ".d--heading-box6 .a--simple-box-title{color:" + boxColor + ";}";
          }
        } else if (boxDesign == "d--heading-box7") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[6]) {
            overRideValues += ".block-" + clientId + ".d--heading-box7{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box7 .a--simple-box-title{color:" + boxColor + "; border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box7 .a--simple-box-title::before{background-color:" + hex2rgba(boxColor, 0.6) + ";}";
          }
        } else if (boxDesign == "d--heading-box8") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[7]) {
            overRideValues += ".block-" + clientId + ".d--heading-box8{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box8 .a--simple-box-title{color:" + boxColor + "; border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box8 .a--simple-box-title::before{background-color:" + hex2rgba(boxColor, 0.6) + ";}";
          }
        } else if (boxDesign == "d--heading-box9") {
          if (boxColor && boxColor !== JINR_VAR.heading_box_color[8]) {
            overRideValues += ".block-" + clientId + ".d--heading-box9{border-color:" + boxColor + ";} .block-" + clientId + ".d--heading-box9 .a--simple-box-title{background-color:" + boxColor + ";}";
          }
        }
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("style", {
          dangerouslySetInnerHTML: {
            __html: overRideValues
          }
        });
      }
      return overRideValues;
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-block b--jinr-box ".concat(boxDesign, " ").concat(boxEditToggle === true ? "block-" + clientId : "", " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, function () {
      if (boxDesign.indexOf("d--simple-box") != -1 && toggleBoxTitleDisplay === true) return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"].Content, {
        tagName: "div",
        className: "a--simple-box-title d--bold",
        value: boxTitleContent
      });else if (boxDesign.indexOf("d--heading-box") != -1) return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"].Content, {
        tagName: "div",
        className: "a--simple-box-title d--bold",
        value: boxTitleContent
      });
    }(), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--simple-box-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks.Content, null)), boxDesign === "d--simple-box12" && quoteTitleContent != "" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["RichText"].Content, {
      tagName: "div",
      className: "a--simple-box-quotetitle",
      value: quoteTitleContent
    })), overRideBox());
  }
}));

/***/ }),

/***/ "./src/blocks/button.js":
/*!******************************!*\
  !*** ./src/blocks/button.js ***!
  \******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _icons_jinr_button_svg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../icons/jinr-button.svg */ "./src/icons/jinr-button.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);



function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }




var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState,
  useRef = _wp$element.useRef;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["registerBlockType"])("jinr-blocks/button", {
  title: "ボタン",
  description: "アフィリエイトリンクなどクリックを促すところで使うと効果的なボタンを作成するブロックです。カスタマイザーでボタンデザインを登録しておくと便利です。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_icons_jinr_button_svg__WEBPACK_IMPORTED_MODULE_5__["ReactComponent"], null),
  attributes: {
    registerData: {
      type: "number",
      default: -1
    },
    content: {
      type: "string",
      default: ""
    },
    inputUrl: {
      type: "string",
      default: ""
    },
    buttonDesign: {
      type: "string",
      default: JINR_VAR.jinr_button_design[0]
    },
    buttonLayout: {
      type: "string",
      default: "d--button-center"
    },
    buttonType: {
      type: "string",
      default: "registered"
    },
    registeredButton: {
      type: "string",
      default: "1"
    },
    afCode: {
      type: "string",
      default: ""
    },
    afCodeType: {
      type: "string",
      default: "manual"
    },
    buttonColor: {
      type: "string",
      default: JINR_VAR.theme_color
    },
    radioButtonSize: {
      type: "string",
      default: "medium"
    },
    buttonRound: {
      type: "number",
      default: 5
    },
    radioShadowSize: {
      type: "string",
      default: "none"
    },
    buttonAnimation: {
      type: "string",
      default: "none"
    },
    buttonHoverAnimation: {
      type: "string",
      default: "none"
    },
    toggleTab: {
      type: "boolean"
    },
    toggleMicrocopy: {
      type: "boolean"
    },
    toggleArrow: {
      type: "boolean"
    },
    microcopyText: {
      type: "string",
      default: ""
    },
    microcopyDesign: {
      type: "string",
      default: "d--button-microcopy1"
    },
    arrowIcon: {
      type: 'string',
      default: "none"
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      onReplace = props.onReplace,
      onRemove = props.onRemove;
    var registerData = attributes.registerData,
      content = attributes.content,
      inputUrl = attributes.inputUrl,
      buttonDesign = attributes.buttonDesign,
      buttonType = attributes.buttonType,
      buttonLayout = attributes.buttonLayout,
      registeredButton = attributes.registeredButton,
      afCode = attributes.afCode,
      afCodeType = attributes.afCodeType,
      registeredCode = attributes.registeredCode,
      buttonColor = attributes.buttonColor,
      radioButtonSize = attributes.radioButtonSize,
      buttonRound = attributes.buttonRound,
      radioShadowSize = attributes.radioShadowSize,
      buttonAnimation = attributes.buttonAnimation,
      toggleTab = attributes.toggleTab,
      toggleMicrocopy = attributes.toggleMicrocopy,
      toggleArrow = attributes.toggleArrow,
      microcopyText = attributes.microcopyText,
      microcopyDesign = attributes.microcopyDesign,
      clientId = attributes.clientId,
      arrowIcon = attributes.arrowIcon;
    var _useState = useState("only"),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default()(_useState, 2),
      buttonColorSelect = _useState2[0],
      setButtonColorSelect = _useState2[1];
    setAttributes({
      clientId: clientId
    });
    var mainRef = useRef(null);
    var subRef = useRef(null);
    var onChangeRegisterData = function onChangeRegisterData(newValue) {
      var value = parseInt(newValue);
      setAttributes({
        registerData: value
      });
    };
    var onChangeContent = function onChangeContent(newValue) {
      setAttributes({
        content: newValue
      });
    };
    var onChangeInputUrl = function onChangeInputUrl(newValue) {
      setAttributes({
        inputUrl: newValue
      });
    };
    var onChangeButtonLayout = function onChangeButtonLayout(newValue) {
      setAttributes({
        buttonLayout: newValue
      });
    };
    var onChangeButtonType = function onChangeButtonType(newValue) {
      setAttributes({
        buttonType: newValue
      });
    };
    var onChangeRegisteredButton = function onChangeRegisteredButton(newValue) {
      setAttributes({
        registeredButton: newValue
      });
      setAttributes({
        buttonDesign: JINR_VAR.jinr_button_design[newValue - 1]
      });
    };
    var onChangeAfCode = function onChangeAfCode(newValue) {
      setAttributes({
        afCode: newValue
      });
    };
    var onChangeAfCodeType = function onChangeAfCodeType(newValue) {
      setAttributes({
        afCodeType: newValue
      });
    };
    var onChangeRegisteredCode = function onChangeRegisteredCode(newValue) {
      setAttributes({
        registeredCode: newValue
      });
    };
    var onChangeButtonColor = function onChangeButtonColor(newValue) {
      setAttributes({
        buttonColor: newValue
      });
    };
    var onChangeRadioButtonSize = function onChangeRadioButtonSize(newValue) {
      setAttributes({
        radioButtonSize: newValue
      });
    };
    var onChangeButtonRound = function onChangeButtonRound(newValue) {
      setAttributes({
        buttonRound: newValue
      });
    };
    var onChangeRadioShadowSize = function onChangeRadioShadowSize(newValue) {
      setAttributes({
        radioShadowSize: newValue
      });
    };
    var onChangeToggleTab = function onChangeToggleTab(newValue) {
      setAttributes({
        toggleTab: newValue
      });
    };
    var onChangeToggleMicrocopy = function onChangeToggleMicrocopy(newValue) {
      setAttributes({
        toggleMicrocopy: newValue
      });
    };
    var onChangeToggleArrow = function onChangeToggleArrow(newValue) {
      setAttributes({
        toggleArrow: newValue
      });
    };
    var onChangeMicrocopyText = function onChangeMicrocopyText(newValue) {
      setAttributes({
        microcopyText: newValue
      });
    };
    var onChangeMicrocopyDesign = function onChangeMicrocopyDesign(newValue) {
      setAttributes({
        microcopyDesign: newValue
      });
    };
    var onChangeArrowIcon = function onChangeArrowIcon(newValue) {
      setAttributes({
        arrowIcon: newValue
      });
    };
    var overRideArrowIcon = arrowIcon !== "none" ? "#block-" + clientId + " .d--button-type" + registeredButton + ":not(.d--button-arrow) a::after{content:\"" + arrowIcon + "\";} #block-" + clientId + " .d--button-type" + registeredButton + ":not(.d--button-arrow) a{padding-left:" + (JINR_VAR.jinr_button_width[registeredButton - 1] - 24) + "px;}" : "#block-" + clientId + " .d--button-type" + registeredButton + ":not(.d--button-arrow) a::after{display:none;} #block-" + clientId + " .d--button-type" + registeredButton + ":not(.d--button-arrow) a{padding-left:" + JINR_VAR.jinr_button_width[registeredButton - 1] + "px;}";
    var AffCodeSelectOptions = Array(30).fill(null).map(function (_, i) {
      return {
        check: JINR_VAR.jinr_aff_registered_code[i],
        label: "登録" + (i + 1) + "：" + JINR_VAR.jinr_aff_registered_name[i],
        value: i
      };
    }).filter(function (option) {
      return option.value !== "" && option.value !== null && option.value !== undefined;
    });
    if (AffCodeSelectOptions.length === 0) {
      AffCodeSelectOptions.push({
        label: "タグが登録されていません",
        value: -1
      });
    } else {
      AffCodeSelectOptions.unshift({
        label: "選択してください",
        value: -1
      });
    }
    var AffCodeOptionsSettings = AffCodeSelectOptions.filter(function (status) {
      if (status.check !== "") {
        return {
          label: status.label,
          value: status.value
        };
      }
    });
    var normalButton = function normalButton() {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
        className: "b--jinr-block b--jinr-button ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
      }, toggleMicrocopy === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
        className: "a--button-microcopy ".concat(microcopyDesign),
        style: {
          whiteSpace: "pre-wrap"
        }
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
        className: "a--microcopy-parts1"
      }), microcopyText.split("<br>").join("\n"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
        className: "a--microcopy-parts2"
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
        className: "d--button-".concat(buttonDesign, " d--button-type").concat(registeredButton, " ").concat(buttonLayout)
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("a", {
        href: "#"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["RichText"], {
        tagName: "span",
        value: content,
        onChange: onChangeContent,
        placeholder: "\u30C6\u30AD\u30B9\u30C8\u3092\u5165\u529B",
        onSplit: function onSplit(value, isOriginal) {
          var block;
          if (isOriginal || value) {
            block = Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["createBlock"])("jinr-blocks/button", _objectSpread(_objectSpread({}, attributes), {}, {
              content: value
            }));
          } else {
            block = Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["createBlock"])("core/paragraph");
          }
          if (isOriginal) {
            block.clientId = clientId;
          }
          return block;
        },
        onReplace: onReplace,
        onRemove: onRemove
      }))), toggleArrow === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("style", {
        dangerouslySetInnerHTML: {
          __html: overRideArrowIcon
        }
      }));
    };
    var arrowRadioOptions = [{
      label: "なし",
      value: "none"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrow",
        "aria-hidden": "true"
      }),
      value: "\\e904"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowm",
        "aria-hidden": "true"
      }),
      value: "\\ea7b"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowthin",
        "aria-hidden": "true"
      }),
      value: "\\ea84"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-v2arrow",
        "aria-hidden": "true"
      }),
      value: "\\e9e5"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-doublearrow",
        "aria-hidden": "true"
      }),
      value: "\\e910"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-v2arrowdouble",
        "aria-hidden": "true"
      }),
      value: "\\e9eb"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowb",
        "aria-hidden": "true"
      }),
      value: "\\e94c"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowclear",
        "aria-hidden": "true"
      }),
      value: "\\e94d"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowcircle",
        "aria-hidden": "true"
      }),
      value: "\\e902"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowbottom",
        "aria-hidden": "true"
      }),
      value: "\\e932"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowbottomm",
        "aria-hidden": "true"
      }),
      value: "\\ea12"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowbottomthin",
        "aria-hidden": "true"
      }),
      value: "\\e9ea"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-v2arrowbottom",
        "aria-hidden": "true"
      }),
      value: "\\e9e8"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowtop",
        "aria-hidden": "true"
      }),
      value: "\\e903"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowtopm",
        "aria-hidden": "true"
      }),
      value: "\\ea13"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-arrowtopthin",
        "aria-hidden": "true"
      }),
      value: "\\ea79"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
        class: "jin-icons jin-ifont-v2arrowtop",
        "aria-hidden": "true"
      }),
      value: "\\e9ee"
    }];
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["SelectControl"], {
      value: registeredButton,
      options: [{
        label: JINR_VAR.jinr_button_name[0],
        value: "1"
      }, {
        label: JINR_VAR.jinr_button_name[1],
        value: "2"
      }, {
        label: JINR_VAR.jinr_button_name[2],
        value: "3"
      }, {
        label: JINR_VAR.jinr_button_name[3],
        value: "4"
      }, {
        label: JINR_VAR.jinr_button_name[4],
        value: "5"
      }, {
        label: JINR_VAR.jinr_button_name[5],
        value: "6"
      }, {
        label: JINR_VAR.jinr_button_name[6],
        value: "7"
      }, {
        label: JINR_VAR.jinr_button_name[7],
        value: "8"
      }, {
        label: JINR_VAR.jinr_button_name[8],
        value: "9"
      }, {
        label: JINR_VAR.jinr_button_name[9],
        value: "10"
      }],
      onChange: onChangeRegisteredButton
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "URL\u8A2D\u5B9A"
    }, afCode !== "" || registerData > -1 ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["__experimentalInputControl"], {
      disabled: true,
      placeholder: "\u30A2\u30D5\u30A3\u30EA\u30A8\u30A4\u30C8\u30B3\u30FC\u30C9\u5165\u529B\u6E08\u307F"
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["URLInput"], {
      value: inputUrl,
      onChange: onChangeInputUrl
    })), afCode === "" && afCodeType !== "registered" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u5225\u30BF\u30D6\u3067\u958B\u304F"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ToggleControl"], {
      label: toggleTab ? "ON" : "OFF",
      checked: toggleTab,
      onChange: onChangeToggleTab,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30DE\u30A4\u30AF\u30ED\u30B3\u30D4\u30FC"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ToggleControl"], {
      label: toggleMicrocopy ? "ON" : "OFF",
      checked: toggleMicrocopy,
      onChange: onChangeToggleMicrocopy,
      className: "jinr-toggle"
    })), toggleMicrocopy === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "- \u30C7\u30B6\u30A4\u30F3\u9078\u629E",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["SelectControl"], {
      value: microcopyDesign,
      options: [{
        label: "デザイン１",
        value: "d--button-microcopy1"
      }, {
        label: "デザイン２",
        value: "d--button-microcopy2"
      }, {
        label: "デザイン３",
        value: "d--button-microcopy3"
      }],
      onChange: onChangeMicrocopyDesign
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "- \u30C6\u30AD\u30B9\u30C8",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["TextControl"], {
      value: microcopyText,
      onChange: onChangeMicrocopyText,
      placeholder: "\u4ECA\u306A\u3089\u25CB\u25CB\u5186OFF\u306E\u30AD\u30E3\u30F3\u30DA\u30FC\u30F3\u4E2D\uFF01"
    }))), buttonDesign !== "arrow" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u77E2\u5370\u30A2\u30A4\u30B3\u30F3\u306E\u500B\u5225\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ToggleControl"], {
      label: toggleArrow ? "ON" : "OFF",
      checked: toggleArrow,
      onChange: onChangeToggleArrow,
      className: "jinr-toggle"
    })), buttonDesign !== "arrow" && toggleArrow === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u77E2\u5370\u30A2\u30A4\u30B3\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: arrowIcon,
      options: arrowRadioOptions,
      onChange: onChangeArrowIcon,
      className: "a--jinr-radio d--list-horizon d--arrow-iconlist"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30DC\u30BF\u30F3\u306E\u914D\u7F6E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: buttonLayout,
      options: [{
        label: "左寄せ",
        value: "d--button-left"
      }, {
        label: "中央",
        value: "d--button-center"
      }, {
        label: "右寄せ",
        value: "d--button-right"
      }],
      onChange: onChangeButtonLayout,
      className: "a--jinr-radio d--list-horizon"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["PanelBody"], {
      title: "\u30A2\u30D5\u30A3\u30EA\u30A8\u30A4\u30C8\u30B3\u30FC\u30C9\u8A2D\u5B9A",
      initialOpen: false
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30BF\u30B0\u8A2D\u7F6E\u65B9\u6CD5"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: afCodeType,
      options: [{
        label: "個別入力",
        value: "manual"
      }, {
        label: "登録タグから選択",
        value: "registered"
      }],
      onChange: onChangeAfCodeType,
      className: "a--jinr-radio d--list-horizon"
    })), afCodeType == "manual" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["TextareaControl"], {
      value: afCode,
      onChange: onChangeAfCode,
      placeholder: "\u30A2\u30D5\u30A3\u30EA\u30A8\u30A4\u30C8\u30B3\u30FC\u30C9\u3092\u5165\u529B\u3057\u3066\u304F\u3060\u3055\u3044",
      rows: "12"
    })), afCodeType == "registered" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["SelectControl"], {
      value: registerData,
      options: AffCodeOptionsSettings,
      onChange: onChangeRegisterData
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-customizer-link"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("a", {
      className: "d--jinr-block-button-style2",
      href: JINR_VAR.home_url + '/wp-admin/admin.php?page=jinr-setting'
    }, "\u30BF\u30B0\u3092\u767B\u9332\u3059\u308B \uFF1E")))))), afCodeType === "manual" ? afCode !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "b--jinr-block b--jinr-button ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, toggleMicrocopy === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--button-microcopy ".concat(microcopyDesign),
      style: {
        whiteSpace: "pre-wrap"
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--microcopy-parts1"
    }), microcopyText.split("<br>").join("\n"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--microcopy-parts2"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "d--button-".concat(buttonDesign, " d--button-type").concat(registeredButton, " ").concat(buttonLayout),
      dangerouslySetInnerHTML: {
        __html: afCode
      }
    }), toggleArrow === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("style", {
      dangerouslySetInnerHTML: {
        __html: overRideArrowIcon
      }
    })) : normalButton() : registerData !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "b--jinr-block b--jinr-button ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, toggleMicrocopy === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--button-microcopy ".concat(microcopyDesign),
      style: {
        whiteSpace: "pre-wrap"
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--microcopy-parts1"
    }), microcopyText.split("<br>").join("\n"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--microcopy-parts2"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "d--button-".concat(buttonDesign, " d--button-type").concat(registeredButton, " ").concat(buttonLayout),
      dangerouslySetInnerHTML: {
        __html: registerData !== -1 ? JINR_VAR.jinr_aff_registered_code[registerData] : "タグが選択されていません"
      }
    }), toggleArrow === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("style", {
      dangerouslySetInnerHTML: {
        __html: overRideArrowIcon
      }
    })) : normalButton());
  },
  save: function save() {
    return null;
  }
}));

/***/ }),

/***/ "./src/blocks/category.js":
/*!********************************!*\
  !*** ./src/blocks/category.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_date__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/date */ "@wordpress/date");
/* harmony import */ var _wordpress_date__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_date__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _icons_jinr_category_svg__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../icons/jinr-category.svg */ "./src/icons/jinr-category.svg");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../style.scss */ "./src/style.scss");
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_style_scss__WEBPACK_IMPORTED_MODULE_9__);



/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */




var InnerBlocks = wp.blockEditor.InnerBlocks;
var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useLayoutEffect = _wp$element.useLayoutEffect,
  useState = _wp$element.useState,
  useEffect = _wp$element.useEffect;
var _wp$data = wp.data,
  select = _wp$data.select,
  subscribe = _wp$data.subscribe,
  dispatch = _wp$data.dispatch;
var _wp$components = wp.components,
  PanelBody = _wp$components.PanelBody,
  RadioControl = _wp$components.RadioControl,
  RangeControl = _wp$components.RangeControl,
  ToggleControl = _wp$components.ToggleControl,
  TextControl = _wp$components.TextControl,
  BaseControl = _wp$components.BaseControl,
  ColorIndicator = _wp$components.ColorIndicator,
  ColorPalette = _wp$components.ColorPalette,
  SelectControl = _wp$components.SelectControl,
  Spinner = _wp$components.Spinner;


/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` key  xnb  word are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */


/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["registerBlockType"])("jinr-blocks/category", {
  title: "カテゴリー区別",
  description: "このブロックの中に入れた表示をカテゴリー別にコントロールできるブロックです。ウィジェットエリア専用です。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_icons_jinr_category_svg__WEBPACK_IMPORTED_MODULE_6__["ReactComponent"], null),
  attributes: {
    selectType: {
      type: "string",
      default: "selectbox"
    },
    categoryID: {
      type: "string",
      default: ""
    },
    categoryName: {
      type: "string",
      default: ""
    },
    displayCategory: {
      type: "string",
      default: ""
    },
    clientId: {
      type: "string"
    }
  },
  /**
   * @see ./edit.js
   */
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var selectType = attributes.selectType,
      categoryID = attributes.categoryID,
      displayCategory = attributes.displayCategory,
      categoryName = attributes.categoryName;
    var _useState = useState(false),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default()(_useState, 2),
      loading = _useState2[0],
      setLoading = _useState2[1];
    var _useState3 = useState([{
        label: "表示するカテゴリーを選択",
        value: "",
        disabled: true
      }]),
      _useState4 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default()(_useState3, 2),
      categoryList = _useState4[0],
      setCategoryList = _useState4[1];
    var onChangeSelectType = function onChangeSelectType(newValue) {
      setAttributes({
        selectType: newValue
      });
    };
    var onChangeCategoryID = function onChangeCategoryID(newValue) {
      setAttributes({
        categoryID: newValue
      });
    };
    useEffect(function () {
      setAttributes({
        clientId: clientId
      });
    }, []);
    useEffect(function () {
      var newCategorryList = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default()(categoryList);
      JINR_VAR.categories.forEach(function (category) {
        newCategorryList.push({
          label: category.cat_name,
          value: category.cat_ID
        });
      });
      setCategoryList(newCategorryList);
    }, []);
    var onChangeDisplayCategory = function onChangeDisplayCategory(newValue) {
      setAttributes({
        displayCategory: newValue
      });
      var cat = JINR_VAR.categories.filter(function (category) {
        return category.cat_ID === parseInt(newValue);
      });
      var cat_key = Object.keys(categoryList).filter(function (key) {
        return categoryList[key].value === parseInt(newValue);
      });
      setAttributes({
        categoryName: categoryList[cat_key].label
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(PanelBody, {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(BaseControl, {
      label: "\u8A2D\u5B9A\u65B9\u6CD5\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RadioControl, {
      selected: selectType,
      options: [{
        label: "カテゴリー名",
        value: "selectbox"
      }, {
        label: "ID（複数設定可）",
        value: "choiceID"
      }],
      onChange: onChangeSelectType,
      className: "a--jinr-radio"
    })), selectType === "selectbox" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(BaseControl, {
      label: "\u30AB\u30C6\u30B4\u30EA\u30FC\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(SelectControl, {
      value: displayCategory,
      options: categoryList,
      onChange: onChangeDisplayCategory
    })), selectType === "choiceID" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(BaseControl, {
      label: "\u30AB\u30C6\u30B4\u30EA\u30FCID\u5165\u529B\uFF08\u534A\u89D2\uFF09",
      help: "\u3010\u5165\u529B\u4F8B\u30111,2,3"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(TextControl, {
      value: categoryID,
      onChange: onChangeCategoryID
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "b--jinr-block b--jinr-category"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "d--special-text"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
      class: "jif jin-ifont-caution",
      "aria-hidden": "true"
    }), "\u3053\u306E\u30D6\u30ED\u30C3\u30AF\u306F\u30A6\u30A3\u30B8\u30A7\u30C3\u30C8\u30A8\u30EA\u30A2\u5C02\u7528\u3067\u3059\u3002\u4F7F\u3044\u65B9\u306F", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("a", {
      className: "a--jinr-admin-link",
      href: "https://jinr.jp/manual/category-separate/",
      target: "_blank"
    }, "\u30DE\u30CB\u30E5\u30A2\u30EB"), "\u3092\u3054\u53C2\u8003\u304F\u3060\u3055\u3044\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-category-parts-before"
    }, selectType === "selectbox" ? categoryName ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-category-name"
    }, "\u300C", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "d--bold"
    }, categoryName), "\u300D\u30AB\u30C6\u30B4\u30EA\u30FC\u306E\u8A18\u4E8B\u3067\u8868\u793A") : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-category-name"
    }, "\u30AB\u30C6\u30B4\u30EA\u30FC\u3092\u9078\u629E\u3057\u3066\u304F\u3060\u3055\u3044") : categoryID ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-category-name"
    }, "\u30AB\u30C6\u30B4\u30EA\u30FCID\u300C", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "d--bold"
    }, categoryID), "\u300D\u306E\u8A18\u4E8B\u3067\u8868\u793A") : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-category-name"
    }, "\u30AB\u30C6\u30B4\u30EA\u30FC\u3092\u9078\u629E\u3057\u3066\u304F\u3060\u3055\u3044")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "o--jinr-category"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(InnerBlocks, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-category-parts-after"
    })));
  },
  /**
   * @see ./save.js
   */
  save: function save(props) {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(InnerBlocks.Content, null);
  }
}));

/***/ }),

/***/ "./src/blocks/compare.js":
/*!*******************************!*\
  !*** ./src/blocks/compare.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _icons_jinr_gb_compare_svg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../icons/jinr_gb_compare.svg */ "./src/icons/jinr_gb_compare.svg");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/compose */ "@wordpress/compose");
/* harmony import */ var _wordpress_compose__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_compose__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_8__);



function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_1___default()(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }







var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useEffect = _wp$element.useEffect;
var ALLOWED_BLOCK = ["jinr-blocks/comparechild"];
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["registerBlockType"])("jinr-blocks/compare", {
  title: "比較表",
  description: "二つ以上の商品やサービスを比較するためのブロックです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_icons_jinr_gb_compare_svg__WEBPACK_IMPORTED_MODULE_5__["ReactComponent"], null),
  attributes: {
    childBlockCount: {
      type: "number",
      default: 0
    },
    childBlockButtonVisible: {
      type: "boolean",
      default: true
    },
    innerBlocksVisibility: {
      type: "boolean",
      default: true
    },
    layoutStyle: {
      type: "string",
      default: "left"
    }
  },
  edit: Object(_wordpress_compose__WEBPACK_IMPORTED_MODULE_6__["compose"])(Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__["withSelect"])(function (select, ownProps) {
    var _getBlocksByClientId$;
    var _select = select("core/block-editor"),
      getSelectedBlockClientId = _select.getSelectedBlockClientId,
      getBlocksByClientId = _select.getBlocksByClientId;
    var selectedBlockClientId = getSelectedBlockClientId();
    var parentBlocks = (_getBlocksByClientId$ = getBlocksByClientId(ownProps.clientId)[0]) === null || _getBlocksByClientId$ === void 0 ? void 0 : _getBlocksByClientId$.innerBlocks;
    var isCurrentChildBlockVisible = ownProps.attributes.childBlockButtonVisible;
    if (parentBlocks && selectedBlockClientId) {
      var currentChildBlock = parentBlocks.find(function (block) {
        return block.clientId === selectedBlockClientId;
      });
      isCurrentChildBlockVisible = currentChildBlock ? currentChildBlock.attributes.innerBlocksVisibility : ownProps.attributes.childBlockButtonVisible;
    }
    return {
      isSelected: ownProps.clientId === selectedBlockClientId,
      childBlocks: parentBlocks,
      blockCount: parentBlocks ? parentBlocks.length : 0,
      isCurrentChildBlockVisible: isCurrentChildBlockVisible
    };
  }), Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__["withDispatch"])(function (dispatch, ownProps) {
    var _dispatch = dispatch("core/block-editor"),
      replaceInnerBlocks = _dispatch.replaceInnerBlocks,
      selectBlock = _dispatch.selectBlock,
      updateBlockAttributes = _dispatch.updateBlockAttributes;
    return {
      addNewChildBlock: function addNewChildBlock(childBlocks) {
        var clientId = ownProps.clientId,
          attributes = ownProps.attributes;
        var innerBlocksVisibility = attributes.innerBlocksVisibility;
        if (childBlocks.length > 0) {
          var lastChildBlock = childBlocks[childBlocks.length - 1];
          var newBlock = Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["createBlock"])(lastChildBlock.name, _objectSpread(_objectSpread({}, lastChildBlock.attributes), {}, {
            innerBlocksVisibility: innerBlocksVisibility
          }));
          replaceInnerBlocks(clientId, [].concat(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_0___default()(childBlocks), [newBlock]), true);
          var newBlockClientId = newBlock.clientId;
          setTimeout(function () {
            selectBlock(newBlockClientId);
          }, 100);
        }
      },
      updateLayoutStyle: function updateLayoutStyle(newLayoutStyle) {
        var setAttributes = ownProps.setAttributes;
        setAttributes({
          layoutStyle: newLayoutStyle
        });
      },
      updateChildBlockVisibility: function updateChildBlockVisibility(isVisible) {
        updateBlockAttributes(ownProps.clientId, {
          childBlockButtonVisible: isVisible
        });
      }
    };
  }))(function (_ref) {
    var isSelected = _ref.isSelected,
      childBlocks = _ref.childBlocks,
      blockCount = _ref.blockCount,
      setAttributes = _ref.setAttributes,
      addNewChildBlock = _ref.addNewChildBlock,
      isCurrentChildBlockVisible = _ref.isCurrentChildBlockVisible,
      updateChildBlockVisibility = _ref.updateChildBlockVisibility,
      attributes = _ref.attributes,
      clientId = _ref.clientId;
    useEffect(function () {
      setAttributes({
        childBlockCount: blockCount
      });
      updateChildBlockVisibility(isCurrentChildBlockVisible);
    }, [blockCount, isCurrentChildBlockVisible, setAttributes, updateChildBlockVisibility]);
    useEffect(function () {
      var _select$getBlocksByCl;
      var childBlocks = (_select$getBlocksByCl = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__["select"])("core/block-editor").getBlocksByClientId(clientId)[0]) === null || _select$getBlocksByCl === void 0 ? void 0 : _select$getBlocksByCl.innerBlocks;
      if (childBlocks) {
        childBlocks.forEach(function (childBlock) {
          Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__["dispatch"])("core/block-editor").updateBlockAttributes(childBlock.clientId, {
            innerBlocksVisibility: attributes.innerBlocksVisibility
          });
        });
      }
    }, [attributes.innerBlocksVisibility, clientId]);
    var layoutClass = attributes.layoutStyle === "center" ? "d--compare-layout-center" : "d--compare-layout-left";
    var buttonClass = isCurrentChildBlockVisible ? "d--compare-button-visible" : "d--compare-button-hidden";
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "b--jinr-block b--jinr-compare b--compare-count".concat(blockCount, " ").concat(layoutClass, " ").concat(buttonClass)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "b--parent-select"
    }, "\u89AA\u30D6\u30ED\u30C3\u30AF\u3092\u9078\u629E"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["InnerBlocks"], {
      allowedBlocks: ALLOWED_BLOCK,
      template: [["jinr-blocks/comparechild", {
        subTexts: ["料金"],
        mainTexts: ["1,000円"]
      }], ["jinr-blocks/comparechild", {
        subTexts: ["料金"],
        mainTexts: ["1,000円"]
      }]]
    })), isSelected && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_8__["Button"], {
      id: "JinrCompareChildAdd",
      onClick: function onClick() {
        return addNewChildBlock(childBlocks);
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("svg", {
      xmlns: "http://www.w3.org/2000/svg",
      viewBox: "0 0 24 24",
      width: "24",
      height: "24",
      "aria-hidden": "true",
      focusable: "false"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("path", {
      d: "M18 11.2h-5.2V6h-1.6v5.2H6v1.6h5.2V18h1.6v-5.2H18z"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--compare-toolbar"
    }, "\u5217\u3092\u8FFD\u52A0")));
  }),
  save: function save(_ref2) {
    var attributes = _ref2.attributes;
    var childBlockCount = attributes.childBlockCount,
      layoutStyle = attributes.layoutStyle,
      childBlockButtonVisible = attributes.childBlockButtonVisible;
    var buttonClass = childBlockButtonVisible ? "d--compare-button-visible" : "d--compare-button-hidden";
    var layoutClass = layoutStyle === "center" ? "d--compare-layout-center" : "d--compare-layout-left";
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "b--jinr-block b--jinr-compare b--compare-count".concat(childBlockCount, " ").concat(layoutClass, " ").concat(buttonClass)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["InnerBlocks"].Content, null)));
  }
}));

/***/ }),

/***/ "./src/blocks/comparechild.js":
/*!************************************!*\
  !*** ./src/blocks/comparechild.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _icons_jinr_button_svg__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../icons/jinr-button.svg */ "./src/icons/jinr-button.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__);




function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default()(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }






var Fragment = wp.element.Fragment;
var _wp$blockEditor = wp.blockEditor,
  MediaUpload = _wp$blockEditor.MediaUpload,
  InnerBlocks = _wp$blockEditor.InnerBlocks;
function useIsAnySiblingSelected(clientId) {
  return Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["useSelect"])(function (select) {
    var _select = select("core/block-editor"),
      getSelectedBlockClientId = _select.getSelectedBlockClientId,
      getBlockRootClientId = _select.getBlockRootClientId;
    var selectedBlockClientId = getSelectedBlockClientId();
    var parentClientId = getBlockRootClientId(clientId);
    var siblingClientIds = select("core/block-editor").getBlockOrder(parentClientId);
    return siblingClientIds.includes(selectedBlockClientId);
  }, [clientId]);
}
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__["registerBlockType"])("jinr-blocks/comparechild", {
  title: "比較表専用の子ブロック",
  description: "",
  parent: ["jinr-blocks/compare"],
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_icons_jinr_button_svg__WEBPACK_IMPORTED_MODULE_6__["ReactComponent"], null),
  attributes: {
    imageID: {
      type: "number",
      default: 0
    },
    imageUrl: {
      type: "string",
      default: ""
    },
    labelText: {
      type: "string",
      default: ""
    },
    itemName: {
      type: "string",
      default: ""
    },
    linkUrl: {
      type: "string",
      default: ""
    },
    subTexts: {
      type: "array",
      default: []
    },
    mainTexts: {
      type: "array",
      default: []
    },
    mainText: {
      type: "string",
      default: ""
    },
    blockID: {
      type: "string"
    },
    innerBlocksVisibility: {
      type: 'boolean',
      default: true
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      onReplace = props.onReplace,
      clientId = props.clientId,
      onRemove = props.onRemove;
    var imageID = attributes.imageID,
      imageUrl = attributes.imageUrl,
      itemName = attributes.itemName,
      labelText = attributes.labelText,
      subTexts = attributes.subTexts,
      mainTexts = attributes.mainTexts,
      linkUrl = attributes.linkUrl,
      innerBlocksVisibility = attributes.innerBlocksVisibility;
    var isAnySiblingSelected = useIsAnySiblingSelected(clientId);
    var onChangeLabelTexts = function onChangeLabelTexts(newValue) {
      setAttributes({
        labelText: newValue
      });
    };
    var onChangeitemTexts = function onChangeitemTexts(newValue) {
      setAttributes({
        itemName: newValue
      });
    };
    var onChangeLinkURL = function onChangeLinkURL(newValue) {
      setAttributes({
        linkUrl: newValue
      });
    };
    var onChangeSelectMedias = function onChangeSelectMedias(media) {
      setAttributes({
        imageID: media.id,
        imageUrl: media.url
      });
    };
    var onLayoutRemoveAction = function onLayoutRemoveAction() {
      var selectedBlockClientId = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor").getSelectedBlockClientId();
      if (selectedBlockClientId) {
        Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["dispatch"])("core/block-editor").removeBlock(selectedBlockClientId);
      }
    };
    var onlayoutAddAction = function onlayoutAddAction() {
      var selectedBlockClientId = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor").getSelectedBlockClientId();
      if (selectedBlockClientId) {
        var blockEditor = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor");
        var selectedBlock = blockEditor.getBlock(selectedBlockClientId);
        var newBlock = Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__["createBlock"])(selectedBlock.name, _objectSpread(_objectSpread({}, selectedBlock.attributes), {}, {
          // 既存の属性をコピー
          imageID: 0,
          imageUrl: '',
          labelText: '',
          itemName: '',
          linkUrl: '',
          mainTexts: [],
          mainText: '',
          blockID: '',
          innerBlocksVisibility: selectedBlock.attributes.innerBlocksVisibility
        }));
        Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["dispatch"])("core/block-editor").insertBlock(newBlock, blockEditor.getBlockIndex(selectedBlockClientId) + 1, blockEditor.getBlockRootClientId(selectedBlockClientId));
      }
    };
    var updateChildBlocks = function updateChildBlocks(action) {
      var blockEditor = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor");
      var parentClientId = blockEditor.getBlockRootClientId(clientId);
      var childBlocks = blockEditor.getBlocks(parentClientId);
      childBlocks.forEach(function (childBlock) {
        var _childBlock$attribute = childBlock.attributes,
          subTexts = _childBlock$attribute.subTexts,
          mainTexts = _childBlock$attribute.mainTexts;
        var newSubTexts, newMainTexts;
        if (action === "add") {
          newSubTexts = [].concat(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(subTexts), [""]);
          newMainTexts = [].concat(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(mainTexts), [""]);
        } else if (action === "remove") {
          newSubTexts = subTexts.slice(0, -1);
          newMainTexts = mainTexts.slice(0, -1);
        }
        Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["dispatch"])("core/block-editor").updateBlockAttributes(childBlock.clientId, {
          subTexts: newSubTexts,
          mainTexts: newMainTexts
        });
      });
    };
    var selectedBlockClientId = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor").getSelectedBlockClientId();
    var _select2 = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor"),
      getBlockRootClientId = _select2.getBlockRootClientId;
    var parentClientId = getBlockRootClientId(clientId);
    var changeLayout = function changeLayout(layoutStyle) {
      Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["dispatch"])("core/block-editor").updateBlockAttributes(parentClientId, {
        layoutStyle: layoutStyle
      });
    };
    var onChangeSubText = function onChangeSubText(newValue, index) {
      var blockEditor = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor");
      var parentClientId = blockEditor.getBlockRootClientId(clientId);
      var childBlocks = blockEditor.getBlocks(parentClientId);
      childBlocks.forEach(function (childBlock) {
        var newSubTexts = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(childBlock.attributes.subTexts);
        newSubTexts[index] = newValue;
        Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["dispatch"])("core/block-editor").updateBlockAttributes(childBlock.clientId, {
          subTexts: newSubTexts
        });
      });
    };
    var onChangeMainText = function onChangeMainText(newValue, index) {
      var newMainTexts = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(props.attributes.mainTexts);
      newMainTexts[index] = newValue;
      props.setAttributes({
        mainTexts: newMainTexts
      });
    };
    var _useState = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["useState"])(props.attributes.innerBlocksVisibility),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState, 2),
      isInnerBlocksVisible = _useState2[0],
      setIsInnerBlocksVisible = _useState2[1];
    var toggleInnerBlocksVisibility = function toggleInnerBlocksVisibility() {
      var newVisibility = !isInnerBlocksVisible;
      setIsInnerBlocksVisible(newVisibility);
      setAttributes({
        innerBlocksVisibility: newVisibility
      });
      var _select3 = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["select"])("core/block-editor"),
        getBlockRootClientId = _select3.getBlockRootClientId;
      var parentClientId = getBlockRootClientId(clientId);
      Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_8__["dispatch"])("core/block-editor").updateBlockAttributes(parentClientId, {
        innerBlocksVisibility: newVisibility
      });
    };
    var layoutButtonClass = "a--compare-layout-change a--compare-layout-button ".concat(isInnerBlocksVisible ? 'a--compare-button-display' : 'a--compare-button-disappear');
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--compare-child"
    }, isAnySiblingSelected && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      className: "a--compare-layout-change a--compare-layout-remove",
      onClick: function onClick() {
        return onLayoutRemoveAction();
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      class: "a--compare-content-remove"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      className: "a--compare-layout-change a--compare-layout-add",
      onClick: function onClick() {
        return onlayoutAddAction();
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      class: "a--compare-content-add"
    }))), isSelected && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      className: layoutButtonClass,
      onClick: toggleInnerBlocksVisibility
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("svg", {
      id: "icon",
      xmlns: "http://www.w3.org/2000/svg",
      viewBox: "0 0 100 100"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("path", {
      class: "cls-1",
      d: "M83.5,15.75h-67A7.5,7.5,0,0,0,9,23.25v40a7.5,7.5,0,0,0,7.5,7.5H27.43v-5H16.5a2.5,2.5,0,0,1-2.5-2.5v-40a2.5,2.5,0,0,1,2.5-2.5h67a2.5,2.5,0,0,1,2.5,2.5v40a2.5,2.5,0,0,1-2.5,2.5H57v5H83.5a7.5,7.5,0,0,0,7.5-7.5v-40A7.5,7.5,0,0,0,83.5,15.75Z"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("path", {
      class: "cls-1",
      d: "M49.42,63.63l7.44-2.27a1.1,1.1,0,0,0,.29-2l-24.08-16a1.1,1.1,0,0,0-1.71,1l1.33,28.86a1.1,1.1,0,0,0,1.84.77l5.76-5.22a1.1,1.1,0,0,1,1.7.27l7.72,13.61a1.1,1.1,0,0,0,1.5.42l2.44-1.39,2.44-1.38a1.1,1.1,0,0,0,.42-1.5L48.79,65.23A1.1,1.1,0,0,1,49.42,63.63Z"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("path", {
      class: "cls-1",
      d: "M64.26,55a2.51,2.51,0,0,0,3.54,0l10-10a2.52,2.52,0,0,0,0-3.54l-10-10A2.5,2.5,0,1,0,64.2,35l8.26,8.26-8.2,8.2A2.52,2.52,0,0,0,64.26,55Z"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      className: "a--compare-layout-change a--compare-layout-left",
      onClick: function onClick() {
        return changeLayout('left');
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      class: "dashicons dashicons-editor-alignleft"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      className: "a--compare-layout-change a--compare-layout-center",
      onClick: function onClick() {
        return changeLayout('center');
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      class: "dashicons dashicons-editor-aligncenter"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "c--compare-label ef"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"], {
      tagName: "div",
      className: "a--compare-label",
      value: labelText,
      onChange: onChangeLabelTexts,
      placeholder: "\u30E9\u30D9\u30EB\u3092\u5165\u529B"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "c--compare-content c--compare-image"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(MediaUpload, {
      onSelect: function onSelect(media) {
        return onChangeSelectMedias(media);
      },
      type: "image",
      value: imageID,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
          className: "c--compare-media"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_7__["Button"], {
          className: "a--compare-image ".concat(imageUrl ? "a--compare-has-image" : ""),
          onClick: open
        }, imageUrl ? linkUrl ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("img", {
          src: imageUrl,
          alt: "".concat(itemName)
        }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("img", {
          src: imageUrl,
          alt: "".concat(itemName)
        }) : "画像を選択"), isAnySiblingSelected && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["URLInput"], {
          placeholder: "\u4F8B\uFF09https://jinr.jp",
          value: linkUrl,
          onChange: onChangeLinkURL,
          className: "a--compare-link-input"
        }));
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"], {
      tagName: "div",
      className: "a--compare-itemname",
      value: itemName,
      onChange: onChangeitemTexts,
      placeholder: "\u5546\u54C1\u540D"
    })), subTexts.map(function (text, index) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
        key: index,
        className: "c--compare-content"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"], {
        tagName: "div",
        value: subTexts[index],
        className: "a--compare-subtext",
        onChange: function onChange(newValue) {
          return onChangeSubText(newValue, index);
        },
        placeholder: "\u30B5\u30D6\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B"
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"], {
        tagName: "div",
        value: mainTexts[index],
        className: "a--compare-maintext",
        onChange: function onChange(newValue) {
          return onChangeMainText(newValue, index);
        },
        placeholder: "\u3053\u3053\u306B\u30C6\u30AD\u30B9\u30C8\u3092\u5165\u529B"
      }), index === subTexts.length - 1 && selectedBlockClientId === props.clientId && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
        className: "c--compare-tips"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
        className: "jinr-compare-item-remove a--compare-tips",
        onClick: function onClick() {
          return updateChildBlocks("remove");
        }
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
        class: "jinr-icon-minus"
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
        className: "jinr-compare-item-add a--compare-tips",
        onClick: function onClick() {
          return updateChildBlocks("add");
        }
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
        class: "jinr-icon-plus"
      }))));
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "c--compare-content"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(InnerBlocks, {
      template: [["jinr-blocks/button", {
        registeredButton: "7",
        content: "公式サイトへ"
      }]],
      templateLock: "insert",
      allowedBlocks: ["jinr-blocks/button"]
    }))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var imageID = attributes.imageID,
      imageUrl = attributes.imageUrl,
      itemName = attributes.itemName,
      labelText = attributes.labelText,
      subTexts = attributes.subTexts,
      mainTexts = attributes.mainTexts,
      linkUrl = attributes.linkUrl,
      blockID = attributes.blockID,
      innerBlocksVisibility = attributes.innerBlocksVisibility;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--compare-child"
    }, labelText ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "c--compare-label"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"].Content, {
      tagName: "div",
      className: "a--compare-label ef",
      value: labelText
    })) : "", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "c--compare-content c--compare-image"
    }, imageID ? linkUrl ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("a", {
      href: linkUrl,
      className: "a--compare-link"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("img", {
      className: "a--compare-image",
      src: "".concat(imageUrl)
    })) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("span", {
      className: "a--compare-link"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("img", {
      className: "a--compare-image",
      src: "".concat(imageUrl)
    })) : "", itemName ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"].Content, {
      tagName: "div",
      className: "a--compare-itemname",
      value: itemName
    }) : ""), subTexts.map(function (subText, index) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
        key: index,
        className: "c--compare-content"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"].Content, {
        tagName: "div",
        className: "a--compare-subtext",
        value: subText
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"].Content, {
        tagName: "div",
        className: "a--compare-text",
        value: mainTexts[index]
      }));
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(InnerBlocks.Content, null)));
  }
}));

/***/ }),

/***/ "./src/blocks/designborder.js":
/*!************************************!*\
  !*** ./src/blocks/designborder.js ***!
  \************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_separator_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-separator.svg */ "./src/icons/jinr-separator.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);





var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState;
Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/designborder", {
  title: "区切り線",
  description: "章末やコンテンツの区切りで使うことで見やすさとお洒落さをアップさせることができる装飾ブロックです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_separator_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    borderStyle: {
      type: "string",
      default: "d--sen-style6"
    },
    borderCustomWidth: {
      type: "string",
      default: "2"
    },
    borderColorSet: {
      type: "string",
      default: "#d0d0d0"
    },
    borderColorSetAdmin: {
      type: "string",
      default: "#d0d0d0"
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected;
    var borderStyle = attributes.borderStyle,
      borderCustomWidth = attributes.borderCustomWidth,
      borderColorSet = attributes.borderColorSet,
      borderColorSetAdmin = attributes.borderColorSetAdmin;
    var onChangeBorderStyle = function onChangeBorderStyle(newValue) {
      setAttributes({
        borderStyle: newValue
      });
    };
    var onChangeBorderCustomWidth = function onChangeBorderCustomWidth(newValue) {
      setAttributes({
        borderCustomWidth: newValue
      });
    };
    var onChangeBorderColor = function onChangeBorderColor(newValue) {
      setAttributes({
        borderColorSet: newValue,
        borderColorSetAdmin: newValue
      });
    };
    var senStyle1Css = {
      backgroundImage: "radial-gradient(".concat(borderColorSetAdmin, " ").concat(borderCustomWidth * 7, "%, transparent ").concat(borderCustomWidth * 9, "%)")
    };
    var senStyle2Css = [{
      backgroundImage: "radial-gradient(".concat(borderColorSetAdmin, " ").concat(borderCustomWidth * 7, "%, transparent ").concat(borderCustomWidth * 9, "%)")
    }, {
      backgroundColor: borderColorSetAdmin,
      height: "".concat(borderCustomWidth, "px"),
      borderRadius: "".concat(borderCustomWidth / 2, "px")
    }];
    var senStyle3Css = {
      height: "".concat(borderCustomWidth, "px"),
      borderRadius: "".concat(borderCustomWidth / 2, "px"),
      backgroundColor: borderColorSetAdmin
    };
    var senStyle4Css = [{
      backgroundImage: "radial-gradient(".concat(borderColorSetAdmin, " 10%, transparent 12%)")
    }, {
      height: "".concat(borderCustomWidth, "px"),
      background: "repeating-linear-gradient(to right, ".concat(borderColorSetAdmin, ", ").concat(borderColorSetAdmin, " 10px, transparent 0, transparent 32px)")
    }];
    var senStyle5Css = {
      height: "".concat(borderCustomWidth, "px"),
      background: "repeating-linear-gradient(to right, ".concat(borderColorSetAdmin, ", ").concat(borderColorSetAdmin, " 10px, transparent 0, transparent 20px)")
    };
    var senStyle6Css = {
      height: "".concat(borderCustomWidth, "px"),
      borderRadius: "".concat(borderCustomWidth / 2, "px"),
      backgroundColor: borderColorSetAdmin
    };
    var senStyle7Css = {
      borderBottom: "".concat(borderCustomWidth * 2, "px double ").concat(borderColorSetAdmin)
    };
    var borderStyleOptions = [{
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style1"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle1Css
      })))),
      value: "d--sen-style1"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style2"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle2Css[0]
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts2",
        style: senStyle2Css[0]
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts3",
        style: senStyle2Css[1]
      })))),
      value: "d--sen-style2"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style3"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle3Css
      })))),
      value: "d--sen-style3"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style4"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle4Css[0]
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts2",
        style: senStyle4Css[1]
      })))),
      value: "d--sen-style4"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style5"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle5Css
      })))),
      value: "d--sen-style5"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style6"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle6Css
      })))),
      value: "d--sen-style6"
    }, {
      label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--jinr-item a--sen-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "b--jinr-block jinr-sen"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "d--sen-style7"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--sen-parts1",
        style: senStyle7Css
      })))),
      value: "d--sen-style7"
    }];
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "light-gray",
      color: "#909090"
    }, {
      name: "light-red",
      color: "#F8C6BE"
    }, {
      name: "light-blue",
      color: "#BED7F8"
    }, {
      name: "light-green",
      color: "#B5F2D9"
    }, {
      name: "light-black",
      color: "#222222"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A",
      className: "o--designborder-settings"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: borderStyle,
      options: borderStyleOptions,
      onChange: onChangeBorderStyle
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u592A\u3055"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: borderCustomWidth,
      options: [{
        value: "1",
        label: "1"
      }, {
        value: "2",
        label: "2"
      }, {
        value: "3",
        label: "3"
      }, {
        value: "4",
        label: "4"
      }, {
        value: "5",
        label: "5"
      }],
      onChange: onChangeBorderCustomWidth,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u8272\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: borderColorSet,
      enableAlpha: true,
      onChange: onChangeBorderColor
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-block jinr-sen ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, borderStyle === "d--sen-style1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle1Css
    })), borderStyle === "d--sen-style2" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle2Css[0]
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts2",
      style: senStyle2Css[0]
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts3",
      style: senStyle2Css[1]
    })), borderStyle === "d--sen-style3" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle3Css
    })), borderStyle === "d--sen-style4" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle4Css[0]
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts2",
      style: senStyle4Css[1]
    })), borderStyle === "d--sen-style5" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle5Css
    })), borderStyle === "d--sen-style6" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle6Css
    })), borderStyle === "d--sen-style7" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle7Css
    }))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var borderStyle = attributes.borderStyle,
      borderCustomWidth = attributes.borderCustomWidth,
      borderColorSet = attributes.borderColorSet;
    var senStyle1Css = {
      backgroundImage: "radial-gradient(".concat(borderColorSet, " ").concat(borderCustomWidth * 7, "%, transparent ").concat(borderCustomWidth * 9, "%)")
    };
    var senStyle2Css = [{
      backgroundImage: "radial-gradient(".concat(borderColorSet, " ").concat(borderCustomWidth * 7, "%, transparent ").concat(borderCustomWidth * 9, "%)")
    }, {
      backgroundColor: borderColorSet,
      height: "".concat(borderCustomWidth, "px"),
      borderRadius: "".concat(borderCustomWidth / 2, "px")
    }];
    var senStyle3Css = {
      height: "".concat(borderCustomWidth, "px"),
      borderRadius: "".concat(borderCustomWidth / 2, "px"),
      backgroundColor: borderColorSet
    };
    var senStyle4Css = [{
      backgroundImage: "radial-gradient(".concat(borderColorSet, " 10%, transparent 12%)")
    }, {
      height: "".concat(borderCustomWidth, "px"),
      background: "repeating-linear-gradient(to right, ".concat(borderColorSet, ", ").concat(borderColorSet, " 10px, transparent 0, transparent 32px)")
    }];
    var senStyle5Css = {
      height: "".concat(borderCustomWidth, "px"),
      background: "repeating-linear-gradient(to right, ".concat(borderColorSet, ", ").concat(borderColorSet, " 10px, transparent 0, transparent 20px)")
    };
    var senStyle6Css = {
      height: "".concat(borderCustomWidth, "px"),
      borderRadius: "".concat(borderCustomWidth / 2, "px"),
      backgroundColor: borderColorSet
    };
    var senStyle7Css = {
      borderBottom: "".concat(borderCustomWidth * 2, "px double ").concat(borderColorSet)
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-block jinr-sen ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, borderStyle === "d--sen-style1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle1Css
    })), borderStyle === "d--sen-style2" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle2Css[0]
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts2",
      style: senStyle2Css[0]
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts3",
      style: senStyle2Css[1]
    })), borderStyle === "d--sen-style3" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle3Css
    })), borderStyle === "d--sen-style4" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle4Css[0]
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts2",
      style: senStyle4Css[1]
    })), borderStyle === "d--sen-style5" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle5Css
    })), borderStyle === "d--sen-style6" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle6Css
    })), borderStyle === "d--sen-style7" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: borderStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--sen-parts1",
      style: senStyle7Css
    })));
  }
});

/***/ }),

/***/ "./src/blocks/designtitle.js":
/*!***********************************!*\
  !*** ./src/blocks/designtitle.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _icons_jinr_designtitle_svg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../icons/jinr-designtitle.svg */ "./src/icons/jinr-designtitle.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _SelectIcon__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../SelectIcon */ "./src/SelectIcon.js");



function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }






var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState,
  useRef = _wp$element.useRef;
var _wp$blockEditor = wp.blockEditor,
  MediaUpload = _wp$blockEditor.MediaUpload,
  MediaUploadCheck = _wp$blockEditor.MediaUploadCheck,
  RichText = _wp$blockEditor.RichText;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["registerBlockType"])("jinr-blocks/designtitle", {
  title: "デザイン見出し",
  description: "通常の見出しと違ったデザイン性の高い表現の見出しを作成するブロックです。TOPページで活用すると華やかなページに仕上がるのでおすすめです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_icons_jinr_designtitle_svg__WEBPACK_IMPORTED_MODULE_5__["ReactComponent"], null),
  attributes: {
    mainText: {
      type: "string",
      default: ""
    },
    subText: {
      type: "string",
      default: ""
    },
    divText: {
      type: "string",
      default: ""
    },
    titleDesign: {
      type: "string",
      default: "1"
    },
    titleDesignWeight: {
      type: "string",
      default: "d--titledesign-weight-thin"
    },
    radioLayout: {
      type: "string",
      default: "left"
    },
    radioSymbol: {
      type: "string",
      default: "none"
    },
    symbolNumber: {
      type: "string",
      default: "1"
    },
    symbolIcon: {
      type: "string",
      default: ""
    },
    mediaId: {
      type: "number",
      default: 0
    },
    mediaUrl: {
      type: "string",
      default: JINR_VAR.no_image
    },
    mediaUrl150: {
      type: "string",
      default: JINR_VAR.no_image
    },
    mainTextColor: {
      type: "string",
      default: JINR_VAR.theme_color
    },
    subTextColor: {
      type: "string",
      default: JINR_VAR.theme_color
    },
    titleDesignColor: {
      type: "string",
      default: JINR_VAR.theme_color
    },
    symbolColor: {
      type: "string",
      default: JINR_VAR.theme_color
    },
    mainTextColorSelect: {
      type: "string",
      default: "only"
    },
    subTextColorSelect: {
      type: "string",
      default: "only"
    },
    titleDesignColorSelect: {
      type: "string",
      default: "only"
    },
    symbolColorSelect: {
      type: "string",
      default: "only"
    },
    tagSelect: {
      type: "string",
      default: "h2"
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      onReplace = props.onReplace,
      clientId = props.clientId,
      onRemove = props.onRemove;
    var mainText = attributes.mainText,
      subText = attributes.subText,
      divText = attributes.divText,
      titleDesign = attributes.titleDesign,
      titleDesignWeight = attributes.titleDesignWeight,
      radioLayout = attributes.radioLayout,
      radioSymbol = attributes.radioSymbol,
      symbolNumber = attributes.symbolNumber,
      symbolIcon = attributes.symbolIcon,
      mediaId = attributes.mediaId,
      mediaUrl = attributes.mediaUrl,
      mediaUrl150 = attributes.mediaUrl150,
      mainTextColor = attributes.mainTextColor,
      subTextColor = attributes.subTextColor,
      titleDesignColor = attributes.titleDesignColor,
      symbolColor = attributes.symbolColor,
      tagSelect = attributes.tagSelect,
      titleDesignColorSelect = attributes.titleDesignColorSelect;
    var _useState = useState(false),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_1___default()(_useState, 2),
      isOpen = _useState2[0],
      setIsOpen = _useState2[1];
    var onChangeSubText = function onChangeSubText(newValue) {
      setAttributes({
        subText: newValue
      });
    };
    var onChangeMainText = function onChangeMainText(newValue) {
      setAttributes({
        mainText: newValue,
        divText: newValue
      });
    };
    var onChangeTitleDesign = function onChangeTitleDesign(newValue) {
      setAttributes({
        titleDesign: newValue
      });
    };
    var onChangeTitleDesignWeight = function onChangeTitleDesignWeight(newValue) {
      setAttributes({
        titleDesignWeight: newValue
      });
    };
    var onChangeRadioLayout = function onChangeRadioLayout(newValue) {
      setAttributes({
        radioLayout: newValue
      });
    };
    var onChangeRadioSymbol = function onChangeRadioSymbol(newValue) {
      setAttributes({
        radioSymbol: newValue
      });
    };
    var onChangeTagSelect = function onChangeTagSelect(newValue) {
      setAttributes({
        tagSelect: newValue
      });
    };
    var onChangeSymbolNumber = function onChangeSymbolNumber(newValue) {
      setAttributes({
        symbolNumber: newValue
      });
    };
    var onSelectMedia = function onSelectMedia(media) {
      var mediaSplit = media.url.split("/");
      var reverse = mediaSplit.reverse();
      var fileSplit = reverse[0].split(".");
      var mediaName = fileSplit[0].indexOf("-scaled") ? fileSplit[0].replace("-scaled", "") : fileSplit[0];
      var mediaExtension = fileSplit[1];
      var mediaUrlSmall = mediaName + "-150x150." + mediaExtension;
      var mediaReplace = media.url.replace(reverse[0], mediaUrlSmall);
      setAttributes({
        mediaId: media.id,
        mediaUrl: media.url,
        mediaUrl150: mediaReplace
      });
    };
    var onChangeMainTextColor = function onChangeMainTextColor(newValue) {
      setAttributes({
        mainTextColor: newValue
      });
    };
    var onChangeSubTextColor = function onChangeSubTextColor(newValue) {
      setAttributes({
        subTextColor: newValue
      });
    };
    var onChangeTitleDesignColor = function onChangeTitleDesignColor(newValue) {
      setAttributes({
        titleDesignColor: newValue
      });
    };
    var onChangeSymbolColor = function onChangeSymbolColor(newValue) {
      setAttributes({
        symbolColor: newValue
      });
    };
    var onChangeSymbolIcon = function onChangeSymbolIcon(newValue) {
      setAttributes({
        symbolIcon: newValue
      });
    };
    var removeImage = function removeImage() {
      setAttributes({
        mediaId: 0,
        mediaUrl: "",
        mediaUrl150: ""
      });
    };
    var mainRef = useRef(null);
    var subRef = useRef(null);
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ultra-light-gray",
      color: "#fcfcfc"
    }, {
      name: "pale-gray",
      color: "#f8f8f8"
    }, {
      name: "pale-red",
      color: "#FFF5F5"
    }, {
      name: "pale-blue",
      color: "#EFF5FF"
    }, {
      name: "pale-green",
      color: "#F0FFF6"
    }, {
      name: "pale-yellow",
      color: "#FFFBF0"
    }, {
      name: "light-gray",
      color: "#909090"
    }, {
      name: "light-red",
      color: "#F8C6BE"
    }, {
      name: "light-blue",
      color: "#BED7F8"
    }, {
      name: "light-green",
      color: "#B5F2D9"
    }, {
      name: "light-yellow",
      color: "#FFECC0"
    }, {
      name: "light-black",
      color: "#222222"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["PanelBody"], {
      title: "\u30C7\u30B6\u30A4\u30F3\u898B\u51FA\u3057\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30EC\u30A4\u30A2\u30A6\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: radioLayout,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("img", {
          src: JINR_VAR.image_path + "designtitle-left.png"
        }),
        value: "left"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("img", {
          src: JINR_VAR.image_path + "designtitle-center.png"
        }),
        value: "center"
      }],
      onChange: onChangeRadioLayout,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30B7\u30F3\u30DC\u30EB\u88C5\u98FE"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: radioSymbol,
      options: [{
        label: "なし",
        value: "none"
      }, {
        label: "番号",
        value: "number"
      }, {
        label: "アイコン",
        value: "icon"
      }, {
        label: "画像",
        value: "image"
      }],
      onChange: onChangeRadioSymbol,
      className: "a--jinr-radio"
    })), radioSymbol === "number" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u756A\u53F7\u306E\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["SelectControl"], {
      value: symbolNumber,
      options: [{
        label: "1",
        value: "1"
      }, {
        label: "2",
        value: "2"
      }, {
        label: "3",
        value: "3"
      }, {
        label: "4",
        value: "4"
      }, {
        label: "5",
        value: "5"
      }, {
        label: "6",
        value: "6"
      }, {
        label: "7",
        value: "7"
      }, {
        label: "8",
        value: "8"
      }, {
        label: "9",
        value: "9"
      }],
      onChange: onChangeSymbolNumber
    })), radioSymbol === "image" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u753B\u50CF\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, mediaUrl !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("img", {
      src: mediaUrl
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("img", {
      src: JINR_VAR.no_image
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(MediaUpload, {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: mediaId,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u9078\u629E");
      }
    })), mediaId != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), radioSymbol === "icon" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u753B\u50CF\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
      onClick: function onClick() {
        return setIsOpen(true);
      }
    }, "\u30A2\u30A4\u30B3\u30F3\u3092\u9078\u629E"))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: titleDesign,
      options: [{
        label: "文字のみ",
        value: "1"
      }, {
        label: "下線",
        value: "2"
      }, {
        label: "上下線",
        value: "3"
      }],
      onChange: onChangeTitleDesign,
      className: "a--jinr-radio"
    })), titleDesign !== "1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u7DDA\u306E\u592A\u3055"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: titleDesignWeight,
      options: [{
        label: "細め",
        value: "d--titledesign-weight-thin"
      }, {
        label: "普通",
        value: "d--titledesign-weight-normal"
      }, {
        label: "太め",
        value: "d--titledesign-weight-bold"
      }],
      onChange: onChangeTitleDesignWeight,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30BF\u30B0\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: tagSelect,
      options: [{
        label: "h2",
        value: "h2"
      }, {
        label: "h3",
        value: "h3"
      }, {
        label: "div",
        value: "div"
      }],
      onChange: onChangeTagSelect,
      className: "a--jinr-radio"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["PanelBody"], {
      title: "\u8272\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30E1\u30A4\u30F3\u30C6\u30AD\u30B9\u30C8\u306E\u8272\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: mainTextColor,
      enableAlpha: true,
      onChange: onChangeMainTextColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30B5\u30D6\u30C6\u30AD\u30B9\u30C8\u306E\u8272\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: subTextColor,
      enableAlpha: true,
      onChange: onChangeSubTextColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u898B\u51FA\u3057\u88C5\u98FE\u306E\u8272\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-label-description"
    }, "\u898B\u51FA\u3057\u88C5\u98FE\u3068\u306F\u898B\u51FA\u3057\u306B\u3064\u304F\u4E0B\u7DDA\u306A\u3069\u306E\u3053\u3068\u3067\u3059\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: titleDesignColor,
      enableAlpha: true,
      onChange: onChangeTitleDesignColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30B7\u30F3\u30DC\u30EB\u88C5\u98FE\u306E\u8272\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "jinr-label-description"
    }, "\u30B7\u30F3\u30DC\u30EB\u88C5\u98FE\u3068\u306F\u898B\u51FA\u3057\u524D\u306B\u3064\u304F\u756A\u53F7\u30FB\u30A2\u30A4\u30B3\u30F3\u306E\u3053\u3068\u3067\u3059\u3002"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: symbolColor,
      enableAlpha: true,
      onChange: onChangeSymbolColor
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(_SelectIcon__WEBPACK_IMPORTED_MODULE_7__["default"], {
      isOpen: isOpen,
      closeModal: setIsOpen,
      onChangeIcon: onChangeSymbolIcon
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "b--jinr-block b--jinr-h2rich d--h2rich-".concat(radioLayout, " d--h2rich-style").concat(titleDesign, " ").concat(titleDesignWeight, " d--h2rich-").concat(radioSymbol, " ").concat(props.attributes.className == undefined ? "" : props.attributes.className),
      style: {
        borderColor: titleDesignColor !== JINR_VAR.theme_color && titleDesignColor
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "c--h2rich-decoration"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--h2rich-".concat(radioSymbol, " ef"),
      style: symbolColor !== "" ? {
        color: symbolColor !== JINR_VAR.theme_color && symbolColor
      } : ""
    }, radioSymbol === "image" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("img", {
      src: mediaUrl150
    }), radioSymbol === "number" && symbolNumber, radioSymbol === "icon" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
      className: "jin-icons jin-ifont-".concat(symbolIcon)
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "c--h2rich-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RichText, {
      tagName: "span",
      className: "a--h2rich-subcopy ef",
      style: {
        color: subTextColor !== JINR_VAR.theme_color && subTextColor
      },
      value: subText,
      onChange: onChangeSubText,
      placeholder: "\u30B5\u30D6\u30C6\u30AD\u30B9\u30C8\u3092\u5165\u529B",
      onSplit: function onSplit() {
        var node = mainRef.current;
        if (node) {
          node.focus();
          return [];
        }
        return [];
      },
      onReplace: onReplace,
      onRemove: onRemove,
      ref: subRef
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RichText, {
      tagName: "h2",
      className: "a--h2rich-maincopy d--bold ef",
      ref: mainRef,
      style: {
        color: mainTextColor !== JINR_VAR.theme_color && mainTextColor
      },
      value: mainText,
      onChange: onChangeMainText,
      placeholder: "\u898B\u51FA\u3057\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B",
      onSplit: function onSplit(value, isOriginal) {
        var block;
        if (isOriginal || value) {
          block = Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["createBlock"])("jinr-blocks/designtitle", _objectSpread(_objectSpread({}, attributes), {}, {
            content: value
          }));
        } else {
          block = Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_3__["createBlock"])("core/paragraph");
        }
        if (isOriginal) {
          block.clientId = clientId;
        }
        return block;
      },
      onReplace: onReplace,
      onRemove: function onRemove() {
        if (subRef.current) {
          subRef.current.focus();
        }
      }
    }))), radioLayout === "center" && titleDesign === "3" && radioSymbol !== "none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--h2rich-decoration-before",
      style: {
        backgroundColor: titleDesignColor !== JINR_VAR.theme_color && titleDesignColor
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--h2rich-decoration-after",
      style: {
        backgroundColor: titleDesignColor !== JINR_VAR.theme_color && titleDesignColor
      }
    }))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var mainText = attributes.mainText,
      subText = attributes.subText,
      divText = attributes.divText,
      titleDesign = attributes.titleDesign,
      titleDesignWeight = attributes.titleDesignWeight,
      radioLayout = attributes.radioLayout,
      radioSymbol = attributes.radioSymbol,
      mediaUrl = attributes.mediaUrl,
      mediaUrl150 = attributes.mediaUrl150,
      symbolNumber = attributes.symbolNumber,
      symbolIcon = attributes.symbolIcon,
      subTextColor = attributes.subTextColor,
      mainTextColor = attributes.mainTextColor,
      symbolColor = attributes.symbolColor,
      tagSelect = attributes.tagSelect,
      titleDesignColorSelect = attributes.titleDesignColorSelect,
      titleDesignColor = attributes.titleDesignColor;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("section", {
      className: "b--jinr-block b--jinr-h2rich d--h2rich-".concat(radioLayout, " d--h2rich-style").concat(titleDesign, " ").concat(titleDesignWeight, " d--h2rich-").concat(radioSymbol, " ").concat(props.attributes.className == undefined ? "" : props.attributes.className),
      style: {
        borderColor: titleDesignColor !== JINR_VAR.theme_color && titleDesignColor
      }
    }, radioSymbol !== "none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "c--h2rich-decoration"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "a--h2rich-".concat(radioSymbol, " ef"),
      style: symbolColor !== "" ? {
        color: symbolColor !== JINR_VAR.theme_color && symbolColor
      } : ""
    }, radioSymbol === "image" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("img", {
      src: mediaUrl150
    }), radioSymbol === "number" && symbolNumber, radioSymbol === "icon" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("i", {
      className: "jin-icons jin-ifont-".concat(symbolIcon)
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", {
      className: "c--h2rich-contents"
    }, subText && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RichText.Content, {
      tagName: "span",
      className: "a--h2rich-subcopy ef",
      style: {
        color: subTextColor !== JINR_VAR.theme_color && subTextColor
      },
      value: subText
    }), tagSelect === "h2" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RichText.Content, {
      tagName: "h2",
      className: "a--h2rich-maincopy d--bold ef",
      style: {
        color: mainTextColor !== JINR_VAR.theme_color && mainTextColor
      },
      value: mainText
    }) : tagSelect === "h3" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RichText.Content, {
      tagName: "h3",
      className: "a--h2rich-maincopy d--bold ef",
      style: {
        color: mainTextColor !== JINR_VAR.theme_color && mainTextColor
      },
      value: divText
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])(RichText.Content, {
      tagName: "div",
      className: "a--h2rich-maincopy d--bold ef",
      style: {
        color: mainTextColor !== JINR_VAR.theme_color && mainTextColor
      },
      value: divText
    })), radioLayout === "center" && titleDesign === "3" && radioSymbol !== "none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--h2rich-decoration-before",
      style: {
        backgroundColor: titleDesignColor !== JINR_VAR.theme_color && titleDesignColor
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_2__["createElement"])("span", {
      className: "a--h2rich-decoration-after",
      style: {
        backgroundColor: titleDesignColor !== JINR_VAR.theme_color && titleDesignColor
      }
    })));
  }
}));

/***/ }),

/***/ "./src/blocks/fukidashi.js":
/*!*********************************!*\
  !*** ./src/blocks/fukidashi.js ***!
  \*********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_chat_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-chat.svg */ "./src/icons/jinr-chat.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);





var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useEffect = _wp$element.useEffect;
var _wp$blockEditor = wp.blockEditor,
  InnerBlocks = _wp$blockEditor.InnerBlocks,
  MediaUpload = _wp$blockEditor.MediaUpload,
  MediaUploadCheck = _wp$blockEditor.MediaUploadCheck;
Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/fukidashi", {
  title: "吹き出し",
  description: "会話やインタビュー形式の吹き出しを作成するブロック。カスタマイザーでよく使う吹き出しを登録できます。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_chat_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    registerData: {
      type: "number",
      default: 0
    },
    designType: {
      type: "string",
      default: JINR_VAR.fukidashi_type[0]
    },
    actualDesignType: {
      type: "string",
      default: "d--fukidashi-chat"
    },
    charaName: {
      type: "string",
      default: JINR_VAR.fukidashi_name[0]
    },
    charaImageUrl: {
      type: "string",
      default: "default"
    },
    charaImageID: {
      type: "number",
      default: 0
    },
    charaBorderColorSelect: {
      type: "string",
      default: ""
    },
    charaBorderColor: {
      type: "string",
      default: JINR_VAR.fukidashi_imgborder_color[0]
    },
    bgColor: {
      type: "string",
      default: JINR_VAR.fukidashi_bg_color[0]
    },
    borderColor: {
      type: "string",
      default: JINR_VAR.fukidashi_border_color[0]
    },
    borderColorSelect: {
      type: "string",
      default: JINR_VAR.fukidashi_border_color_type[0]
    },
    layout: {
      type: "string",
      default: JINR_VAR.fukidashi_layout[0]
    },
    borderWidth: {
      type: "string",
      default: JINR_VAR.fukidashi_border_weight[0]
    },
    fukidashiEditToggle: {
      type: "boolean"
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected;
    var registerData = attributes.registerData,
      designType = attributes.designType,
      actualDesignType = attributes.actualDesignType,
      charaName = attributes.charaName,
      charaImageUrl = attributes.charaImageUrl,
      charaImageID = attributes.charaImageID,
      charaBorderColor = attributes.charaBorderColor,
      charaBorderColorSelect = attributes.charaBorderColorSelect,
      bgColor = attributes.bgColor,
      borderColor = attributes.borderColor,
      borderColorSelect = attributes.borderColorSelect,
      layout = attributes.layout,
      borderWidth = attributes.borderWidth,
      fukidashiEditToggle = attributes.fukidashiEditToggle;
    if (registerData === 0 && !charaBorderColorSelect) {
      setAttributes({
        charaBorderColorSelect: JINR_VAR.fukidashi_imgborder_color_type[0]
      });
    }
    var onChangeRegisterData = function onChangeRegisterData(newValue) {
      var value = parseInt(newValue);
      setAttributes({
        registerData: value,
        designType: JINR_VAR.fukidashi_type[value],
        charaImageUrl: "default",
        charaName: JINR_VAR.fukidashi_name[value],
        charaBorderColorSelect: JINR_VAR.fukidashi_imgborder_color_type[value] == "gradation" ? "" : JINR_VAR.fukidashi_imgborder_color_type[value],
        borderColorSelect: JINR_VAR.fukidashi_border_color_type[value],
        charaBorderColor: JINR_VAR.fukidashi_imgborder_color[value],
        borderColor: JINR_VAR.fukidashi_border_color[value],
        bgColor: JINR_VAR.fukidashi_bg_color[value],
        layout: JINR_VAR.fukidashi_layout[value],
        borderWidth: JINR_VAR.fukidashi_border_weight[value]
      });
      if (fukidashiEditToggle == true) {
        setAttributes({
          fukidashiEditToggle: false
        });
      }
    };
    var onChangeDesignType = function onChangeDesignType(newValue) {
      setAttributes({
        designType: newValue
      });
    };
    var onChangeCharaName = function onChangeCharaName(newValue) {
      setAttributes({
        charaName: newValue
      });
    };
    var onChangeCharaImageUrl = function onChangeCharaImageUrl(newValue) {
      setAttributes({
        charaImageUrl: newValue
      });
    };
    var onChangeCharaImageID = function onChangeCharaImageID(newValue) {
      setAttributes({
        charaImageID: newValue
      });
    };
    var onChangeCharaBorderColor = function onChangeCharaBorderColor(newValue) {
      setAttributes({
        charaBorderColor: newValue
      });
    };
    var onChangeCharaBorderColorSelect = function onChangeCharaBorderColorSelect(newValue) {
      setAttributes({
        charaBorderColorSelect: newValue
      });
    };
    var onChangeBgColor = function onChangeBgColor(newValue) {
      setAttributes({
        bgColor: newValue
      });
    };
    var onChangeBorderColor = function onChangeBorderColor(newValue) {
      setAttributes({
        borderColor: newValue
      });
    };
    var onChangeLayout = function onChangeLayout(newValue) {
      setAttributes({
        layout: newValue
      });
    };
    var onChangeBorderWidth = function onChangeBorderWidth(newValue) {
      setAttributes({
        borderWidth: newValue
      });
    };
    var onChangeFukidashiEditToggle = function onChangeFukidashiEditToggle(newValue) {
      setAttributes({
        fukidashiEditToggle: newValue
      });
      if (newValue == false) {
        setAttributes({
          charaImageUrl: "default",
          charaName: JINR_VAR.fukidashi_name[registerData],
          designType: JINR_VAR.fukidashi_type[registerData],
          charaBorderColorSelect: JINR_VAR.fukidashi_imgborder_color_type[registerData] == "gradation" ? "" : JINR_VAR.fukidashi_imgborder_color_type[registerData],
          borderColorSelect: JINR_VAR.fukidashi_border_color_type[registerData],
          charaBorderColor: JINR_VAR.fukidashi_imgborder_color[registerData],
          borderColor: JINR_VAR.fukidashi_border_color[registerData],
          bgColor: JINR_VAR.fukidashi_bg_color[registerData],
          layout: JINR_VAR.fukidashi_layout[registerData],
          borderWidth: JINR_VAR.fukidashi_border_weight[registerData]
        });
      }
    };
    var onSelectMedia = function onSelectMedia(media) {
      setAttributes({
        charaImageID: media.id,
        charaImageUrl: media.url
      });
    };
    var removeImage = function removeImage() {
      setAttributes({
        charaImageID: 0,
        charaImageUrl: "default"
      });
    };
    useEffect(function () {
      if (designType === "default") {
        setAttributes({
          actualDesignType: JINR_VAR.fukidashi_type[registerData]
        });
      } else {
        setAttributes({
          actualDesignType: designType
        });
      }
    }, [designType, registerData]);
    var designType_options = [{
      label: "会話",
      value: "d--fukidashi-chat"
    }, {
      label: "心の声",
      value: "d--fukidashi-innervoice"
    }, {
      label: "インタビュー",
      value: "d--fukidashi-interview"
    }];
    var fukidashiTypeOptionsSettings = designType_options.filter(function (status) {
      if (registerData === 0) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 1) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 2) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 3) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 4) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 5) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 6) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 7) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 8) {
        return {
          label: status.label,
          value: status.value
        };
      } else if (registerData === 9) {
        return {
          label: status.label,
          value: status.value
        };
      }
    });
    var registerData_options = Array(10).fill(null).map(function (_, i) {
      return {
        check: JINR_VAR.fukidashi_image[i],
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "c--fukidashi-item a--jinr-item"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--fukidashi-item"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.fukidashi_image[i]
        })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--fukidashi-deco"
        }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
          className: "a--fukidashi-register-name"
        }, JINR_VAR.fukidashi_register_name[i])),
        value: i
      };
    });
    var fukidashiOptionsSettings = registerData_options.filter(function (status) {
      if (status.check !== "") {
        return {
          label: status.label,
          value: status.value
        };
      }
    });
    var imgBorderColorSet = fukidashiEditToggle === true ? charaBorderColor ? charaBorderColor : JINR_VAR.fukidashi_imgborder_color[registerData] : JINR_VAR.fukidashi_imgborder_color[registerData];
    var borderColorSet = fukidashiEditToggle === true ? !borderColor ? JINR_VAR.fukidashi_border_color[registerData] : borderColor : JINR_VAR.fukidashi_border_color[registerData];
    var borderColorSelectSet = fukidashiEditToggle === true ? borderColorSelect == "simplecolor" ? "simplecolor" : "transparent" : JINR_VAR.fukidashi_border_color_type[registerData];
    var bgColorSet = fukidashiEditToggle === true ? !bgColor ? JINR_VAR.fukidashi_bg_color[registerData] : bgColor : JINR_VAR.fukidashi_bg_color[registerData];
    var layoutSet = fukidashiEditToggle === true ? !layout ? JINR_VAR.fukidashi_layout[registerData] : layout : JINR_VAR.fukidashi_layout[registerData];
    var borderWidthSet = fukidashiEditToggle === true ? !borderWidth ? JINR_VAR.fukidashi_border_weight[registerData] : borderWidth : JINR_VAR.fukidashi_border_weight[registerData];
    var ImgBorderColorDiv = function ImgBorderColorDiv() {
      switch (JINR_VAR.fukidashi_imgborder_color_type[registerData]) {
        case "simplecolor":
          if (charaBorderColorSelect === "simplecolor") {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                backgroundColor: imgBorderColorSet
              }
            });
          } else if (charaBorderColorSelect === "gradation") {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                background: imgBorderColorSet
              }
            });
          } else if (charaBorderColorSelect === "transparent") {
            return "";
          } else {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                backgroundColor: imgBorderColorSet
              }
            });
          }
        case "gradation":
          if (charaBorderColorSelect === "simplecolor") {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                backgroundColor: imgBorderColorSet
              }
            });
          } else if (charaBorderColorSelect === "gradation") {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                background: imgBorderColorSet
              }
            });
          } else if (charaBorderColorSelect === "transparent") {
            return "";
          } else {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle d--jinr-".concat(JINR_VAR.fukidashi_imgborder_gradation[registerData])
            });
          }
        case "transparent":
          if (charaBorderColorSelect === "simplecolor") {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                backgroundColor: imgBorderColorSet
              }
            });
          } else if (charaBorderColorSelect === "gradation") {
            return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
              className: "a--fukidashi-img-circle",
              style: {
                background: imgBorderColorSet
              }
            });
          } else {
            return "";
          }
        default:
          return "";
      }
    };
    var ImgBox = function ImgBox() {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "c--fukidashi-img-box"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
        className: "a--fukidashi-img d--fukidashi-img-".concat(charaBorderColorSelect)
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
        src: fukidashiEditToggle === true ? charaImageUrl == "default" ? JINR_VAR.fukidashi_image[registerData] : charaImageUrl : JINR_VAR.fukidashi_image[registerData],
        alt: fukidashiEditToggle === true ? charaName == "" ? JINR_VAR.fukidashi_name[registerData] : charaName : JINR_VAR.fukidashi_name[registerData]
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
        className: "a--fukidashi-icon-name"
      }, fukidashiEditToggle === true ? charaName == "" ? JINR_VAR.fukidashi_name[registerData] : charaName : JINR_VAR.fukidashi_name[registerData]), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ImgBorderColorDiv, null));
    };
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ghostwhite",
      color: "#f8f8ff"
    }, {
      name: "azure",
      color: "#f2fdfd"
    }, {
      name: "ivory",
      color: "#fffcf0"
    }, {
      name: "cherry-blossom",
      color: "#fff5fa"
    }, {
      name: "pale-purple",
      color: "#f1f1fe"
    }, {
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "pale-blue",
      color: "#D2E9FD"
    }, {
      name: "pale-red",
      color: "#FBE3E6"
    }, {
      name: "pale-green",
      color: "#e8fce8"
    }, {
      name: "pale-brown",
      color: "#f7eee9"
    }, {
      name: "ultra-light-grayish-green",
      color: "#e9f2f0"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var defaultColorPallet2 = [{
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "english-green",
      color: "#70a9a1"
    }, {
      name: "grayish-brown",
      color: "#b89a89"
    }, {
      name: "light-purple",
      color: "#cdbbf2"
    }, {
      name: "light-blue",
      color: "#98ebde"
    }, {
      name: "light-yellow",
      color: "#fde791"
    }, {
      name: "light-pink",
      color: "#ff85c2"
    }, {
      name: "black",
      color: "#000000"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrColorPallet2 = defaultColorPallet2.concat(favoriteColorPallet);
    var gradation_color_options = [{
      name: "Pale",
      gradient: "linear-gradient(90deg, rgba(187, 255, 239, 1), rgba(236, 237, 203, 1) 34%, rgba(248, 227, 183, 1) 72%, rgba(255, 155, 252, 1) 97%)",
      slug: "pale-gradation"
    }, {
      name: "Healing Beach",
      gradient: "linear-gradient(90deg, rgba(253, 219, 146, 1), rgba(209, 253, 254, 1))",
      slug: "healing-beach"
    }, {
      name: "Rainbow",
      gradient: "conic-gradient(from 20deg, rgba(223, 168, 168, 1) 18deg, rgba(193, 199, 197, 1) 68deg, rgba(108, 199, 221, 1) 151deg, rgba(177, 151, 223, 1) 263deg, rgba(122, 197, 216, 1) 295deg, rgba(223, 168, 168, 1) 360deg)",
      slug: "rainbow-gradation"
    }, {
      name: "Jungle Green",
      gradient: "linear-gradient(135deg, rgba(149, 199, 30, 1), rgba(29, 80, 40, 1) 71%)",
      slug: "jungle-green"
    }, {
      name: "Technical Blue",
      gradient: "linear-gradient(135deg, rgba(57, 210, 248, 1), rgba(48, 97, 96, 1))",
      slug: "technical-blue"
    }, {
      name: "Blue Violet",
      gradient: "linear-gradient(90deg, rgba(61, 200, 194, 1), rgba(61, 156, 194, 1) 50%, rgba(197, 125, 233, 1))",
      slug: "blue-violet"
    }, {
      name: "Magic Hour",
      gradient: "linear-gradient(150deg, rgba(247, 166, 12, 1) 10%, rgba(255, 34, 87, 1) 40%, rgba(154, 39, 238, 1) 68%, rgba(35, 102, 247, 1) 90%)",
      slug: "magic-hour"
    }, {
      name: "Tropical",
      gradient: "linear-gradient(90deg, rgba(61, 200, 194, 1), rgba(206, 216, 0, 1) 30%, rgba(255, 174, 68, 1) 74%, rgba(234, 114, 0, 1))",
      slug: "tropical"
    }];
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u767B\u9332\u6E08\u307F\u306E\u5439\u304D\u51FA\u3057"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-item-list d--jinr-radio-image d--jinr-radio-image-circle"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: registerData,
      options: fukidashiOptionsSettings,
      onChange: onChangeRegisterData
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "jinr-customizer-link"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "d--jinr-block-button-style2",
      target: "_blank",
      href: JINR_VAR.fukidashi_panel_link
    }, "\u5439\u304D\u51FA\u3057\u767B\u9332\u3092\u3059\u308B \uFF1E"))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5439\u304D\u51FA\u3057\u3092\u7DE8\u96C6",
      className: "jinr-kugiri"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ToggleControl"], {
      label: fukidashiEditToggle ? "ON" : "OFF",
      checked: fukidashiEditToggle,
      onChange: onChangeFukidashiEditToggle,
      className: "jinr-toggle"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "jinr-block-description"
    }, fukidashiEditToggle === true ? "OFFにすると設定した情報がリセットされ、登録したデザインに戻ります。他の登録した吹き出しを選択すると自動でOFFになります。" : "ONにすると登録した吹き出しを個別に編集できます。")), fukidashiEditToggle === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u30BF\u30A4\u30D7"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-type-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: designType,
      options: designType_options,
      onChange: onChangeDesignType,
      className: "a--jinr-radio"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AD\u30E3\u30E9\u30AF\u30BF\u30FC\u753B\u50CF"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, charaImageUrl !== "default" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: charaImageUrl
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: JINR_VAR.fukidashi_image[registerData]
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUpload, {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: charaImageID,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u9078\u629E");
      }
    })), charaImageID != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AD\u30E3\u30E9\u30AF\u30BF\u30FC\u540D"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["TextControl"], {
      value: charaName,
      onChange: onChangeCharaName
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u753B\u50CF\u306E\u67A0\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ButtonGroup"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: charaBorderColorSelect === "simplecolor" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          charaBorderColorSelect: "simplecolor",
          charaBorderColor: JINR_VAR.fukidashi_imgborder_color[registerData]
        });
      }
    }, "\u5358\u8272"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: charaBorderColorSelect === "gradation" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          charaBorderColorSelect: "gradation",
          charaBorderColor: "linear-gradient(90deg, rgba(251, 213, 251, 1), rgba(149, 233, 243, 1))"
        });
      }
    }, "\u30B0\u30E9\u30C7\u30FC\u30B7\u30E7\u30F3"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: charaBorderColorSelect === "transparent" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          charaBorderColorSelect: "transparent",
          charaBorderColor: ""
        });
      }
    }, "\u900F\u660E")), charaBorderColorSelect === "simplecolor" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: charaBorderColor,
      enableAlpha: true,
      onChange: onChangeCharaBorderColor
    }) : charaBorderColorSelect === "gradation" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["GradientPicker"], {
      value: charaBorderColor,
      onChange: onChangeCharaBorderColor,
      gradients: gradation_color_options
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5439\u304D\u51FA\u3057\u306E\u80CC\u666F\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: !bgColor ? "#eeeeee" : bgColor,
      enableAlpha: true,
      onChange: onChangeBgColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5439\u304D\u51FA\u3057\u306E\u67A0\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ButtonGroup"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: borderColorSelect === "simplecolor" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          borderColorSelect: "simplecolor",
          borderColor: JINR_VAR.fukidashi_border_color[registerData]
        });
      }
    }, "\u5358\u8272"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: borderColorSelect === "transparent" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          borderColorSelect: "transparent",
          borderColor: ""
        });
      }
    }, "\u900F\u660E")), borderColorSelect === "simplecolor" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet2,
      value: !borderColor ? JINR_VAR.fukidashi_border_color[registerData] : borderColor,
      enableAlpha: true,
      onChange: onChangeBorderColor
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30EC\u30A4\u30A2\u30A6\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-type-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: layout,
      options: [{
        label: "左",
        value: "d--fukidashi-left"
      }, {
        label: "右",
        value: "d--fukidashi-right"
      }],
      onChange: onChangeLayout,
      className: "a--jinr-radio"
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5168\u4F53\u306E\u67A0\u306E\u592A\u3055"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-type-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: borderWidth,
      options: [{
        label: "細め",
        value: "d--fukidashi-border-thin"
      }, {
        label: "普通",
        value: "d--fukidashi-border-normal"
      }, {
        label: "太め",
        value: "d--fukidashi-border-bold"
      }],
      onChange: onChangeBorderWidth,
      className: "a--jinr-radio"
    }))))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-fukidashi ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, designType === "d--fukidashi-chat" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--jinr-fukidashi d--fukidashi-chat ".concat(layoutSet, " ").concat(borderWidthSet, " d--border-").concat(borderColorSelectSet)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ImgBox, null), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-contents",
      style: {
        borderColor: borderColorSet,
        backgroundColor: bgColorSet
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--fukidashi-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--fukidashi-parts-after",
      style: {
        color: bgColorSet
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--fukidashi-parts-before",
      style: {
        color: borderColorSet
      }
    }))), designType === "d--fukidashi-innervoice" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--jinr-fukidashi d--fukidashi-innervoice ".concat(layoutSet, " ").concat(borderWidthSet, " d--border-").concat(borderColorSelectSet)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ImgBox, null), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-contents",
      style: {
        borderColor: borderColorSet,
        backgroundColor: bgColorSet
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--fukidashi-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--fukidashi-parts-after",
      style: {
        borderColor: borderColorSet,
        backgroundColor: bgColorSet
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--fukidashi-parts-before",
      style: {
        borderColor: borderColorSet,
        backgroundColor: bgColorSet
      }
    }))), designType !== "d--fukidashi-chat" && designType !== "d--fukidashi-innervoice" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--jinr-fukidashi d--fukidashi-interview ".concat(layoutSet, " ").concat(borderWidthSet, " d--border-").concat(borderColorSelectSet)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--fukidashi-contents",
      style: {
        borderColor: borderColorSet,
        backgroundColor: bgColorSet
      }
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--fukidashi-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--fukidashi-parts-after",
      style: {
        color: bgColorSet
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--fukidashi-parts-before",
      style: {
        color: borderColorSet
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(ImgBox, null)))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var registerData = attributes.registerData,
      designType = attributes.designType,
      charaName = attributes.charaName,
      charaImageUrl = attributes.charaImageUrl,
      charaImageID = attributes.charaImageID,
      charaBorderColor = attributes.charaBorderColor,
      charaBorderColorSelect = attributes.charaBorderColorSelect,
      bgColor = attributes.bgColor,
      borderColor = attributes.borderColor,
      borderColorSelect = attributes.borderColorSelect,
      layout = attributes.layout,
      borderWidth = attributes.borderWidth,
      jinrBlocksClassName = attributes.jinrBlocksClassName,
      fukidashiEditToggle = attributes.fukidashiEditToggle;
    var overRideFukidashi = function overRideFukidashi() {
      var overRideValues = "";
      if (fukidashiEditToggle === true) {
        if (designType && designType !== JINR_VAR.fukidashi_type[registerData]) {
          overRideValues = " type=\"".concat(designType, "\"");
        }
        if (charaName && charaName !== JINR_VAR.fukidashi_name[registerData]) {
          overRideValues += " name=\"".concat(charaName, "\"");
        }
        if (charaImageUrl !== "default" && charaImageUrl !== JINR_VAR.fukidashi_image[registerData]) {
          overRideValues += " image=\"".concat(charaImageUrl, "\"");
        }
        if (charaBorderColor && charaBorderColor !== JINR_VAR.fukidashi_imgborder_color[registerData]) {
          overRideValues += " imgborder_color=\"".concat(charaBorderColor, "\"");
        }
        if (charaBorderColorSelect && charaBorderColorSelect !== JINR_VAR.fukidashi_imgborder_color_type[registerData]) {
          if (JINR_VAR.fukidashi_imgborder_color_type[registerData] == "simplecolor" && JINR_VAR.fukidashi_imgborder_color_type[registerData] == "gradation") {
            overRideValues += " imgborder_color_select=\"".concat(charaBorderColorSelect, "\"");
          } else {
            //透明タイプだけ特殊処理
            if (charaBorderColorSelect == "simplecolor") {
              overRideValues += " imgborder_color_select=\"".concat(charaBorderColorSelect, "\" img_color_type=\"simplecolor\"");
            } else if (charaBorderColorSelect == "gradation") {
              overRideValues += " imgborder_color_select=\"".concat(charaBorderColorSelect, "\" img_color_type=\"gradation\"");
            } else {
              overRideValues += " imgborder_color_select=\"".concat(charaBorderColorSelect, "\" img_color_type=\"transparent\"");
            }
          }
        }
        if (bgColor && bgColor !== JINR_VAR.fukidashi_bg_color[registerData]) {
          overRideValues += " bg_color=\"".concat(bgColor, "\"");
        }
        if (borderColorSelect && borderColorSelect !== JINR_VAR.fukidashi_border_color_type[registerData]) {
          overRideValues += " border_color_select=\"".concat(borderColorSelect, "\"");
        }
        if (borderColor && borderColor !== JINR_VAR.fukidashi_border_color[registerData]) {
          overRideValues += " border_color=\"".concat(borderColor, "\"");
        }
        if (layout && layout !== JINR_VAR.fukidashi_layout[registerData]) {
          overRideValues += " layout=\"".concat(layout, "\"");
        }
        if (borderWidth && borderWidth !== JINR_VAR.fukidashi_border_weight[registerData]) {
          overRideValues += " border_weight=\"".concat(borderWidth, "\"");
        }
      }
      return overRideValues;
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-fukidashi ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, "[", "jinr_fukidashi".concat(registerData + 1), overRideFukidashi(), "]", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--fukidashi-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks.Content, null)), "[/", "jinr_fukidashi".concat(registerData + 1), "]");
  }
});

/***/ }),

/***/ "./src/blocks/fullwidth.js":
/*!*********************************!*\
  !*** ./src/blocks/fullwidth.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_fullwidth_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-fullwidth.svg */ "./src/icons/jinr-fullwidth.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);





var Fragment = wp.element.Fragment;
var _wp$blockEditor = wp.blockEditor,
  MediaUpload = _wp$blockEditor.MediaUpload,
  MediaUploadCheck = _wp$blockEditor.MediaUploadCheck,
  InnerBlocks = _wp$blockEditor.InnerBlocks;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/fullwidth", {
  title: "フルワイド",
  description: "画面幅いっぱいに表示させたり、通常よりも広くコンテンツを見せたい時に使うと効果的なブロックです。TOPページで使うのがおすすめです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_fullwidth_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    fullWidthSize: {
      type: "string",
      default: "d--fullwidth-max"
    },
    fullWidthDeco: {
      type: "string",
      default: "none"
    },
    fullWidthBgColor: {
      type: "string",
      default: "#f5f5f5"
    },
    fullWidthImageID: {
      type: "number",
      default: 0
    },
    fullWidthImageUrl: {
      type: "string",
      default: ""
    },
    fullWidthTextColor: {
      type: "string",
      default: JINR_VAR.text_color
    },
    fullWidthBgColorTransparent: {
      type: "number",
      default: 50
    },
    fullWidthBgColorDesign: {
      type: "string",
      default: "none"
    },
    fullWidthBlurlebel: {
      type: "number",
      default: 3
    },
    fullWidthParallax: {
      type: "string",
      default: "d--fullwidth-parallax-off"
    },
    fullWidthPaddingPc: {
      type: "string",
      default: "d--fullwidth-pad0"
    },
    fullWidthPaddingSp: {
      type: "string",
      default: "d--fullwidth-pad0-sp"
    },
    jinrBlocksClassName: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected;
    var fullWidthSize = attributes.fullWidthSize,
      fullWidthDeco = attributes.fullWidthDeco,
      fullWidthBgColor = attributes.fullWidthBgColor,
      fullWidthImageID = attributes.fullWidthImageID,
      fullWidthImageUrl = attributes.fullWidthImageUrl,
      fullWidthTextColor = attributes.fullWidthTextColor,
      fullWidthBgColorTransparent = attributes.fullWidthBgColorTransparent,
      fullWidthBgColorDesign = attributes.fullWidthBgColorDesign,
      fullWidthBlurlebel = attributes.fullWidthBlurlebel,
      fullWidthParallax = attributes.fullWidthParallax,
      fullWidthPaddingPc = attributes.fullWidthPaddingPc,
      fullWidthPaddingSp = attributes.fullWidthPaddingSp;
    var onChangeFullWidthSize = function onChangeFullWidthSize(newValue) {
      setAttributes({
        fullWidthSize: newValue
      });
    };
    var onChangeFullWidthDeco = function onChangeFullWidthDeco(newValue) {
      setAttributes({
        fullWidthDeco: newValue
      });
    };
    var onChangeFullWidthBgColor = function onChangeFullWidthBgColor(newValue) {
      setAttributes({
        fullWidthBgColor: newValue
      });
    };
    var onSelectMedia = function onSelectMedia(media) {
      setAttributes({
        fullWidthImageID: media.id,
        fullWidthImageUrl: media.url
      });
    };
    var onChangeFullWidthTextColor = function onChangeFullWidthTextColor(newValue) {
      setAttributes({
        fullWidthTextColor: newValue
      });
    };
    var onChangeFullWidthBgColorTransparent = function onChangeFullWidthBgColorTransparent(newValue) {
      setAttributes({
        fullWidthBgColorTransparent: newValue
      });
    };
    var onChangeFullWidthBgColorDesign = function onChangeFullWidthBgColorDesign(newValue) {
      setAttributes({
        fullWidthBgColorDesign: newValue
      });
    };
    var onChangeFullWidthBlurlebel = function onChangeFullWidthBlurlebel(newValue) {
      setAttributes({
        fullWidthBlurlebel: newValue
      });
    };
    var onChangeFullWidthParallax = function onChangeFullWidthParallax(newValue) {
      setAttributes({
        fullWidthParallax: newValue
      });
    };
    var onChangeFullWidthPaddingPc = function onChangeFullWidthPaddingPc(newValue) {
      setAttributes({
        fullWidthPaddingPc: newValue
      });
    };
    var onChangeFullWidthPaddingSp = function onChangeFullWidthPaddingSp(newValue) {
      setAttributes({
        fullWidthPaddingSp: newValue
      });
    };
    var textDefaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "lightgray",
      color: "#f5f5f5"
    }, {
      name: "black",
      color: "#000000"
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ultra-light-gray",
      color: "#fcfcfc"
    }, {
      name: "pale-gray",
      color: "#f8f8f8"
    }, {
      name: "pale-red",
      color: "#FFF5F5"
    }, {
      name: "pale-blue",
      color: "#EFF5FF"
    }, {
      name: "pale-green",
      color: "#F0FFF6"
    }, {
      name: "pale-yellow",
      color: "#FFFBF0"
    }, {
      name: "light-gray",
      color: "#909090"
    }, {
      name: "light-red",
      color: "#F8C6BE"
    }, {
      name: "light-blue",
      color: "#BED7F8"
    }, {
      name: "light-green",
      color: "#B5F2D9"
    }, {
      name: "light-yellow",
      color: "#FFECC0"
    }, {
      name: "light-black",
      color: "#222222"
    }, {
      name: "white-transparent",
      color: "rgba(255,255,255,0)"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrTextColorPallet = textDefaultColorPallet.concat(favoriteColorPallet);
    var removeImage = function removeImage() {
      setAttributes({
        fullWidthImageID: 0,
        fullWidthImageUrl: ""
      });
    };
    var TextColorStyle = {
      color: fullWidthTextColor !== JINR_VAR.text_color && fullWidthTextColor
    };
    var fullwidthBgColorStyle = {
      backgroundColor: fullWidthBgColor
    };
    var fullwidthOverlayStyle = {
      backgroundColor: fullWidthBgColor,
      opacity: "".concat(fullWidthBgColorTransparent * 0.01)
    };
    var fullwidthBlurStyle = {
      filter: "blur(".concat(fullWidthBlurlebel, "px)"),
      transform: "scale(1.03)"
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5185\u90E8\u306E\u30B3\u30F3\u30C6\u30F3\u30C4\u306E\u5E45"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: fullWidthSize,
      options: [{
        label: "広め",
        value: "d--fullwidth-max"
      }, {
        label: "狭め",
        value: "d--fullwidth-article"
      }, {
        label: "100%",
        value: "d--fullwidth-100"
      }],
      onChange: onChangeFullWidthSize,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u88C5\u98FE"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: fullWidthDeco,
      options: [{
        label: "なし",
        value: "none"
      }, {
        label: "背景画像",
        value: "d--fullwidth-deco-bgimage"
      }],
      onChange: onChangeFullWidthDeco,
      className: "a--jinr-radio"
    })), fullWidthDeco == "none" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u80CC\u666F\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: fullWidthBgColor,
      enableAlpha: true,
      onChange: onChangeFullWidthBgColor
    })), fullWidthDeco == "d--fullwidth-deco-bgimage" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, fullWidthImageUrl !== "" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: fullWidthImageUrl
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUpload, {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: fullWidthImageID,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u9078\u629E");
      }
    })), fullWidthImageID != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), fullWidthDeco == "d--fullwidth-deco-bgimage" && fullWidthImageID !== 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AA\u30FC\u30D0\u30FC\u30EC\u30A4\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: fullWidthBgColor,
      onChange: onChangeFullWidthBgColor
    })), fullWidthDeco == "d--fullwidth-deco-bgimage" && fullWidthImageID !== 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AA\u30FC\u30D0\u30FC\u30EC\u30A4\u306E\u5F37\u3055"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RangeControl"], {
      value: fullWidthBgColorTransparent,
      onChange: onChangeFullWidthBgColorTransparent,
      min: 0,
      max: 100
    })), fullWidthDeco == "d--fullwidth-deco-bgimage" && fullWidthImageID !== 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u307C\u304B\u3057\u8868\u73FE"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: fullWidthBgColorDesign,
      options: [{
        label: "OFF",
        value: "none"
      }, {
        label: "ON",
        value: "blur"
      }],
      onChange: onChangeFullWidthBgColorDesign,
      className: "a--jinr-radio"
    })), fullWidthBgColorDesign == "blur" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30D6\u30E9\u30FC\u306E\u5F37\u3055\u30EC\u30D9\u30EB"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RangeControl"], {
      value: fullWidthBlurlebel,
      onChange: onChangeFullWidthBlurlebel,
      min: 1,
      max: 10
    })), fullWidthDeco == "d--fullwidth-deco-bgimage" && fullWidthImageID !== 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30D1\u30E9\u30E9\u30C3\u30AF\u30B9\u8868\u73FE"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: fullWidthParallax,
      options: [{
        label: "OFF",
        value: "d--fullwidth-parallax-off"
      }, {
        label: "ON",
        value: "d--fullwidth-parallax-on"
      }],
      onChange: onChangeFullWidthParallax,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u6587\u5B57\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrTextColorPallet,
      value: fullWidthTextColor,
      enableAlpha: true,
      onChange: onChangeFullWidthTextColor
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u5185\u5074\u306E\u4F59\u767D\u8A2D\u5B9A",
      initialOpen: false
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "PC\u30FB\u30BF\u30D6\u30EC\u30C3\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: fullWidthPaddingPc,
      options: [{
        label: "0",
        value: "d--fullwidth-pad0"
      }, {
        label: "20",
        value: "d--fullwidth-pad20"
      }, {
        label: "30",
        value: "d--fullwidth-pad30"
      }, {
        label: "40",
        value: "d--fullwidth-pad40"
      }, {
        label: "50",
        value: "d--fullwidth-pad50"
      }, {
        label: "60",
        value: "d--fullwidth-pad60"
      }],
      onChange: onChangeFullWidthPaddingPc,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30B9\u30DE\u30DB"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: fullWidthPaddingSp,
      options: [{
        label: "0",
        value: "d--fullwidth-pad0-sp"
      }, {
        label: "20",
        value: "d--fullwidth-pad20-sp"
      }, {
        label: "30",
        value: "d--fullwidth-pad30-sp"
      }, {
        label: "40",
        value: "d--fullwidth-pad40-sp"
      }, {
        label: "50",
        value: "d--fullwidth-pad50-sp"
      }, {
        label: "60",
        value: "d--fullwidth-pad60-sp"
      }],
      onChange: onChangeFullWidthPaddingSp,
      className: "a--jinr-radio"
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-fullwidth-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--parent-select"
    }, "\u89AA\u30D6\u30ED\u30C3\u30AF\u3092\u9078\u629E"), fullWidthDeco == "d--fullwidth-deco-bgimage" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-fullwidth ".concat(fullWidthParallax, " ").concat(fullWidthDeco)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--jinr-fullwidth-image"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--jinr-fullwidth-image-clip"
    }, fullWidthBgColorDesign === "blur" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: fullWidthImageUrl,
      style: fullwidthBlurStyle
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: fullWidthImageUrl
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--jinr-fullwidth-overlay",
      style: fullwidthOverlayStyle
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "".concat(fullWidthSize, " ").concat(fullWidthPaddingPc, " ").concat(fullWidthPaddingSp, " t--main-width"),
      style: TextColorStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null))) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-fullwidth",
      style: fullwidthBgColorStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "".concat(fullWidthSize, " ").concat(fullWidthPaddingPc, " ").concat(fullWidthPaddingSp, " t--main-width"),
      style: TextColorStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks, null)))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var fullWidthSize = attributes.fullWidthSize,
      fullWidthDeco = attributes.fullWidthDeco,
      fullWidthBgColor = attributes.fullWidthBgColor,
      fullWidthImageID = attributes.fullWidthImageID,
      fullWidthImageUrl = attributes.fullWidthImageUrl,
      fullWidthTextColor = attributes.fullWidthTextColor,
      fullWidthBgColorTransparent = attributes.fullWidthBgColorTransparent,
      fullWidthBgColorDesign = attributes.fullWidthBgColorDesign,
      fullWidthBlurlebel = attributes.fullWidthBlurlebel,
      fullWidthParallax = attributes.fullWidthParallax,
      fullWidthPaddingPc = attributes.fullWidthPaddingPc,
      fullWidthPaddingSp = attributes.fullWidthPaddingSp;
    var TextColorStyle = {
      color: fullWidthTextColor !== JINR_VAR.text_color && fullWidthTextColor
    };
    var fullwidthBgColorStyle = {
      backgroundColor: fullWidthBgColor
    };
    var fullwidthOverlayStyle = {
      backgroundColor: fullWidthBgColor,
      opacity: "".concat(fullWidthBgColorTransparent * 0.01)
    };
    var fullwidthBlurStyle = {
      filter: "blur(".concat(fullWidthBlurlebel, "px)"),
      transform: "scale(1.03)"
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-fullwidth-container"
    }, fullWidthDeco == "d--fullwidth-deco-bgimage" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-fullwidth ".concat(fullWidthParallax, " ").concat(fullWidthDeco)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--jinr-fullwidth-image"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--jinr-fullwidth-image-clip"
    }, fullWidthBgColorDesign === "blur" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: fullWidthImageUrl,
      style: fullwidthBlurStyle
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: fullWidthImageUrl
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--jinr-fullwidth-overlay",
      style: fullwidthOverlayStyle
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "".concat(fullWidthSize, " ").concat(fullWidthPaddingPc, " ").concat(fullWidthPaddingSp, " t--main-width"),
      style: TextColorStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks.Content, null))) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-fullwidth",
      style: fullwidthBgColorStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "".concat(fullWidthSize, " ").concat(fullWidthPaddingPc, " ").concat(fullWidthPaddingSp, " t--main-width"),
      style: TextColorStyle
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(InnerBlocks.Content, null))));
  }
}));

/***/ }),

/***/ "./src/blocks/iconbox.js":
/*!*******************************!*\
  !*** ./src/blocks/iconbox.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/rich-text */ "@wordpress/rich-text");
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _icons_jinr_iconbox_svg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../icons/jinr-iconbox.svg */ "./src/icons/jinr-iconbox.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _SelectIcon__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../SelectIcon */ "./src/SelectIcon.js");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_8__);








var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useEffect = _wp$element.useEffect,
  useState = _wp$element.useState;
var InnerBlocks = wp.blockEditor.InnerBlocks;

/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__["registerBlockType"])("jinr-blocks/iconbox", {
  title: "アイコンボックス",
  description: "アイコンとラベルがセットになった視認性の高いボックスを作成できます。カスマタイざーでよく使うアイコンボックスを登録しておくと便利です。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_iconbox_svg__WEBPACK_IMPORTED_MODULE_5__["ReactComponent"], null),
  attributes: {
    iconBoxTitle: {
      type: "string",
      default: ""
    },
    iconBoxDesign: {
      type: "string",
      default: "d--simple-iconbox"
    },
    iconBoxStyle: {
      type: "string",
      default: "1"
    },
    actualDesign: {
      type: "string",
      default: "d--simple-iconbox"
    },
    content: {
      type: "string",
      selector: "p"
    },
    iconBoxEditToggle: {
      type: "boolean"
    },
    iconBoxIcon: {
      type: "string",
      default: JINR_VAR.simple_iconbox_icon[0]
    },
    iconBoxColor: {
      type: "string",
      default: ""
    },
    iconBoxIconColor: {
      type: "string",
      default: ""
    },
    headingIconBoxIcon: {
      type: "string",
      default: JINR_VAR.heading_iconbox_icon[0]
    },
    headingIconBoxColor: {
      type: "string",
      default: ""
    },
    headingIconBoxIconColor: {
      type: "string",
      default: ""
    },
    blockID: {
      type: 'string'
    }
  },
  transforms: {
    from: [{
      type: "shortcode",
      tag: "jin-iconbox01",
      attributes: {
        content: {
          type: "string",
          shortcode: function shortcode(attributes, content) {
            return content.shortcode.content;
          }
        }
      }
    }]
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var iconBoxDesign = attributes.iconBoxDesign,
      iconBoxStyle = attributes.iconBoxStyle,
      iconBoxTitle = attributes.iconBoxTitle,
      actualDesign = attributes.actualDesign,
      content = attributes.content,
      iconBoxEditToggle = attributes.iconBoxEditToggle,
      iconBoxIcon = attributes.iconBoxIcon,
      iconBoxColor = attributes.iconBoxColor,
      iconBoxIconColor = attributes.iconBoxIconColor,
      headingIconBoxIcon = attributes.headingIconBoxIcon,
      headingIconBoxColor = attributes.headingIconBoxColor,
      headingIconBoxIconColor = attributes.headingIconBoxIconColor,
      blockID = attributes.blockID;
    var updateClientId = Object(lodash__WEBPACK_IMPORTED_MODULE_8__["debounce"])(function () {
      setAttributes({
        blockID: clientId
      });
    }, 500);
    useEffect(function () {
      updateClientId();
    }, [attributes, clientId]);
    function hex2rgba(hex) {
      var alpha = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0.1;
      // ロングバージョンの場合（例：#FF0000）
      var r = hex.match(/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i);
      var c = null;
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return parseInt(x, 16);
        });
      }
      // ショートバージョンの場合（例：#F00）
      r = hex.match(/^#([0-9a-f])([0-9a-f])([0-9a-f])$/i);
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return 0x11 * parseInt(x, 16);
        });
      }
      // 該当しない場合は、nullを返す.
      if (!c) {
        return null;
      }
      return "rgba(".concat(c[0], ", ").concat(c[1], ", ").concat(c[2], ", ").concat(alpha, ")");
    }
    var onChangeRadioiconBoxDesign = function onChangeRadioiconBoxDesign(newValue) {
      setAttributes({
        iconBoxDesign: newValue,
        iconBoxStyle: "1",
        iconBoxIcon: JINR_VAR.simple_iconbox_icon[0],
        iconBoxColor: hex2rgba(JINR_VAR.simple_iconbox_color[0]),
        iconBoxIconColor: JINR_VAR.simple_iconbox_color[0],
        headingIconBoxIcon: JINR_VAR.heading_iconbox_icon[0],
        headingIconBoxColor: JINR_VAR.heading_iconbox_color[0],
        headingIconBoxIconColor: JINR_VAR.heading_iconbox_color[0]
      });
      if (iconBoxEditToggle == true) {
        setAttributes({
          iconBoxEditToggle: false
        });
      }
    };
    var onChangeRadioiconBoxStyle = function onChangeRadioiconBoxStyle(newValue) {
      setAttributes({
        iconBoxStyle: newValue,
        iconBoxIcon: JINR_VAR.simple_iconbox_icon[newValue - 1],
        iconBoxColor: hex2rgba(JINR_VAR.simple_iconbox_color[newValue - 1]),
        iconBoxIconColor: JINR_VAR.simple_iconbox_color[newValue - 1],
        headingIconBoxIcon: JINR_VAR.heading_iconbox_icon[newValue - 1],
        headingIconBoxColor: JINR_VAR.heading_iconbox_color[newValue - 1],
        headingIconBoxIconColor: JINR_VAR.heading_iconbox_color[newValue - 1]
      });
      if (iconBoxEditToggle == true) {
        setAttributes({
          iconBoxEditToggle: false
        });
      }
    };
    var onChangeIconBoxTitle = function onChangeIconBoxTitle(newValue) {
      setAttributes({
        iconBoxTitle: newValue
      });
    };
    var onChangeContent = function onChangeContent(newValue) {
      setAttributes({
        content: newValue
      });
    };
    var onChangeIconBoxEditToggle = function onChangeIconBoxEditToggle(newValue) {
      setAttributes({
        iconBoxEditToggle: newValue
      });
    };
    var onChangeIconBoxColor = function onChangeIconBoxColor(newValue) {
      setAttributes({
        iconBoxColor: newValue
      });
    };
    var onChangeIconBoxIconColor = function onChangeIconBoxIconColor(newValue) {
      setAttributes({
        iconBoxIconColor: newValue
      });
    };
    var onChangeHeadingIconBoxColor = function onChangeHeadingIconBoxColor(newValue) {
      setAttributes({
        headingIconBoxColor: newValue
      });
    };
    var onChangeHeadingIconBoxIconColor = function onChangeHeadingIconBoxIconColor(newValue) {
      setAttributes({
        headingIconBoxIconColor: newValue
      });
    };
    var overRideSimpleIconBox = function overRideSimpleIconBox() {
      var overRideValues = "";
      if (iconBoxEditToggle === true) {
        if (iconBoxColor && iconBoxColor !== JINR_VAR.simple_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += "#block-" + blockID + " .d--simple-iconbox" + iconBoxStyle + "{background:" + iconBoxColor + ";}";
        }
        if (iconBoxIconColor && iconBoxIconColor !== JINR_VAR.simple_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += "#block-" + blockID + " .d--simple-iconbox" + iconBoxStyle + " .jif{color:" + iconBoxIconColor + ";} #block-" + blockID + " .d--simple-iconbox" + iconBoxStyle + " .a--jinr-iconbox{border-color:" + iconBoxIconColor + ";}";
        }
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("style", {
          dangerouslySetInnerHTML: {
            __html: overRideValues
          }
        });
      }
      return overRideValues;
    };
    var overRideHeadingIconBox = function overRideHeadingIconBox() {
      var overRideValues = "";
      if (iconBoxEditToggle === true) {
        if (headingIconBoxColor && headingIconBoxColor !== JINR_VAR.heading_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += "#block-" + blockID + " .d--heading-iconbox" + iconBoxStyle + "{border-color:" + headingIconBoxColor + ";}";
        }
        if (headingIconBoxIconColor && headingIconBoxIconColor !== JINR_VAR.heading_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += "#block-" + blockID + " .d--heading-iconbox" + iconBoxStyle + " .jif{color:" + headingIconBoxIconColor + ";} #block-" + blockID + " .d--heading-iconbox" + iconBoxStyle + " .a--heading-iconbox-title{color:" + headingIconBoxIconColor + ";}";
        }
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("style", {
          dangerouslySetInnerHTML: {
            __html: overRideValues
          }
        });
      }
      return overRideValues;
    };
    var SimpleIconBoxRadioOptions = Array(8).fill(null).map(function (_, i) {
      return {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "a--jinr-item t--round"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "d--simple-iconbox".concat(i + 1)
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
          className: "jif jin-ifont-".concat(JINR_VAR.simple_iconbox_icon[i]),
          "aria-hidden": "true"
        }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "a--jinr-iconbox"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("p", {
          style: {
            fontSize: "11px"
          }
        }, "\u3053\u3053\u306B\u30C6\u30AD\u30B9\u30C8\u304C\u5165\u308A\u307E\u3059\u3002")))),
        value: "".concat(i + 1)
      };
    });
    var HeadingIconBoxRadioOptions = Array(4).fill(null).map(function (_, i) {
      return {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "d--heading-iconbox-all a--jinr-item t--round"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "d--heading-iconbox".concat(i + 1)
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "a--heading-iconbox-title"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "a--iconbox-title-icon"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
          className: "jif jin-ifont-".concat(JINR_VAR.heading_iconbox_icon[i]),
          "aria-hidden": "true"
        })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "a--iconbox-title-text"
        }, iconBoxTitle ? iconBoxTitle : JINR_VAR.heading_iconbox_title[i])), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
          className: "a--jinr-iconbox"
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("p", {
          style: {
            fontSize: "13px",
            marginTop: "18px"
          }
        }, "\u3053\u3053\u306B\u30C6\u30AD\u30B9\u30C8\u304C\u5165\u308A\u307E\u3059\u3002")))),
        value: "".concat(i + 1)
      };
    });
    var TotalBoxRadioOptions = SimpleIconBoxRadioOptions.concat(HeadingIconBoxRadioOptions);
    var SimpleIconBoxSelect = function SimpleIconBoxSelect() {
      for (var i = 0; i <= 7; i++) {
        if (iconBoxStyle === "".concat(i + 1)) {
          return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "d--simple-iconbox".concat(iconBoxStyle)
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
            className: "jif jin-ifont-".concat(iconBoxEditToggle === true ? iconBoxIcon == JINR_VAR.simple_iconbox_icon[i] ? JINR_VAR.simple_iconbox_icon[i] : iconBoxIcon : JINR_VAR.simple_iconbox_icon[i]),
            "aria-hidden": "true"
          }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--jinr-iconbox"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InnerBlocks, null)), overRideSimpleIconBox());
        }
      }
    };
    var HeadingIconBoxSelect = function HeadingIconBoxSelect() {
      for (var i = 0; i <= 3; i++) {
        if (iconBoxStyle === "".concat(i + 1)) {
          return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "d--heading-iconbox".concat(iconBoxStyle)
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--heading-iconbox-title"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--iconbox-title-icon"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
            className: "jif jin-ifont-".concat(iconBoxEditToggle === true ? headingIconBoxIcon == JINR_VAR.heading_iconbox_icon[i] ? JINR_VAR.heading_iconbox_icon[i] : headingIconBoxIcon : JINR_VAR.heading_iconbox_icon[i]),
            "aria-hidden": "true"
          })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--iconbox-title-text"
          }, iconBoxTitle ? iconBoxTitle : JINR_VAR.heading_iconbox_title[i])), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--jinr-iconbox"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InnerBlocks, null)), overRideHeadingIconBox());
        } else if (iconBoxStyle >= 5) {
          return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "d--heading-iconbox1"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--heading-iconbox-title"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--iconbox-title-icon"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
            className: "jif jin-ifont-".concat(JINR_VAR.heading_iconbox_icon[0]),
            "aria-hidden": "true"
          })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--iconbox-title-text"
          }, iconBoxTitle ? iconBoxTitle : JINR_VAR.heading_iconbox_title[0])), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--jinr-iconbox"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InnerBlocks, null)));
        }
      }
    };
    useEffect(function () {
      setAttributes({
        actualDesign: iconBoxDesign
      });
    }, [iconBoxDesign]);
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ghostwhite",
      color: "#f8f8ff"
    }, {
      name: "azure",
      color: "#f2fdfd"
    }, {
      name: "ivory",
      color: "#fffcf0"
    }, {
      name: "cherry-blossom",
      color: "#fff5fa"
    }, {
      name: "pale-purple",
      color: "#f1f1fe"
    }, {
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "pale-blue",
      color: "#D2E9FD"
    }, {
      name: "pale-red",
      color: "#FBE3E6"
    }, {
      name: "pale-green",
      color: "#e8fce8"
    }, {
      name: "pale-brown",
      color: "#f7eee9"
    }, {
      name: "ultra-light-grayish-green",
      color: "#e9f2f0"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var defaultColorPallet2 = [{
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "english-green",
      color: "#70a9a1"
    }, {
      name: "grayish-brown",
      color: "#b89a89"
    }, {
      name: "light-purple",
      color: "#cdbbf2"
    }, {
      name: "light-blue",
      color: "#98ebde"
    }, {
      name: "light-yellow",
      color: "#fde791"
    }, {
      name: "light-pink",
      color: "#ff85c2"
    }, {
      name: "black",
      color: "#000000"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrColorPallet2 = defaultColorPallet2.concat(favoriteColorPallet);
    var _useState = useState(false),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState, 2),
      isOpen = _useState2[0],
      setIsOpen = _useState2[1];
    var IconButtonSimple = function IconButtonSimple(props) {
      var closeModel = function closeModel(bool) {
        setIsOpen(bool);
      };
      var onChangeIcon = function onChangeIcon(value) {
        var newValue = Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_4__["create"])({
          html: ' <i class="jin-icons in--p jin-ifont-' + value + '" aria-hidden="true"></i> '
        });
        setAttributes({
          iconBoxIcon: value
        });
      };
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
        label: "\u30A2\u30A4\u30B3\u30F3\u3092\u5909\u66F4"
      }, iconBoxIcon !== JINR_VAR.simple_iconbox_icon[iconBoxStyle - 1] && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "c--iconbox-chenge"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--iconbox-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
        class: "jin-icons in--p jin-ifont-".concat(JINR_VAR.simple_iconbox_icon[iconBoxStyle - 1]),
        "aria-hidden": "true"
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--iconbox-vector"
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--iconbox-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
        class: "jin-icons in--p jin-ifont-".concat(iconBoxIcon),
        "aria-hidden": "true"
      }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--fullwidth-image-button"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        onClick: function onClick() {
          return setIsOpen(true);
        }
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
        class: "jif jin-ifont-jin"
      }), "\u30A2\u30A4\u30B3\u30F3\u3092\u7F6E\u304D\u63DB\u3048")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_SelectIcon__WEBPACK_IMPORTED_MODULE_7__["default"], {
        isOpen: isOpen,
        closeModal: closeModel,
        onChangeIcon: onChangeIcon
      }));
    };
    var IconButtonHeading = function IconButtonHeading(props) {
      var closeModel = function closeModel(bool) {
        setIsOpen(bool);
      };
      var onChangeIcon = function onChangeIcon(value) {
        var newValue = Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_4__["create"])({
          html: ' <i class="jin-icons in--p jin-ifont-' + value + '" aria-hidden="true"></i> '
        });
        setAttributes({
          headingIconBoxIcon: value
        });
      };
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
        label: "\u30A2\u30A4\u30B3\u30F3\u3092\u5909\u66F4"
      }, headingIconBoxIcon !== JINR_VAR.heading_iconbox_icon[iconBoxStyle - 1] && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "c--iconbox-chenge"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--iconbox-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
        class: "jin-icons in--p jin-ifont-".concat(JINR_VAR.heading_iconbox_icon[iconBoxStyle - 1]),
        "aria-hidden": "true"
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--iconbox-vector"
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--iconbox-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
        class: "jin-icons in--p jin-ifont-".concat(headingIconBoxIcon),
        "aria-hidden": "true"
      }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "a--fullwidth-image-button"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        onClick: function onClick() {
          return setIsOpen(true);
        }
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("i", {
        class: "jif jin-ifont-jin"
      }), "\u30A2\u30A4\u30B3\u30F3\u3092\u7F6E\u304D\u63DB\u3048")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_SelectIcon__WEBPACK_IMPORTED_MODULE_7__["default"], {
        isOpen: isOpen,
        closeModal: closeModel,
        onChangeIcon: onChangeIcon
      }));
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A",
      className: "o--iconbox-settings"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30BF\u30A4\u30D7\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: iconBoxDesign,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
          src: JINR_VAR.image_path + "iconbox-basic.png"
        }),
        value: "d--simple-iconbox"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("img", {
          src: JINR_VAR.image_path + "iconbox-title.png"
        }),
        value: "d--heading-iconbox"
      }],
      onChange: onChangeRadioiconBoxDesign,
      className: "a--jinr-radio-image"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "jinr-customizer-link"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("a", {
      className: "d--jinr-block-button-style2",
      target: "_blank",
      href: JINR_VAR.iconbox_panel_link
    }, "\u30DC\u30C3\u30AF\u30B9\u306E\u8272\u3084\u30A2\u30A4\u30B3\u30F3\u306E\u767B\u9332\u3092\u3059\u308B \uFF1E"))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30DC\u30C3\u30AF\u30B9\u9078\u629E"
    }, iconBoxDesign === "d--simple-iconbox" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "c--box-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: iconBoxStyle,
      options: SimpleIconBoxRadioOptions,
      onChange: onChangeRadioiconBoxStyle
    })) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "c--box-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: iconBoxStyle,
      options: HeadingIconBoxRadioOptions,
      onChange: onChangeRadioiconBoxStyle
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30A2\u30A4\u30B3\u30F3\u30DC\u30C3\u30AF\u30B9\u3092\u7DE8\u96C6",
      className: "jinr-kugiri"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ToggleControl"], {
      label: iconBoxEditToggle ? "ON" : "OFF",
      checked: iconBoxEditToggle,
      onChange: onChangeIconBoxEditToggle,
      className: "jinr-toggle"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "jinr-block-description"
    }, iconBoxEditToggle === true ? "OFFにすると設定した情報がリセットされ、登録したデザインに戻ります。他のアイコンボックスを選択すると自動でOFFになります。" : "ONにすると登録したアイコンボックスを個別に編集できます。")), iconBoxEditToggle === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, iconBoxDesign === "d--simple-iconbox" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, IconButtonSimple(), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30DC\u30C3\u30AF\u30B9\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: !iconBoxColor ? hex2rgba(JINR_VAR.simple_iconbox_color[iconBoxStyle - 1]) : iconBoxColor,
      enableAlpha: true,
      onChange: onChangeIconBoxColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30A2\u30A4\u30B3\u30F3\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet2,
      value: !iconBoxIconColor ? JINR_VAR.simple_iconbox_color[iconBoxStyle - 1] : iconBoxIconColor,
      enableAlpha: true,
      onChange: onChangeIconBoxIconColor
    }))), iconBoxDesign === "d--heading-iconbox" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, IconButtonHeading(), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30BF\u30A4\u30C8\u30EB\u3092\u5909\u66F4\u3059\u308B"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["TextControl"], {
      value: iconBoxTitle,
      onChange: onChangeIconBoxTitle
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30DC\u30C3\u30AF\u30B9\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet2,
      value: !headingIconBoxColor ? JINR_VAR.heading_iconbox_color[iconBoxStyle - 1] : headingIconBoxColor,
      enableAlpha: true,
      onChange: onChangeHeadingIconBoxColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30A2\u30A4\u30B3\u30F3\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet2,
      value: !headingIconBoxIconColor ? JINR_VAR.heading_iconbox_color[iconBoxStyle - 1] : headingIconBoxIconColor,
      enableAlpha: true,
      onChange: onChangeHeadingIconBoxIconColor
    }))))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "b--jinr-block b--jinr-iconbox ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, iconBoxDesign === "d--heading-iconbox" ? HeadingIconBoxSelect() : SimpleIconBoxSelect()));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var iconBoxDesign = attributes.iconBoxDesign,
      iconBoxStyle = attributes.iconBoxStyle,
      iconBoxTitle = attributes.iconBoxTitle,
      content = attributes.content,
      iconBoxEditToggle = attributes.iconBoxEditToggle,
      iconBoxIcon = attributes.iconBoxIcon,
      iconBoxColor = attributes.iconBoxColor,
      iconBoxIconColor = attributes.iconBoxIconColor,
      headingIconBoxIcon = attributes.headingIconBoxIcon,
      headingIconBoxColor = attributes.headingIconBoxColor,
      headingIconBoxIconColor = attributes.headingIconBoxIconColor,
      blockID = attributes.blockID;
    var overRideSimpleIconBox = function overRideSimpleIconBox() {
      var overRideValues = "";
      if (iconBoxEditToggle === true) {
        if (iconBoxColor && iconBoxColor !== JINR_VAR.simple_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += ".block-" + blockID + ".d--simple-iconbox" + iconBoxStyle + "{background:" + iconBoxColor + ";}";
        }
        if (iconBoxIconColor && iconBoxIconColor !== JINR_VAR.simple_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += ".block-" + blockID + ".d--simple-iconbox" + iconBoxStyle + " .jif{color:" + iconBoxIconColor + ";} .block-" + blockID + ".d--simple-iconbox" + iconBoxStyle + " .a--jinr-iconbox{border-color:" + iconBoxIconColor + ";}";
        }
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("style", {
          dangerouslySetInnerHTML: {
            __html: overRideValues
          }
        });
      }
      return overRideValues;
    };
    var overRideSimpleIcon = function overRideSimpleIcon() {
      var overRideValues = "";
      if (iconBoxEditToggle === true) {
        if (iconBoxIcon && iconBoxIcon !== JINR_VAR.simple_iconbox_icon[iconBoxStyle - 1]) {
          overRideValues = " icon=\"".concat(iconBoxIcon, "\"");
        }
      }
      return overRideValues;
    };
    var overRideHeadingIconBox = function overRideHeadingIconBox() {
      var overRideValues = "";
      if (iconBoxEditToggle === true) {
        if (headingIconBoxColor && headingIconBoxColor !== JINR_VAR.heading_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += ".block-" + blockID + ".d--heading-iconbox" + iconBoxStyle + "{border-color:" + headingIconBoxColor + ";}";
        }
        if (headingIconBoxIconColor && headingIconBoxIconColor !== JINR_VAR.heading_iconbox_color[iconBoxStyle - 1]) {
          overRideValues += ".block-" + blockID + ".d--heading-iconbox" + iconBoxStyle + " .jif{color:" + headingIconBoxIconColor + ";} .block-" + blockID + ".d--heading-iconbox" + iconBoxStyle + " .a--heading-iconbox-title{color:" + headingIconBoxIconColor + ";}";
        }
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("style", {
          dangerouslySetInnerHTML: {
            __html: overRideValues
          }
        });
      }
      return overRideValues;
    };
    var overRideHeadingIcon = function overRideHeadingIcon() {
      var overRideValues = "";
      if (iconBoxEditToggle === true) {
        if (headingIconBoxIcon && headingIconBoxIcon !== JINR_VAR.heading_iconbox_icon[iconBoxStyle - 1]) {
          overRideValues = " icon=\"".concat(headingIconBoxIcon, "\"");
        }
      }
      return overRideValues;
    };
    var SimpleIconBoxSelect = function SimpleIconBoxSelect() {
      for (var i = 0; i <= 7; i++) {
        if (iconBoxStyle === "".concat(i + 1)) {
          return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "d--simple-iconbox".concat(iconBoxStyle, " ").concat(iconBoxEditToggle === true ? "block-" + blockID : "")
          }, "[", "jinr_simple_iconbox".concat(i + 1), overRideSimpleIcon(), "]", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--jinr-iconbox"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InnerBlocks.Content, null)), "[", "/jinr_simple_iconbox".concat(i + 1), "]", overRideSimpleIconBox());
        }
      }
    };
    var HeadingIconBoxSelect = function HeadingIconBoxSelect() {
      for (var i = 0; i <= 3; i++) {
        if (iconBoxStyle === "".concat(i + 1)) {
          return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "d--heading-iconbox".concat(iconBoxStyle, " ").concat(iconBoxEditToggle === true ? "block-" + blockID : "")
          }, "[", "jinr_heading_iconbox".concat(i + 1), " title=", iconBoxTitle, " ", overRideHeadingIcon(), "]", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
            className: "a--jinr-iconbox"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(InnerBlocks.Content, null)), "[", "/jinr_heading_iconbox".concat(i + 1), "]", overRideHeadingIconBox());
        }
      }
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "b--jinr-block b--jinr-iconbox ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, iconBoxDesign === "d--heading-iconbox" ? HeadingIconBoxSelect() : SimpleIconBoxSelect());
  }
}));

/***/ }),

/***/ "./src/blocks/paidpost.js":
/*!********************************!*\
  !*** ./src/blocks/paidpost.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _icons_jinr_premium_svg__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../icons/jinr-premium.svg */ "./src/icons/jinr-premium.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_6__);


function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }





var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState;
var InnerBlocks = wp.blockEditor.InnerBlocks;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_2__["registerBlockType"])("jinr-blocks/paidpost", {
  title: "有料コンテンツ",
  description: 'このブロックから下のブロックが購入者のみ表示されるコンテンツです。',
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_premium_svg__WEBPACK_IMPORTED_MODULE_4__["ReactComponent"], null),
  attributes: {
    productText: {
      type: "string",
      default: "ここから先は限定公開です"
    },
    productPrice: {
      type: "string",
      default: ""
    },
    productUrl: {
      type: "string",
      default: ""
    },
    productID: {
      type: "string",
      default: ""
    },
    productToggle: {
      type: "boolean"
    },
    productRegisteredButton: {
      type: "string",
      default: "1"
    },
    productButtonDesign: {
      type: "string",
      default: JINR_VAR.jinr_button_design[0]
    },
    productButtonText: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      onReplace = props.onReplace,
      clientId = props.clientId,
      onRemove = props.onRemove;
    var productText = attributes.productText,
      productUrl = attributes.productUrl,
      productID = attributes.productID,
      productToggle = attributes.productToggle,
      productButtonDesign = attributes.productButtonDesign,
      productRegisteredButton = attributes.productRegisteredButton,
      productButtonText = attributes.productButtonText,
      productPrice = attributes.productPrice;
    var onChangeProductUrl = function onChangeProductUrl(newValue) {
      if (newValue.indexOf('https://buy.stripe.com') !== -1) {
        if (document.getElementsByClassName('b--paidpost-invalid')[0]) {
          document.getElementsByClassName('b--paidpost-invalid')[0].remove();
        }
        setAttributes({
          productUrl: newValue
        });
      } else {
        var paidpostLink = document.getElementsByClassName('b--paidpost-link')[0];
        var urlInvalidDOM = document.createElement('span');
        urlInvalidDOM.className = 'b--paidpost-invalid';
        urlInvalidDOM.innerHTML = 'URLが正しくありません';
        if (document.getElementsByClassName('b--paidpost-invalid')[0]) {
          document.getElementsByClassName('b--paidpost-invalid')[0].remove();
        }
        paidpostLink.after(urlInvalidDOM);
        setAttributes({
          productUrl: ''
        });
      }
      var nextSharpNum = newValue.indexOf("https://buy.stripe.com/") + 23;
      var paidpostID = newValue.substring(nextSharpNum).replace("https://buy.stripe.com/", "");
      setAttributes({
        productID: paidpostID
      });
    };
    var onChangeProductButtonText = function onChangeProductButtonText(newValue) {
      setAttributes({
        productButtonText: newValue
      });
    };
    var onChangeProductText = function onChangeProductText(newValue) {
      setAttributes({
        productText: newValue
      });
    };
    var onChangeproductPrice = function onChangeproductPrice(newValue) {
      setAttributes({
        productPrice: newValue
      });
    };
    var onChangeProductToggle = function onChangeProductToggle(newValue) {
      setAttributes({
        productToggle: newValue
      });
    };
    var onChangeProductRegisteredButton = function onChangeProductRegisteredButton(newValue) {
      setAttributes({
        productRegisteredButton: newValue
      });
      setAttributes({
        productButtonDesign: JINR_VAR.jinr_button_design[newValue - 1]
      });
    };
    var onButtonClick = function onButtonClick() {
      var copythanksurlButton = document.getElementById('PaidPostCopyThanksURL');
      if (copythanksurlButton) {
        copythanksurlButton.addEventListener('click', function () {
          var copyContent = document.getElementsByClassName('b--paidpost-thanksLink')[0].getElementsByTagName('input')[0];
          copythanksurlButton.innerHTML = 'コピーしました';
          var textCode = copyContent.value;
          navigator.clipboard.writeText(textCode);
          setTimeout(function () {
            return copythanksurlButton.innerHTML = 'コピー';
          }, 2000);
        });
      }
    };
    var permalink_structure = JINR_VAR.permalink_structure;
    var page_thanks_id = JINR_VAR.page_thanks_id;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["PanelBody"], {
      title: "\u6709\u6599\u8A18\u4E8B\u30D6\u30ED\u30C3\u30AF\u8A2D\u5B9A",
      className: "o--paid-settings"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30DE\u30A4\u30AF\u30ED\u30B3\u30D4\u30FC"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: productText,
      onChange: onChangeProductText,
      placeholder: "\u3053\u3053\u304B\u3089\u5148\u306F\u9650\u5B9A\u516C\u958B\u3067\u3059"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u5546\u54C1\u30EA\u30F3\u30AFURL"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["URLInput"], {
      value: productUrl,
      onChange: onChangeProductUrl,
      className: 'b--paidpost-link',
      placeholder: "Stripe\u3067\u767A\u884C\u3055\u308C\u308BURL\u3092\u5165\u529B"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
      className: "jinr-label-description"
    }, "\u5546\u54C1\u30EA\u30F3\u30AFURL\u306E\u53D6\u5F97\u65B9\u6CD5\u306F", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("a", {
      href: "https://jinr.jp/manual/membership/",
      target: "_blank",
      rel: "noopener noreferrer",
      className: "a--getpaidpost-link"
    }, "\u3053\u3061\u3089"))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u6C7A\u6E08\u5B8C\u4E86URL",
      className: "b--paidpost-thanksurl"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
      id: "PaidPostCopyThanksURL",
      onClick: onButtonClick,
      className: "b--paidpost-help"
    }, "\u30B3\u30D4\u30FC"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["URLInput"], {
      value: permalink_structure == '' ? JINR_VAR.home_url + '/?page_id=' + page_thanks_id : JINR_VAR.home_url + '/thanks-page-template/',
      className: 'b--paidpost-thanksLink'
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
      className: "jinr-label-description"
    }, "\u4E0A\u8A18\u306EURL\u3092\u30B3\u30D4\u30FC\u3057\u3066\u304A\u4F7F\u3044\u304F\u3060\u3055\u3044")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      className: "jinr-paidpost-id",
      label: "\u5546\u54C1ID"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["URLInput"], {
      value: productID
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u91D1\u984D\u5165\u529B"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: productPrice,
      onChange: onChangeproductPrice,
      placeholder: "\u3007\u3007\u5186"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30DC\u30BF\u30F3\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["SelectControl"], {
      value: productRegisteredButton,
      options: [{
        label: JINR_VAR.jinr_button_name[0],
        value: "1"
      }, {
        label: JINR_VAR.jinr_button_name[1],
        value: "2"
      }, {
        label: JINR_VAR.jinr_button_name[2],
        value: "3"
      }, {
        label: JINR_VAR.jinr_button_name[3],
        value: "4"
      }, {
        label: JINR_VAR.jinr_button_name[4],
        value: "5"
      }, {
        label: JINR_VAR.jinr_button_name[5],
        value: "6"
      }],
      onChange: onChangeProductRegisteredButton
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u6B8B\u308A\u306E\u6587\u5B57\u6570\u3092\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
      label: productToggle ? "ON" : "OFF",
      checked: productToggle,
      onChange: onChangeProductToggle,
      className: "jinr-toggle b--paidpost-link"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
      className: "jinr-label-description"
    }, "\u5B9F\u969B\u306E\u6570\u5024\u306F\u30D7\u30EC\u30D3\u30E5\u30FC\u3067\u78BA\u8A8D\u3067\u304D\u307E\u3059"))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("section", {
      id: "JinrPaidContents",
      className: "b--jinr-block-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "b--jinr-paid-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
      className: "b--jinr-paid-text"
    }, productText)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "b--paidpost-more"
    }, function () {
      if (productToggle === true) return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
        className: "b--paidpost-remaining"
      }, "\u3053\u306E\u7D9A\u304D\u306E\u6587\u5B57\u6570: \u300C", Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        className: "a--paidpost-bold"
      }, "\u7D04\u3007\u3007\u6587\u5B57"), "\u300D");
    }(), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      class: "b--jinr-block b--jinr-button "
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      className: "d--button-".concat(productButtonDesign, " d--button-type").concat(productRegisteredButton, " d--button-center")
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("a", {
      href: "#"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["RichText"], {
      tagName: "span",
      value: productButtonText,
      onChange: onChangeProductButtonText,
      onSplit: function onSplit(value, isOriginal) {
        var block;
        if (isOriginal || value) {
          block = createBlock("jinr-blocks/button", _objectSpread(_objectSpread({}, attributes), {}, {
            content: value
          }));
        } else {
          block = createBlock("core/paragraph");
        }
        if (isOriginal) {
          block.clientId = clientId;
        }
        return block;
      },
      onReplace: onReplace,
      onRemove: onRemove
    }), productPrice ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["RichText"], {
      tagName: "span",
      value: productPrice,
      onChange: onChangeProductText,
      className: "b--jinr-price"
    }) : ''))))));
  },
  save: function save() {
    return null;
  }
}));

/***/ }),

/***/ "./src/blocks/postlist.js":
/*!********************************!*\
  !*** ./src/blocks/postlist.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/typeof */ "./node_modules/@babel/runtime/helpers/typeof.js");
/* harmony import */ var _babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_date__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/date */ "@wordpress/date");
/* harmony import */ var _wordpress_date__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_date__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _icons_jinr_articlelist_svg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../icons/jinr-articlelist.svg */ "./src/icons/jinr-articlelist.svg");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ../style.scss */ "./src/style.scss");
/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(_style_scss__WEBPACK_IMPORTED_MODULE_12__);





/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */





var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useLayoutEffect = _wp$element.useLayoutEffect,
  useState = _wp$element.useState,
  useSelect = _wp$element.useSelect,
  useEffect = _wp$element.useEffect,
  useMemo = _wp$element.useMemo;
var _wp$data = wp.data,
  select = _wp$data.select,
  subscribe = _wp$data.subscribe,
  dispatch = _wp$data.dispatch;
var _wp$components = wp.components,
  PanelBody = _wp$components.PanelBody,
  RadioControl = _wp$components.RadioControl,
  RangeControl = _wp$components.RangeControl,
  ToggleControl = _wp$components.ToggleControl,
  TextControl = _wp$components.TextControl,
  BaseControl = _wp$components.BaseControl,
  ColorIndicator = _wp$components.ColorIndicator,
  ColorPalette = _wp$components.ColorPalette,
  GradientPicker = _wp$components.GradientPicker,
  SelectControl = _wp$components.SelectControl,
  Spinner = _wp$components.Spinner,
  Button = _wp$components.Button;


/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * All files containing `style` key  xnb  word are bundled together. The code used
 * gets applied both to the front of your site and to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */


/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_5__["registerBlockType"])("jinr-blocks/postlist", {
  title: "記事リスト",
  description: "新着記事やカテゴリー別で記事一覧をさまざまなデザインで表示させることができるブロックです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(_icons_jinr_articlelist_svg__WEBPACK_IMPORTED_MODULE_8__["ReactComponent"], null),
  attributes: {
    postNum: {
      type: "number",
      default: 6
    },
    toggleMoreDisplay: {
      type: "boolean",
      default: false
    },
    moreDisplayDesign: {
      type: "string",
      default: "async"
    },
    rankingDisplay: {
      type: "boolean",
      default: true
    },
    rankingViewDisplay: {
      type: "boolean",
      default: true
    },
    pvPaidpostDisplay: {
      type: "boolean",
      default: false
    },
    timeDisplay: {
      type: "boolean",
      default: false
    },
    catDisplay: {
      type: "boolean",
      default: false
    },
    radioMoreDesign: {
      type: "string",
      default: "moreDesign01"
    },
    moreColor: {
      type: "string",
      default: "#407FED"
    },
    listDesign: {
      type: "string",
      default: "d--postlist-square"
    },
    listDesignSp: {
      type: "string",
      default: "d--postlist-square-sp"
    },
    columnSelect: {
      type: "string",
      default: "3"
    },
    columnSelectSp: {
      type: "string",
      default: "1"
    },
    radioDisplayArticles: {
      type: "string",
      default: "new"
    },
    displayCategory: {
      type: "string",
      default: ""
    },
    buttonText: {
      type: "string",
      default: "もっとみる"
    },
    moreLink: {
      type: "string"
    },
    titleTag: {
      type: "string",
      default: "div"
    },
    pageTemplate: {
      type: "string",
      default: ""
    },
    radioAnimation: {
      type: "string",
      default: "d--postlist-animation-fade js--scr-animation"
    },
    radioHover: {
      type: "string",
      default: "d--postlist-hover-up"
    },
    pvPaidPrice1: {
      type: "string",
      default: ""
    },
    pvPaidPrice2: {
      type: "string",
      default: ""
    },
    pvPaidPrice3: {
      type: "string",
      default: ""
    },
    pvPaidPrice4: {
      type: "string",
      default: ""
    },
    pvPaidPrice5: {
      type: "string",
      default: ""
    },
    pvPaidPrice6: {
      type: "string",
      default: ""
    },
    pvPaidPrice7: {
      type: "string",
      default: ""
    },
    pvPaidPrice8: {
      type: "string",
      default: ""
    },
    pvPaidPrice9: {
      type: "string",
      default: ""
    },
    pvPaidPrice10: {
      type: "string",
      default: ""
    },
    pvPaidPrice11: {
      type: "string",
      default: ""
    },
    pvPaidPrice12: {
      type: "string",
      default: ""
    },
    pickupUrl1: {
      type: "string",
      default: ""
    },
    pickupUrl2: {
      type: "string",
      default: ""
    },
    pickupUrl3: {
      type: "string",
      default: ""
    },
    pickupUrl4: {
      type: "string",
      default: ""
    },
    pickupUrl5: {
      type: "string",
      default: ""
    },
    pickupUrl6: {
      type: "string",
      default: ""
    },
    pickupUrl7: {
      type: "string",
      default: ""
    },
    pickupUrl8: {
      type: "string",
      default: ""
    },
    pickupUrl9: {
      type: "string",
      default: ""
    },
    pickupUrl10: {
      type: "string",
      default: ""
    },
    pickupUrl11: {
      type: "string",
      default: ""
    },
    pickupUrl12: {
      type: "string",
      default: ""
    },
    pickupLabelToggle1: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle2: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle3: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle4: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle5: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle6: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle7: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle8: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle9: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle10: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle11: {
      type: "boolean",
      default: false
    },
    pickupLabelToggle12: {
      type: "boolean",
      default: false
    },
    pickupLabelText1: {
      type: "string",
      default: ""
    },
    pickupLabelText2: {
      type: "string",
      default: ""
    },
    pickupLabelText3: {
      type: "string",
      default: ""
    },
    pickupLabelText4: {
      type: "string",
      default: ""
    },
    pickupLabelText5: {
      type: "string",
      default: ""
    },
    pickupLabelText6: {
      type: "string",
      default: ""
    },
    pickupLabelText7: {
      type: "string",
      default: ""
    },
    pickupLabelText8: {
      type: "string",
      default: ""
    },
    pickupLabelText9: {
      type: "string",
      default: ""
    },
    pickupLabelText10: {
      type: "string",
      default: ""
    },
    pickupLabelText11: {
      type: "string",
      default: ""
    },
    pickupLabelText12: {
      type: "string",
      default: ""
    },
    pickupLabelBgColor1: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor2: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor3: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor4: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor5: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor6: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor7: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor8: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor9: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor10: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor11: {
      type: "string",
      default: "#407fed"
    },
    pickupLabelBgColor12: {
      type: "string",
      default: "#407fed"
    },
    clientId: {
      type: "string"
    }
  },
  /**
   * @see ./edit.js
   */
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var postNum = attributes.postNum,
      toggleMoreDisplay = attributes.toggleMoreDisplay,
      moreDisplayDesign = attributes.moreDisplayDesign,
      radioMoreDesign = attributes.radioMoreDesign,
      moreColor = attributes.moreColor,
      listDesign = attributes.listDesign,
      listDesignSp = attributes.listDesignSp,
      columnSelect = attributes.columnSelect,
      columnSelectSp = attributes.columnSelectSp,
      radioDisplayArticles = attributes.radioDisplayArticles,
      displayCategory = attributes.displayCategory,
      buttonText = attributes.buttonText,
      moreLink = attributes.moreLink,
      titleTag = attributes.titleTag,
      pageTemplate = attributes.pageTemplate,
      radioAnimation = attributes.radioAnimation,
      radioHover = attributes.radioHover,
      rankingDisplay = attributes.rankingDisplay,
      rankingViewDisplay = attributes.rankingViewDisplay,
      pvPaidpostDisplay = attributes.pvPaidpostDisplay,
      timeDisplay = attributes.timeDisplay,
      catDisplay = attributes.catDisplay,
      pvPaidPrice1 = attributes.pvPaidPrice1,
      pvPaidPrice2 = attributes.pvPaidPrice2,
      pvPaidPrice3 = attributes.pvPaidPrice3,
      pvPaidPrice4 = attributes.pvPaidPrice4,
      pvPaidPrice5 = attributes.pvPaidPrice5,
      pvPaidPrice6 = attributes.pvPaidPrice6,
      pvPaidPrice7 = attributes.pvPaidPrice7,
      pvPaidPrice8 = attributes.pvPaidPrice8,
      pvPaidPrice9 = attributes.pvPaidPrice9,
      pvPaidPrice10 = attributes.pvPaidPrice10,
      pvPaidPrice11 = attributes.pvPaidPrice11,
      pvPaidPrice12 = attributes.pvPaidPrice12,
      pickupUrl1 = attributes.pickupUrl1,
      pickupUrl2 = attributes.pickupUrl2,
      pickupUrl3 = attributes.pickupUrl3,
      pickupUrl4 = attributes.pickupUrl4,
      pickupUrl5 = attributes.pickupUrl5,
      pickupUrl6 = attributes.pickupUrl6,
      pickupUrl7 = attributes.pickupUrl7,
      pickupUrl8 = attributes.pickupUrl8,
      pickupUrl9 = attributes.pickupUrl9,
      pickupUrl10 = attributes.pickupUrl10,
      pickupUrl11 = attributes.pickupUrl11,
      pickupUrl12 = attributes.pickupUrl12,
      pickupLabelToggle1 = attributes.pickupLabelToggle1,
      pickupLabelToggle2 = attributes.pickupLabelToggle2,
      pickupLabelToggle3 = attributes.pickupLabelToggle3,
      pickupLabelToggle4 = attributes.pickupLabelToggle4,
      pickupLabelToggle5 = attributes.pickupLabelToggle5,
      pickupLabelToggle6 = attributes.pickupLabelToggle6,
      pickupLabelToggle7 = attributes.pickupLabelToggle7,
      pickupLabelToggle8 = attributes.pickupLabelToggle8,
      pickupLabelToggle9 = attributes.pickupLabelToggle9,
      pickupLabelToggle10 = attributes.pickupLabelToggle10,
      pickupLabelToggle11 = attributes.pickupLabelToggle11,
      pickupLabelToggle12 = attributes.pickupLabelToggle12,
      pickupLabelText1 = attributes.pickupLabelText1,
      pickupLabelText2 = attributes.pickupLabelText2,
      pickupLabelText3 = attributes.pickupLabelText3,
      pickupLabelText4 = attributes.pickupLabelText4,
      pickupLabelText5 = attributes.pickupLabelText5,
      pickupLabelText6 = attributes.pickupLabelText6,
      pickupLabelText7 = attributes.pickupLabelText7,
      pickupLabelText8 = attributes.pickupLabelText8,
      pickupLabelText9 = attributes.pickupLabelText9,
      pickupLabelText10 = attributes.pickupLabelText10,
      pickupLabelText11 = attributes.pickupLabelText11,
      pickupLabelText12 = attributes.pickupLabelText12,
      pickupLabelBgColor1 = attributes.pickupLabelBgColor1,
      pickupLabelBgColor2 = attributes.pickupLabelBgColor2,
      pickupLabelBgColor3 = attributes.pickupLabelBgColor3,
      pickupLabelBgColor4 = attributes.pickupLabelBgColor4,
      pickupLabelBgColor5 = attributes.pickupLabelBgColor5,
      pickupLabelBgColor6 = attributes.pickupLabelBgColor6,
      pickupLabelBgColor7 = attributes.pickupLabelBgColor7,
      pickupLabelBgColor8 = attributes.pickupLabelBgColor8,
      pickupLabelBgColor9 = attributes.pickupLabelBgColor9,
      pickupLabelBgColor10 = attributes.pickupLabelBgColor10,
      pickupLabelBgColor11 = attributes.pickupLabelBgColor11,
      pickupLabelBgColor12 = attributes.pickupLabelBgColor12;
    function hex2rgba(hex) {
      var alpha = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 1;
      // ロングバージョンの場合（例：#FF0000）
      var r = hex.match(/^#([0-9a-f]{2})([0-9a-f]{2})([0-9a-f]{2})$/i);
      var c = null;
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return parseInt(x, 16);
        });
      }
      // ショートバージョンの場合（例：#F00）
      r = hex.match(/^#([0-9a-f])([0-9a-f])([0-9a-f])$/i);
      if (r) {
        c = r.slice(1, 4).map(function (x) {
          return 0x11 * parseInt(x, 16);
        });
      }
      // 該当しない場合は、nullを返す.
      if (!c) {
        return null;
      }
      return "rgba(".concat(c[0], ", ").concat(c[1], ", ").concat(c[2], ", ").concat(alpha, ")");
    }
    var _useState = useState([{
        label: "表示するカテゴリーを選択",
        value: "",
        disabled: true
      }]),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState, 2),
      categoryList = _useState2[0],
      setCategoryList = _useState2[1];
    var _useState3 = useState([]),
      _useState4 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState3, 2),
      newPostList = _useState4[0],
      setNewPostList = _useState4[1];
    var _useState5 = useState([]),
      _useState6 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState5, 2),
      PVPostList = _useState6[0],
      setPVPostList = _useState6[1];
    var _useState7 = useState([]),
      _useState8 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState7, 2),
      pickupPostList = _useState8[0],
      setPickupPostList = _useState8[1];
    var _useState9 = useState([]),
      _useState10 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState9, 2),
      postList = _useState10[0],
      setPostList = _useState10[1];
    var _useState11 = useState(false),
      _useState12 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState11, 2),
      loading = _useState12[0],
      setLoading = _useState12[1];
    var _useState13 = useState(Array(12).fill("")),
      _useState14 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState13, 2),
      pickupTitles = _useState14[0],
      setPickupTitles = _useState14[1];
    var _useState15 = useState(Array(12).fill("")),
      _useState16 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState15, 2),
      pickupThumbIDs = _useState16[0],
      setPickupThumbIDs = _useState16[1];
    var _useState17 = useState(Array(12).fill("")),
      _useState18 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState17, 2),
      pickupThumbMediums = _useState18[0],
      setPickupThumbMediums = _useState18[1];
    var _useState19 = useState(Array(12).fill("")),
      _useState20 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState19, 2),
      pickupThumbFulls = _useState20[0],
      setPickupThumbFulls = _useState20[1];
    var _useState21 = useState(Array(12).fill("")),
      _useState22 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState21, 2),
      pickupYoutubes = _useState22[0],
      setPickupYoutubes = _useState22[1];
    var _useState23 = useState(Array(12).fill("")),
      _useState24 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState23, 2),
      pickupYoutubeThumbs = _useState24[0],
      setPickupYoutubeThumbs = _useState24[1];
    var _useState25 = useState(Array(12).fill("")),
      _useState26 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState25, 2),
      pickupYoutubeTimes = _useState26[0],
      setPickupYoutubeTimes = _useState26[1];
    var _useState27 = useState(Array(12).fill("")),
      _useState28 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_3___default()(_useState27, 2),
      pickupPrices = _useState28[0],
      setPickupPrices = _useState28[1];
    var updateClientId = Object(lodash__WEBPACK_IMPORTED_MODULE_9__["debounce"])(function () {
      setAttributes({
        clientId: clientId
      });
    }, 500);
    useEffect(function () {
      updateClientId();
    }, [attributes, clientId]);
    useEffect(function () {
      var newCategorryList = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_2___default()(categoryList);
      JINR_VAR.categories.forEach(function (category) {
        newCategorryList.push({
          label: category.cat_name,
          value: category.cat_ID
        });
      });
      setCategoryList(newCategorryList);
    }, []);
    useEffect(function () {
      if (radioDisplayArticles === "new") {
        setLoading(true);
        _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
          path: "/wp/v2/posts?_embed&per_page=13"
        }).then(function (res) {
          setNewPostList(res);
          setLoading(false);
        });
      } else if (radioDisplayArticles === "pv") {
        setLoading(true);
        _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
          path: "/wp/v2/posts?_embed&per_page=13&orderby=views&order=desc"
        }).then(function (res) {
          setPVPostList(res);
          setLoading(false);
        });
      }
    }, [radioDisplayArticles]);
    useEffect(function () {
      setLoading(true);
      var allCategories = JINR_VAR.category_list[displayCategory];
      if (_babel_runtime_helpers_typeof__WEBPACK_IMPORTED_MODULE_1___default()(allCategories) === "object") {
        allCategories.push(parseInt(displayCategory));
      }
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
        path: "/wp/v2/posts?categories=".concat(allCategories ? allCategories : displayCategory, "&_embed&per_page=13")
      }).then(function (res) {
        setPostList(res);
      });
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
        path: "/wp/v2/categories?include=".concat(displayCategory)
      }).then(function (res) {
        if (res != null) {
          setMoreLink(JINR_VAR.home_url);
          setLoading(false);
        }
        setMoreLink(res[0].link);
        setLoading(false);
      });
    }, [displayCategory]);
    var onChangePostNum = function onChangePostNum(newValue) {
      setAttributes({
        postNum: newValue
      });
    };
    var onChangeToggleMoreDisplay = function onChangeToggleMoreDisplay(newValue) {
      setAttributes({
        toggleMoreDisplay: newValue
      });
    };
    var onChangeRankingDisplay = function onChangeRankingDisplay(newValue) {
      setAttributes({
        rankingDisplay: newValue
      });
    };
    var onChangeRankingViewDisplay = function onChangeRankingViewDisplay(newValue) {
      setAttributes({
        rankingViewDisplay: newValue
      });
    };
    var onChangePvPaidpostDisplay = function onChangePvPaidpostDisplay(newValue) {
      setAttributes({
        pvPaidpostDisplay: newValue
      });
    };
    var onChangeTimeDisplay = function onChangeTimeDisplay(newValue) {
      setAttributes({
        timeDisplay: newValue
      });
    };
    var onChangeCatDisplay = function onChangeCatDisplay(newValue) {
      setAttributes({
        catDisplay: newValue
      });
    };
    var onChangeRadioMoreDesign = function onChangeRadioMoreDesign(newValue) {
      setAttributes({
        radioMoreDesign: newValue
      });
    };
    var onChangeMoreColor = function onChangeMoreColor(newValue) {
      setAttributes({
        moreColor: newValue === undefined ? "#407FED" : newValue
      });
    };
    var onChangeListDesign = function onChangeListDesign(newValue) {
      newValue === "d--postlist-rectangle" && columnSelect === "3" && setAttributes({
        columnSelect: "2"
      });
      columnSelect === "4" && setAttributes({
        columnSelect: "2"
      });
      newValue === "d--postlist-square" && columnSelect === "1" && setAttributes({
        columnSelect: "2"
      });
      setAttributes({
        listDesign: newValue
      });
    };
    var onChangeListDesignSp = function onChangeListDesignSp(newValue) {
      setAttributes({
        listDesignSp: newValue
      });
    };
    var onChangeColumnSelect = function onChangeColumnSelect(newValue) {
      setAttributes({
        columnSelect: newValue
      });
    };
    var onChangeColumnSelectSp = function onChangeColumnSelectSp(newValue) {
      setAttributes({
        columnSelectSp: newValue
      });
    };
    var onChangeRadioDisplayArticles = function onChangeRadioDisplayArticles(newValue) {
      setAttributes({
        radioDisplayArticles: newValue
      });
    };
    var onChangeMoreDisplayDesign = function onChangeMoreDisplayDesign(newValue) {
      setAttributes({
        moreDisplayDesign: newValue
      });
    };
    var onChangeDisplayCategory = function onChangeDisplayCategory(newValue) {
      setAttributes({
        displayCategory: newValue
      });
      var cat = JINR_VAR.categories.filter(function (category) {
        return category.cat_ID === parseInt(newValue);
      });
    };
    var onChangeButtonText = function onChangeButtonText(newValue) {
      setAttributes({
        buttonText: newValue
      });
    };
    var setMoreLink = function setMoreLink(newValue) {
      setAttributes({
        moreLink: newValue
      });
    };
    var onChangeTitleTag = function onChangeTitleTag(newValue) {
      setAttributes({
        titleTag: newValue
      });
    };
    var thumbnailOriginalUsed = JINR_VAR.thumbnailOriginalUsed;
    var template = null;
    subscribe(function () {
      var newTemplate = select("core/editor").getEditedPostAttribute("template");
      if (newTemplate !== undefined && template === null) {
        template = newTemplate;
      }
      if (newTemplate !== undefined && newTemplate !== template) {
        template = newTemplate;
        onChangePageTemplate(newTemplate);
      }
    });
    var onChangePageTemplate = function onChangePageTemplate(newValue) {
      setAttributes({
        pageTemplate: newValue
      });
    };
    var onChangeRadioAnimation = function onChangeRadioAnimation(newValue) {
      setAttributes({
        radioAnimation: newValue
      });
    };
    var onChangeRadioHover = function onChangeRadioHover(newValue) {
      setAttributes({
        radioHover: newValue
      });
    };
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "english-green",
      color: "#70a9a1"
    }, {
      name: "grayish-brown",
      color: "#b89a89"
    }, {
      name: "light-purple",
      color: "#cdbbf2"
    }, {
      name: "light-blue",
      color: "#98ebde"
    }, {
      name: "light-yellow",
      color: "#fde791"
    }, {
      name: "light-pink",
      color: "#ff85c2"
    }, {
      name: "black",
      color: "#000000"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var onChangePickupUrl = function onChangePickupUrl(index) {
      return function (newValue) {
        setAttributes(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, "pickupUrl".concat(index), newValue));
        setLoading(true);
        _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
          path: "/jinr/post_by_url?url=".concat(newValue)
        }).then(function (res) {
          setPickupTitles(function (prevTitles) {
            return prevTitles.map(function (title, i) {
              return i === index - 1 ? res.title : title;
            });
          });
          setPickupThumbIDs(function (prevThumbIDs) {
            return prevThumbIDs.map(function (thumbID, i) {
              return i === index - 1 ? res.thumbnail_id : thumbID;
            });
          });
          setPickupThumbMediums(function (prevThumbMediums) {
            return prevThumbMediums.map(function (thumbMedium, i) {
              return i === index - 1 ? res.thumbnail_url : thumbMedium;
            });
          });
          setPickupThumbFulls(function (prevThumbFulls) {
            return prevThumbFulls.map(function (thumbFull, i) {
              return i === index - 1 ? res.thumbnail_full_url : thumbFull;
            });
          });
          setPickupYoutubes(function (prevYoutubes) {
            return prevYoutubes.map(function (youtube, i) {
              return i === index - 1 ? res.youtube_url : youtube;
            });
          });
          setPickupYoutubeThumbs(function (prevYoutubeThumbs) {
            return prevYoutubeThumbs.map(function (youtubeThumb, i) {
              return i === index - 1 ? res.thumbnail_youtube_medium : youtubeThumb;
            });
          });
          setPickupYoutubeTimes(function (prevYoutubeTimes) {
            return prevYoutubeTimes.map(function (youtubeTime, i) {
              return i === index - 1 ? res.youtube_time : youtubeTime;
            });
          });
          setPickupPrices(function (prevPrices) {
            return prevPrices.map(function (price, i) {
              return i === index - 1 ? res.product_price : price;
            });
          });
          setLoading(false);
        });
      };
    }; //URLが変更時にリロードさせる

    useEffect(function () {
      var _loop = function _loop(index) {
        var url = attributes["pickupUrl".concat(index)];
        if (url) {
          setLoading(true);
          _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
            path: "/jinr/post_by_url?url=".concat(url)
          }).then(function (res) {
            setPickupTitles(function (prevTitles) {
              return prevTitles.map(function (title, i) {
                return i === index - 1 ? res.title : title;
              });
            });
            setPickupThumbIDs(function (prevThumbIDs) {
              return prevThumbIDs.map(function (thumbID, i) {
                return i === index - 1 ? res.thumbnail_id : thumbID;
              });
            });
            setPickupThumbMediums(function (prevThumbMediums) {
              return prevThumbMediums.map(function (thumbMedium, i) {
                return i === index - 1 ? res.thumbnail_url : thumbMedium;
              });
            });
            setPickupThumbFulls(function (prevThumbFulls) {
              return prevThumbFulls.map(function (thumbFull, i) {
                return i === index - 1 ? res.thumbnail_full_url : thumbFull;
              });
            });
            setPickupYoutubes(function (prevYoutubes) {
              return prevYoutubes.map(function (youtube, i) {
                return i === index - 1 ? res.youtube_url : youtube;
              });
            });
            setPickupYoutubeThumbs(function (prevYoutubeThumbs) {
              return prevYoutubeThumbs.map(function (youtubeThumb, i) {
                return i === index - 1 ? res.thumbnail_youtube_medium : youtubeThumb;
              });
            });
            setPickupYoutubeTimes(function (prevYoutubeTimes) {
              return prevYoutubeTimes.map(function (youtubeTime, i) {
                return i === index - 1 ? res.youtube_time : youtubeTime;
              });
            });
            setPickupPrices(function (prevPrices) {
              return prevPrices.map(function (price, i) {
                return i === index - 1 ? res.product_price : price;
              });
            });
            setLoading(false);
          });
        }
      };
      for (var index = 1; index <= postNum; index++) {
        _loop(index);
      }
    }, []); // 依存配列が空なので、このuseEffectは初回レンダリング時にのみ実行されます。

    var onChangePickupLabelToggle = function onChangePickupLabelToggle(index) {
      return function (newValue) {
        setAttributes(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, "pickupLabelToggle".concat(index), newValue));
      };
    };
    var onChangePickupLabelText = function onChangePickupLabelText(index) {
      return function (newValue) {
        setAttributes(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, "pickupLabelText".concat(index), newValue));
      };
    };
    var onChangePickupLabelBgColor = function onChangePickupLabelBgColor(index) {
      return function (newValue) {
        setAttributes(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, "pickupLabelBgColor".concat(index), newValue));
      };
    };
    var pickupUrlList = Array.from({
      length: postNum
    }, function (_, i) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
        className: "c--pickup-list-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
        key: i,
        label: "\u30D4\u30C3\u30AF\u30A2\u30C3\u30D7\u8A18\u4E8B ".concat(i + 1)
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
        key: i,
        label: "URL",
        className: "d--jinr-child-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_7__["URLInput"], {
        value: attributes["pickupUrl".concat(i + 1)] || "",
        onChange: onChangePickupUrl(i + 1)
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
        key: i,
        label: "\u30E9\u30D9\u30EB\u306E\u8A2D\u5B9A",
        className: "d--jinr-child-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
        label: attributes["pickupLabelToggle".concat(i + 1)] ? "ON" : "OFF",
        checked: attributes["pickupLabelToggle".concat(i + 1)],
        onChange: onChangePickupLabelToggle(i + 1),
        className: "jinr-toggle"
      })), attributes["pickupLabelToggle".concat(i + 1)] === true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
        key: i,
        label: "\u30E9\u30D9\u30EB\u306E\u6587\u5B57",
        className: "d--jinr-child-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(TextControl, {
        value: attributes["pickupLabelText".concat(i + 1)],
        onChange: onChangePickupLabelText(i + 1)
      })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
        key: i,
        label: "\u30E9\u30D9\u30EB\u306E\u6587\u5B57\u8272",
        className: "d--jinr-child-item"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ColorPalette, {
        colors: jinrColorPallet,
        value: attributes["pickupLabelBgColor".concat(i + 1)],
        enableAlpha: true,
        onChange: onChangePickupLabelBgColor(i + 1)
      }))));
    });
    var Articles = function Articles() {
      var articles = [];
      {
        radioDisplayArticles === "new" && newPostList.slice(0, postNum).forEach(function (newPost) {
          var jinryoutubetime = newPost["meta"]["_jinr_time_youtube"];
          var jinryoutubethumbnail = newPost["meta"]["_jinr_thumb_youtube"];
          var featuredmedia = newPost["_embedded"]["wp:featuredmedia"];
          var terms = "";
          if (typeof newPost["_embedded"]["wp:term"] === "undefined") {
            terms = new Array();
            terms.push({
              id: 0,
              link: JINR_VAR.home_url,
              name: "",
              slug: "nonecategory"
            });
          } else {
            terms = newPost["_embedded"]["wp:term"][0];
          }
          var articleThumb = "";
          if (!thumbnailOriginalUsed) {
            if (featuredmedia) {
              articleThumb = featuredmedia[0]["media_details"]["sizes"]["medium_size"] !== undefined ? featuredmedia[0]["media_details"]["sizes"]["medium_size"]["source_url"] : featuredmedia[0]["media_details"]["sizes"]["full"]["source_url"];
            } else {
              if (jinryoutubethumbnail) {
                articleThumb = jinryoutubethumbnail;
              } else {
                articleThumb = JINR_VAR.no_image;
              }
            }
          } else {
            if (featuredmedia) {
              articleThumb = featuredmedia[0]["media_details"]["sizes"]["full"]["source_url"];
            } else {
              if (jinryoutubethumbnail) {
                articleThumb = jinryoutubethumbnail;
              } else {
                articleThumb = JINR_VAR.no_image;
              }
            }
          }
          articles.push(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("article", {
            className: "o--postlist-item"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("a", {
            className: "c--post-link"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-image"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
            className: "a--post-img-src",
            src: articleThumb,
            alt: newPost.title.rendered,
            loading: "lazy"
          }), jinryoutubetime ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("span", {
            className: "a--post-time"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("i", {
            class: "jic jin-ifont-playback",
            "aria-hidden": "true"
          }), jinryoutubetime) : ""), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-contents"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-title d--bold"
          }, newPost.title.rendered), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-meta"
          }, timeDisplay !== true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-date ef"
          }, Object(_wordpress_date__WEBPACK_IMPORTED_MODULE_6__["date"])(JINR_VAR.date_format, newPost.date)), catDisplay !== true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-category ef"
          }, terms.reduce(function (previusTerm, nextTerm) {
            return previusTerm.id < nextTerm.id ? previusTerm : nextTerm;
          }).name))))));
        });
      }
      {
        radioDisplayArticles === "category" && postList.slice(0, postNum).forEach(function (post) {
          var jinryoutubetime = post["meta"]["_jinr_time_youtube"];
          var jinryoutubethumbnail = post["meta"]["_jinr_thumb_youtube"];
          var featuredmedia = post["_embedded"]["wp:featuredmedia"];
          var terms = post["_embedded"]["wp:term"][0];
          var articleThumb = "";
          if (!thumbnailOriginalUsed) {
            if (featuredmedia) {
              articleThumb = featuredmedia[0]["media_details"]["sizes"]["medium_size"] !== undefined ? featuredmedia[0]["media_details"]["sizes"]["medium_size"]["source_url"] : featuredmedia[0]["media_details"]["sizes"]["full"]["source_url"];
            } else {
              if (jinryoutubethumbnail) {
                articleThumb = jinryoutubethumbnail;
              } else {
                articleThumb = JINR_VAR.no_image;
              }
            }
          } else {
            if (featuredmedia) {
              articleThumb = featuredmedia[0]["media_details"]["sizes"]["full"]["source_url"];
            } else {
              if (jinryoutubethumbnail) {
                articleThumb = jinryoutubethumbnail;
              } else {
                articleThumb = JINR_VAR.no_image;
              }
            }
          }
          articles.push(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("article", {
            className: "o--postlist-item t--round"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("a", {
            className: "c--post-link"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-image"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
            className: "a--post-img-src",
            src: articleThumb,
            alt: post.title.rendered
          }), jinryoutubetime ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("span", {
            className: "a--post-time"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("i", {
            class: "jic jin-ifont-playback",
            "aria-hidden": "true"
          }), jinryoutubetime) : ""), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-contents"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-title d--bold"
          }, post.title.rendered), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-meta"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-date"
          }, Object(_wordpress_date__WEBPACK_IMPORTED_MODULE_6__["date"])(JINR_VAR.date_format, post.date)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-category"
          }, terms.reduce(function (previusTerm, nextTerm) {
            return previusTerm.id < nextTerm.id ? previusTerm : nextTerm;
          }).name))))));
        });
      }
      {
        radioDisplayArticles === "pv" && PVPostList.slice(0, postNum).forEach(function (newPost, index) {
          var jinryoutubetime = newPost["meta"]["_jinr_time_youtube"];
          var jinryoutubethumbnail = newPost["meta"]["_jinr_thumb_youtube"];
          var featuredmedia = newPost["_embedded"]["wp:featuredmedia"];
          var pvViews = newPost.views;
          _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_10___default()({
            path: "/jinr/post_by_url?url=".concat(newPost.link)
          }).then(function (res) {
            setAttributes(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_0___default()({}, "pvPaidPrice".concat(index + 1), res.product_price));
          });
          var pvPaidPrice = attributes["pvPaidPrice".concat(index + 1)];
          var terms = "";
          if (typeof newPost["_embedded"]["wp:term"] === "undefined") {
            terms = new Array();
            terms.push({
              id: 0,
              link: JINR_VAR.home_url,
              name: "",
              slug: "nonecategory"
            });
          } else {
            terms = newPost["_embedded"]["wp:term"][0];
          }
          var articleThumb = "";
          if (!thumbnailOriginalUsed) {
            if (featuredmedia) {
              articleThumb = featuredmedia[0]["media_details"]["sizes"]["medium_size"] !== undefined ? featuredmedia[0]["media_details"]["sizes"]["medium_size"]["source_url"] : featuredmedia[0]["media_details"]["sizes"]["full"]["source_url"];
            } else {
              if (jinryoutubethumbnail) {
                articleThumb = jinryoutubethumbnail;
              } else {
                articleThumb = JINR_VAR.no_image;
              }
            }
          } else {
            if (featuredmedia) {
              articleThumb = featuredmedia[0]["media_details"]["sizes"]["full"]["source_url"];
            } else {
              if (jinryoutubethumbnail) {
                articleThumb = jinryoutubethumbnail;
              } else {
                articleThumb = JINR_VAR.no_image;
              }
            }
          }
          articles.push(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("article", {
            className: "o--postlist-item"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("a", {
            className: "c--post-link"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-image"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
            className: "a--post-img-src",
            src: articleThumb,
            alt: newPost.title.rendered,
            loading: "lazy"
          }), jinryoutubetime ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("span", {
            className: "a--post-time"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("i", {
            class: "jic jin-ifont-playback",
            "aria-hidden": "true"
          }), jinryoutubetime) : ""), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-contents"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--post-title d--bold"
          }, newPost.title.rendered), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-meta"
          }, rankingViewDisplay == true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "c--post-views"
          }, pvViews ? pvViews : "", "views"), pvPaidpostDisplay == true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--paidpost-price"
          }, pvPaidPrice ? pvPaidPrice : ""))), rankingDisplay == true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            class: "c--post-ranking"
          }))));
        });
      }
      {
        if (radioDisplayArticles === "pickup") {
          for (var i = 1; i <= postNum; i++) {
            var labelToggle = attributes["pickupLabelToggle".concat(i)];
            var labelColor = attributes["pickupLabelBgColor".concat(i)];
            var labelText = attributes["pickupLabelText".concat(i)];
            var articleThumb = "";
            if (!thumbnailOriginalUsed) {
              if (pickupThumbIDs[i - 1]) {
                articleThumb = pickupThumbMediums[i - 1] ? pickupThumbMediums[i - 1] : pickupThumbFulls[i - 1];
              } else {
                if (pickupYoutubes[i - 1]) {
                  articleThumb = pickupYoutubeThumbs[i - 1];
                } else {
                  articleThumb = JINR_VAR.no_image;
                }
              }
            } else {
              if (pickupThumbIDs[i - 1]) {
                articleThumb = pickupThumbFulls[i - 1];
              } else {
                if (pickupYoutubes[i - 1]) {
                  articleThumb = pickupYoutubeThumbs[i - 1];
                } else {
                  articleThumb = JINR_VAR.no_image;
                }
              }
            }
            articles.push(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("article", {
              className: "o--postlist-item t--round"
            }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("a", {
              className: "c--post-link"
            }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "c--post-image"
            }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
              className: "a--post-img-src",
              src: articleThumb,
              alt: pickupTitles[i - 1]
            }), pickupYoutubeTimes[i - 1] ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("span", {
              className: "a--post-time"
            }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("i", {
              class: "jic jin-ifont-playback",
              "aria-hidden": "true"
            }), pickupYoutubeTimes[i - 1]) : ""), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "c--post-contents"
            }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "a--post-title d--bold"
            }, pickupTitles[i - 1] ? pickupTitles[i - 1] : "記事URLが設定されていません"), (pvPaidpostDisplay == true || labelToggle == true) && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "c--meta-options"
            }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "c--post-meta"
            }, labelToggle == true ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "a--pickup-label",
              style: {
                color: labelColor,
                backgroundColor: hex2rgba(labelColor, 0.12)
              }
            }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("span", null, labelText)) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", null), pvPaidpostDisplay == true && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
              className: "a--paidpost-price"
            }, pickupPrices[i - 1] ? pickupPrices[i - 1] : "")))))));
          }
        }
      }
      if ((radioDisplayArticles === "new" || radioDisplayArticles === "category") && articles.length !== 0 && postList.length > postNum && toggleMoreDisplay) {
        if (moreDisplayDesign === "async") {
          articles.push(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--postlist-more ef"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("a", null, buttonText)));
        } else {
          articles.push(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
            className: "a--postlist-more d--archive-link ef"
          }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("a", null, buttonText)));
        }
      }
      return articles.length !== 0 ? articles : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", null);
    };
    console.log(props.attributes.className);
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_7__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(PanelBody, {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u8A18\u4E8B\u30BF\u30A4\u30D7"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: radioDisplayArticles,
      options: [{
        label: "新着記事",
        value: "new"
      }, {
        label: "カテゴリ一覧",
        value: "category"
      }, {
        label: "PV順",
        value: "pv"
      }, {
        label: "ピックアップ",
        value: "pickup"
      }],
      onChange: onChangeRadioDisplayArticles,
      className: "a--jinr-radio a--radio-flex"
    }), radioDisplayArticles === "category" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(SelectControl, {
      value: displayCategory,
      options: categoryList,
      onChange: onChangeDisplayCategory
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u8868\u793A\u3059\u308B\u6295\u7A3F\u6570"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RangeControl, {
      value: postNum,
      onChange: onChangePostNum,
      min: 1,
      max: 12
    })), radioDisplayArticles === "pickup" && pickupUrlList), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(PanelBody, {
      title: "\u30C7\u30B6\u30A4\u30F3\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u3010PC\u3011\u30C7\u30B6\u30A4\u30F3"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: listDesign,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-square.png"
        }),
        value: "d--postlist-square"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-rectangle.png"
        }),
        value: "d--postlist-rectangle"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-slider.png"
        }),
        value: "d--postlist-slider d--postlist-slider-loader"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-news.png"
        }),
        value: "d--postlist-newstext"
      }],
      onChange: onChangeListDesign,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u3010PC\u3011\u30AB\u30E9\u30E0\u6570"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: listDesign === "d--postlist-slider d--postlist-slider-loader" ? "1" : listDesign === "d--postlist-newstext" ? "1" : columnSelect,
      options: listDesign === "d--postlist-square" ? [{
        label: "１カラム",
        value: "1"
      }, {
        label: "２カラム",
        value: "2"
      }, {
        label: "３カラム",
        value: "3"
      }, {
        label: "４カラム",
        value: "4"
      }] : listDesign === "d--postlist-rectangle" ? [{
        label: "１カラム",
        value: "1"
      }, {
        label: "２カラム",
        value: "2"
      }] : [{
        label: "１カラム",
        value: "1"
      }, {
        label: "２カラム",
        value: "2"
      }, {
        label: "３カラム",
        value: "3"
      }, {
        label: "４カラム",
        value: "4"
      }],
      onChange: onChangeColumnSelect,
      className: listDesign === "d--postlist-slider d--postlist-slider-loader" ? "a--jinr-radio t--cannot-select" : listDesign === "d--postlist-newstext" ? "a--jinr-radio t--cannot-select" : "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
      className: "a--inspector-item-border"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u3010\u30B9\u30DE\u30DB\u3011\u30C7\u30B6\u30A4\u30F3"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: listDesignSp,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-square.png"
        }),
        value: "d--postlist-square-sp"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-rectangle.png"
        }),
        value: "d--postlist-rectangle-sp"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-slider.png"
        }),
        value: "d--postlist-slider-sp d--postlist-slider-loader"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("img", {
          src: JINR_VAR.image_path + "postlist-news.png"
        }),
        value: "d--postlist-newstext-sp"
      }],
      onChange: onChangeListDesignSp,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u3010\u30B9\u30DE\u30DB\u3011\u30AB\u30E9\u30E0\u6570"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: listDesignSp === "d--postlist-square-sp" ? columnSelectSp : "1",
      options: listDesignSp === "d--postlist-square-sp" ? [{
        label: "１カラム",
        value: "1"
      }, {
        label: "２カラム",
        value: "2"
      }] : [{
        label: "１カラム",
        value: "1"
      }, {
        label: "２カラム",
        value: "2"
      }, {
        label: "３カラム",
        value: "3"
      }],
      onChange: onChangeColumnSelectSp,
      className: listDesignSp === "d--postlist-square-sp" ? "a--jinr-radio" : "a--jinr-radio t--cannot-select"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
      className: "a--inspector-item-border"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30A2\u30CB\u30E1\u30FC\u30B7\u30E7\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(SelectControl, {
      value: radioAnimation,
      options: [{
        label: "なし",
        value: "none"
      }, {
        label: "全体フェードイン",
        value: "d--postlist-animation-fade js--scr-animation"
      }, {
        label: "一つずつフェードイン",
        value: "d--postlist-animation-fadebyone js--scr-animation"
      }],
      onChange: onChangeRadioAnimation
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30AB\u30FC\u30BD\u30EB\u3057\u305F\u3068\u304D\u306E\u52D5\u304D\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(SelectControl, {
      value: radioHover,
      options: listDesign === "d--postlist-newstext" ? [{
        label: "なし",
        value: "none"
      }, {
        label: "浮かす",
        value: "d--postlist-hover-up"
      }, {
        label: "文字色変更",
        value: "d--postlist-hover-hovercolor"
      }, {
        label: "フェード",
        value: "d--postlist-hover-fade"
      }] : [{
        label: "なし",
        value: "none"
      }, {
        label: "浮かす",
        value: "d--postlist-hover-up"
      }, {
        label: "ズーム",
        value: "d--postlist-hover-zoom"
      }, {
        label: "フェード",
        value: "d--postlist-hover-fade"
      }],
      onChange: onChangeRadioHover
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(PanelBody, {
      title: "\u8868\u793A\u8A2D\u5B9A",
      initialOpen: false
    }, radioDisplayArticles == "pv" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30E9\u30F3\u30AD\u30F3\u30B0\u30E9\u30D9\u30EB\u3092\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: rankingDisplay ? "ON" : "OFF",
      checked: rankingDisplay,
      onChange: onChangeRankingDisplay,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u8A18\u4E8B\u306EView\u6570\u3092\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: rankingViewDisplay ? "ON" : "OFF",
      checked: rankingViewDisplay,
      onChange: onChangeRankingViewDisplay,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u6709\u6599\u8A18\u4E8B\u306E\u91D1\u984D\u3092\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: pvPaidpostDisplay ? "ON" : "OFF",
      checked: pvPaidpostDisplay,
      onChange: onChangePvPaidpostDisplay,
      className: "jinr-toggle"
    }))), radioDisplayArticles == "pickup" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u6709\u6599\u8A18\u4E8B\u306E\u91D1\u984D\u3092\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: pvPaidpostDisplay ? "ON" : "OFF",
      checked: pvPaidpostDisplay,
      onChange: onChangePvPaidpostDisplay,
      className: "jinr-toggle"
    }))), radioDisplayArticles === "new" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u65E5\u4ED8\u3092\u975E\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: timeDisplay ? "ON" : "OFF",
      checked: timeDisplay,
      onChange: onChangeTimeDisplay,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30AB\u30C6\u30B4\u30EA\u30FC\u3092\u975E\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: catDisplay ? "ON" : "OFF",
      checked: catDisplay,
      onChange: onChangeCatDisplay,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u3082\u3063\u3068\u898B\u308B\u30DC\u30BF\u30F3\u3092\u8868\u793A",
      help: "\u203B\u30C7\u30B6\u30A4\u30F3\u9078\u629E\u3067\u300C\u30B9\u30E9\u30A4\u30C0\u30FC\u300D\u9078\u629E\u6642\u306B\u306F\u3082\u3063\u3068\u898B\u308B\u30DC\u30BF\u30F3\u306F\u81EA\u52D5\u3067\u975E\u8868\u793A\u306B\u306A\u308A\u307E\u3059"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: toggleMoreDisplay ? "ON" : "OFF",
      checked: toggleMoreDisplay,
      onChange: onChangeToggleMoreDisplay,
      className: "jinr-toggle"
    })), toggleMoreDisplay && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u4ED5\u69D8\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: moreDisplayDesign,
      options: [{
        label: "非同期読み込み",
        value: "async"
      }, {
        label: "一覧ページに遷移",
        value: "pagenation"
      }],
      onChange: onChangeMoreDisplayDesign,
      className: "a--jinr-radio a--radio-flex"
    })), toggleMoreDisplay && moreDisplayDesign == "async" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30C6\u30AD\u30B9\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(TextControl, {
      value: buttonText,
      onChange: onChangeButtonText
    }))), radioDisplayArticles === "category" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u65E5\u4ED8\u3092\u975E\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: timeDisplay ? "ON" : "OFF",
      checked: timeDisplay,
      onChange: onChangeTimeDisplay,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30AB\u30C6\u30B4\u30EA\u30FC\u3092\u975E\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: catDisplay ? "ON" : "OFF",
      checked: catDisplay,
      onChange: onChangeCatDisplay,
      className: "jinr-toggle"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u3082\u3063\u3068\u898B\u308B\u30DC\u30BF\u30F3\u3092\u8868\u793A",
      help: "\u203B\u30C7\u30B6\u30A4\u30F3\u9078\u629E\u3067\u300C\u30B9\u30E9\u30A4\u30C0\u30FC\u300D\u9078\u629E\u6642\u306B\u306F\u3082\u3063\u3068\u898B\u308B\u30DC\u30BF\u30F3\u306F\u81EA\u52D5\u3067\u975E\u8868\u793A\u306B\u306A\u308A\u307E\u3059"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(ToggleControl, {
      label: toggleMoreDisplay ? "ON" : "OFF",
      checked: toggleMoreDisplay,
      onChange: onChangeToggleMoreDisplay,
      className: "jinr-toggle"
    })), toggleMoreDisplay && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(RadioControl, {
      selected: moreDisplayDesign,
      options: [{
        label: "非同期読み込み",
        value: "async"
      }, {
        label: "一覧ページに遷移",
        value: "pagenation"
      }],
      onChange: onChangeMoreDisplayDesign,
      className: "a--jinr-radio a--radio-flex"
    })), toggleMoreDisplay && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(BaseControl, {
      label: "\u30C6\u30AD\u30B9\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(TextControl, {
      value: buttonText,
      onChange: onChangeButtonText
    })))))), !loading ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("section", {
      className: "b--jinr-block b--jinr-postlist ".concat(listDesign, " ").concat(listDesignSp, " d--postlist-column").concat(columnSelect, " d--postlist-column").concat(columnSelectSp, "-sp ").concat(radioAnimation !== "none" ? radioAnimation : "", " ").concat(radioHover !== "none" ? radioHover : "", " ").concat(props.attributes.className == undefined ? "" : props.attributes.className).concat(rankingDisplay == true ? " d--postlist-ranking-on" : "")
    }, radioDisplayArticles === "category" && displayCategory === "" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
      className: "d--special-text"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])("div", {
      className: "d--special-text-inner"
    }, "\u30AB\u30C6\u30B4\u30EA\u30FC\u9078\u629E\u5F85\u3061\u3067\u3059\u3002\u753B\u9762\u53F3\u3067\u300C\u8868\u793A\u3059\u308B\u30AB\u30C6\u30B4\u30EA\u30FC\u3092\u9078\u629E\u300D\u3057\u3066\u304F\u3060\u3055\u3044\u3002")), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Articles, null)) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_4__["createElement"])(Spinner, null));
  },
  /**
   * @see ./save.js
   */
  save: function save() {
    return null;
  }
}));

/***/ }),

/***/ "./src/blocks/profile.js":
/*!*******************************!*\
  !*** ./src/blocks/profile.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_profile_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-profile.svg */ "./src/icons/jinr-profile.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);





var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useEffect = _wp$element.useEffect;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/profile", {
  title: "プロフィール",
  description: "サイト運営者の情報を表示させるブロックです。カスタマイザーで設定したプロフィール情報が自動で反映されます。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_profile_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    profileDesign: {
      type: "string",
      default: "d--profile-style1"
    },
    profileSNS: {
      type: "string",
      default: "on"
    },
    profileSNSColor: {
      type: "string",
      default: JINR_VAR.profile_sns_color
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes;
    var profileDesign = attributes.profileDesign,
      profileSNS = attributes.profileSNS,
      profileSNSColor = attributes.profileSNSColor;
    var onChangeProfileDesign = function onChangeProfileDesign(newValue) {
      setAttributes({
        profileDesign: newValue
      });
    };
    var onChangeProfileSNS = function onChangeProfileSNS(newValue) {
      setAttributes({
        profileSNS: newValue
      });
    };
    var onChangeProfileSNSColor = function onChangeProfileSNSColor(newValue) {
      setAttributes({
        profileSNSColor: newValue
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: profileDesign,
      options: [{
        label: "デザイン１",
        value: "d--profile-style1"
      }, {
        label: "デザイン２",
        value: "d--profile-style2"
      }],
      onChange: onChangeProfileDesign,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "SNS\u30D5\u30A9\u30ED\u30FC\u30DC\u30BF\u30F3\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: profileSNSColor,
      options: [{
        label: "ブランドカラー",
        value: "d--brand-color"
      }, {
        label: "テーマカラー",
        value: "d--theme-color"
      }],
      onChange: onChangeProfileSNSColor,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "SNS\u30D5\u30A9\u30ED\u30FC\u30DC\u30BF\u30F3\u306E\u8868\u793A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: profileSNS,
      options: [{
        label: "ON",
        value: "on"
      }, {
        label: "OFF",
        value: "off"
      }],
      onChange: onChangeProfileSNS,
      className: "a--jinr-radio"
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-profile ".concat(profileDesign, " d--sns-display-").concat(profileSNS, " ").concat(profileSNSColor, " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--profile-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--profile-image"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: JINR_VAR.profile_image ? JINR_VAR.profile_image : JINR_VAR.image_path + "image_setting.png",
      alt: JINR_VAR.profile_name,
      width: "90",
      height: "90"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--profile-meta"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--profile-name d--bold"
    }, JINR_VAR.profile_name), JINR_VAR.profile_job && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--profile-job"
    }, JINR_VAR.profile_job))), JINR_VAR.profile_introduction && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--profile-introduction"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--profile-label ef d--bold"
    }, "Profile"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--profile-text"
    }, JINR_VAR.profile_introduction), JINR_VAR.profile_button_link && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--profile-link d--bold"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "\u30D7\u30ED\u30D5\u30A3\u30FC\u30EB\u3092\u8AAD\u3080"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-arrow-thin",
      "aria-hidden": "true"
    })), profileSNS === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--profile-sns"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--profile-sns-item"
    }, JINR_VAR.sns_follow_twitter && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--sns-item-link d--twitter",
      href: JINR_VAR.sns_follow_twitter
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-twitter",
      "aria-hidden": "true"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "X")), JINR_VAR.sns_follow_facebook && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--sns-item-link d--facebook",
      href: JINR_VAR.sns_follow_facebook
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-facebook",
      "aria-hidden": "true"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "Facebook")), JINR_VAR.sns_follow_instagram && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--sns-item-link d--instagram",
      href: JINR_VAR.sns_follow_instagram
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-instagram",
      "aria-hidden": "true"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "Instagram")), JINR_VAR.sns_follow_youtube && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--sns-item-link d--youtube",
      href: JINR_VAR.sns_follow_youtube
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-youtube",
      "aria-hidden": "true"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "YouTube")), JINR_VAR.sns_follow_line && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--sns-item-link d--line",
      href: JINR_VAR.sns_follow_line
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-line",
      "aria-hidden": "true"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "LINE")), JINR_VAR.contact_url && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--sns-item-link d--contact",
      href: JINR_VAR.contact_url
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
      className: "jin-icons jin-ifont-mail",
      "aria-hidden": "true"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, "Contact")))))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var profileDesign = attributes.profileDesign,
      profileSNS = attributes.profileSNS,
      profileSNSColor = attributes.profileSNSColor;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--jinr-profile-container ".concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, "[", "jinr_profile design=\"".concat(profileDesign, "\" color=\"").concat(profileSNSColor, "\" sns_display=\"").concat(profileSNS, "\""), "]");
  }
}));

/***/ }),

/***/ "./src/blocks/richmenu.js":
/*!********************************!*\
  !*** ./src/blocks/richmenu.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _icons_jinr_richmenu_svg__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../icons/jinr-richmenu.svg */ "./src/icons/jinr-richmenu.svg");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_5__);





var Fragment = wp.element.Fragment;


var _wp$data = wp.data,
  select = _wp$data.select,
  subscribe = _wp$data.subscribe,
  dispatch = _wp$data.dispatch;
var _wp$blocks = wp.blocks,
  getBlockType = _wp$blocks.getBlockType,
  getBlockAttributes = _wp$blocks.getBlockAttributes;
var ALLOWED_BLOCKS = ["jinr-blocks/richmenuchild"];
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/richmenu", {
  title: "リッチメニュー",
  description: "画像を活用したデザイン性の高いメニューを作成するブロックです。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_richmenu_svg__WEBPACK_IMPORTED_MODULE_2__["ReactComponent"], null),
  attributes: {
    columnSelect: {
      type: "string",
      default: "4"
    },
    itemRatio: {
      type: "string",
      default: "16-9"
    },
    textDesign: {
      type: "string",
      default: "5"
    },
    radioSpColumn: {
      type: "string",
      default: "2"
    },
    itemText: {
      type: "string",
      default: "on"
    },
    itemTextSize: {
      type: "string",
      default: "d--richmenu-text-medium"
    },
    radioAnimation: {
      type: "string",
      default: "d--richmenu-animation-fadebyone js--scr-animation"
    },
    radioHover: {
      type: "string",
      default: "d--richmenu-hover-up"
    },
    textColor: {
      type: "string",
      default: JINR_VAR.text_color
    },
    textBgColorSelect: {
      type: "string",
      default: "simple"
    },
    textBgColor: {
      type: "string",
      default: "rgba(255,255,255,0.51)"
    },
    filterOpacity: {
      type: "number",
      default: 75
    },
    filterDisplay: {
      type: "string",
      default: "off"
    },
    filterColor: {
      type: "string",
      default: "#ffffff"
    },
    filterColorSelect: {
      type: "string",
      default: "simple"
    },
    pageTemplate: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var columnSelect = attributes.columnSelect,
      itemRatio = attributes.itemRatio,
      textDesign = attributes.textDesign,
      radioSpColumn = attributes.radioSpColumn,
      radioAnimation = attributes.radioAnimation,
      itemText = attributes.itemText,
      itemTextSize = attributes.itemTextSize,
      radioHover = attributes.radioHover,
      textColor = attributes.textColor,
      textBgColorSelect = attributes.textBgColorSelect,
      textBgColor = attributes.textBgColor,
      filterOpacity = attributes.filterOpacity,
      filterDisplay = attributes.filterDisplay,
      filterColor = attributes.filterColor,
      filterColorSelect = attributes.filterColorSelect,
      pageTemplate = attributes.pageTemplate;
    var updateChildAttributes = Object(lodash__WEBPACK_IMPORTED_MODULE_5__["debounce"])(function () {
      var children = select("core/block-editor").getBlocksByClientId(clientId)[0].innerBlocks;
      children.forEach(function (child) {
        return dispatch("core/block-editor").updateBlockAttributes(child.clientId, attributes);
      });
    }, 500);
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["useEffect"])(function () {
      updateChildAttributes();
    }, [attributes, clientId]);
    var onChangeColumnSelect = function onChangeColumnSelect(newValue) {
      newValue !== "3" && itemRatio === "-unique1-1" && setAttributes({
        itemRatio: "16-9"
      });
      setAttributes({
        columnSelect: newValue
      });
    };
    var onChangeItemRatio = function onChangeItemRatio(newValue) {
      newValue === "-unique1-1" && radioSpColumn === "1" && setAttributes({
        radioSpColumn: "2"
      });
      newValue === "-unique1-1" && setAttributes({
        itemText: "on"
      });
      newValue === "-unique1-1" && setAttributes({
        textDesign: "1"
      });
      setAttributes({
        itemRatio: newValue
      });
    };
    var onChangeTextDesign = function onChangeTextDesign(newValue) {
      setAttributes({
        textDesign: newValue
      });
    };
    var onChangeRadioSpColumn = function onChangeRadioSpColumn(newValue) {
      setAttributes({
        radioSpColumn: newValue
      });
    };
    var onChangeItemText = function onChangeItemText(newValue) {
      itemRatio === "-unique1-1" ? setAttributes({
        itemText: "on"
      }) : setAttributes({
        itemText: newValue
      });
    };
    var onChangeItemTextSize = function onChangeItemTextSize(newValue) {
      setAttributes({
        itemTextSize: newValue
      });
    };
    var onChangeRadioAnimation = function onChangeRadioAnimation(newValue) {
      setAttributes({
        radioAnimation: newValue
      });
    };
    var onChangeRadioHover = function onChangeRadioHover(newValue) {
      setAttributes({
        radioHover: newValue
      });
    };
    var onChangeTextColor = function onChangeTextColor(newValue) {
      setAttributes({
        textColor: newValue
      });
    };
    var onChangeTextBgColorSelect = function onChangeTextBgColorSelect(newValue) {
      setAttributes({
        textBgColorSelect: newValue
      });
    };
    var onChangeTextBgColor = function onChangeTextBgColor(newValue) {
      setAttributes({
        textBgColor: newValue
      });
    };
    var onChangeFilterDisplay = function onChangeFilterDisplay(newValue) {
      setAttributes({
        filterDisplay: newValue
      });
    };
    var onChangeFilterOpacity = function onChangeFilterOpacity(newValue) {
      setAttributes({
        filterOpacity: newValue
      });
    };
    var onChangeFilterColor = function onChangeFilterColor(newValue) {
      setAttributes({
        filterColor: newValue
      });
    };
    var onChangeFilterColorSelect = function onChangeFilterColorSelect(newValue) {
      setAttributes({
        filterColorSelect: newValue
      });
    };
    var onChangePageTemplate = function onChangePageTemplate(newValue) {
      newValue !== "template-full-width.php" && columnSelect === "6" && setAttributes({
        columnSelect: "4"
      });
      setAttributes({
        pageTemplate: newValue
      });
    };
    var template = null;
    subscribe(function () {
      var newTemplate = select("core/editor").getEditedPostAttribute("template");
      if (newTemplate !== undefined && template === null) {
        template = newTemplate;
      }
      if (newTemplate !== undefined && newTemplate !== template) {
        template = newTemplate;
        onChangePageTemplate(newTemplate);
      }
    });
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "light-black",
      color: "#222222"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var textBgColorPallet = [{
      name: "pale-gray",
      color: "rgba(210,210,210,0.3)"
    }, {
      name: "pale-blue",
      color: "rgba(211,225,236,0.51)"
    }, {
      name: "pale-green",
      color: "rgba(192,228,197,0.51)"
    }, {
      name: "pale-yellow",
      color: "rgba(255,242,185,0.51)"
    }, {
      name: "pale-orange",
      color: "rgba(255,209,152,0.51)"
    }, {
      name: "pale-pink",
      color: "rgba(255,208,225,0.51)"
    }, {
      name: "pale-purple",
      color: "rgba(223,203,239,0.51)"
    }, {
      name: "white-transparent",
      color: "rgba(255,255,255,0.51)"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var jinrTextBgColorPallet = textBgColorPallet.concat(favoriteColorPallet);
    var textbg_gradation_color_options = [{
      name: "Cherry Blossom",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(255,208,225,0.75) 96%)",
      slug: "cherry-blossom"
    }, {
      name: "Sahara Sunset",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(255,181,151,0.75) 96%)",
      slug: "sahara-sunset"
    }, {
      name: "Tropical Sand",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(255,237,190,0.75) 96%)",
      slug: "tropical-sand"
    }, {
      name: "Milky Lime",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(190,235,203,0.75) 96%)",
      slug: "milky-lime"
    }, {
      name: "Spring Sky",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(213,239,255,0.75) 96%)",
      slug: "spring-sky"
    }, {
      name: "Soft Violet",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(223,203,239,0.75) 96%)",
      slug: "soft-violet"
    }, {
      name: "OffWhite Gradation",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 18%, rgba(255,250,240,0.75) 96%)",
      slug: "white-gradation"
    }, {
      name: "Black Gradation",
      gradient: "linear-gradient(180deg, rgba(0,0,0,0) 18%, rgba(0,0,0,0.6) 96%)",
      slug: "black-gradation"
    }];
    var gradation_color_options = [{
      name: "Cherry Blossom",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(255,208,225,0.6) 96%)",
      slug: "cherry-blossom"
    }, {
      name: "Sahara Sunset",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(255,181,151,0.6) 96%)",
      slug: "sahara-sunset"
    }, {
      name: "Tropical Sand",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(255,237,190,0.6) 96%)",
      slug: "tropical-sand"
    }, {
      name: "Milky Lime",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(190,235,203,0.6) 96%)",
      slug: "milky-lime"
    }, {
      name: "Spring Sky",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(213,239,255,0.6) 96%)",
      slug: "spring-sky"
    }, {
      name: "Soft Violet",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 6%, rgba(223,203,239,0.6) 96%)",
      slug: "soft-violet"
    }, {
      name: "OffWhite Gradation",
      gradient: "linear-gradient(180deg, rgba(255,255,255,0) 18%, rgba(255,250,240,0.75) 96%)",
      slug: "white-gradation"
    }, {
      name: "Black Gradation",
      gradient: "linear-gradient(180deg, rgba(0,0,0,0) 18%, rgba(0,0,0,0.6) 96%)",
      slug: "black-gradation"
    }];
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AB\u30E9\u30E0\u9078\u629E\u3010PC\u3011"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: columnSelect,
      options: [{
        label: "２カラム",
        value: "2"
      }, {
        label: "３カラム",
        value: "3"
      }, {
        label: "４カラム",
        value: "4"
      }, {
        label: "６カラム",
        value: "6"
      }],
      onChange: onChangeColumnSelect,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AB\u30E9\u30E0\u8A2D\u5B9A\u3010\u30B9\u30DE\u30DB\u3011"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: itemRatio === "-unique1-1" ? radioSpColumn === "1" ? "2" : radioSpColumn : radioSpColumn,
      options: itemRatio === "-unique1-1" ? [{
        label: "2カラム",
        value: "2"
      }, {
        label: "スライド",
        value: "slide"
      }] : [{
        label: "1カラム",
        value: "1"
      }, {
        label: "2カラム",
        value: "2"
      }, {
        label: "3カラム",
        value: "3"
      }, {
        label: "スライド",
        value: "slide"
      }],
      onChange: onChangeRadioSpColumn,
      className: "a--jinr-radio"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u753B\u50CF\u6BD4\u7387\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: columnSelect !== "3" ? itemRatio === "-unique1-1" ? "16-9" : itemRatio : itemRatio,
      options: columnSelect !== "3" ? [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-square.png"
        }),
        value: "1-1"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-4-3.png"
        }),
        value: "4-3"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-16-9.png"
        }),
        value: "16-9"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-5-2.png"
        }),
        value: "5-2"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-2-3.png"
        }),
        value: "2-3"
      }] : [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-square.png"
        }),
        value: "1-1"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-4-3.png"
        }),
        value: "4-3"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-16-9.png"
        }),
        value: "16-9"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-5-2.png"
        }),
        value: "5-2"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-2-3.png"
        }),
        value: "2-3"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "richmenu-special.png"
        }),
        value: "-unique1-1"
      }],
      onChange: onChangeItemRatio,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30E1\u30CB\u30E5\u30FC\u30A2\u30A4\u30C6\u30E0\u306E\u6587\u5B57"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: itemRatio === "-unique1-1" ? "on" : itemText,
      options: [{
        label: "あり",
        value: "on"
      }, {
        label: "なし",
        value: "off"
      }],
      onChange: onChangeItemText,
      className: itemRatio === "-unique1-1" ? "a--jinr-radio t--cannot-select" : "a--jinr-radio",
      disabled: itemRatio === "-unique1-1" && "disabled"
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u30C7\u30B6\u30A4\u30F3\u9078\u629E",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["SelectControl"], {
      value: textDesign,
      options: [{
        label: "スタイル１｜下",
        value: "1"
      }, {
        label: "スタイル２｜中央コンパクト",
        value: "2"
      }, {
        label: "スタイル３｜中央ダイナミック",
        value: "3"
      }, {
        label: "スタイル４｜左上",
        value: "4"
      }, {
        label: "スタイル５｜外に出す",
        value: "5"
      }],
      onChange: onChangeTextDesign,
      disabled: itemRatio === "-unique1-1" && "disabled"
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u6587\u5B57\u30B5\u30A4\u30BA",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: itemTextSize,
      options: [{
        label: "小",
        value: "d--richmenu-text-small"
      }, {
        label: "中",
        value: "d--richmenu-text-medium"
      }, {
        label: "大",
        value: "d--richmenu-text-large"
      }],
      onChange: onChangeItemTextSize,
      className: "a--jinr-radio"
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u8272",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: jinrColorPallet,
      value: textColor,
      enableAlpha: true,
      onChange: onChangeTextColor
    })), itemText === "on" && textDesign == "1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "- \u6587\u5B57\u306E\u80CC\u666F\u8272",
      className: "d--jinr-child-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ButtonGroup"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: textBgColorSelect === "simple" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          textBgColorSelect: "simple",
          textBgColor: "rgba(255,255,255,0.51)"
        });
      }
    }, "\u5358\u8272"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: textBgColorSelect === "grad" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          textBgColorSelect: "grad",
          textBgColor: "linear-gradient(180deg, rgba(255,255,255,0) 18%, rgba(255,250,240,0.75) 96%)"
        });
      }
    }, "\u30B0\u30E9\u30C7\u30FC\u30B7\u30E7\u30F3")), textBgColorSelect === "simple" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: textBgColorPallet,
      value: textBgColor,
      enableAlpha: true,
      onChange: onChangeTextBgColor
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["GradientPicker"], {
      value: textBgColor,
      onChange: onChangeTextBgColor,
      gradients: textbg_gradation_color_options
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30A2\u30CB\u30E1\u30FC\u30B7\u30E7\u30F3\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["SelectControl"], {
      value: radioAnimation,
      options: [{
        label: "なし",
        value: "none"
      }, {
        label: "全体フェードイン",
        value: "d--richmenu-animation-fade js--scr-animation"
      }, {
        label: "一つずつフェードイン",
        value: "d--richmenu-animation-fadebyone js--scr-animation"
      }],
      onChange: onChangeRadioAnimation
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30AB\u30FC\u30BD\u30EB\u3057\u305F\u3068\u304D\u306E\u52D5\u304D\u9078\u629E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["SelectControl"], {
      value: radioHover,
      options: [{
        label: "なし",
        value: "none"
      }, {
        label: "浮かす",
        value: "d--richmenu-hover-up"
      }, {
        label: "ズーム",
        value: "d--richmenu-hover-zoom"
      }, {
        label: "フェード",
        value: "d--richmenu-hover-fade"
      }],
      onChange: onChangeRadioHover
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u30D5\u30A3\u30EB\u30BF\u30FC\u8A2D\u5B9A",
      initialOpen: false
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30D5\u30A3\u30EB\u30BF\u30FC\u306E\u6709\u7121"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: filterDisplay,
      options: [{
        label: "あり",
        value: "on"
      }, {
        label: "なし",
        value: "off"
      }],
      onChange: onChangeFilterDisplay,
      className: "a--jinr-radio"
    })), filterDisplay === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30D5\u30A3\u30EB\u30BF\u30FC\u306E\u900F\u904E\u7387"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RangeControl"], {
      value: filterOpacity,
      onChange: onChangeFilterOpacity,
      min: 0,
      max: 100
    })), filterDisplay === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30D5\u30A3\u30EB\u30BF\u30FC\u306E\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ButtonGroup"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: filterColorSelect === "simple" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          filterColorSelect: "simple",
          filterColor: "#ffffff"
        });
      }
    }, "\u5358\u8272"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Button"], {
      isSmall: true,
      style: filterColorSelect === "grad" ? {
        backgroundColor: "black",
        color: "white"
      } : {
        backgroundColor: "white"
      },
      onClick: function onClick() {
        return setAttributes({
          filterColorSelect: "grad",
          filterColor: "linear-gradient(135deg, #ffeae4 0%, #ff9a9e 100%)"
        });
      }
    }, "\u30B0\u30E9\u30C7\u30FC\u30B7\u30E7\u30F3")), filterColorSelect === "simple" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ColorPalette"], {
      colors: [{
        name: "White",
        color: "#ffffff"
      }, {
        name: "Black",
        color: "#000000"
      }],
      value: filterColor,
      enableAlpha: true,
      onChange: onChangeFilterColor
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["GradientPicker"], {
      value: filterColor,
      onChange: onChangeFilterColor,
      gradients: gradation_color_options
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-richmenu d--richmenu-column".concat(radioSpColumn, "-sp d--richmenu-column").concat(columnSelect, " d--richmenu-ratio").concat(itemRatio, " d--richmenu-").concat(textBgColorSelect, " ").concat(itemTextSize, " d--richmenu-text-style").concat(textDesign, " ").concat(radioAnimation !== "none" ? radioAnimation : "", " ").concat(radioHover !== "none" ? radioHover : "", " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--parent-select"
    }, "\u89AA\u30D6\u30ED\u30C3\u30AF\u3092\u9078\u629E"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InnerBlocks"], {
      allowedBlocks: ALLOWED_BLOCKS,
      template: [["jinr-blocks/richmenuchild", {}], ["jinr-blocks/richmenuchild", {}], ["jinr-blocks/richmenuchild", {}], ["jinr-blocks/richmenuchild", {}]],
      orientation: "horizontal"
    })));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var columnSelect = attributes.columnSelect,
      itemRatio = attributes.itemRatio,
      textDesign = attributes.textDesign,
      radioSpColumn = attributes.radioSpColumn,
      radioAnimation = attributes.radioAnimation,
      radioHover = attributes.radioHover,
      itemText = attributes.itemText,
      itemTextSize = attributes.itemTextSize,
      textColor = attributes.textColor,
      textBgColorSelect = attributes.textBgColorSelect,
      textBgColor = attributes.textBgColor,
      filterOpacity = attributes.filterOpacity,
      filterDisplay = attributes.filterDisplay,
      filterColor = attributes.filterColor,
      filterColorSelect = attributes.filterColorSelect;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-richmenu d--richmenu-column-".concat(radioSpColumn, "-sp d--richmenu-column").concat(columnSelect, " d--richmenu-ratio").concat(itemRatio, " d--richmenu-").concat(textBgColorSelect, " ").concat(itemTextSize, " d--richmenu-text-style").concat(textDesign, " ").concat(radioAnimation !== "none" ? radioAnimation : "", " ").concat(radioHover !== "none" ? radioHover : "", " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InnerBlocks"].Content, null));
  }
}));

/***/ }),

/***/ "./src/blocks/richmenuchild.js":
/*!*************************************!*\
  !*** ./src/blocks/richmenuchild.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);






var Fragment = wp.element.Fragment;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/richmenuchild", {
  title: "リッチメニューアイテム",
  parent: ["jinr-blocks/richmenu"],
  category: "jinr-blocks",
  icon: "admin-home",
  attributes: {
    text: {
      type: "string",
      default: "メニュー名を入力"
    },
    subText: {
      type: "string"
    },
    link: {
      type: "string"
    },
    mediaId: {
      type: "number",
      default: 0
    },
    mediaUrl: {
      type: "string",
      default: ""
    },
    thumbnailUrl: {
      type: "string",
      default: ""
    },
    thumbnailSrcset: {
      type: "string",
      default: ""
    },
    thumbnailSizes: {
      type: "string",
      default: ""
    },
    thumbnailAlt: {
      type: "string",
      default: ""
    },
    toggleAnotherTab: {
      type: "boolean",
      default: false
    },
    columnSelect: {
      type: "string"
    },
    itemRatio: {
      type: "string"
    },
    itemText: {
      type: "string"
    },
    textDesign: {
      type: "string"
    },
    textColor: {
      type: "string",
      default: JINR_VAR.text_color
    },
    textBgColor: {
      type: "string"
    },
    filterOpacity: {
      type: "number"
    },
    filterDisplay: {
      type: "string"
    },
    filterColor: {
      type: "string"
    },
    pageTemplate: {
      type: "string"
    }
  },
  edit: function edit(props) {
    var clientId = props.clientId,
      attributes = props.attributes,
      setAttributes = props.setAttributes;
    var parents = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__["select"])("core/block-editor").getBlockParents(clientId);
    var parent = parents.length !== 0 ? parents.slice(-1)[0] : parents[0];
    var parentAttributes = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__["select"])("core/block-editor").getBlockAttributes(parent);
    var text = attributes.text,
      subText = attributes.subText,
      link = attributes.link,
      mediaId = attributes.mediaId,
      mediaUrl = attributes.mediaUrl,
      thumbnailAlt = attributes.thumbnailAlt,
      thumbnailUrl = attributes.thumbnailUrl,
      thumbnailSizes = attributes.thumbnailSizes,
      thumbnailSrcset = attributes.thumbnailSrcset,
      toggleAnotherTab = attributes.toggleAnotherTab;
    var columnSelect = parentAttributes.columnSelect,
      radioSpColumn = parentAttributes.radioSpColumn,
      itemRatio = parentAttributes.itemRatio,
      itemText = parentAttributes.itemText,
      textDesign = parentAttributes.textDesign,
      textColor = parentAttributes.textColor,
      textBgColor = parentAttributes.textBgColor,
      filterDisplay = parentAttributes.filterDisplay,
      filterColor = parentAttributes.filterColor,
      filterOpacity = parentAttributes.filterOpacity,
      pageTemplate = parentAttributes.pageTemplate;
    var onChangeText = function onChangeText(newValue) {
      setAttributes({
        text: newValue
      });
    };
    var onChangeSubText = function onChangeSubText(newValue) {
      setAttributes({
        subText: newValue
      });
    };
    var thumbnailSizesAttr = "";
    if (radioSpColumn == "2") {
      thumbnailSizesAttr += "(max-width:552px) 40vw,";
    } else {
      thumbnailSizesAttr += "(max-width:552px) 90vw,";
    }
    if (columnSelect == "4") {
      thumbnailSizesAttr += "100vw";
    } else if (columnSelect == "6") {
      thumbnailSizesAttr += "5vw";
    } else {
      thumbnailSizesAttr += "50vw";
    }
    setAttributes({
      thumbnailSizes: thumbnailSizesAttr
    });
    var onChangeLink = function onChangeLink(newValue) {
      setAttributes({
        link: newValue
      });
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default()({
        path: "/jinr/post_by_url?url=".concat(newValue)
      }).then(function (res) {
        if (mediaUrl !== "") {
          setAttributes({
            thumbnailUrl: mediaUrl
          });
        } else if (itemRatio == "1-1") {
          if (res.thumbnail_youtube_square) {
            setAttributes({
              thumbnailUrl: res.thumbnail_youtube_square ? res.thumbnail_youtube_square : "",
              thumbnailSrcset: "".concat(res.thumbnail_youtube_square, " 320w, ").concat(res.thumbnail_youtube_large, " 640w"),
              thumbnailSizes: thumbnailSizesAttr
            });
          } else if (res.thumbnail_square_url) {
            setAttributes({
              thumbnailUrl: res.thumbnail_square_url ? res.thumbnail_square_url : "",
              thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
              thumbnailSrcset: "".concat(res.thumbnail_square_url, " 320w, ").concat(res.thumbnail_full_url, " 640w"),
              thumbnailSizes: thumbnailSizesAttr
            });
          } else {
            setAttributes({
              thumbnailUrl: JINR_VAR.no_image,
              thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
              thumbnailSrcset: "".concat(JINR_VAR.no_image_small, " 320w, ").concat(JINR_VAR.no_image, " 640w"),
              thumbnailSizes: thumbnailSizesAttr
            });
          }
        } else {
          if (res.thumbnail_youtube_medium) {
            setAttributes({
              thumbnailUrl: res.thumbnail_youtube_medium ? res.thumbnail_youtube_medium : "",
              thumbnailSrcset: "".concat(res.thumbnail_youtube_small, " 320w, ").concat(res.thumbnail_youtube_medium, " 640w"),
              thumbnailSizes: thumbnailSizesAttr
            });
          } else if (res.thumbnail_url) {
            setAttributes({
              thumbnailUrl: res.thumbnail_url ? res.thumbnail_url : "",
              thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
              thumbnailSrcset: "".concat(res.thumbnail_small_url, " 320w, ").concat(res.thumbnail_url, " 640w"),
              thumbnailSizes: thumbnailSizesAttr
            });
          } else {
            setAttributes({
              thumbnailUrl: JINR_VAR.no_image,
              thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
              thumbnailSrcset: "".concat(JINR_VAR.no_image_small, " 320w, ").concat(JINR_VAR.no_image, " 640w"),
              thumbnailSizes: thumbnailSizesAttr
            });
          }
        }
      });
    };
    /**
     * 画像を置き換えでオリジナル画像を出力させる
     * srcsetとsizes属性も削除する
     */
    var onSelectMedia = function onSelectMedia(media) {
      setAttributes({
        mediaId: media.id,
        mediaUrl: media.url,
        thumbnailSrcset: "",
        thumbnailSizes: ""
      });
    };
    var onChangeToggleAnotherTab = function onChangeToggleAnotherTab(newValue) {
      setAttributes({
        toggleAnotherTab: newValue
      });
    };
    var onChangepageTemplate = function onChangepageTemplate(newValue) {
      setAttributes({
        pageTemplate: newValue
      });
    };
    var removeImage = function removeImage() {
      setAttributes({
        mediaId: 0,
        mediaUrl: ""
      });
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default()({
        path: "/jinr/post_by_url?url=".concat(link)
      }).then(function (res) {
        if (res.thumbnail_youtube_medium) {
          setAttributes({
            thumbnailUrl: res.thumbnail_youtube_medium ? res.thumbnail_youtube_medium : "",
            thumbnailSrcset: "".concat(res.thumbnail_youtube_small, " 320w, ").concat(res.thumbnail_youtube_medium, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        } else if (res.thumbnail_url) {
          setAttributes({
            thumbnailUrl: res.thumbnail_url ? res.thumbnail_url : "",
            thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
            thumbnailSrcset: "".concat(res.thumbnail_small_url, " 320w, ").concat(res.thumbnail_url, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        } else {
          setAttributes({
            thumbnailUrl: JINR_VAR.no_image,
            thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
            thumbnailSrcset: "".concat(JINR_VAR.no_image_small, " 320w, ").concat(JINR_VAR.no_image, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        }
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["PanelBody"], {
      title: "\u30EA\u30C3\u30C1\u30E1\u30CB\u30E5\u30FC\u30A2\u30A4\u30C6\u30E0\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "URL\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["URLInput"], {
      value: link,
      onChange: onChangeLink
    })), link && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u753B\u50CF\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, mediaUrl !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: mediaUrl
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: thumbnailUrl
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["MediaUploadCheck"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["MediaUpload"], {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: mediaId,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u7F6E\u304D\u63DB\u3048");
      }
    })), mediaId != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["MediaUploadCheck"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u5225\u30BF\u30D6\u3067\u958B\u304F"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
      label: toggleAnotherTab ? "ON" : "OFF",
      checked: toggleAnotherTab,
      onChange: onChangeToggleAnotherTab,
      className: "jinr-toggle"
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30B5\u30D6\u30C6\u30AD\u30B9\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: subText,
      onChange: onChangeSubText
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u30E1\u30A4\u30F3\u30C6\u30AD\u30B9\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["TextControl"], {
      value: text,
      onChange: onChangeText
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "o--richmenu-item",
      target: toggleAnotherTab === true && "_blank",
      rel: toggleAnotherTab === true && "noopener"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--richmenu-item-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-image"
    }, filterDisplay === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-filter",
      style: {
        background: filterColor,
        opacity: 1 - 0.01 * filterOpacity
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: mediaUrl !== "" ? mediaUrl : thumbnailUrl !== "" ? thumbnailUrl : JINR_VAR.no_image,
      width: pageTemplate === "template-full-width.php" ? columnSelect === "2" ? "442" : columnSelect === "3" ? itemRatio === "-unique1-1" ? "120" : "350" : columnSelect === "4" ? "263" : columnSelect === "6" ? "175" : "" : columnSelect === "2" ? "274" : columnSelect === "3" ? itemRatio === "-unique1-1" ? "75" : "218" : columnSelect === "4" ? "161" : columnSelect === "6" ? "171" : "",
      height: pageTemplate === "template-full-width.php" ? columnSelect === "2" ? itemRatio === "1-1" ? "442" : itemRatio === "4-3" ? "331" : itemRatio === "16-9" ? "232" : itemRatio === "5-2" ? "177" : "663" : columnSelect === "3" ? itemRatio === "1-1" ? "350" : itemRatio === "4-3" ? "262" : itemRatio === "16-9" ? "196" : itemRatio === "5-2" ? "140" : itemRatio === "-unique1-1" ? "120" : "525" : columnSelect === "4" ? itemRatio === "1-1" ? "263" : itemRatio === "4-3" ? "197" : itemRatio === "16-9" ? "148" : itemRatio === "5-2" ? "105" : "394" : columnSelect === "6" ? itemRatio === "1-1" ? "175" : itemRatio === "4-3" ? "131" : itemRatio === "16-9" ? "98" : itemRatio === "5-2" ? "70" : "262" : "" : columnSelect === "2" ? itemRatio === "1-1" ? "274" : itemRatio === "4-3" ? "205" : itemRatio === "16-9" ? "154" : itemRatio === "5-2" ? "110" : "411" : columnSelect === "3" ? itemRatio === "1-1" ? "218" : itemRatio === "4-3" ? "164" : itemRatio === "16-9" ? "123" : itemRatio === "5-2" ? "87" : itemRatio === "-unique1-1" ? "75" : "328" : columnSelect === "4" ? itemRatio === "1-1" ? "161" : itemRatio === "4-3" ? "121" : itemRatio === "16-9" ? "91" : itemRatio === "5-2" ? "64" : "241" : columnSelect === "6" ? itemRatio === "1-1" ? "171" : itemRatio === "4-3" ? "129" : itemRatio === "16-9" ? "97" : itemRatio === "5-2" ? "69" : "257" : "",
      alt: thumbnailAlt,
      srcset: thumbnailSrcset,
      sizes: thumbnailSizes
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--richmenu-contents ef",
      style: itemRatio !== "-unique1-1" ? textDesign === "1" ? {
        color: textColor,
        background: textBgColor
      } : textColor !== "" ? textColor !== JINR_VAR.text_color ? {
        color: textColor
      } : {} : {} : textColor !== "" ? textColor !== JINR_VAR.text_color ? {
        color: textColor
      } : {} : {}
    }, subText && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-subtext"
    }, subText), textDesign === "3" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-parts",
      style: {
        backgroundColor: textColor
      }
    }), textDesign === "4" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-parts",
      style: {
        backgroundColor: textColor
      }
    }), text && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-text d--bold"
    }, text)))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var text = attributes.text,
      subText = attributes.subText,
      link = attributes.link,
      mediaId = attributes.mediaId,
      mediaUrl = attributes.mediaUrl,
      thumbnailUrl = attributes.thumbnailUrl,
      thumbnailSrcset = attributes.thumbnailSrcset,
      thumbnailSizes = attributes.thumbnailSizes,
      thumbnailAlt = attributes.thumbnailAlt,
      columnSelect = attributes.columnSelect,
      radioSpColumn = attributes.radioSpColumn,
      itemRatio = attributes.itemRatio,
      itemText = attributes.itemText,
      textDesign = attributes.textDesign,
      textColor = attributes.textColor,
      textBgColor = attributes.textBgColor,
      filterDisplay = attributes.filterDisplay,
      filterColor = attributes.filterColor,
      filterOpacity = attributes.filterOpacity,
      pageTemplate = attributes.pageTemplate,
      toggleAnotherTab = attributes.toggleAnotherTab;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "o--richmenu-item",
      href: link,
      target: toggleAnotherTab === true && "_blank",
      rel: toggleAnotherTab === true && "noopener"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--richmenu-item-inner"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-image"
    }, filterDisplay === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-filter",
      style: {
        background: filterColor,
        opacity: 1 - 0.01 * filterOpacity
      }
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: mediaId !== 0 ? mediaUrl : thumbnailUrl !== "" ? thumbnailUrl : JINR_VAR.no_image,
      width: pageTemplate === "template-full-width.php" ? columnSelect === "2" ? "442" : columnSelect === "3" ? itemRatio === "-unique1-1" ? "120" : "350" : columnSelect === "4" ? "263" : columnSelect === "6" ? "175" : "" : columnSelect === "2" ? "274" : columnSelect === "3" ? itemRatio === "-unique1-1" ? "75" : "218" : columnSelect === "4" ? "161" : columnSelect === "6" ? "171" : "",
      height: pageTemplate === "template-full-width.php" ? columnSelect === "2" ? itemRatio === "1-1" ? "442" : itemRatio === "4-3" ? "331" : itemRatio === "16-9" ? "232" : itemRatio === "5-2" ? "177" : "663" : columnSelect === "3" ? itemRatio === "1-1" ? "350" : itemRatio === "4-3" ? "262" : itemRatio === "16-9" ? "196" : itemRatio === "5-2" ? "140" : itemRatio === "-unique1-1" ? "120" : "525" : columnSelect === "4" ? itemRatio === "1-1" ? "263" : itemRatio === "4-3" ? "197" : itemRatio === "16-9" ? "148" : itemRatio === "5-2" ? "105" : "394" : columnSelect === "6" ? itemRatio === "1-1" ? "175" : itemRatio === "4-3" ? "131" : itemRatio === "16-9" ? "98" : itemRatio === "5-2" ? "70" : "262" : "" : columnSelect === "2" ? itemRatio === "1-1" ? "274" : itemRatio === "4-3" ? "205" : itemRatio === "16-9" ? "154" : itemRatio === "5-2" ? "110" : "411" : columnSelect === "3" ? itemRatio === "1-1" ? "218" : itemRatio === "4-3" ? "164" : itemRatio === "16-9" ? "123" : itemRatio === "5-2" ? "87" : itemRatio === "-unique1-1" ? "75" : "328" : columnSelect === "4" ? itemRatio === "1-1" ? "161" : itemRatio === "4-3" ? "121" : itemRatio === "16-9" ? "91" : itemRatio === "5-2" ? "64" : "241" : columnSelect === "6" ? itemRatio === "1-1" ? "171" : itemRatio === "4-3" ? "129" : itemRatio === "16-9" ? "97" : itemRatio === "5-2" ? "69" : "257" : "",
      alt: thumbnailAlt,
      srcset: thumbnailSrcset,
      sizes: thumbnailSizes
    })), itemText === "on" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--richmenu-contents ef",
      style: itemRatio !== "-unique1-1" ? textDesign === "1" ? {
        color: textColor,
        background: textBgColor
      } : textColor !== "" ? textColor !== JINR_VAR.text_color ? {
        color: textColor
      } : {} : {} : textColor !== "" ? textColor !== JINR_VAR.text_color ? {
        color: textColor
      } : {} : {}
    }, subText && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-subtext"
    }, subText), textDesign === "3" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-parts",
      style: {
        backgroundColor: textColor
      }
    }), textDesign === "4" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-parts",
      style: {
        backgroundColor: textColor
      }
    }), text && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--richmenu-text d--bold"
    }, text))));
  }
}));

/***/ }),

/***/ "./src/blocks/syntaxhl.js":
/*!********************************!*\
  !*** ./src/blocks/syntaxhl.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_highliter_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-highliter.svg */ "./src/icons/jinr-highliter.svg");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_5__);







/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/syntax-hl", {
  title: "コード",
  description: "各プログラミング言語を見やすく表示させるブロックです。行数の表示にも対応しています。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_highliter_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  attributes: {
    content: {
      type: "string",
      default: ""
    },
    language: {
      type: "string",
      default: "html"
    },
    rowHeightSelect: {
      type: "radio",
      default: "auto"
    },
    rowHeightNum: {
      type: "number",
      default: 200
    },
    clientId: {
      type: "string"
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var content = attributes.content,
      language = attributes.language,
      showLineNumbers = attributes.showLineNumbers,
      rowHeightSelect = attributes.rowHeightSelect,
      rowHeightNum = attributes.rowHeightNum;

    // Example of a debounced onChange handler for better performance
    var onChangeContent = function onChangeContent(newValue) {
      return setAttributes({
        content: newValue
      });
    };
    var onChangeLanguage = function onChangeLanguage(newValue) {
      return setAttributes({
        language: newValue
      });
    };
    var onChangeRowHeightSelect = function onChangeRowHeightSelect(newValue) {
      return setAttributes({
        rowHeightSelect: newValue
      });
    };
    var onChangeRowHeightNum = function onChangeRowHeightNum(newValue) {
      return setAttributes({
        rowHeightNum: newValue
      });
    };
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["useEffect"])(function () {
      var preElement = document.querySelector(".b--jinr-highlighter[data-block-id=\"".concat(clientId, "\"] pre"));
      if (preElement) {
        window.Prism.highlightAll();
      }
    }, [language, content, clientId]);
    var updateClientId = Object(lodash__WEBPACK_IMPORTED_MODULE_5__["debounce"])(function () {
      setAttributes({
        clientId: clientId
      });
    }, 500);
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["useEffect"])(function () {
      updateClientId();
    }, [attributes, clientId]);
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u8868\u793A\u30A8\u30EA\u30A2\u306E\u9AD8\u3055"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: rowHeightSelect,
      options: [{
        label: "自動",
        value: "auto"
      }, {
        label: "数値指定",
        value: "manual"
      }],
      onChange: onChangeRowHeightSelect,
      className: "a--jinr-radio"
    })), rowHeightSelect === "manual" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u6570\u5024\u5165\u529B"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RangeControl"], {
      value: rowHeightNum,
      onChange: onChangeRowHeightNum,
      min: 100,
      max: 1000
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-highlighter d--highlighter-height-".concat(rowHeightSelect, " t--round ").concat(props.attributes.className == undefined ? "" : props.attributes.className),
      "data-block-id": clientId
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("pre", {
      className: "language-".concat(language, " line-numbers"),
      style: rowHeightSelect === "manual" ? {
        height: "".concat(rowHeightNum, "px")
      } : {}
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("code", null, content))), isSelected && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-settings o--highlighter-settings"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u8A00\u8A9E"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["SelectControl"], {
      value: language,
      options: [{
        label: "C",
        value: "c"
      }, {
        label: "C++",
        value: "cpp"
      }, {
        label: "C#",
        value: "csharp"
      }, {
        label: "Go",
        value: "go"
      }, {
        label: "HTML",
        value: "html"
      }, {
        label: "CSS",
        value: "css"
      }, {
        label: "Java",
        value: "java"
      }, {
        label: "JavaScript",
        value: "javascript"
      }, {
        label: "Kotlin",
        value: "kotlin"
      }, {
        label: "Lua",
        value: "lua"
      }, {
        label: "Objective-C",
        value: "objectivec"
      }, {
        label: "Perl",
        value: "perl"
      }, {
        label: "PHP",
        value: "php"
      }, {
        label: "Python",
        value: "python"
      }, {
        label: "R",
        value: "r"
      }, {
        label: "Ruby",
        value: "ruby"
      }, {
        label: "Scala",
        value: "scala"
      }, {
        label: "SQL",
        value: "sql"
      }, {
        label: "Swift",
        value: "swift"
      }, {
        label: "TypeScript",
        value: "typescript"
      }, {
        label: "VB.NET",
        value: "vbnet"
      }],
      onChange: onChangeLanguage
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30B3\u30FC\u30C9"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["TextareaControl"], {
      value: content,
      onChange: onChangeContent
    }))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var content = attributes.content,
      language = attributes.language,
      codeStyle = attributes.codeStyle,
      showLineNumbers = attributes.showLineNumbers,
      rowHeightSelect = attributes.rowHeightSelect,
      rowHeightNum = attributes.rowHeightNum,
      clientId = attributes.clientId;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-highlighter d--highlighter-height-".concat(rowHeightSelect, " t--round ").concat(props.attributes.className == undefined ? "" : props.attributes.className),
      "data-block-id": clientId
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("pre", {
      className: "language-".concat(language, " line-numbers"),
      style: rowHeightSelect === "manual" ? {
        height: "".concat(rowHeightNum, "px")
      } : {}
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("code", null, content)));
  }
}));

/***/ }),

/***/ "./src/blocks/tab.js":
/*!***************************!*\
  !*** ./src/blocks/tab.js ***!
  \***************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/toConsumableArray */ "./node_modules/@babel/runtime/helpers/toConsumableArray.js");
/* harmony import */ var _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _icons_jinr_tab_svg__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../icons/jinr-tab.svg */ "./src/icons/jinr-tab.svg");




function ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }
function _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default()(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }






var ALLOWED_BLOCKS = ["jinr-blocks/tabchild"];
Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_4__["registerBlockType"])("jinr-blocks/tab", {
  title: "タブブロック",
  category: "jinr-blocks",
  description: "タブ切り替えができるブロックです。",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_icons_jinr_tab_svg__WEBPACK_IMPORTED_MODULE_8__["ReactComponent"], null),
  attributes: {
    tabs: {
      type: "array",
      default: [{
        title: "タブタイトル"
      }, {
        title: "タブタイトル"
      }]
    },
    activeTabIndex: {
      type: "number",
      default: 0,
      source: "none"
    },
    blockID: {
      type: "string"
    },
    tabDesign: {
      type: "string",
      default: "d--tab-design1"
    },
    bgColor: {
      type: "string",
      default: "#ffffff"
    },
    textColor: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      clientId = props.clientId,
      isSelected = props.isSelected;
    var tabs = attributes.tabs,
      activeTabIndex = attributes.activeTabIndex,
      blockID = attributes.blockID,
      tabDesign = attributes.tabDesign,
      bgColor = attributes.bgColor,
      textColor = attributes.textColor;
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["useEffect"])(function () {
      setAttributes({
        blockID: clientId
      });
    }, [clientId]);
    var _useDispatch = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__["useDispatch"])("core/block-editor"),
      insertBlocks = _useDispatch.insertBlocks,
      removeBlocks = _useDispatch.removeBlocks,
      selectBlock = _useDispatch.selectBlock;
    var childBlocks = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_7__["useSelect"])(function (select) {
      return select("core/block-editor").getBlocks(clientId);
    }, [clientId]);
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["useEffect"])(function () {
      if (!childBlocks) return;
      var numChildBlocks = childBlocks.length;
      var numTabs = tabs.length;
      if (numChildBlocks < numTabs) {
        var newBlocks = [];
        for (var i = numChildBlocks; i < numTabs; i++) {
          var newBlock = wp.blocks.createBlock("jinr-blocks/tabchild");
          newBlocks.push(newBlock);
        }
        insertBlocks(newBlocks, undefined, clientId, false);
        selectBlock(clientId);
      } else if (numChildBlocks > numTabs) {
        var blocksToRemove = childBlocks.slice(numTabs).map(function (block) {
          return block.clientId;
        });
        removeBlocks(blocksToRemove, {
          selectPrevious: false
        });
        selectBlock(clientId);
      }
    }, [tabs, childBlocks.length]);
    var onChangetabDesign = function onChangetabDesign(newValue) {
      setAttributes({
        tabDesign: newValue
      });
    };
    var onChangeBgColor = function onChangeBgColor(newValue) {
      setAttributes({
        bgColor: newValue
      });
    };
    var onChangeTextColor = function onChangeTextColor(newValue) {
      setAttributes({
        textColor: newValue
      });
    };
    var allFavoriteColorPallet = Array(6).fill(null).map(function (_, i) {
      return {
        name: "\u304A\u6C17\u306B\u5165\u308A".concat(i + 1),
        color: JINR_VAR.jinr_favorite_color[i],
        slug: "jinr-favorite-color".concat(i + 1)
      };
    });
    var favoriteColorPallet = allFavoriteColorPallet.filter(function (v) {
      return v.color !== "";
    });
    var defaultColorPallet = [{
      name: "white",
      color: "#ffffff"
    }, {
      name: "ghostwhite",
      color: "#f8f8ff"
    }, {
      name: "azure",
      color: "#f2fdfd"
    }, {
      name: "ivory",
      color: "#fffcf0"
    }, {
      name: "cherry-blossom",
      color: "#fff5fa"
    }, {
      name: "pale-purple",
      color: "#f1f1fe"
    }, {
      name: "ultra-light-gray",
      color: "#d0d0d0"
    }, {
      name: "pale-blue",
      color: "#D2E9FD"
    }, {
      name: "pale-red",
      color: "#FBE3E6"
    }, {
      name: "pale-green",
      color: "#e8fce8"
    }, {
      name: "pale-brown",
      color: "#f7eee9"
    }, {
      name: "ultra-light-grayish-green",
      color: "#e9f2f0"
    }, {
      name: "テーマカラー",
      color: JINR_VAR.theme_color
    }, {
      name: "文字色",
      color: JINR_VAR.text_color
    }];
    var jinrColorPallet = defaultColorPallet.concat(favoriteColorPallet);
    var updateTabTitle = function updateTabTitle(index, newTitle) {
      var newTabs = tabs.map(function (tab) {
        return _objectSpread({}, tab);
      });
      newTabs[index].title = newTitle;
      setAttributes({
        tabs: newTabs
      });
    };
    var moveTab = function moveTab(fromIndex, toIndex) {
      if (toIndex < 0 || toIndex >= tabs.length) {
        return;
      }
      var newTabs = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(tabs);
      var temp = newTabs[fromIndex];
      newTabs[fromIndex] = newTabs[toIndex];
      newTabs[toIndex] = temp;
      setAttributes({
        tabs: newTabs
      });
      var blockToMove = childBlocks[fromIndex];
      wp.data.dispatch("core/block-editor").moveBlockToPosition(blockToMove.clientId, clientId, clientId, toIndex);
      var newActive = activeTabIndex;
      if (activeTabIndex === fromIndex) {
        newActive = toIndex;
      } else if (activeTabIndex === toIndex) {
        newActive = fromIndex;
      }
      setAttributes({
        activeTabIndex: newActive
      });
    };
    var onSelectTab = function onSelectTab(index) {
      setAttributes({
        activeTabIndex: index
      });
    };
    var addTab = function addTab() {
      var insertIndex = activeTabIndex + 1;
      var newTabs = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(tabs);
      var newTabTitle = "\u30BF\u30D6\u30BF\u30A4\u30C8\u30EB";
      newTabs.splice(insertIndex, 0, {
        title: newTabTitle
      });
      setAttributes({
        tabs: newTabs,
        activeTabIndex: insertIndex
      });
    };
    var removeTab = function removeTab() {
      if (tabs.length <= 1) return;
      var newTabs = _babel_runtime_helpers_toConsumableArray__WEBPACK_IMPORTED_MODULE_1___default()(tabs);
      newTabs.splice(activeTabIndex, 1);
      var newActiveIndex = activeTabIndex;
      if (newActiveIndex >= newTabs.length) {
        newActiveIndex = newTabs.length - 1;
      }
      setAttributes({
        tabs: newTabs,
        activeTabIndex: newActiveIndex
      });
    };

    // フォーカス中のタブインデックスを管理
    var _useState = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["useState"])(null),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState, 2),
      focusedTabIndex = _useState2[0],
      setFocusedTabIndex = _useState2[1];
    var dynamicStyles = "\n            [data-block=\"".concat(blockID, "\"] .o--tab-contents [data-type='jinr-blocks/tabchild']:nth-child(").concat(activeTabIndex + 1, ") {\n                display: block;\n            }\n            [data-block=\"").concat(blockID, "\"] .o--tab-contents [data-type='jinr-blocks/tabchild']:not(:nth-child(").concat(activeTabIndex + 1, ")) {\n                display: none;\n            }\n\t\t\t\t[data-block=\"").concat(blockID, "\"] .o--tab-contents {\n\t\t\t\t\tbackground-color: ").concat(tabDesign === "d--tab-design1" ? bgColor : "transparent", ";\n\t\t\t\t\tcolor: ").concat(textColor, " !important;\n\t\t\t\t}\n\t\t\t\t[data-block=\"").concat(blockID, "\"] .o--tab-contents * {\n\t\t\t\t\tcolor: ").concat(textColor, " !important;\n\t\t\t\t}\n        ");
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["PanelBody"], {
      title: "\u30C7\u30B6\u30A4\u30F3\u8A2D\u5B9A",
      initialOpen: true
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3\u30BF\u30A4\u30D7"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["RadioControl"], {
      selected: tabDesign,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("img", {
          src: JINR_VAR.image_path + "tab-basic.png"
        }),
        value: "d--tab-design1"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("img", {
          src: JINR_VAR.image_path + "tab-button.png"
        }),
        value: "d--tab-design2"
      }],
      onChange: onChangetabDesign,
      className: "a--jinr-radio-image"
    })), tabDesign == "d--tab-design1" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30B3\u30F3\u30C6\u30F3\u30C4\u5185\u306E\u80CC\u666F\u8272"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: !bgColor ? "#eeeeee" : bgColor,
      enableAlpha: true,
      onChange: onChangeBgColor
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["BaseControl"], {
      label: "\u30B3\u30F3\u30C6\u30F3\u30C4\u5185\u306E\u30C6\u30AD\u30B9\u30C8\u30AB\u30E9\u30FC"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ColorPalette"], {
      colors: jinrColorPallet,
      value: !textColor ? "#eeeeee" : textColor,
      enableAlpha: true,
      onChange: onChangeTextColor
    })))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "b--jinr-block b--jinr-tab ".concat(tabDesign, " d--tab-number").concat(activeTabIndex + 1)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "b--parent-select"
    }, "\u89AA\u30D6\u30ED\u30C3\u30AF\u3092\u9078\u629E"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--tab-wrapper"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--tab-titles"
    }, tabs.map(function (tab, index) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
        key: index,
        className: "c--tab-title ".concat(activeTabIndex === index ? "active" : ""),
        onClick: function onClick() {
          return onSelectTab(index);
        }
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["RichText"], {
        tagName: "div",
        value: tab.title,
        onChange: function onChange(newTitle) {
          return updateTabTitle(index, newTitle);
        },
        onFocus: function onFocus() {
          return setFocusedTabIndex(index);
        } // フォーカス時に状態更新
        ,
        placeholder: "\u30BF\u30D6\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B"
      }), isSelected && focusedTabIndex === index && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
        className: "o--tab-button-move"
      }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        icon: "no",
        onClick: function onClick(e) {
          e.stopPropagation();
          setAttributes({
            activeTabIndex: index
          });
          removeTab();
        },
        label: "\u30BF\u30D6\u3092\u524A\u9664",
        disabled: tabs.length === 1
      }), index > 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        icon: "arrow-left-alt2",
        onClick: function onClick(e) {
          e.stopPropagation();
          moveTab(index, index - 1);
        },
        label: "\u5DE6\u306B\u79FB\u52D5"
      }), index < tabs.length - 1 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        icon: "arrow-right-alt2",
        onClick: function onClick(e) {
          e.stopPropagation();
          moveTab(index, index + 1);
        },
        label: "\u53F3\u306B\u79FB\u52D5"
      }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        icon: "plus",
        onClick: function onClick(e) {
          e.stopPropagation();
          setAttributes({
            activeTabIndex: index
          });
          addTab();
        },
        label: "\u30BF\u30D6\u3092\u8FFD\u52A0"
      })));
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--tab-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["InnerBlocks"], {
      allowedBlocks: ALLOWED_BLOCKS,
      template: tabs.map(function () {
        return ["jinr-blocks/tabchild"];
      }),
      templateLock: false
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("style", null, dynamicStyles)));
  },
  save: function save(_ref) {
    var attributes = _ref.attributes;
    var tabs = attributes.tabs,
      blockID = attributes.blockID,
      tabDesign = attributes.tabDesign,
      bgColor = attributes.bgColor,
      textColor = attributes.textColor;
    var finalTextColor = textColor || JINR_VAR.text_color;
    var inlineStyle = "\n\t\t\t.block-".concat(blockID, " .o--tab-contents {\n\t\t\t\tbackground-color: ").concat(tabDesign === "d--tab-design1" ? bgColor : "transparent", ";\n\t\t\t\tcolor: ").concat(finalTextColor, " !important;\n\t\t\t}\n\t\t\t.block-").concat(blockID, " .o--tab-contents * {\n\t\t\t\tcolor: ").concat(finalTextColor, " !important;\n\t\t\t}\n\t\t");
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "b--jinr-block b--jinr-tab block-".concat(blockID, " ").concat(tabDesign, " d--tab-number1")
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--tab-wrapper"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--tab-titles"
    }, tabs.map(function (tab, index) {
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
        key: index,
        className: "c--tab-title ".concat(index === 0 ? "active" : "")
      }, tab.title);
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("div", {
      className: "o--tab-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_5__["InnerBlocks"].Content, null)), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_3__["createElement"])("style", null, inlineStyle));
  }
});

/***/ }),

/***/ "./src/blocks/tabchild.js":
/*!********************************!*\
  !*** ./src/blocks/tabchild.js ***!
  \********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _icons_jinr_iconbox_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../icons/jinr-iconbox.svg */ "./src/icons/jinr-iconbox.svg");

// tabchild.js



Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/tabchild", {
  title: "タブ子ブロック",
  parent: ["jinr-blocks/tab"],
  category: "jinr-blocks",
  description: "JIN:Rタブブロック専用ブロック",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_iconbox_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  supports: {
    html: false
  },
  edit: function edit(props) {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--tab-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"], {
      template: [["core/paragraph"]]
    }));
  },
  save: function save() {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--tab-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"].Content, null));
  }
});

/***/ }),

/***/ "./src/blocks/timeline.js":
/*!********************************!*\
  !*** ./src/blocks/timeline.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _icons_jinr_timeline_svg__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../icons/jinr-timeline.svg */ "./src/icons/jinr-timeline.svg");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! lodash */ "lodash");
/* harmony import */ var lodash__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(lodash__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_6__);





var Fragment = wp.element.Fragment;
var _wp$data = wp.data,
  select = _wp$data.select,
  subscribe = _wp$data.subscribe,
  dispatch = _wp$data.dispatch;
var ALLOWED_BLOCKS = ["jinr-blocks/timelinechild"];



/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/timeline", {
  title: "タイムライン",
  description: "ステップ式の解説や手順などを説明するときに便利なブロックです。動きのあるビジュアルになるため、動線を作りたいときにも活用できます。",
  category: "jinr-blocks",
  icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_icons_jinr_timeline_svg__WEBPACK_IMPORTED_MODULE_2__["ReactComponent"], null),
  attributes: {
    timelineType: {
      type: "string",
      default: "text"
    },
    timelineDesign: {
      type: "string",
      default: "1"
    },
    timelineShadowDisplay: {
      type: "string",
      default: "on"
    },
    timelineStepDisplay: {
      type: "string",
      default: "default"
    },
    timelineLabelTag: {
      type: "string",
      default: "div"
    },
    timelineLinkText: {
      type: "string",
      default: "Read More"
    },
    pageTemplate: {
      type: "string",
      default: ""
    }
  },
  edit: function edit(props) {
    var attributes = props.attributes,
      setAttributes = props.setAttributes,
      isSelected = props.isSelected,
      clientId = props.clientId;
    var timelineType = attributes.timelineType,
      timelineDesign = attributes.timelineDesign,
      timelineShadowDisplay = attributes.timelineShadowDisplay,
      timelineStepDisplay = attributes.timelineStepDisplay,
      timelineLabelTag = attributes.timelineLabelTag,
      timelineLinkText = attributes.timelineLinkText,
      pageTemplate = attributes.pageTemplate;
    var updateChildAttributes = Object(lodash__WEBPACK_IMPORTED_MODULE_5__["debounce"])(function () {
      var children = select("core/block-editor").getBlocksByClientId(clientId)[0].innerBlocks;
      children.forEach(function (child) {
        return dispatch("core/block-editor").updateBlockAttributes(child.clientId, attributes);
      });
    }, 500);
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["useEffect"])(function () {
      updateChildAttributes();
    }, [attributes, clientId]);
    var onChangeTimelineType = function onChangeTimelineType(newValue) {
      setAttributes({
        timelineType: newValue
      });
    };
    var onChangeTimelineDesign = function onChangeTimelineDesign(newValue) {
      setAttributes({
        timelineDesign: newValue
      });
    };
    var onChangeTimelineShadowDisplay = function onChangeTimelineShadowDisplay(newValue) {
      setAttributes({
        timelineShadowDisplay: newValue
      });
    };
    var onChangeTimelineStepDisplay = function onChangeTimelineStepDisplay(newValue) {
      setAttributes({
        timelineStepDisplay: newValue
      });
    };
    var onChangeTimelineLabelTag = function onChangeTimelineLabelTag(newValue) {
      setAttributes({
        timelineLabelTag: newValue
      });
    };
    var onChangeTimelineLinkText = function onChangeTimelineLinkText(newValue) {
      setAttributes({
        timelineLinkText: newValue
      });
    };
    var onChangePageTemplate = function onChangePageTemplate(newValue) {
      setAttributes({
        pageTemplate: newValue
      });
    };
    var template = null;
    subscribe(function () {
      var newTemplate = select("core/editor").getEditedPostAttribute("template");
      if (newTemplate !== undefined && template === null) {
        template = newTemplate;
      }
      if (newTemplate !== undefined && newTemplate !== template) {
        template = newTemplate;
        onChangePageTemplate(newTemplate);
      }
    });
    var SET_TEMPLATE = [["jinr-blocks/timelinechild", {}], ["jinr-blocks/timelinechild", {}], ["jinr-blocks/timelinechild", {}]];
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u57FA\u672C\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30BF\u30A4\u30D7"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: timelineType,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "timeline-text.png"
        }),
        value: "text"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "timeline-article.png"
        }),
        value: "post"
      }],
      onChange: onChangeTimelineType,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30C7\u30B6\u30A4\u30F3"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: timelineDesign,
      options: [{
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "timeline-basic.png"
        }),
        value: "1"
      }, {
        label: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
          src: JINR_VAR.image_path + "timeline-riverflow.png"
        }),
        value: "2"
      }],
      onChange: onChangeTimelineDesign,
      className: "a--jinr-radio-image"
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "STEP\u306E\u30C6\u30AD\u30B9\u30C8\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: timelineStepDisplay,
      options: [{
        label: "デフォルト",
        value: "default"
      }, {
        label: "個別入力",
        value: "original"
      }, {
        label: "非表示",
        value: "off"
      }],
      onChange: onChangeTimelineStepDisplay,
      className: "a--jinr-radio"
    })), timelineType === "post" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u753B\u50CF\u306B\u5F71\u3092\u3064\u3051\u308B"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: timelineShadowDisplay,
      options: [{
        label: "ON",
        value: "on"
      }, {
        label: "OFF",
        value: "off"
      }],
      onChange: onChangeTimelineShadowDisplay,
      className: "a--jinr-radio"
    })), timelineType === "post" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u30EA\u30F3\u30AF\u306E\u30C6\u30AD\u30B9\u30C8"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["TextControl"], {
      value: timelineLinkText,
      onChange: onChangeTimelineLinkText
    }))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["PanelBody"], {
      title: "\u5FDC\u7528\u8A2D\u5B9A",
      initialOpen: false
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["BaseControl"], {
      label: "\u5404\u30BF\u30A4\u30E0\u30E9\u30A4\u30F3\u306E\u30BF\u30B0"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["RadioControl"], {
      selected: timelineLabelTag,
      options: [{
        label: "div",
        value: "div"
      }, {
        label: "h3",
        value: "h3"
      }],
      onChange: onChangeTimelineLabelTag,
      className: "a--jinr-radio"
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-timeline d--timeline-type-".concat(timelineType, " d--timeline-design").concat(timelineDesign, " d--timeline-step-").concat(timelineStepDisplay, "\n\t\t\t\t").concat(timelineShadowDisplay === "on" && "d--timeline-img-shadow", " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "b--parent-select"
    }, "\u89AA\u30D6\u30ED\u30C3\u30AF\u3092\u9078\u629E"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--timeline-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InnerBlocks"], {
      allowedBlocks: ALLOWED_BLOCKS,
      template: SET_TEMPLATE
    }))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var timelineType = attributes.timelineType,
      timelineDesign = attributes.timelineDesign,
      timelineShadowDisplay = attributes.timelineShadowDisplay,
      timelineStepDisplay = attributes.timelineStepDisplay,
      timelineLabelTag = attributes.timelineLabelTag,
      timelineLinkText = attributes.timelineLinkText;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "b--jinr-block b--jinr-timeline d--timeline-type-".concat(timelineType, " d--timeline-design").concat(timelineDesign, " d--timeline-step-").concat(timelineStepDisplay, "\n\t\t\t").concat(timelineShadowDisplay === "on" && "d--timeline-img-shadow", " ").concat(props.attributes.className == undefined ? "" : props.attributes.className)
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "o--timeline-list"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["InnerBlocks"].Content, null)));
  }
}));

/***/ }),

/***/ "./src/blocks/timelinechild.js":
/*!*************************************!*\
  !*** ./src/blocks/timelinechild.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/data */ "@wordpress/data");
/* harmony import */ var _wordpress_data__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/api-fetch */ "@wordpress/api-fetch");
/* harmony import */ var _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__);






var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState,
  useRef = _wp$element.useRef;
var _wp$blockEditor = wp.blockEditor,
  MediaUpload = _wp$blockEditor.MediaUpload,
  MediaUploadCheck = _wp$blockEditor.MediaUploadCheck,
  RichText = _wp$blockEditor.RichText;
/* harmony default export */ __webpack_exports__["default"] = (Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])("jinr-blocks/timelinechild", {
  title: "タイムラインアイテム",
  parent: ["jinr-blocks/timeline"],
  category: "jinr-blocks",
  icon: "admin-home",
  attributes: {
    itemLabel: {
      type: "array",
      source: "children",
      selector: ".a--timeline-label"
    },
    content: {
      type: "array",
      source: "children",
      selector: ".a--timeline-text"
    },
    stepText: {
      type: "string",
      source: "html",
      selector: ".a--timeline-step-original"
    },
    link: {
      type: "string"
    },
    mediaId: {
      type: "number",
      default: 0
    },
    mediaUrl: {
      type: "string",
      default: ""
    },
    thumbnailUrl: {
      type: "string",
      default: ""
    },
    thumbnailSrcset: {
      type: "string",
      default: ""
    },
    thumbnailSizes: {
      type: "string",
      default: ""
    },
    toggleAnotherTab: {
      type: "boolean",
      default: false
    },
    timelineType: {
      type: "string",
      default: "text"
    },
    timelineStepDisplay: {
      type: "string",
      default: "default"
    },
    timelineLabelTag: {
      type: "string",
      default: "div"
    },
    timelineLinkText: {
      type: "string",
      default: "Read More"
    }
  },
  edit: function edit(props) {
    var clientId = props.clientId,
      attributes = props.attributes,
      setAttributes = props.setAttributes,
      onReplace = props.onReplace,
      onRemove = props.onRemove;
    var parents = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__["select"])("core/block-editor").getBlockParents(clientId);
    var parent = parents.length !== 0 ? parents.slice(-1)[0] : parents[0];
    var parentAttributes = Object(_wordpress_data__WEBPACK_IMPORTED_MODULE_3__["select"])("core/block-editor").getBlockAttributes(parent);
    var itemLabel = attributes.itemLabel,
      content = attributes.content,
      stepText = attributes.stepText,
      link = attributes.link,
      mediaId = attributes.mediaId,
      mediaUrl = attributes.mediaUrl,
      thumbnailUrl = attributes.thumbnailUrl,
      thumbnailSrcset = attributes.thumbnailSrcset,
      thumbnailSizes = attributes.thumbnailSizes,
      toggleAnotherTab = attributes.toggleAnotherTab;
    var timelineType = parentAttributes.timelineType,
      timelineStepDisplay = parentAttributes.timelineStepDisplay,
      timelineLabelTag = parentAttributes.timelineLabelTag,
      timelineLinkText = parentAttributes.timelineLinkText,
      pageTemplate = parentAttributes.pageTemplate;
    var mainRef = useRef(null);
    var subRef = useRef(null);
    var innerRef = useRef(null);
    var onChangeItemLabel = function onChangeItemLabel(newValue) {
      setAttributes({
        itemLabel: newValue
      });
    };
    var onChangeContent = function onChangeContent(newValue) {
      setAttributes({
        content: newValue
      });
    };
    var onChangeToggleAnotherTab = function onChangeToggleAnotherTab(newValue) {
      setAttributes({
        toggleAnotherTab: newValue
      });
    };
    var onChangeStepText = function onChangeStepText(newValue) {
      setAttributes({
        stepText: newValue
      });
    };
    var thumbnailSizesAttr = "";
    if (timelineType == "post") {
      thumbnailSizesAttr = "(max-width:552px) 90vw, 640px";
    }
    setAttributes({
      thumbnailSizes: thumbnailSizesAttr
    });
    var onChangeLink = function onChangeLink(newValue) {
      setAttributes({
        link: newValue
      });
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default()({
        path: "/jinr/post_by_url?url=".concat(newValue)
      }).then(function (res) {
        if (res.thumbnail_youtube_medium) {
          setAttributes({
            thumbnailUrl: res.thumbnail_youtube_medium ? res.thumbnail_youtube_medium : "",
            thumbnailSrcset: "".concat(res.thumbnail_youtube_small, " 320w, ").concat(res.thumbnail_youtube_medium, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        } else if (res.thumbnail_url) {
          setAttributes({
            thumbnailUrl: res.thumbnail_url ? res.thumbnail_url : "",
            thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
            thumbnailSrcset: "".concat(res.thumbnail_small_url, " 320w, ").concat(res.thumbnail_url, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        } else {
          setAttributes({
            thumbnailUrl: JINR_VAR.no_image,
            thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
            thumbnailSrcset: "".concat(res.thumbnail_small_url, " 320w, ").concat(res.thumbnail_url, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        }
      });
    };
    var onSelectMedia = function onSelectMedia(media) {
      setAttributes({
        mediaId: media.id,
        mediaUrl: media.url,
        thumbnailSizes: "",
        thumbnailSrcset: ""
      });
    };
    var removeImage = function removeImage() {
      setAttributes({
        mediaId: 0,
        mediaUrl: ""
      });
      _wordpress_api_fetch__WEBPACK_IMPORTED_MODULE_4___default()({
        path: "/jinr/post_by_url?url=".concat(link)
      }).then(function (res) {
        if (res.thumbnail_youtube_medium) {
          setAttributes({
            thumbnailUrl: res.thumbnail_youtube_medium ? res.thumbnail_youtube_medium : "",
            thumbnailSrcset: "".concat(res.thumbnail_youtube_small, " 320w, ").concat(res.thumbnail_youtube_medium, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        } else if (res.thumbnail_url) {
          setAttributes({
            thumbnailUrl: res.thumbnail_url ? res.thumbnail_url : "",
            thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
            thumbnailSrcset: "".concat(res.thumbnail_small_url, " 320w, ").concat(res.thumbnail_url, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        } else {
          setAttributes({
            thumbnailUrl: JINR_VAR.no_image,
            thumbnailAlt: res.thumbnail_alt ? res.thumbnail_alt : "",
            thumbnailSrcset: "".concat(res.thumbnail_small_url, " 320w, ").concat(res.thumbnail_url, " 640w"),
            thumbnailSizes: thumbnailSizesAttr
          });
        }
      });
    };
    var onChangePageTemplate = function onChangePageTemplate(newValue) {
      setAttributes({
        pageTemplate: newValue
      });
    };
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("section", {
      className: "o--jinr-inspector"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["PanelBody"], {
      title: "\u30BF\u30A4\u30E0\u30E9\u30A4\u30F3\u30A2\u30A4\u30C6\u30E0\u8A2D\u5B9A"
    }, timelineType === "post" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "URL\u8A2D\u5B9A"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["URLInput"], {
      value: link,
      onChange: onChangeLink
    })), timelineType === "post" && link && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u753B\u50CF\u5909\u66F4"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image"
    }, mediaUrl !== "" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: mediaUrl
    }) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: thumbnailUrl
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--fullwidth-image-button"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUpload, {
      allowedTypes: ["image"],
      onSelect: onSelectMedia,
      value: mediaId,
      render: function render(_ref) {
        var open = _ref.open;
        return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["Button"], {
          onClick: open
        }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("i", {
          class: "jif jin-ifont-photo"
        }), "\u753B\u50CF\u3092\u9078\u629E");
      }
    })), mediaId != 0 && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(MediaUploadCheck, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["Button"], {
      onClick: removeImage,
      isLink: true,
      isDestructive: true,
      className: "removeImage"
    }, "\u524A\u9664")))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["BaseControl"], {
      label: "\u5225\u30BF\u30D6\u3067\u958B\u304F"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_5__["ToggleControl"], {
      label: toggleAnotherTab ? "ON" : "OFF",
      checked: toggleAnotherTab,
      onChange: onChangeToggleAnotherTab,
      className: "jinr-toggle"
    }))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-heading"
    }, timelineStepDisplay === "default" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-step ef"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--timeline-step-text"
    })), timelineStepDisplay === "original" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      tagName: "div",
      className: "a--timeline-step-original ef",
      value: stepText,
      onChange: onChangeStepText,
      placeholder: "\u30E9\u30D9\u30EB\u3092\u5165\u529B"
    }), timelineStepDisplay === "off" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-step ef"
    }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      tagName: timelineLabelTag === "div" ? "div" : "h3",
      className: "a--timeline-label d--bold",
      value: itemLabel,
      onChange: onChangeItemLabel,
      placeholder: "\u30BF\u30A4\u30C8\u30EB\u3092\u5165\u529B"
    })), timelineType === "text" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"], null)) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-contents-post"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--timeline-post-link",
      target: toggleAnotherTab === true && "_blank",
      rel: toggleAnotherTab === true && "noopener"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: mediaId !== 0 ? mediaUrl : thumbnailUrl !== "" ? thumbnailUrl : JINR_VAR.no_image,
      width: pageTemplate === "template-full-width.php" ? "300" : "218",
      height: pageTemplate === "template-full-width.php" ? "169" : "126",
      srcset: thumbnailSrcset,
      sizes: thumbnailSizes
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-text-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(RichText, {
      tagName: "div",
      className: "a--timeline-text",
      value: content,
      onChange: onChangeContent,
      placeholder: "\u30C6\u30AD\u30B9\u30C8\u3092\u5165\u529B"
    }), timelineType === "post" && timelineLinkText && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--timeline-link-text ef",
      target: toggleAnotherTab === true && "_blank",
      rel: toggleAnotherTab === true && "noopener"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, timelineLinkText))))));
  },
  save: function save(props) {
    var attributes = props.attributes;
    var itemLabel = attributes.itemLabel,
      content = attributes.content,
      stepText = attributes.stepText,
      link = attributes.link,
      mediaId = attributes.mediaId,
      mediaUrl = attributes.mediaUrl,
      thumbnailUrl = attributes.thumbnailUrl,
      thumbnailSrcset = attributes.thumbnailSrcset,
      thumbnailSizes = attributes.thumbnailSizes,
      toggleAnotherTab = attributes.toggleAnotherTab,
      timelineType = attributes.timelineType,
      timelineStepDisplay = attributes.timelineStepDisplay,
      timelineLabelTag = attributes.timelineLabelTag,
      timelineLinkText = attributes.timelineLinkText,
      pageTemplate = attributes.pageTemplate;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-item"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-heading"
    }, timelineStepDisplay === "default" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-step ef"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", {
      className: "a--timeline-step-text"
    })), timelineStepDisplay === "original" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-step-original ef"
    }, stepText), timelineStepDisplay === "off" && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-step ef"
    }), timelineLabelTag === "div" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-label d--bold"
    }, itemLabel) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
      className: "a--timeline-label d--bold"
    }, itemLabel)), timelineType === "text" ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-contents"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-text"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InnerBlocks"].Content, null))) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "c--timeline-contents-post"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--timeline-post-link",
      href: link,
      target: toggleAnotherTab === true && "_blank",
      rel: toggleAnotherTab === true && "noopener"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("img", {
      src: mediaId !== 0 ? mediaUrl : thumbnailUrl !== "" ? thumbnailUrl : JINR_VAR.no_image,
      width: pageTemplate === "template-full-width.php" ? "300" : "218",
      height: pageTemplate === "template-full-width.php" ? "169" : "126",
      srcset: thumbnailSrcset,
      sizes: thumbnailSizes
    })), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-text-container"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
      className: "a--timeline-text"
    }, content), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      className: "a--timeline-link-text ef",
      href: link,
      target: toggleAnotherTab === true && "_blank",
      rel: toggleAnotherTab === true && "noopener"
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, timelineLinkText)))));
  }
}));

/***/ }),

/***/ "./src/format.js":
/*!***********************!*\
  !*** ./src/format.js ***!
  \***********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/rich-text */ "@wordpress/rich-text");
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _icons_jinr_icon_svg__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./icons/jinr-icon.svg */ "./src/icons/jinr-icon.svg");
/* harmony import */ var _SelectIcon__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./SelectIcon */ "./src/SelectIcon.js");







var _wp$element = wp.element,
  Fragment = _wp$element.Fragment,
  useState = _wp$element.useState;
var name = "jinr/insert-jin-icon";
var IconButton = function IconButton(props) {
  var prevValue = props.prevValue,
    handleChange = props.handleChange;
  var _useState = useState(false),
    _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState, 2),
    isOpen = _useState2[0],
    setIsOpen = _useState2[1];
  var closeModel = function closeModel(bool) {
    setIsOpen(bool);
  };
  var onChangeIcon = function onChangeIcon(value) {
    var newValue = Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_2__["create"])({
      html: '<span class="jin-icons in--p jin-ifont-' + value + '"></span>'
    });
    var insertedValue = Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_2__["insert"])(prevValue, newValue);
    handleChange(insertedValue);
  };
  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["ToolbarButton"], {
    icon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_icon_svg__WEBPACK_IMPORTED_MODULE_5__["ReactComponent"], null),
    title: "JIN\u30A2\u30A4\u30B3\u30F3",
    onClick: function onClick() {
      return setIsOpen(true);
    }
  }), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_SelectIcon__WEBPACK_IMPORTED_MODULE_6__["default"], {
    isOpen: isOpen,
    closeModal: closeModel,
    onChangeIcon: onChangeIcon
  }));
};
Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_2__["registerFormatType"])(name, {
  title: "Insert JIN Icon",
  tagName: "i",
  className: null,
  edit: function edit(_ref) {
    var value = _ref.value,
      onChange = _ref.onChange;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(Fragment, null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_3__["BlockFormatControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_4__["Toolbar"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(IconButton, {
      prevValue: value,
      handleChange: onChange
    }))));
  }
});

/***/ }),

/***/ "./src/icons/jinr-accordion.svg":
/*!**************************************!*\
  !*** ./src/icons/jinr-accordion.svg ***!
  \**************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrAccordion; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _rect, _path2, _path3;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrAccordion(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-accordion_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-accordion_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-accordion_svg__cls-1",
    d: "M86.5 47.5h-73A4.51 4.51 0 009 52v34.5a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5V52a4.51 4.51 0 00-4.5-4.5zM86 86H14V52.5h72z"
  })), _rect || (_rect = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("rect", {
    className: "jinr-accordion_svg__cls-1",
    x: 62.5,
    y: 57.33,
    width: 17.5,
    height: 5.83,
    rx: 1.46
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-accordion_svg__cls-1",
    d: "M86.5 9h-73A4.51 4.51 0 009 13.5V38a4.51 4.51 0 004.5 4.5h73A4.51 4.51 0 0091 38V13.5A4.51 4.51 0 0086.5 9zM86 37.5H14V14h72z"
  })), _path3 || (_path3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-accordion_svg__cls-1",
    d: "M64 28.67h4.37V33a1.46 1.46 0 001.46 1.46h2.92A1.46 1.46 0 0074.17 33v-4.33h4.37A1.46 1.46 0 0080 27.21v-2.92a1.46 1.46 0 00-1.46-1.46h-4.37v-4.37A1.46 1.46 0 0072.71 17h-2.92a1.46 1.46 0 00-1.46 1.46v4.37H64a1.46 1.46 0 00-1.46 1.46v2.92A1.46 1.46 0 0064 28.67z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsNDcuNWgtNzNBNC41MSw0LjUxLDAsMCwwLDksNTJWODYuNUE0LjUxLDQuNTEsMCwwLDAsMTMuNSw5MWg3M0E0LjUxLDQuNTEsMCwwLDAsOTEsODYuNVY1MkE0LjUxLDQuNTEsMCwwLDAsODYuNSw0Ny41Wk04Niw4NkgxNFY1Mi41SDg2WiIvPjxyZWN0IGNsYXNzPSJjbHMtMSIgeD0iNjIuNSIgeT0iNTcuMzMiIHdpZHRoPSIxNy41IiBoZWlnaHQ9IjUuODMiIHJ4PSIxLjQ2Ii8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODYuNSw5aC03M0E0LjUxLDQuNTEsMCwwLDAsOSwxMy41VjM4YTQuNTEsNC41MSwwLDAsMCw0LjUsNC41aDczQTQuNTEsNC41MSwwLDAsMCw5MSwzOFYxMy41QTQuNTEsNC41MSwwLDAsMCw4Ni41LDlaTTg2LDM3LjVIMTRWMTRIODZaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjQsMjguNjdoNC4zN1YzM2ExLjQ2LDEuNDYsMCwwLDAsMS40NiwxLjQ2aDIuOTJBMS40NiwxLjQ2LDAsMCwwLDc0LjE3LDMzVjI4LjY3aDQuMzdBMS40NiwxLjQ2LDAsMCwwLDgwLDI3LjIxVjI0LjI5YTEuNDYsMS40NiwwLDAsMC0xLjQ2LTEuNDZINzQuMTdWMTguNDZBMS40NiwxLjQ2LDAsMCwwLDcyLjcxLDE3SDY5Ljc5YTEuNDYsMS40NiwwLDAsMC0xLjQ2LDEuNDZ2NC4zN0g2NGExLjQ2LDEuNDYsMCwwLDAtMS40NiwxLjQ2djIuOTJBMS40NiwxLjQ2LDAsMCwwLDY0LDI4LjY3WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-articlelist.svg":
/*!****************************************!*\
  !*** ./src/icons/jinr-articlelist.svg ***!
  \****************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrArticlelist; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2, _path3;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrArticlelist(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-articlelist_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-articlelist_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-articlelist_svg__cls-1",
    d: "M67.5 51h-24a2.37 2.37 0 000 4.73h24a2.37 2.37 0 000-4.73zM67.5 62.67h-24a2.37 2.37 0 000 4.73h24a2.37 2.37 0 000-4.73zM67.5 39.41h-24a2.37 2.37 0 000 4.73h24a2.37 2.37 0 000-4.73z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-articlelist_svg__cls-1",
    d: "M82.36 28.21v-.17a3.07 3.07 0 00-.17-.31l-.06-.12a2.85 2.85 0 00-.31-.38L64.27 9.73a2.85 2.85 0 00-.38-.31l-.12-.06a3.07 3.07 0 00-.31-.17h-.16a2.8 2.8 0 00-.3-.14 2.63 2.63 0 00-.5-.05H33.09a4.6 4.6 0 00-4.59 4.59v61.87A4.51 4.51 0 0033 80h44.91a4.6 4.6 0 004.59-4.59V29a2.13 2.13 0 00-.14-.79zM65 17.54l9 9h-9zM33.5 75V14H60v12.49a5 5 0 005 5h12.5V75z"
  })), _path3 || (_path3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-articlelist_svg__cls-1",
    d: "M70 86H22.5V21.5a2.5 2.5 0 00-5 0v65A4.51 4.51 0 0022 91h48a2.5 2.5 0 000-5z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTY3LjUsNTFoLTI0YTIuMzcsMi4zNywwLDAsMCwwLDQuNzNoMjRhMi4zNywyLjM3LDAsMCwwLDAtNC43M1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik02Ny41LDYyLjY3aC0yNGEyLjM3LDIuMzcsMCwwLDAsMCw0LjczaDI0YTIuMzcsMi4zNywwLDAsMCwwLTQuNzNaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjcuNSwzOS40MWgtMjRhMi4zNywyLjM3LDAsMCwwLDAsNC43M2gyNGEyLjM3LDIuMzcsMCwwLDAsMC00LjczWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTgyLjM2LDI4LjIxYzAtLjA2LDAtLjEyLDAtLjE3YTMuMDcsMy4wNywwLDAsMC0uMTctLjMxbC0uMDYtLjEyYTIuODUsMi44NSwwLDAsMC0uMzEtLjM4TDY0LjI3LDkuNzNhMi44NSwyLjg1LDAsMCwwLS4zOC0uMzFsLS4xMi0uMDZhMy4wNywzLjA3LDAsMCwwLS4zMS0uMTdsLS4xNiwwQTIuOCwyLjgsMCwwLDAsNjMsOS4wNSwyLjYzLDIuNjMsMCwwLDAsNjIuNSw5SDMzLjA5YTQuNiw0LjYsMCwwLDAtNC41OSw0LjU5Vjc1LjQ2QTQuNTEsNC41MSwwLDAsMCwzMyw4MEg3Ny45MWE0LjYsNC42LDAsMCwwLDQuNTktNC41OVYyOWEyLjEzLDIuMTMsMCwwLDAtLjE0LS43OVpNNjUsMTcuNTRsOSw5SDY1Wk0zMy41LDc1VjE0SDYwVjI2LjQ5YTUsNSwwLDAsMCw1LDVINzcuNVY3NVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik03MCw4NkgyMi41VjIxLjVhMi41LDIuNSwwLDAsMC01LDB2NjVBNC41MSw0LjUxLDAsMCwwLDIyLDkxSDcwYTIuNSwyLjUsMCwwLDAsMC01WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-background.svg":
/*!***************************************!*\
  !*** ./src/icons/jinr-background.svg ***!
  \***************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrBackground; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrBackground(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M89.69 32.32A4.48 4.48 0 0086.5 31H69V13.5A4.51 4.51 0 0064.5 9h-51A4.51 4.51 0 009 13.5v51a4.51 4.51 0 004.5 4.5H31v17.5a4.51 4.51 0 004.5 4.5h51a4.51 4.51 0 004.5-4.5v-51a4.5 4.5 0 00-1.31-3.18zM86 72.56L72.57 86h-9L86 63.59zm0-16L56.52 86h-9l17-17A4.51 4.51 0 0069 64.54l17-17zM69 36h5.43L69 41.42zM41.43 69L36 74.42V69zM86 40.47l-17 17v-9L81.5 36H86zM14 14h50v50H14zm22 67.49L48.5 69h9l-17 17H36zM79.64 86L86 79.64V86z",
    fill: "#407fed"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg5LjY5LDMyLjMyQTQuNDgsNC40OCwwLDAsMCw4Ni41LDMxSDY5VjEzLjVBNC41MSw0LjUxLDAsMCwwLDY0LjUsOWgtNTFBNC41MSw0LjUxLDAsMCwwLDksMTMuNXY1MUE0LjUxLDQuNTEsMCwwLDAsMTMuNSw2OUgzMVY4Ni41QTQuNTEsNC41MSwwLDAsMCwzNS41LDkxaDUxQTQuNTEsNC41MSwwLDAsMCw5MSw4Ni41di01MUE0LjUsNC41LDAsMCwwLDg5LjY5LDMyLjMyWk04Niw3Mi41Niw3Mi41Nyw4NmgtOUw4Niw2My41OVptMC0xNkw1Ni41Miw4NmgtOWwxNy0xN0E0LjUxLDQuNTEsMCwwLDAsNjksNjQuNTRsMTctMTdaTTY5LDM2aDUuNDNMNjksNDEuNDJaTTQxLjQzLDY5LDM2LDc0LjQyVjY5Wk04Niw0MC40N2wtMTcsMTd2LTlMODEuNSwzNkg4NlpNMTQsMTRINjRWMzMuNWgwVjY0SDE0Wk0zNiw4MS40OSw0OC41LDY5aDlsLTE3LDE3SDM2Wk03OS42NCw4Niw4Niw3OS42NFY4NloiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-blogcard.svg":
/*!*************************************!*\
  !*** ./src/icons/jinr-blogcard.svg ***!
  \*************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrBlogcard; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _rect, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrBlogcard(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-blogcard_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-blogcard_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-blogcard_svg__cls-1",
    d: "M86.82 22.5H13.18A4.18 4.18 0 009 26.68v46.64a4.18 4.18 0 004.18 4.18h73.64A4.18 4.18 0 0091 73.32V26.68a4.18 4.18 0 00-4.18-4.18zm-.82 50H14v-45h72z"
  })), _rect || (_rect = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("rect", {
    className: "jinr-blogcard_svg__cls-1",
    x: 21.9,
    y: 37.4,
    width: 25.2,
    height: 25.2,
    rx: 3.5
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-blogcard_svg__cls-1",
    d: "M57 62.6h11.88a2.5 2.5 0 000-5H57a2.5 2.5 0 000 5zM57 51.6h19a2.5 2.5 0 000-5H57a2.5 2.5 0 000 5z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjgyLDIyLjVIMTMuMThBNC4xOCw0LjE4LDAsMCwwLDksMjYuNjhWNzMuMzJhNC4xOCw0LjE4LDAsMCwwLDQuMTgsNC4xOEg4Ni44MkE0LjE4LDQuMTgsMCwwLDAsOTEsNzMuMzJWMjYuNjhBNC4xOCw0LjE4LDAsMCwwLDg2LjgyLDIyLjVaTTg2LDcyLjVIMTR2LTQ1SDg2WiIvPjxyZWN0IGNsYXNzPSJjbHMtMSIgeD0iMjEuOSIgeT0iMzcuNCIgd2lkdGg9IjI1LjIiIGhlaWdodD0iMjUuMiIgcng9IjMuNSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTU3LDYyLjZINjguODhhMi41LDIuNSwwLDAsMCwwLTVINTdhMi41LDIuNSwwLDAsMCwwLDVaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTcsNTEuNkg3NmEyLjUsMi41LDAsMCwwLDAtNUg1N2EyLjUsMi41LDAsMCwwLDAsNVoiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-box.svg":
/*!********************************!*\
  !*** ./src/icons/jinr-box.svg ***!
  \********************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrBox; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _circle, _path2, _circle2, _path3, _circle3, _path4;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrBox(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-box_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-box_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-box_svg__cls-1",
    d: "M86.5 12h-73A4.51 4.51 0 009 16.5v67a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5v-67a4.51 4.51 0 00-4.5-4.5zm-.5 5v8H14v-8zM14 83V30h72v53z"
  })), _circle || (_circle = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-box_svg__cls-1",
    cx: 23,
    cy: 41.88,
    r: 3
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-box_svg__cls-1",
    d: "M78.5 39.38H35a2.5 2.5 0 000 5h43.5a2.5 2.5 0 000-5z"
  })), _circle2 || (_circle2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-box_svg__cls-1",
    cx: 23,
    cy: 56.51,
    r: 3
  })), _path3 || (_path3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-box_svg__cls-1",
    d: "M78.5 54H35a2.5 2.5 0 000 5h43.5a2.5 2.5 0 000-5z"
  })), _circle3 || (_circle3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-box_svg__cls-1",
    cx: 23,
    cy: 71.12,
    r: 3
  })), _path4 || (_path4 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-box_svg__cls-1",
    d: "M78.5 68.62H35a2.5 2.5 0 000 5h43.5a2.5 2.5 0 000-5z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsMTJoLTczQTQuNTEsNC41MSwwLDAsMCw5LDE2LjV2NjdBNC41MSw0LjUxLDAsMCwwLDEzLjUsODhoNzNBNC41MSw0LjUxLDAsMCwwLDkxLDgzLjV2LTY3QTQuNTEsNC41MSwwLDAsMCw4Ni41LDEyWk04NiwxN3Y4SDE0VjE3Wk0xNCw4M1YzMEg4NlY4M1oiLz48Y2lyY2xlIGNsYXNzPSJjbHMtMSIgY3g9IjIzIiBjeT0iNDEuODgiIHI9IjMiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik03OC41LDM5LjM4SDM1YTIuNSwyLjUsMCwwLDAsMCw1SDc4LjVhMi41LDIuNSwwLDAsMCwwLTVaIi8+PGNpcmNsZSBjbGFzcz0iY2xzLTEiIGN4PSIyMyIgY3k9IjU2LjUxIiByPSIzIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNzguNSw1NEgzNWEyLjUsMi41LDAsMCwwLDAsNUg3OC41YTIuNSwyLjUsMCwwLDAsMC01WiIvPjxjaXJjbGUgY2xhc3M9ImNscy0xIiBjeD0iMjMiIGN5PSI3MS4xMiIgcj0iMyIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTc4LjUsNjguNjJIMzVhMi41LDIuNSwwLDAsMCwwLDVINzguNWEyLjUsMi41LDAsMCwwLDAtNVoiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-button.svg":
/*!***********************************!*\
  !*** ./src/icons/jinr-button.svg ***!
  \***********************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrButton; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrButton(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-button_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-button_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-button_svg__cls-1",
    d: "M83.5 15.75h-67a7.5 7.5 0 00-7.5 7.5v40a7.5 7.5 0 007.5 7.5h10.93v-5H16.5a2.5 2.5 0 01-2.5-2.5v-40a2.5 2.5 0 012.5-2.5h67a2.5 2.5 0 012.5 2.5v40a2.5 2.5 0 01-2.5 2.5H57v5h26.5a7.5 7.5 0 007.5-7.5v-40a7.5 7.5 0 00-7.5-7.5z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-button_svg__cls-1",
    d: "M49.42 63.63l7.44-2.27a1.1 1.1 0 00.29-2l-24.08-16a1.1 1.1 0 00-1.71 1l1.33 28.86a1.1 1.1 0 001.84.77l5.76-5.22a1.1 1.1 0 011.7.27l7.72 13.61a1.1 1.1 0 001.5.42l2.44-1.39 2.44-1.38a1.1 1.1 0 00.42-1.5l-7.72-13.57a1.1 1.1 0 01.63-1.6zM64.26 55a2.51 2.51 0 003.54 0l10-10a2.52 2.52 0 000-3.54l-10-10A2.5 2.5 0 1064.2 35l8.26 8.26-8.2 8.2a2.52 2.52 0 000 3.54z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTgzLjUsMTUuNzVoLTY3QTcuNSw3LjUsMCwwLDAsOSwyMy4yNXY0MGE3LjUsNy41LDAsMCwwLDcuNSw3LjVIMjcuNDN2LTVIMTYuNWEyLjUsMi41LDAsMCwxLTIuNS0yLjV2LTQwYTIuNSwyLjUsMCwwLDEsMi41LTIuNWg2N2EyLjUsMi41LDAsMCwxLDIuNSwyLjV2NDBhMi41LDIuNSwwLDAsMS0yLjUsMi41SDU3djVIODMuNWE3LjUsNy41LDAsMCwwLDcuNS03LjV2LTQwQTcuNSw3LjUsMCwwLDAsODMuNSwxNS43NVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik00OS40Miw2My42M2w3LjQ0LTIuMjdhMS4xLDEuMSwwLDAsMCwuMjktMmwtMjQuMDgtMTZhMS4xLDEuMSwwLDAsMC0xLjcxLDFsMS4zMywyOC44NmExLjEsMS4xLDAsMCwwLDEuODQuNzdsNS43Ni01LjIyYTEuMSwxLjEsMCwwLDEsMS43LjI3bDcuNzIsMTMuNjFhMS4xLDEuMSwwLDAsMCwxLjUuNDJsMi40NC0xLjM5LDIuNDQtMS4zOGExLjEsMS4xLDAsMCwwLC40Mi0xLjVMNDguNzksNjUuMjNBMS4xLDEuMSwwLDAsMSw0OS40Miw2My42M1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik02NC4yNiw1NWEyLjUxLDIuNTEsMCwwLDAsMy41NCwwbDEwLTEwYTIuNTIsMi41MiwwLDAsMCwwLTMuNTRsLTEwLTEwQTIuNSwyLjUsMCwxLDAsNjQuMiwzNWw4LjI2LDguMjYtOC4yLDguMkEyLjUyLDIuNTIsMCwwLDAsNjQuMjYsNTVaIi8+PC9zdmc+");


/***/ }),

/***/ "./src/icons/jinr-category.svg":
/*!*************************************!*\
  !*** ./src/icons/jinr-category.svg ***!
  \*************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrCategory; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrCategory(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 1",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 300 300"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    fill: "none",
    d: "M0 0h300v300H0z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M265.57 63.94c-7.18 0-128.74-.28-139.4-.3-.88-2.55-4.44-10.58-14.55-10.58H36.11a14.06 14.06 0 00-13.87 13.87v166.14c0 12.87 10.62 13.87 13.87 13.87H262.8c6.74 0 15-6.4 15-13.87V74.69c-.04-4.39-4.38-10.75-12.23-10.75zM134.85 91.17L130.18 78h132.18v13.17zm127.51 13.32v128.13H37.64V67.38h73.63L121.55 96a12.9 12.9 0 0012.12 8.51z",
    fill: "#407fed"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0i44Os44Kk44Ok44O8XzEiIGRhdGEtbmFtZT0i44Os44Kk44Ok44O8IDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDMwMCAzMDAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDpub25lO30uY2xzLTJ7ZmlsbDojNDA3ZmVkO308L3N0eWxlPjwvZGVmcz48cmVjdCBjbGFzcz0iY2xzLTEiIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMjY1LjU3LDYzLjk0Yy03LjE4LDAtMTI4Ljc0LS4yOC0xMzkuNC0uMy0uODgtMi41NS00LjQ0LTEwLjU4LTE0LjU1LTEwLjU4SDM2LjExQTE0LjA2LDE0LjA2LDAsMCwwLDIyLjI0LDY2LjkzVjIzMy4wN2MwLDEyLjg3LDEwLjYyLDEzLjg3LDEzLjg3LDEzLjg3SDI2Mi44YzYuNzQsMCwxNS02LjQsMTUtMTMuODdWNzQuNjlDMjc3Ljc2LDcwLjMsMjczLjQyLDYzLjk0LDI2NS41Nyw2My45NFpNMTM0Ljg1LDkxLjE3LDEzMC4xOCw3OEgyNjIuMzZWOTEuMTdabTEyNy41MSwxMy4zMlYyMzIuNjJIMzcuNjRWNjcuMzhoNzMuNjNMMTIxLjU1LDk2YTEyLjksMTIuOSwwLDAsMCwxMi4xMiw4LjUxWiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-chat.svg":
/*!*********************************!*\
  !*** ./src/icons/jinr-chat.svg ***!
  \*********************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrChat; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _circle, _circle2, _circle3, _path;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrChat(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-chat_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-chat_svg__cls-1{fill:#407fed}"))), _circle || (_circle = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-chat_svg__cls-1",
    cx: 35,
    cy: 46.59,
    r: 3.5
  })), _circle2 || (_circle2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-chat_svg__cls-1",
    cx: 50,
    cy: 46.59,
    r: 3.5
  })), _circle3 || (_circle3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-chat_svg__cls-1",
    cx: 65,
    cy: 46.59,
    r: 3.5
  })), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-chat_svg__cls-1",
    d: "M86.5 19.11h-73a4.51 4.51 0 00-4.5 4.5v46a4.51 4.51 0 004.5 4.5h2.19v9.68a3 3 0 001.85 2.77 3.14 3.14 0 001.15.23 3 3 0 002.12-.88l11.8-11.8H86.5a4.51 4.51 0 004.5-4.5v-46a4.51 4.51 0 00-4.5-4.5zm-.5 50H31.57a2.51 2.51 0 00-1.76.73l-9.12 9.12v-7.4a2.5 2.5 0 00-2.5-2.5H14V24.11h72z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxjaXJjbGUgY2xhc3M9ImNscy0xIiBjeD0iMzUiIGN5PSI0Ni41OSIgcj0iMy41Ii8+PGNpcmNsZSBjbGFzcz0iY2xzLTEiIGN4PSI1MCIgY3k9IjQ2LjU5IiByPSIzLjUiLz48Y2lyY2xlIGNsYXNzPSJjbHMtMSIgY3g9IjY1IiBjeT0iNDYuNTkiIHI9IjMuNSIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsMTkuMTFoLTczQTQuNTEsNC41MSwwLDAsMCw5LDIzLjYxdjQ2YTQuNTEsNC41MSwwLDAsMCw0LjUsNC41aDIuMTl2OS42OGEzLDMsMCwwLDAsMS44NSwyLjc3LDMuMTQsMy4xNCwwLDAsMCwxLjE1LjIzLDMsMywwLDAsMCwyLjEyLS44OGwxMS44LTExLjhIODYuNWE0LjUxLDQuNTEsMCwwLDAsNC41LTQuNVYyMy42MUE0LjUxLDQuNTEsMCwwLDAsODYuNSwxOS4xMVptLS41LDUwSDMxLjU3YTIuNTEsMi41MSwwLDAsMC0xLjc2LjczbC05LjEyLDkuMTJWNzEuNTZhMi41LDIuNSwwLDAsMC0yLjUtMi41SDE0VjI0LjExSDg2WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-designtitle.svg":
/*!****************************************!*\
  !*** ./src/icons/jinr-designtitle.svg ***!
  \****************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrDesigntitle; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrDesigntitle(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-designtitle_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-designtitle_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-designtitle_svg__cls-1",
    d: "M86.5 12h-73A4.51 4.51 0 009 16.5v60a4.51 4.51 0 004.5 4.5h27.32l7.23 9.06a2.49 2.49 0 003.9 0L59.18 81H86.5a4.51 4.51 0 004.5-4.5v-60a4.51 4.51 0 00-4.5-4.5zM86 76H58a2.53 2.53 0 00-2 .94l-6 7.55-6-7.55a2.53 2.53 0 00-2-.94H14V17h72z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-designtitle_svg__cls-1",
    d: "M26.44 33.12h19.25v34.94a1.43 1.43 0 001.44 1.44h5.74a1.43 1.43 0 001.44-1.44V33.12h19.25A1.44 1.44 0 0075 31.68v-5.74a1.43 1.43 0 00-1.44-1.44H26.44A1.43 1.43 0 0025 25.94v5.74a1.44 1.44 0 001.44 1.44z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsMTJoLTczQTQuNTEsNC41MSwwLDAsMCw5LDE2LjV2NjBBNC41MSw0LjUxLDAsMCwwLDEzLjUsODFINDAuODJsNy4yMyw5LjA2YTIuNDksMi40OSwwLDAsMCwzLjksMEw1OS4xOCw4MUg4Ni41QTQuNTEsNC41MSwwLDAsMCw5MSw3Ni41di02MEE0LjUxLDQuNTEsMCwwLDAsODYuNSwxMlpNODYsNzZINThhMi41MywyLjUzLDAsMCwwLTIsLjk0bC02LDcuNTUtNi03LjU1QTIuNTMsMi41MywwLDAsMCw0Miw3NkgxNFYxN0g4NloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yNi40NCwzMy4xMkg0NS42OVY2OC4wNmExLjQzLDEuNDMsMCwwLDAsMS40NCwxLjQ0aDUuNzRhMS40MywxLjQzLDAsMCwwLDEuNDQtMS40NFYzMy4xMkg3My41NkExLjQ0LDEuNDQsMCwwLDAsNzUsMzEuNjhWMjUuOTRhMS40MywxLjQzLDAsMCwwLTEuNDQtMS40NEgyNi40NEExLjQzLDEuNDMsMCwwLDAsMjUsMjUuOTR2NS43NEExLjQ0LDEuNDQsMCwwLDAsMjYuNDQsMzMuMTJaIi8+PC9zdmc+");


/***/ }),

/***/ "./src/icons/jinr-display-all.svg":
/*!****************************************!*\
  !*** ./src/icons/jinr-display-all.svg ***!
  \****************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrDisplayAll; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _g;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrDisplayAll(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 48 48"
  }, props), _g || (_g = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("g", {
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 8"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    fill: "#fff",
    d: "M0 0h48v48H0z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M34.42 9.9H5.71a2.39 2.39 0 00-2.38 2.38V33a2.39 2.39 0 002.38 2.39h9.83l-.27 1.56h-1.18a1.51 1.51 0 000 3h12a1.51 1.51 0 100-3h-1.17l-.27-1.56h3.23v-3H6.34l-.09-3h21.54v-3H6.25l.09-13.45h27.45v2.79h3v-3.45a2.39 2.39 0 00-2.37-2.38zm-16.09 27l.27-1.56h3l.27 1.56z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M42.56 18.82h-9.74a2.1 2.1 0 00-2.1 2.09v16.93a2.1 2.1 0 002.1 2.1h9.74a2.1 2.1 0 002.1-2.1V20.91a2.1 2.1 0 00-2.1-2.09zm-9.07 18.35V21.59h8.4v15.58z"
  }))));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0OCA0OCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNmZmY7fTwvc3R5bGU+PC9kZWZzPjxnIGlkPSLjg6zjgqTjg6Tjg7xfOCIgZGF0YS1uYW1lPSLjg6zjgqTjg6Tjg7wgOCI+PHJlY3QgY2xhc3M9ImNscy0xIiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiLz48cGF0aCBkPSJNMzQuNDIsOS45SDUuNzFhMi4zOSwyLjM5LDAsMCwwLTIuMzgsMi4zOFYzM2EyLjM5LDIuMzksMCwwLDAsMi4zOCwyLjM5aDkuODNsLS4yNywxLjU2SDE0LjA5YTEuNTEsMS41MSwwLDAsMCwwLDNoMTJhMS41MSwxLjUxLDAsMSwwLDAtM0gyNC45MmwtLjI3LTEuNTZoMy4yM3YtM2wtMjEuNTQsMC0uMDktM0gyNy43OXYtM0g2LjI1bC4wOS0xMy40NSwyNy40NSwwdjIuNzloM1YxMi4yOEEyLjM5LDIuMzksMCwwLDAsMzQuNDIsOS45Wm0tMTYuMDksMjcsLjI3LTEuNTZoM2wuMjcsMS41NloiLz48cGF0aCBkPSJNNDIuNTYsMTguODJIMzIuODJhMi4xLDIuMSwwLDAsMC0yLjEsMi4wOVYzNy44NGEyLjEsMi4xLDAsMCwwLDIuMSwyLjFoOS43NGEyLjEsMi4xLDAsMCwwLDIuMS0yLjFWMjAuOTFBMi4xLDIuMSwwLDAsMCw0Mi41NiwxOC44MlpNMzMuNDksMzcuMTdWMjEuNTloOC40VjM3LjE3WiIvPjwvZz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-display-pc.svg":
/*!***************************************!*\
  !*** ./src/icons/jinr-display-pc.svg ***!
  \***************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrDisplayPc; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _g;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrDisplayPc(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 48 48"
  }, props), _g || (_g = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("g", {
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 8"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    fill: "#fff",
    d: "M0 0h48v48H0z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M38.36 10.23H9.64a2.33 2.33 0 00-2.33 2.33v20.69a2.34 2.34 0 002.33 2.34h9.89l-.29 1.66H18a1.46 1.46 0 100 2.92h12a1.46 1.46 0 000-2.92h-1.19l-.28-1.66h9.83a2.34 2.34 0 002.33-2.34V12.56a2.33 2.33 0 00-2.33-2.33zM10.25 26.92V13.14h27.56v13.81zm15.62 10.33H22.2l.29-1.66h3.09zM10.22 32.7v-2.86h27.59v2.83z",
    opacity: 0.9
  }))));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0OCA0OCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNmZmY7fS5jbHMtMntvcGFjaXR5OjAuOTt9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IuODrOOCpOODpOODvF84IiBkYXRhLW5hbWU9IuODrOOCpOODpOODvCA4Ij48cmVjdCBjbGFzcz0iY2xzLTEiIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTM4LjM2LDEwLjIzSDkuNjRhMi4zMywyLjMzLDAsMCwwLTIuMzMsMi4zM1YzMy4yNWEyLjM0LDIuMzQsMCwwLDAsMi4zMywyLjM0aDkuODlsLS4yOSwxLjY2SDE4YTEuNDYsMS40NiwwLDEsMCwwLDIuOTJIMzBhMS40NiwxLjQ2LDAsMCwwLDAtMi45MkgyOC44MWwtLjI4LTEuNjZoOS44M2EyLjM0LDIuMzQsMCwwLDAsMi4zMy0yLjM0VjEyLjU2QTIuMzMsMi4zMywwLDAsMCwzOC4zNiwxMC4yM1pNMTAuMjUsMjYuOTJsMC0xMy43OCwyNy41NiwwLDAsMTMuODFaTTI1Ljg3LDM3LjI1SDIyLjJsLjI5LTEuNjZoMy4wOVpNMTAuMjIsMzIuN2wwLTIuODZIMzcuODF2Mi44M1oiLz48L2c+PC9zdmc+");


/***/ }),

/***/ "./src/icons/jinr-display-sp.svg":
/*!***************************************!*\
  !*** ./src/icons/jinr-display-sp.svg ***!
  \***************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrDisplaySp; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _g;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrDisplaySp(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 48 48"
  }, props), _g || (_g = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("g", {
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 8"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    fill: "#fff",
    d: "M0 0h48v48H0z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M30.9 9.71H17.1a2.05 2.05 0 00-2.05 2v26a2.05 2.05 0 002.05 2h13.8a2.05 2.05 0 002.05-2v-26a2.05 2.05 0 00-2.05-2zm-13.18 21.6V12.38h12.56v18.93zm0 5.81v-3h12.56v3z",
    opacity: 0.9
  }))));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0OCA0OCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNmZmY7fS5jbHMtMntvcGFjaXR5OjAuOTt9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IuODrOOCpOODpOODvF84IiBkYXRhLW5hbWU9IuODrOOCpOODpOODvCA4Ij48cmVjdCBjbGFzcz0iY2xzLTEiIHdpZHRoPSI0OCIgaGVpZ2h0PSI0OCIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTMwLjksOS43MUgxNy4xYTIuMDUsMi4wNSwwLDAsMC0yLjA1LDJ2MjZhMi4wNSwyLjA1LDAsMCwwLDIuMDUsMkgzMC45YTIuMDUsMi4wNSwwLDAsMCwyLjA1LTJ2LTI2QTIuMDUsMi4wNSwwLDAsMCwzMC45LDkuNzFaTTE3LjcyLDMxLjMxVjEyLjM4SDMwLjI4VjMxLjMxWm0wLDUuODF2LTNIMzAuMjh2M1oiLz48L2c+PC9zdmc+");


/***/ }),

/***/ "./src/icons/jinr-fontsize.svg":
/*!*************************************!*\
  !*** ./src/icons/jinr-fontsize.svg ***!
  \*************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrFontsize; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrFontsize(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M90.74 76.73c-.1-1-.18-2-.23-3s-.07-2.23-.07-3.49v-18.7a13.24 13.24 0 00-1-5 11.67 11.67 0 00-3-4.26 14.44 14.44 0 00-5.09-2.91 22.31 22.31 0 00-7.23-1.06 24.43 24.43 0 00-8 1.41A20.36 20.36 0 0059 44l-.76.7 5.5 5.71.72-.53 1.94-1.48a11 11 0 012-1.23 14.49 14.49 0 012.56-.9 13.1 13.1 0 013.26-.36 9.49 9.49 0 013.48.58A6.91 6.91 0 0180.06 48a6.67 6.67 0 011.4 2.17 6.74 6.74 0 01.47 2.41v.53h-4.07a46.27 46.27 0 00-8 .67 22.09 22.09 0 00-6.71 2.27A13.16 13.16 0 0059 59.59l8.1 18.89a19.42 19.42 0 0011-1.26A13 13 0 0082.37 74c0 1 .1 1.95.18 2.91l.08.93h8.23zm-8.81-15.16a12.75 12.75 0 01-.5 3.46 8.7 8.7 0 01-1.59 3.08A8.08 8.08 0 0177 70.33a10 10 0 01-4.41.87 9.35 9.35 0 01-5.24-1.2 4 4 0 01-1.67-3.7 3.9 3.9 0 011.06-2.84 8.16 8.16 0 013.09-1.91 19.05 19.05 0 014.47-1 49.45 49.45 0 014.94-.26h2.69zM30.12 21.22l-25 56.63H16l5.4-13.49h24.66l5.48 13.49h10.85L38.16 21.22zm12.42 34.63H24.89l8.89-21.56z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PHBhdGggZD0iTTkwLjc0LDc2LjczYy0uMS0xLS4xOC0yLS4yMy0zcy0uMDctMi4yMy0uMDctMy40OVY1MS41NGExMy4yNCwxMy4yNCwwLDAsMC0xLTUsMTEuNjcsMTEuNjcsMCwwLDAtMy00LjI2LDE0LjQ0LDE0LjQ0LDAsMCwwLTUuMDktMi45MSwyMi4zMSwyMi4zMSwwLDAsMC03LjIzLTEuMDYsMjQuNDMsMjQuNDMsMCwwLDAtOCwxLjQxQTIwLjM2LDIwLjM2LDAsMCwwLDU5LDQ0bC0uNzYuNyw1LjUsNS43MS43Mi0uNTMsMS45NC0xLjQ4YTExLDExLDAsMCwxLDItMS4yMywxNC40OSwxNC40OSwwLDAsMSwyLjU2LS45LDEzLjEsMTMuMSwwLDAsMSwzLjI2LS4zNiw5LjQ5LDkuNDksMCwwLDEsMy40OC41OEE2LjkxLDYuOTEsMCwwLDEsODAuMDYsNDhhNi42Nyw2LjY3LDAsMCwxLDEuNCwyLjE3LDYuNzQsNi43NCwwLDAsMSwuNDcsMi40MXYuNTNINzcuODZhNDYuMjcsNDYuMjcsMCwwLDAtOCwuNjcsMjIuMDksMjIuMDksMCwwLDAtNi43MSwyLjI3QTEzLjE2LDEzLjE2LDAsMCwwLDU5LDU5LjU5TDY3LjEsNzguNDhhMTkuNDIsMTkuNDIsMCwwLDAsMTEtMS4yNkExMywxMywwLDAsMCw4Mi4zNyw3NGMwLDEsLjEsMS45NS4xOCwyLjkxbC4wOC45M2g4LjIzWk04MS45Myw2MS41N2ExMi43NSwxMi43NSwwLDAsMS0uNSwzLjQ2LDguNyw4LjcsMCwwLDEtMS41OSwzLjA4QTguMDgsOC4wOCwwLDAsMSw3Nyw3MC4zM2ExMCwxMCwwLDAsMS00LjQxLjg3QTkuMzUsOS4zNSwwLDAsMSw2Ny4zNSw3MGE0LDQsMCwwLDEtMS42Ny0zLjcsMy45LDMuOSwwLDAsMSwxLjA2LTIuODQsOC4xNiw4LjE2LDAsMCwxLDMuMDktMS45MSwxOS4wNSwxOS4wNSwwLDAsMSw0LjQ3LTEsNDkuNDUsNDkuNDUsMCwwLDEsNC45NC0uMjZoMi42OVoiLz48cGF0aCBkPSJNMzAuMTIsMjEuMjJsLTI1LDU2LjYzSDE2bDUuNC0xMy40OUg0Ni4wNmw1LjQ4LDEzLjQ5SDYyLjM5TDM4LjE2LDIxLjIyWk00Mi41NCw1NS44NUgyNC44OWw4Ljg5LTIxLjU2WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-fullwidth.svg":
/*!**************************************!*\
  !*** ./src/icons/jinr-fullwidth.svg ***!
  \**************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrFullwidth; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrFullwidth(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-fullwidth_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-fullwidth_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-fullwidth_svg__cls-1",
    d: "M86.5 12h-73A4.51 4.51 0 009 16.5v67a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5v-67a4.51 4.51 0 00-4.5-4.5zM14 30h72v40H14zm72-13v8H14v-8zM14 83v-8h72v8z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-fullwidth_svg__cls-1",
    d: "M81.5 49.87v-.12-.37a1.87 1.87 0 00-.07-.22 2.17 2.17 0 00-.07-.24c0-.09-.09-.16-.13-.24a1.14 1.14 0 00-.1-.19 3 3 0 00-.28-.34l-8.48-8.48a2.5 2.5 0 00-3.53 3.54L73 47.4l-45.93.2 4.19-4.19a2.5 2.5 0 00-3.53-3.54l-8.49 8.49a2.24 2.24 0 00-.31.38 1.14 1.14 0 00-.1.19 1.41 1.41 0 00-.13.24 1.38 1.38 0 00-.08.27 1.17 1.17 0 00-.06.2 2.61 2.61 0 00-.05.48v.49a1.87 1.87 0 00.07.22 1.8 1.8 0 00.06.22c0 .09.09.16.13.24a1.14 1.14 0 00.1.19c.08.12.18.23.27.34l8.48 8.48a2.53 2.53 0 001.77.73 2.5 2.5 0 001.76-4.27L27 52.6l45.93-.2-4.19 4.19a2.5 2.5 0 000 3.54 2.5 2.5 0 003.53 0l8.49-8.49a2.24 2.24 0 00.31-.38 1.14 1.14 0 00.1-.19 1.41 1.41 0 00.13-.24 1.38 1.38 0 00.08-.27 1.17 1.17 0 00.06-.2 2.61 2.61 0 000-.48z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsMTJoLTczQTQuNTEsNC41MSwwLDAsMCw5LDE2LjV2NjdBNC41MSw0LjUxLDAsMCwwLDEzLjUsODhoNzNBNC41MSw0LjUxLDAsMCwwLDkxLDgzLjV2LTY3QTQuNTEsNC41MSwwLDAsMCw4Ni41LDEyWk0xNCwzMEg4NlY3MEgxNFpNODYsMTd2OEgxNFYxN1pNMTQsODNWNzVIODZ2OFoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04MS41LDQ5Ljg3aDBzMC0uMDgsMC0uMTIsMC0uMjUsMC0uMzdhMS44NywxLjg3LDAsMCwwLS4wNy0uMjIsMi4xNywyLjE3LDAsMCwwLS4wNy0uMjRjMC0uMDktLjA5LS4xNi0uMTMtLjI0YTEuMTQsMS4xNCwwLDAsMC0uMS0uMTksMywzLDAsMCwwLS4yOC0uMzRsMCwwaDBsLTguNDgtOC40OGEyLjUsMi41LDAsMCwwLTMuNTMsMy41NEw3Myw0Ny40bC00NS45My4yLDQuMTktNC4xOWEyLjUsMi41LDAsMCwwLTMuNTMtMy41NGwtOC40OSw4LjQ5aDBhMi4yNCwyLjI0LDAsMCwwLS4zMS4zOCwxLjE0LDEuMTQsMCwwLDAtLjEuMTksMS40MSwxLjQxLDAsMCwwLS4xMy4yNCwxLjM4LDEuMzgsMCwwLDAtLjA4LjI3LDEuMTcsMS4xNywwLDAsMC0uMDYuMiwyLjYxLDIuNjEsMCwwLDAtLjA1LjQ4aDBzMCwuMDgsMCwuMTIsMCwuMjUsMCwuMzdhMS44NywxLjg3LDAsMCwwLC4wNy4yMiwxLjgsMS44LDAsMCwwLC4wNi4yMnYwYzAsLjA5LjA5LjE2LjEzLjI0YTEuMTQsMS4xNCwwLDAsMCwuMS4xOWMuMDguMTIuMTguMjMuMjcuMzRzMCwwLDAsMGgwbDguNDgsOC40OGEyLjUzLDIuNTMsMCwwLDAsMS43Ny43MywyLjUsMi41LDAsMCwwLDEuNzYtNC4yN0wyNyw1Mi42bDQ1LjkzLS4yLTQuMTksNC4xOWEyLjUsMi41LDAsMCwwLDAsMy41NCwyLjUsMi41LDAsMCwwLDMuNTMsMGw4LjQ5LTguNDloMGEyLjI0LDIuMjQsMCwwLDAsLjMxLS4zOCwxLjE0LDEuMTQsMCwwLDAsLjEtLjE5LDEuNDEsMS40MSwwLDAsMCwuMTMtLjI0LDEuMzgsMS4zOCwwLDAsMCwuMDgtLjI3LDEuMTcsMS4xNywwLDAsMCwuMDYtLjIsMi42MSwyLjYxLDAsMCwwLDAtLjQ4WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-highliter.svg":
/*!**************************************!*\
  !*** ./src/icons/jinr-highliter.svg ***!
  \**************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrHighliter; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrHighliter(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-highliter_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-highliter_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-highliter_svg__cls-1",
    d: "M86.5 22.5h-73A4.51 4.51 0 009 27v46a4.51 4.51 0 004.5 4.5h73A4.51 4.51 0 0091 73V27a4.51 4.51 0 00-4.5-4.5zm-.5 50H14v-45h72z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-highliter_svg__cls-1",
    d: "M30.25 64.12a2.5 2.5 0 003.82-3.24L24.84 50l9.23-10.88a2.5 2.5 0 00-3.82-3.24l-10.6 12.5a2.51 2.51 0 000 3.24zM66.22 64.41a2.52 2.52 0 003.53-.29l10.6-12.5a2.51 2.51 0 000-3.24l-10.6-12.5a2.5 2.5 0 00-3.82 3.24L75.16 50l-9.23 10.88a2.51 2.51 0 00.29 3.53zM43.82 67.86a2.36 2.36 0 00.82.14A2.51 2.51 0 0047 66.32l10.73-31A2.5 2.5 0 0053 33.68l-10.73 31a2.5 2.5 0 001.55 3.18z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsMjIuNWgtNzNBNC41MSw0LjUxLDAsMCwwLDksMjdWNzNhNC41MSw0LjUxLDAsMCwwLDQuNSw0LjVoNzNBNC41MSw0LjUxLDAsMCwwLDkxLDczVjI3QTQuNTEsNC41MSwwLDAsMCw4Ni41LDIyLjVabS0uNSw1MEgxNHYtNDVIODZaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMzAuMjUsNjQuMTJhMi41LDIuNSwwLDAsMCwzLjgyLTMuMjRMMjQuODQsNTBsOS4yMy0xMC44OGEyLjUsMi41LDAsMCwwLTMuODItMy4yNGwtMTAuNiwxMi41YTIuNTEsMi41MSwwLDAsMCwwLDMuMjRaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjYuMjIsNjQuNDFhMi41MiwyLjUyLDAsMCwwLDMuNTMtLjI5bDEwLjYtMTIuNWEyLjUxLDIuNTEsMCwwLDAsMC0zLjI0bC0xMC42LTEyLjVhMi41LDIuNSwwLDAsMC0zLjgyLDMuMjRMNzUuMTYsNTAsNjUuOTMsNjAuODhBMi41MSwyLjUxLDAsMCwwLDY2LjIyLDY0LjQxWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQzLjgyLDY3Ljg2YTIuMzYsMi4zNiwwLDAsMCwuODIuMTRBMi41MSwyLjUxLDAsMCwwLDQ3LDY2LjMybDEwLjczLTMxQTIuNSwyLjUsMCwwLDAsNTMsMzMuNjhsLTEwLjczLDMxQTIuNSwyLjUsMCwwLDAsNDMuODIsNjcuODZaIi8+PC9zdmc+");


/***/ }),

/***/ "./src/icons/jinr-icon.svg":
/*!*********************************!*\
  !*** ./src/icons/jinr-icon.svg ***!
  \*********************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrIcon; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrIcon(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 200 200"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M168.4 82l-.2-.2.2-3.1c.5-8.4-1.9-16.7-6.5-22.8-3.6-4.8-10.3-10.7-21.9-11.7-2.8-8.4-10.2-14.7-19.9-17-2.4-.6-4.9-.9-7.4-.9-7.7 0-14.9 2.9-20 8.1-2.1-.6-4.3-.9-6.5-.9-5.1 0-10 1.7-14 4.8-6 4.7-9.6 11.9-9.6 19.5-5.5 2.7-8.6 8.2-11.3 13.1l-.1.1c-3.6 6.6-6.5 11.8-14.2 11.8-2.7 0-6-.6-9.7-1.9-.5-.2-1.1-.3-1.6-.3-1.7 0-3.3.9-4.2 2.4-5.3 8.7-6 25.1 1.9 37.5 5.9 9.2 15.6 14.2 27.3 14.2h1.1c2 4.8 5.3 8.9 9.6 11.7 3.6 2.2 7.7 3.4 12.1 3.4h1.3c3.1 5 8.3 8.9 15 11.2 4.1 1.4 8.2 2.1 12.3 2.1s8.1-.7 11.9-2.1l3.9-1.4c.2.1.4.1.4.1 5.1 1.7 10.4 2.6 15.8 2.6 26.9-.1 47.1-20.5 47-47.4-.1-12.9-4.6-24.4-12.7-32.9zM102 88.6c-1 2-.1 4.4 1.9 5.4.7.3 1.5.4 2.2.4 11.6-1.6 22.2 6.6 23.8 18.2 0 .2 0 .3.1.5.7 6-1.2 12-5.2 16.5-6.5 7.2-17.1 9.2-25.7 4.7-1.9-1.1-4.4-.5-5.5 1.4-.8 1.3-.7 3 .1 4.3 3.1 5 7.1 9.4 11.8 12.9-.8 0-1.5.1-2.2.1-3.7 0-7.1-.6-10.3-1.7-5.4-1.8-9.2-5-10.8-9-.7-1.9-2.5-3.2-4.5-3.2-.4 0-.9.1-1.2.2-1 .2-2 .4-3 .4-2.4 0-4.8-.7-6.7-2-3.5-2.3-5.8-5.7-6.6-9.6-.4-2.2-2.5-3.9-4.8-3.9h-.6c-1.4.2-2.9.3-4.2.3-10.4 0-16-5.3-18.9-9.7-3.7-5.7-5.8-16-3.3-23.7 3.1.8 6 1.2 8.7 1.2 13.6 0 18.9-9.7 22.9-16.9 2.8-5 4.9-8.9 8.8-9.5 1.3-.2 2.4-.9 3.1-2 .8-1.1 1-2.4.8-3.6-.9-5.3 1.3-10.9 5.6-14.2 2.4-1.8 5.3-2.8 8.2-2.8 2 0 4 .5 5.9 1.4.6.3 1.3.5 2 .5 1.6 0 3-.7 4-2.1 3.2-4.3 8.6-6.9 14.5-6.9 1.7 0 3.4.2 5.2.6 5.7 1.4 12.2 5.5 13.5 13 .3 2.4 2.4 4.1 4.9 4.1h.4c7.6 0 13.6 2.7 17.5 7.9 2.7 3.7 4.2 8 4.5 12.3v.2c-6.8-3.8-14.5-5.7-22.3-5.6-15.8.2-29 7.8-34.6 19.9z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M70.9 80.6c-4 0-7.2 4.4-7.2 10.1s3.2 10.1 7.2 10.1 7.2-4.4 7.2-10.1-3.2-10.1-7.2-10.1z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDI1LjIuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9Imljb24iIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAyMDAgMjAwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAyMDAgMjAwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxwYXRoIGQ9Ik0xNy41LDUzLjciLz4KPGc+Cgk8cGF0aCBkPSJNMTY4LjQsODJjMCwwLTAuMS0wLjEtMC4yLTAuMmwwLjItMy4xYzAuNS04LjQtMS45LTE2LjctNi41LTIyLjhjLTMuNi00LjgtMTAuMy0xMC43LTIxLjktMTEuNwoJCWMtMi44LTguNC0xMC4yLTE0LjctMTkuOS0xN2MtMi40LTAuNi00LjktMC45LTcuNC0wLjljLTcuNywwLTE0LjksMi45LTIwLDguMWMtMi4xLTAuNi00LjMtMC45LTYuNS0wLjljLTUuMSwwLTEwLDEuNy0xNCw0LjgKCQljLTYsNC43LTkuNiwxMS45LTkuNiwxOS41Yy01LjUsMi43LTguNiw4LjItMTEuMywxMy4xbC0wLjEsMC4xYy0zLjYsNi42LTYuNSwxMS44LTE0LjIsMTEuOGMtMi43LDAtNi0wLjYtOS43LTEuOQoJCWMtMC41LTAuMi0xLjEtMC4zLTEuNi0wLjNjLTEuNywwLTMuMywwLjktNC4yLDIuNGMtNS4zLDguNy02LDI1LjEsMS45LDM3LjVjNS45LDkuMiwxNS42LDE0LjIsMjcuMywxNC4yYzAuNCwwLDAuNywwLDEuMSwwCgkJYzIsNC44LDUuMyw4LjksOS42LDExLjdjMy42LDIuMiw3LjcsMy40LDEyLjEsMy40YzAuNCwwLDAuOSwwLDEuMywwYzMuMSw1LDguMyw4LjksMTUsMTEuMmM0LjEsMS40LDguMiwyLjEsMTIuMywyLjEKCQlzOC4xLTAuNywxMS45LTIuMWwzLjktMS40YzAuMiwwLjEsMC40LDAuMSwwLjQsMC4xYzUuMSwxLjcsMTAuNCwyLjYsMTUuOCwyLjZjMjYuOS0wLjEsNDcuMS0yMC41LDQ3LTQ3LjQKCQlDMTgxLDEwMiwxNzYuNSw5MC41LDE2OC40LDgyeiBNMTAyLDg4LjZjLTEsMi0wLjEsNC40LDEuOSw1LjRjMC43LDAuMywxLjUsMC40LDIuMiwwLjRjMTEuNi0xLjYsMjIuMiw2LjYsMjMuOCwxOC4yCgkJYzAsMC4yLDAsMC4zLDAuMSwwLjVjMC43LDYtMS4yLDEyLTUuMiwxNi41Yy02LjUsNy4yLTE3LjEsOS4yLTI1LjcsNC43Yy0xLjktMS4xLTQuNC0wLjUtNS41LDEuNGMtMC44LDEuMy0wLjcsMywwLjEsNC4zCgkJYzMuMSw1LDcuMSw5LjQsMTEuOCwxMi45Yy0wLjgsMC0xLjUsMC4xLTIuMiwwLjFjLTMuNywwLTcuMS0wLjYtMTAuMy0xLjdjLTUuNC0xLjgtOS4yLTUtMTAuOC05Yy0wLjctMS45LTIuNS0zLjItNC41LTMuMgoJCWMtMC40LDAtMC45LDAuMS0xLjIsMC4yYy0xLDAuMi0yLDAuNC0zLDAuNGMtMi40LDAtNC44LTAuNy02LjctMmMtMy41LTIuMy01LjgtNS43LTYuNi05LjZjLTAuNC0yLjItMi41LTMuOS00LjgtMy45CgkJYy0wLjIsMC0wLjQsMC0wLjYsMGMtMS40LDAuMi0yLjksMC4zLTQuMiwwLjNjLTEwLjQsMC0xNi01LjMtMTguOS05LjdjLTMuNy01LjctNS44LTE2LTMuMy0yMy43YzMuMSwwLjgsNiwxLjIsOC43LDEuMgoJCWMxMy42LDAsMTguOS05LjcsMjIuOS0xNi45YzIuOC01LDQuOS04LjksOC44LTkuNWMxLjMtMC4yLDIuNC0wLjksMy4xLTJjMC44LTEuMSwxLTIuNCwwLjgtMy42QzcxLjgsNTUsNzQsNDkuNCw3OC4zLDQ2LjEKCQljMi40LTEuOCw1LjMtMi44LDguMi0yLjhjMiwwLDQsMC41LDUuOSwxLjRjMC42LDAuMywxLjMsMC41LDIsMC41YzEuNiwwLDMtMC43LDQtMi4xYzMuMi00LjMsOC42LTYuOSwxNC41LTYuOQoJCWMxLjcsMCwzLjQsMC4yLDUuMiwwLjZjNS43LDEuNCwxMi4yLDUuNSwxMy41LDEzYzAuMywyLjQsMi40LDQuMSw0LjksNC4xaDAuNGM3LjYsMCwxMy42LDIuNywxNy41LDcuOWMyLjcsMy43LDQuMiw4LDQuNSwxMi4zCgkJbDAsMC4yYy02LjgtMy44LTE0LjUtNS43LTIyLjMtNS42QzEyMC44LDY4LjksMTA3LjYsNzYuNSwxMDIsODguNnoiLz4KCTxwYXRoIGQ9Ik03MC45LDgwLjZjLTQsMC03LjIsNC40LTcuMiwxMC4xczMuMiwxMC4xLDcuMiwxMC4xczcuMi00LjQsNy4yLTEwLjFTNzQuOSw4MC42LDcwLjksODAuNnoiLz4KPC9nPgo8L3N2Zz4K");


/***/ }),

/***/ "./src/icons/jinr-iconbox.svg":
/*!************************************!*\
  !*** ./src/icons/jinr-iconbox.svg ***!
  \************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrIconbox; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _circle, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrIconbox(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-iconbox_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-iconbox_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-iconbox_svg__cls-1",
    d: "M86.5 52.38h-73a4.5 4.5 0 00-4.5 4.5V86.5a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5V56.88a4.5 4.5 0 00-4.5-4.5zM86 86H14V57.38h72zM86.5 9h-73A4.51 4.51 0 009 13.5v29.63a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5V13.5A4.51 4.51 0 0086.5 9zM86 42.63H14V14h72z"
  })), _circle || (_circle = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    className: "jinr-iconbox_svg__cls-1",
    cx: 31.35,
    cy: 28.31,
    r: 9.25
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-iconbox_svg__cls-1",
    d: "M30.94 81.5a.61.61 0 00.88 0l8.76-9.5a.45.45 0 000-.63l-8.81-9.53a.63.63 0 00-.88 0l-8.76 9.47a.45.45 0 000 .63zM48.73 74.08H76a2.4 2.4 0 100-4.79H48.73a2.4 2.4 0 000 4.79zM48.73 30.71H76a2.4 2.4 0 100-4.79H48.73a2.4 2.4 0 000 4.79z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsNTIuMzhoLTczQTQuNSw0LjUsMCwwLDAsOSw1Ni44OFY4Ni41QTQuNTEsNC41MSwwLDAsMCwxMy41LDkxaDczQTQuNTEsNC41MSwwLDAsMCw5MSw4Ni41VjU2Ljg4QTQuNSw0LjUsMCwwLDAsODYuNSw1Mi4zOFpNODYsODZIMTRWNTcuMzhIODZaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODYuNSw5aC03M0E0LjUxLDQuNTEsMCwwLDAsOSwxMy41VjQzLjEzYTQuNTEsNC41MSwwLDAsMCw0LjUsNC41aDczYTQuNTEsNC41MSwwLDAsMCw0LjUtNC41VjEzLjVBNC41MSw0LjUxLDAsMCwwLDg2LjUsOVpNODYsNDIuNjNIMTRWMTRIODZaIi8+PGNpcmNsZSBjbGFzcz0iY2xzLTEiIGN4PSIzMS4zNSIgY3k9IjI4LjMxIiByPSI5LjI1Ii8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMzAuOTQsODEuNWEuNjEuNjEsMCwwLDAsLjg4LDBMNDAuNTgsNzJhLjQ1LjQ1LDAsMCwwLDAtLjYzbC04LjgxLTkuNTNhLjYzLjYzLDAsMCwwLS44OCwwbC04Ljc2LDkuNDdhLjQ1LjQ1LDAsMCwwLDAsLjYzWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQ4LjczLDc0LjA4SDc2YTIuNCwyLjQsMCwxLDAsMC00Ljc5SDQ4LjczYTIuNCwyLjQsMCwwLDAsMCw0Ljc5WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQ4LjczLDMwLjcxSDc2YTIuNCwyLjQsMCwxLDAsMC00Ljc5SDQ4LjczYTIuNCwyLjQsMCwwLDAsMCw0Ljc5WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-marker.svg":
/*!***********************************!*\
  !*** ./src/icons/jinr-marker.svg ***!
  \***********************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrMarker; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path, _rect;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrMarker(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 2",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 200 200"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M101.71 31l-24.43-8.89c-7.89-2.92-9-2.34-11.53 5.38l-36.28 99.66c-2.48 6-2.53 6.89 1.69 9L28 144.92c-1.73 4.5-2 7.59 3.17 10.35l-5.46 16.61c-2.17 6.56-1 6.56 4.75 6.56h12c4 0 3.31 0 4.7-3.29l4.62-12.71c4 1.05 6.45-.26 8.17-5.89l2.71-7.55a7.75 7.75 0 00.27-.94c4.77 1.23 5.7.46 7.89-5.89l36.27-99.67c2.75-8.07 3.14-8.38-5.38-11.5zM51.26 151.11c-.41-.15-12.75-4.54-13.2-4.67l2.11-6.06 13.15 4.79zm10.5-13.27l-22.55-8.21L74.8 31.85l22.55 8.2z"
  })), _rect || (_rect = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("rect", {
    x: 61.51,
    y: 168.44,
    width: 113.83,
    height: 10,
    rx: 2.68
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0i44Os44Kk44Ok44O8XzIiIGRhdGEtbmFtZT0i44Os44Kk44Ok44O8IDIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDIwMCAyMDAiPjxwYXRoIGQ9Ik0xMDEuNzEsMzEsNzcuMjgsMjIuMTFjLTcuODktMi45Mi05LTIuMzQtMTEuNTMsNS4zOEwyOS40NywxMjcuMTVjLTIuNDgsNi0yLjUzLDYuODksMS42OSw5TDI4LDE0NC45MmMtMS43Myw0LjUtMiw3LjU5LDMuMTcsMTAuMzVsLTUuNDYsMTYuNjFjLTIuMTcsNi41Ni0xLDYuNTYsNC43NSw2LjU2aDEyYzQsMCwzLjMxLDAsNC43LTMuMjlsNC42Mi0xMi43MWM0LDEuMDUsNi40NS0uMjYsOC4xNy01Ljg5TDYyLjY2LDE0OWE3Ljc1LDcuNzUsMCwwLDAsLjI3LS45NGM0Ljc3LDEuMjMsNS43LjQ2LDcuODktNS44OWwzNi4yNy05OS42N0MxMDkuODQsMzQuNDMsMTEwLjIzLDM0LjEyLDEwMS43MSwzMVpNNTEuMjYsMTUxLjExYy0uNDEtLjE1LTEyLjc1LTQuNTQtMTMuMi00LjY3bDIuMTEtNi4wNiwxMy4xNSw0Ljc5Wm0xMC41LTEzLjI3LTIyLjU1LTguMjFMNzQuOCwzMS44NWwyMi41NSw4LjJaIi8+PHJlY3QgeD0iNjEuNTEiIHk9IjE2OC40NCIgd2lkdGg9IjExMy44MyIgaGVpZ2h0PSIxMCIgcng9IjIuNjgiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-premium.svg":
/*!************************************!*\
  !*** ./src/icons/jinr-premium.svg ***!
  \************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrPremium; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _circle, _path, _path2, _path3;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrPremium(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-premium_svg__\\u30EC\\u30A4\\u30E4\\u30FC_1",
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 1",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-premium_svg__cls-2{fill:#407fed}"))), _circle || (_circle = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("circle", {
    cx: 50,
    cy: 29.17,
    r: 24.84,
    fill: "none",
    stroke: "#407fed",
    strokeMiterlimit: 10,
    strokeWidth: 5
  })), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-premium_svg__cls-2",
    d: "M50.37 43.74a2.29 2.29 0 01-2.43-2.3v-5h-.2c-2.21 0-4.28 0-5.72.07h-.14a1.81 1.81 0 01-1.53-.71 2.24 2.24 0 01-.42-1.33 1.88 1.88 0 011.93-2h6.07a1.2 1.2 0 00-.17-.77c-.79-1.32-1-1.47-1.07-1.49-1.5 0-3 0-4.68.07h-.13a1.85 1.85 0 01-1.52-.72 2.22 2.22 0 01-.43-1.29 1.89 1.89 0 011.93-2H44.22c-.45-.68-1.65-2.46-4.79-7.1a2.27 2.27 0 01-.43-1.24 2.42 2.42 0 012.4-2.32 2.11 2.11 0 011.9 1.17c1.37 2.4 3.58 5.67 5.92 9.12l.33.49h1.63a105.83 105.83 0 006.15-9.66 2 2 0 011.79-1.1A2.58 2.58 0 0161.65 18c0 .7 0 .74-5.11 8.35h1.33a2 2 0 110 4H53.8l-.08.07-.65.91a1.66 1.66 0 00-.45 1.23H57.81a2 2 0 110 4H52.6v5.06a2.2 2.2 0 01-2.23 2.12z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-premium_svg__cls-2",
    d: "M57.87 36.23h-5.29c-.14 0-.18.07-.18.18v5.18a1.9 1.9 0 01-2.07 1.89 2 2 0 01-2.13-2v-5.11c0-.14 0-.22-.19-.22-2.35 0-4.52 0-6 .08a1.63 1.63 0 01-1.78-1.74 1.59 1.59 0 011.63-1.7h6.07c.22 0 .22 0 .26-.22a1.59 1.59 0 00-.22-1C47.08 30 46.86 30 46.68 30c-1.81 0-3.44 0-4.67.07a1.64 1.64 0 01-1.78-1.7 1.59 1.59 0 011.63-1.67h2.86l-5.07-7.53a2 2 0 01-.4-1.2 2.13 2.13 0 012.1-2 1.81 1.81 0 011.63 1c1.45 2.54 3.84 6 6.27 9.64.11.14.15.1.36.14h1.52c.19 0 .19 0 .29-.14a112.78 112.78 0 006.13-9.68 1.71 1.71 0 011.52-.94A2.29 2.29 0 0161.35 18c0 .61 0 .65-5.25 8.47 0 .08-.08.11-.08.15s0 0 .19 0h1.7a1.64 1.64 0 011.74 1.67A1.66 1.66 0 0157.91 30h-3.95c-.29 0-.25 0-.4.21l-.65.91a2 2 0 00-.5 1.52c0 .15.07.18.25.18h5.25a1.72 1.72 0 110 3.44zM66.49 63.36h-33c-1.72.1-3 1.2-2.91 2.5s1.32 2.1 2.91 2.2h33c1.72-.1 3-1.2 2.91-2.5a2.94 2.94 0 00-2.91-2.2zM66.49 75.06h-33c-1.72.1-3 1.2-2.91 2.5s1.32 2.1 2.91 2.2h33c1.72-.1 3-1.2 2.91-2.5s-1.32-2.1-2.91-2.2z"
  })), _path3 || (_path3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-premium_svg__cls-2",
    d: "M84.57 19.36h-4.7a25.63 25.63 0 01.85 5h1.85V89.5H17.43V24.36h1.85a25.63 25.63 0 01.85-5h-4.7a3 3 0 00-3 3V91.5a3 3 0 003 3h69.14a3 3 0 003-3V22.36a3 3 0 00-3-3z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0i44Os44Kk44Ok44O8XzEiIGRhdGEtbmFtZT0i44Os44Kk44Ok44O8IDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDpub25lO3N0cm9rZTojNDA3ZmVkO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS13aWR0aDo1cHg7fS5jbHMtMntmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxjaXJjbGUgY2xhc3M9ImNscy0xIiBjeD0iNTAiIGN5PSIyOS4xNyIgcj0iMjQuODQiLz48cGF0aCBjbGFzcz0iY2xzLTIiIGQ9Ik01MC4zNyw0My43NGEyLjI5LDIuMjksMCwwLDEtMi40My0yLjN2LTVoLS4yYy0yLjIxLDAtNC4yOCwwLTUuNzIuMDdoLS4xNGExLjgxLDEuODEsMCwwLDEtMS41My0uNzEsMi4yNCwyLjI0LDAsMCwxLS40Mi0xLjMzLDEuODgsMS44OCwwLDAsMSwxLjkzLTJjMS4xOSwwLDMuNTYsMCw2LjA3LDBhMS4yLDEuMiwwLDAsMC0uMTctLjc3Yy0uNzktMS4zMi0xLTEuNDctMS4wNy0xLjQ5aDBjLTEuNSwwLTMsMC00LjY4LjA3aC0uMTNhMS44NSwxLjg1LDAsMCwxLTEuNTItLjcyLDIuMjIsMi4yMiwwLDAsMS0uNDMtMS4yOSwxLjg5LDEuODksMCwwLDEsMS45My0ybDEsMCwxLjM2LDBjLS40NS0uNjgtMS42NS0yLjQ2LTQuNzktNy4xQTIuMjcsMi4yNywwLDAsMSwzOSwxNy45M2EyLjQyLDIuNDIsMCwwLDEsMi40LTIuMzIsMi4xMSwyLjExLDAsMCwxLDEuOSwxLjE3YzEuMzcsMi40LDMuNTgsNS42Nyw1LjkyLDkuMTJsLjMzLjQ5aDEuNjNhMTA1LjgzLDEwNS44MywwLDAsMCw2LjE1LTkuNjYsMiwyLDAsMCwxLDEuNzktMS4xQTIuNTgsMi41OCwwLDAsMSw2MS42NSwxOGMwLC43LDAsLjc0LTUuMTEsOC4zNWgxLjMzYTIsMiwwLDEsMSwwLDRsLTQsMGgtLjA3bC0uMDguMDctLjY1LjkxYTEuNjYsMS42NiwwLDAsMC0uNDUsMS4yM2gxLjI3YzEuNjYsMCwzLDAsMy45MiwwYTIsMiwwLDEsMSwwLDRsLTIuNDcsMC0yLjc0LDBjMCwuODMsMCwxLjY4LDAsMi41M3MwLDEuNzMsMCwyLjUzQTIuMiwyLjIsMCwwLDEsNTAuMzcsNDMuNzRaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNNTcuODcsMzYuMjNjLTEuNTksMC0zLjQsMC01LjI5LDAtLjE0LDAtLjE4LjA3LS4xOC4xOCwwLDEuNywwLDMuNTUsMCw1LjE4YTEuOSwxLjksMCwwLDEtMi4wNywxLjg5LDIsMiwwLDAsMS0yLjEzLTJWMzYuMzdjMC0uMTQsMC0uMjItLjE5LS4yMi0yLjM1LDAtNC41MiwwLTYsLjA4YTEuNjMsMS42MywwLDAsMS0xLjc4LTEuNzQsMS41OSwxLjU5LDAsMCwxLDEuNjMtMS43aC4wN2MxLjEzLDAsMy40OCwwLDYsMCwuMjIsMCwuMjIsMCwuMjYtLjIyYTEuNTksMS41OSwwLDAsMC0uMjItMUM0Ny4wOCwzMCw0Ni44NiwzMCw0Ni42OCwzMGMtMS44MSwwLTMuNDQsMC00LjY3LjA3YTEuNjQsMS42NCwwLDAsMS0xLjc4LTEuNywxLjU5LDEuNTksMCwwLDEsMS42My0xLjY3aC4wN2MuNTgsMCwxLjQ1LDAsMi41LDAsLjI5LDAsLjI5LDAsLjI5LDBzMCwwLTUuMDctNy41M2EyLDIsMCwwLDEtLjQtMS4yLDIuMTMsMi4xMywwLDAsMSwyLjEtMiwxLjgxLDEuODEsMCwwLDEsMS42MywxYzEuNDUsMi41NCwzLjg0LDYsNi4yNyw5LjY0LjExLjE0LjE1LjEuMzYuMTRoMS41MmMuMTksMCwuMTksMCwuMjktLjE0YTExMi43OCwxMTIuNzgsMCwwLDAsNi4xMy05LjY4LDEuNzEsMS43MSwwLDAsMSwxLjUyLS45NEEyLjI5LDIuMjksMCwwLDEsNjEuMzUsMThjMCwuNjEsMCwuNjUtNS4yNSw4LjQ3LDAsLjA4LS4wOC4xMS0uMDguMTVzMCwwLC4xOSwwaDEuN2ExLjY0LDEuNjQsMCwwLDEsMS43NCwxLjY3QTEuNjYsMS42NiwwLDAsMSw1Ny45MSwzMGgwbC0zLjk1LDBjLS4yOSwwLS4yNSwwLS40LjIxbC0uNjUuOTFhMiwyLDAsMCwwLS41LDEuNTJjMCwuMTUuMDcuMTguMjUuMTgsMi4xNywwLDQuMTMsMCw1LjI1LDBoMGExLjcyLDEuNzIsMCwxLDEsMCwzLjQ0WiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTY2LjQ5LDYzLjM2aC0zM2MtMS43Mi4xLTMsMS4yLTIuOTEsMi41czEuMzIsMi4xLDIuOTEsMi4yaDMzYzEuNzItLjEsMy0xLjIsMi45MS0yLjVBMi45NCwyLjk0LDAsMCwwLDY2LjQ5LDYzLjM2WiIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTY2LjQ5LDc1LjA2aC0zM2MtMS43Mi4xLTMsMS4yLTIuOTEsMi41czEuMzIsMi4xLDIuOTEsMi4yaDMzYzEuNzItLjEsMy0xLjIsMi45MS0yLjVTNjguMDgsNzUuMTYsNjYuNDksNzUuMDZaIi8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNODQuNTcsMTkuMzZoLTQuN2EyNS42MywyNS42MywwLDAsMSwuODUsNWgxLjg1Vjg5LjVIMTcuNDNWMjQuMzZoMS44NWEyNS42MywyNS42MywwLDAsMSwuODUtNWgtNC43YTMsMywwLDAsMC0zLDNWOTEuNWEzLDMsMCwwLDAsMywzSDg0LjU3YTMsMywwLDAsMCwzLTNWMjIuMzZBMywzLDAsMCwwLDg0LjU3LDE5LjM2WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr-profile.svg":
/*!************************************!*\
  !*** ./src/icons/jinr-profile.svg ***!
  \************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrProfile; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrProfile(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-profile_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-profile_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-profile_svg__cls-1",
    d: "M91 13.5v-2A2.5 2.5 0 0088.48 9h-77A2.5 2.5 0 009 11.5v76.97a2.5 2.5 0 002.5 2.5H13a4.41 4.41 0 00.52 0h73A4.41 4.41 0 0087 91h1.46a2.5 2.5 0 002.5-2.5v-1.68-.32zm-5 .5v72h-5.2l-3-14.65a12.41 12.41 0 00-12.12-9.89H34.35a12.41 12.41 0 00-12.12 9.89L19.22 86H14V14zM75.68 86H24.32l2.8-13.65a7.42 7.42 0 017.23-5.89h31.3a7.4 7.4 0 017.22 5.89z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-profile_svg__cls-1",
    d: "M50 56.76a19.25 19.25 0 10-19.25-19.25A19.28 19.28 0 0050 56.76zm0-33.5a14.25 14.25 0 11-14.25 14.25A14.26 14.26 0 0150 23.26z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTkxLDEzLjVjMC0uMTEsMC0uMjEsMC0uMzJWMTEuNUEyLjUsMi41LDAsMCwwLDg4LjQ4LDloLTc3QTIuNSwyLjUsMCwwLDAsOSwxMS41djEuNjhjMCwuMTEsMCwuMjEsMCwuMzJ2NzNjMCwuMTEsMCwuMjEsMCwuMzJ2MS42NWEyLjUsMi41LDAsMCwwLDIuNSwyLjVIMTNhNC40MSw0LjQxLDAsMCwwLC41MiwwaDczQTQuNDEsNC40MSwwLDAsMCw4Nyw5MWgxLjQ2YTIuNSwyLjUsMCwwLDAsMi41LTIuNVY4Ni44MmMwLS4xMSwwLS4yMSwwLS4zMlpNODYsMTRWODZoLTUuMmwtMy0xNC42NWExMi40MSwxMi40MSwwLDAsMC0xMi4xMi05Ljg5SDM0LjM1YTEyLjQxLDEyLjQxLDAsMCwwLTEyLjEyLDkuODlMMTkuMjIsODZIMTRWMTRaTTc1LjY4LDg2SDI0LjMybDIuOC0xMy42NWE3LjQyLDcuNDIsMCwwLDEsNy4yMy01Ljg5aDMxLjNhNy40LDcuNCwwLDAsMSw3LjIyLDUuODlaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNTAsNTYuNzZBMTkuMjUsMTkuMjUsMCwxLDAsMzAuNzUsMzcuNTEsMTkuMjgsMTkuMjgsMCwwLDAsNTAsNTYuNzZabTAtMzMuNUExNC4yNSwxNC4yNSwwLDEsMSwzNS43NSwzNy41MSwxNC4yNiwxNC4yNiwwLDAsMSw1MCwyMy4yNloiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-richmenu.svg":
/*!*************************************!*\
  !*** ./src/icons/jinr-richmenu.svg ***!
  \*************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrRichmenu; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _path2, _path3, _path4, _path5;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrRichmenu(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-richmenu_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-richmenu_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-richmenu_svg__cls-1",
    d: "M43 9H13.48A4.45 4.45 0 009 13.48V43a4.45 4.45 0 004.45 4.45H43A4.45 4.45 0 0047.47 43V13.48A4.45 4.45 0 0043 9zm-.49 33.5H14V14h28.53z"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-richmenu_svg__cls-1",
    d: "M18.88 29.18a15 15 0 018.43 8.44 1 1 0 001.88 0 15 15 0 018.43-8.44 1 1 0 000-1.87 15 15 0 01-8.43-8.43 1 1 0 00-1.88 0 15 15 0 01-8.43 8.43 1 1 0 000 1.87zM86.27 9H56.73a4.45 4.45 0 00-4.45 4.45V43a4.45 4.45 0 004.45 4.45h29.54A4.45 4.45 0 0090.72 43V13.48A4.45 4.45 0 0086.27 9zm-.49 33.5H57.22V14h28.56z"
  })), _path3 || (_path3 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-richmenu_svg__cls-1",
    d: "M62.13 29.18a15 15 0 018.43 8.44 1 1 0 001.88 0 15 15 0 018.43-8.44 1 1 0 000-1.87 15 15 0 01-8.43-8.43 1 1 0 00-1.88 0 15 15 0 01-8.43 8.43 1 1 0 000 1.87zM43 52.28H13.48A4.45 4.45 0 009 56.73v29.54a4.45 4.45 0 004.45 4.45H43a4.45 4.45 0 004.45-4.45V56.73A4.45 4.45 0 0043 52.28zm-.49 33.5H14V57.22h28.53z"
  })), _path4 || (_path4 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-richmenu_svg__cls-1",
    d: "M18.88 72.44a15 15 0 018.43 8.43 1 1 0 001.88 0 14.94 14.94 0 018.43-8.43 1 1 0 000-1.88 14.94 14.94 0 01-8.43-8.43 1 1 0 00-1.88 0 15 15 0 01-8.43 8.43 1 1 0 000 1.88zM86.27 52.28H56.73a4.45 4.45 0 00-4.45 4.45v29.54a4.45 4.45 0 004.45 4.45h29.54a4.45 4.45 0 004.45-4.45V56.73a4.45 4.45 0 00-4.45-4.45zm-.49 33.5H57.22V57.22h28.56z"
  })), _path5 || (_path5 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-richmenu_svg__cls-1",
    d: "M62.13 72.44a15 15 0 018.43 8.43 1 1 0 001.88 0 14.94 14.94 0 018.43-8.43 1 1 0 000-1.88 14.94 14.94 0 01-8.43-8.43 1 1 0 00-1.88 0 15 15 0 01-8.43 8.43 1 1 0 000 1.88z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTQzLDlIMTMuNDhBNC40NSw0LjQ1LDAsMCwwLDksMTMuNDhWNDNhNC40NSw0LjQ1LDAsMCwwLDQuNDUsNC40NUg0M0E0LjQ1LDQuNDUsMCwwLDAsNDcuNDcsNDNWMTMuNDhBNC40NSw0LjQ1LDAsMCwwLDQzLDlabS0uNDksMzMuNUgxNFYxNEg0Mi41M1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xOC44OCwyOS4xOGExNSwxNSwwLDAsMSw4LjQzLDguNDQsMSwxLDAsMCwwLDEuODgsMCwxNSwxNSwwLDAsMSw4LjQzLTguNDQsMSwxLDAsMCwwLDAtMS44NywxNSwxNSwwLDAsMS04LjQzLTguNDMsMSwxLDAsMCwwLTEuODgsMCwxNSwxNSwwLDAsMS04LjQzLDguNDNBMSwxLDAsMCwwLDE4Ljg4LDI5LjE4WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjI3LDlINTYuNzNhNC40NSw0LjQ1LDAsMCwwLTQuNDUsNC40NVY0M2E0LjQ1LDQuNDUsMCwwLDAsNC40NSw0LjQ1SDg2LjI3QTQuNDUsNC40NSwwLDAsMCw5MC43Miw0M1YxMy40OEE0LjQ1LDQuNDUsMCwwLDAsODYuMjcsOVptLS40OSwzMy41SDU3LjIyVjE0SDg1Ljc4WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTYyLjEzLDI5LjE4YTE1LDE1LDAsMCwxLDguNDMsOC40NCwxLDEsMCwwLDAsMS44OCwwLDE1LDE1LDAsMCwxLDguNDMtOC40NCwxLDEsMCwwLDAsMC0xLjg3LDE1LDE1LDAsMCwxLTguNDMtOC40MywxLDEsMCwwLDAtMS44OCwwLDE1LDE1LDAsMCwxLTguNDMsOC40M0ExLDEsMCwwLDAsNjIuMTMsMjkuMThaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDMsNTIuMjhIMTMuNDhBNC40NSw0LjQ1LDAsMCwwLDksNTYuNzNWODYuMjdhNC40NSw0LjQ1LDAsMCwwLDQuNDUsNC40NUg0M2E0LjQ1LDQuNDUsMCwwLDAsNC40NS00LjQ1VjU2LjczQTQuNDUsNC40NSwwLDAsMCw0Myw1Mi4yOFptLS40OSwzMy41SDE0VjU3LjIySDQyLjUzWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTE4Ljg4LDcyLjQ0YTE1LDE1LDAsMCwxLDguNDMsOC40MywxLDEsMCwwLDAsMS44OCwwLDE0Ljk0LDE0Ljk0LDAsMCwxLDguNDMtOC40MywxLDEsMCwwLDAsMC0xLjg4LDE0Ljk0LDE0Ljk0LDAsMCwxLTguNDMtOC40MywxLDEsMCwwLDAtMS44OCwwLDE1LDE1LDAsMCwxLTguNDMsOC40M0ExLDEsMCwwLDAsMTguODgsNzIuNDRaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODYuMjcsNTIuMjhINTYuNzNhNC40NSw0LjQ1LDAsMCwwLTQuNDUsNC40NVY4Ni4yN2E0LjQ1LDQuNDUsMCwwLDAsNC40NSw0LjQ1SDg2LjI3YTQuNDUsNC40NSwwLDAsMCw0LjQ1LTQuNDVWNTYuNzNBNC40NSw0LjQ1LDAsMCwwLDg2LjI3LDUyLjI4Wm0tLjQ5LDMzLjVINTcuMjJWNTcuMjJIODUuNzhaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjIuMTMsNzIuNDRhMTUsMTUsMCwwLDEsOC40Myw4LjQzLDEsMSwwLDAsMCwxLjg4LDAsMTQuOTQsMTQuOTQsMCwwLDEsOC40My04LjQzLDEsMSwwLDAsMCwwLTEuODgsMTQuOTQsMTQuOTQsMCwwLDEtOC40My04LjQzLDEsMSwwLDAsMC0xLjg4LDAsMTUsMTUsMCwwLDEtOC40Myw4LjQzQTEsMSwwLDAsMCw2Mi4xMyw3Mi40NFoiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-separator.svg":
/*!**************************************!*\
  !*** ./src/icons/jinr-separator.svg ***!
  \**************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrSeparator; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrSeparator(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-separator_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-separator_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-separator_svg__cls-1",
    d: "M88.5 40a2.5 2.5 0 00-2.5 2.5v5H73.5a2.5 2.5 0 000 5H86v5a2.5 2.5 0 005 0v-15a2.5 2.5 0 00-2.5-2.5zM11.5 60a2.5 2.5 0 002.5-2.5v-5h12.5a2.5 2.5 0 000-5H14v-5a2.5 2.5 0 00-5 0v15a2.5 2.5 0 002.5 2.5zM86.5 9h-73A4.51 4.51 0 009 13.5v11a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5v-11A4.51 4.51 0 0086.5 9zM86 24H14V14h72zM86.5 71h-73A4.51 4.51 0 009 75.5v11a4.51 4.51 0 004.5 4.5h73a4.51 4.51 0 004.5-4.5v-11a4.51 4.51 0 00-4.5-4.5zM86 86H14V76h72zM60 52.5a2.5 2.5 0 000-5H40a2.5 2.5 0 000 5z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg4LjUsNDBBMi41LDIuNSwwLDAsMCw4Niw0Mi41djVINzMuNWEyLjUsMi41LDAsMCwwLDAsNUg4NnY1YTIuNSwyLjUsMCwwLDAsNSwwdi0xNUEyLjUsMi41LDAsMCwwLDg4LjUsNDBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTEuNSw2MEEyLjUsMi41LDAsMCwwLDE0LDU3LjV2LTVIMjYuNWEyLjUsMi41LDAsMCwwLDAtNUgxNHYtNWEyLjUsMi41LDAsMCwwLTUsMHYxNUEyLjUsMi41LDAsMCwwLDExLjUsNjBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODYuNSw5aC03M0E0LjUxLDQuNTEsMCwwLDAsOSwxMy41djExQTQuNTEsNC41MSwwLDAsMCwxMy41LDI5aDczQTQuNTEsNC41MSwwLDAsMCw5MSwyNC41di0xMUE0LjUxLDQuNTEsMCwwLDAsODYuNSw5Wk04NiwyNEgxNFYxNEg4NloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04Ni41LDcxaC03M0E0LjUxLDQuNTEsMCwwLDAsOSw3NS41djExQTQuNTEsNC41MSwwLDAsMCwxMy41LDkxaDczQTQuNTEsNC41MSwwLDAsMCw5MSw4Ni41di0xMUE0LjUxLDQuNTEsMCwwLDAsODYuNSw3MVpNODYsODZIMTRWNzZIODZaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjAsNTIuNWEyLjUsMi41LDAsMCwwLDAtNUg0MGEyLjUsMi41LDAsMCwwLDAsNVoiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-tab.svg":
/*!********************************!*\
  !*** ./src/icons/jinr-tab.svg ***!
  \********************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrTab; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _path, _path2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrTab(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 500 500"
  }, props), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M47.11 200.8h176.38c3.3 0 5.99 2.68 5.99 5.99v78.48H41.13v-78.48c0-3.3 2.68-5.99 5.99-5.99z",
    stroke: "#407fed",
    strokeMiterlimit: 10,
    strokeWidth: 22,
    fill: "#407fed"
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    d: "M270.52 199.63h182.37c3.3 0 5.99 2.68 5.99 5.99v79.64H264.54v-79.64c0-3.3 2.68-5.99 5.99-5.99z",
    fill: "none",
    stroke: "#407fed",
    strokeMiterlimit: 10,
    strokeWidth: 22
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIGlkPSJf44Os44Kk44Ok44O8XzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDUwMCA1MDAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojNDA3ZmVkO30uY2xzLTEsLmNscy0ye3N0cm9rZTojNDA3ZmVkO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS13aWR0aDoyMnB4O30uY2xzLTJ7ZmlsbDpub25lO308L3N0eWxlPjwvZGVmcz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Im00Ny4xMSwyMDAuOGgxNzYuMzhjMy4zLDAsNS45OSwyLjY4LDUuOTksNS45OXY3OC40OEg0MS4xM3YtNzguNDhjMC0zLjMsMi42OC01Ljk5LDUuOTktNS45OVoiLz48cGF0aCBjbGFzcz0iY2xzLTIiIGQ9Im0yNzAuNTIsMTk5LjYzaDE4Mi4zN2MzLjMsMCw1Ljk5LDIuNjgsNS45OSw1Ljk5djc5LjY0aC0xOTQuMzR2LTc5LjY0YzAtMy4zLDIuNjgtNS45OSw1Ljk5LTUuOTlaIi8+PC9zdmc+");


/***/ }),

/***/ "./src/icons/jinr-template-button.svg":
/*!********************************************!*\
  !*** ./src/icons/jinr-template-button.svg ***!
  \********************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrTemplateButton; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _g;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrTemplateButton(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    xmlns: "http://www.w3.org/2000/svg",
    width: "100%",
    id: "jinr-template-button_svg__jinr-template-button_svg",
    viewBox: "0 0 216.61 32.82"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-template-button_svg__cls-1{fill:#1e2327}"))), _g || (_g = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("g", {
    id: "jinr-template-button_svg__\\u30EC\\u30A4\\u30E4\\u30FC_8",
    "data-name": "\\u30EC\\u30A4\\u30E4\\u30FC 8"
  }, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    d: "M10.52 20l1-.71a1.56 1.56 0 001.43 1c.89 0 1.33-.48 1.33-1.77v-6h1.39v6.08c0 1.58-.76 2.85-2.56 2.85A2.71 2.71 0 0110.52 20zM17.92 12.47h1.4v8.83h-1.4zM21.63 12.47h1.43L26 17.65l.92 1.87H27c-.07-.91-.18-2-.18-2.94v-4.11h1.32v8.83h-1.46l-2.92-5.21-.93-1.84h-.06c.07.91.18 1.93.18 2.89v4.16h-1.32zM30.14 15.78a.93.93 0 111.85 0 .93.93 0 11-1.85 0zm0 4.71a.93.93 0 111.85 0 .93.93 0 11-1.85 0zM38.84 21.3l-2-3.56h-1.43v3.56H34v-8.83h2.89c1.82 0 3.19.65 3.19 2.56a2.46 2.46 0 01-1.85 2.53l2.16 3.74zm-3.43-4.68h1.33c1.28 0 2-.53 2-1.59s-.7-1.44-2-1.44h-1.33zM53.6 15.5a8.92 8.92 0 001-.05v1.23h-4.09a7.22 7.22 0 01-.74 3.19 5.92 5.92 0 01-2.37 2.24l-1.12-.82a5 5 0 002.22-1.78 5.59 5.59 0 00.72-2.83H44.66v-1.23c.35 0 .72.05 1.09.05zm-6.35-1.9c-.41 0-.85 0-1.17.05v-1.24a8.82 8.82 0 001.16.07h4a9.66 9.66 0 001.2-.07v1.24c-.38 0-.81-.05-1.2-.05zm6.08-.12a13.86 13.86 0 00-.95-1.66l.77-.32a16.82 16.82 0 011 1.64zM54.51 11a12.23 12.23 0 011 1.63l-.78.33a10.77 10.77 0 00-1-1.64zM65.4 14.51a8.87 8.87 0 001.2-.07v1.27a10.11 10.11 0 00-1.18 0h-1.13v.41c0 3.09-.71 4.81-3.51 6.06l-1-1c2.24-.82 3.29-1.85 3.29-5v-.48H59.9v1.8c0 .48 0 1 .05 1.17h-1.33c0-.17.06-.68.06-1.17v-1.8H56.25v-1.3a8.15 8.15 0 001.25.1h1.18v-1.37c0-.42 0-.8-.06-1H60a8.23 8.23 0 00-.06 1v1.38h3.15v-1.39a7.1 7.1 0 00-.06-1h1.36c0 .17-.06.56-.06 1v1.39zm0-.55a14.5 14.5 0 00-.66-1.67l.68-.21a13.75 13.75 0 01.67 1.64zm1.23-.39a14.57 14.57 0 00-.68-1.65l.68-.22a14 14 0 01.69 1.65zM75 20.33a9 9 0 00.08 1.41h-1.51c0-.26.07-.92.07-1.41v-4.27a23.31 23.31 0 01-4.34 1.76l-.69-1.16A18.83 18.83 0 0074 14.47a13.05 13.05 0 003.13-2.68l1 .92A20 20 0 0175 15.29zM86 18.71a11.46 11.46 0 004.16-4.52l.73 1.3a12.3 12.3 0 01-4.21 4.34 13 13 0 01-4.59 1.79l-.81-1.23A12.64 12.64 0 0086 18.71zm-.41-3.84l-1 1a26.1 26.1 0 00-3-2.54l.88-.94a24.47 24.47 0 013.11 2.48zM101.62 21.08c.47 0 .54-.19.59-1.64a3.13 3.13 0 001 .45c-.13 1.8-.44 2.25-1.52 2.25H100c-1.26 0-1.57-.34-1.57-1.47V18.5h-1.77c-.28 1.91-1 3.13-3.83 3.77a3.32 3.32 0 00-.64-1c2.46-.48 3-1.36 3.28-2.79h-1.55v-6.85h7.63v6.87h-2v2.17c0 .36.09.41.56.41zM95 13.63h5.42v-1H95zm0 1.94h5.42v-1H95zm0 1.95h5.42v-1H95zM111 14.79a10.62 10.62 0 004.4 4.61 5.31 5.31 0 00-.84 1 11.72 11.72 0 01-4.24-4.61V19h2.14v1.13h-2.14v2.12h-1.18v-2.14h-2.19V19h2.19v-3.21a12.1 12.1 0 01-4.22 4.63 6.86 6.86 0 00-.79-.92 11.11 11.11 0 004.34-4.71h-3.92v-1.13h4.59v-2.42h1.18v2.42h4.64v1.13zM120.56 18.62a1 1 0 01-.28.85 1.37 1.37 0 01-.9.2 2.79 2.79 0 00-.28-1h.55c.07 0 .09 0 .09-.13v-4.09H119v7.8h-1v-7.8h-.72v5.34h-.83v-6.34H118v-2.2h1v2.2h1.57zm6.62-.2a15.34 15.34 0 01-1.78 1.34 4.26 4.26 0 002 1.53 4.46 4.46 0 00-.72 1c-1.78-.81-2.72-2.46-3.23-4.71h-.9v3.27l2-.34.07.94c-1.4.25-2.87.51-4 .69l-.23-1 1.09-.16v-3.44h-.78v-.92h.79v-4.91h5.17v.93h-4.11v.74h3.72v.85h-3.72V15h3.72v.84h-3.72v.78h4.59v.92h-2.74a7.87 7.87 0 00.54 1.46 15.49 15.49 0 001.5-1.25zM134 10.74v12h-.52v-12zM148.66 21.48v-.65H143c-.49 0-1.09 0-1.44.05v-1.36c.35 0 .87.06 1.39.06h5.74v-5.35H141.7V13c.42 0 1 .07 1.39.07h7v7.2c0 .42 0 1 .05 1.27zM155.13 15.82a31.73 31.73 0 004.38-1.41 6.74 6.74 0 001.14-.57 1.38 1.38 0 011-2.35 1.38 1.38 0 110 2.76 1.37 1.37 0 01-.93-.38l.5 1.17c-.4.15-.87.37-1.26.5a43.89 43.89 0 01-4.81 1.52v2.45c0 .58.25.72.82.84a10.39 10.39 0 001.5.08 20 20 0 004.12-.39v1.38a36.06 36.06 0 01-4.2.24 13.51 13.51 0 01-2-.12c-1-.18-1.53-.66-1.53-1.67V13.3a6.79 6.79 0 00-.08-1.08h1.4a9.33 9.33 0 00-.07 1.08zm7.26-3a.77.77 0 00-.76-.76.76.76 0 00-.74.76.74.74 0 00.74.74.76.76 0 00.76-.69zM165.18 17.18c.55-.56 1.54-1.82 2.34-2.75s1.23-.88 2.14-.11a26 26 0 012.47 2.46c.81.86 2.05 2.19 2.92 3.21l-1 1.08c-.8-1-1.89-2.3-2.64-3.17a32.07 32.07 0 00-2.29-2.41c-.45-.38-.64-.38-1 .09-.54.66-1.48 1.92-2 2.58l-.72 1-1.13-1.16c.32-.24.56-.48.91-.82zm7.9-4.65a1.5 1.5 0 11-1.5 1.51 1.5 1.5 0 011.5-1.51zm0 2.34a.83.83 0 10-.83-.83.83.83 0 00.83.83z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    d: "M14.21 12.47v6c0 1.21-.38 1.73-1.29 1.73a1.66 1.66 0 01-1.45-.95l-1 .76a2.74 2.74 0 002.59 1.48c1.63 0 2.6-1.08 2.6-2.89v-6.17zM17.89 12.47l.04 8.87h1.43l-.04-8.91-1.43.04zM26.75 12.47v4.11c0 .78.07 1.64.13 2.4l.07.52-.95-1.87-3-5.2h-1.47v8.87h1.36v-4.16c0-.77-.07-1.56-.13-2.33l-.06-.55.92 1.85 3 5.23h1.47v-8.91zM31.06 14.76a1 1 0 00-1 1 1 1 0 101.93 0 1 1 0 00-.93-1zM31.06 19.47a1 1 0 00-1 1 1 1 0 101.93 0 1 1 0 00-.93-1zM40.14 15c0-1.73-1.09-2.6-3.23-2.6h-2.93v8.87h1.43v-3.52h1.39l2 3.59h1.64l-2.22-3.75A2.48 2.48 0 0040.14 15zm-3.4 1.55h-1.29v-3h1.29c1.36 0 1.94.41 1.94 1.4s-.68 1.63-1.94 1.63zM47.25 13.64h5.2v-1.32a9 9 0 01-1.2.07h-5.2v1.28c.35-.01.79-.03 1.2-.03zM53.6 15.46h-9v1.28H49.12a5.25 5.25 0 01-.72 2.81 5.66 5.66 0 01-2.2 1.84l1.13.83a6 6 0 002.4-2.25 6.88 6.88 0 00.7-3.17H54a5.06 5.06 0 00.56 0v-1.27a8.17 8.17 0 01-.96-.07zM53.31 13.53l.85-.41a13.51 13.51 0 00-1-1.66l-.79.39a14.34 14.34 0 01.95 1.65zM53.71 11.34a12.24 12.24 0 011 1.64l.84-.4a9.62 9.62 0 00-1-1.65zM65.4 14.47h-1.07v-1.35-1.08h-1.4a7 7 0 01.06 1v1.35h-3.11v-1.26-1H58.5v.16a7.93 7.93 0 010 .81v1.34h-1c-.51 0-1-.06-1.21-.06h-.08v1.34h2.38v3.01l1.41-.1c0-.17-.05-.68-.05-1.16v-1.76h3.11v.48c0 3.21-1.1 4.2-3.28 5.06l1 1c3-1.32 3.54-3.16 3.54-6.09v-.37h2.35v-1.31a8.38 8.38 0 01-1.27-.01z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    d: "M65.33 14l.76-.31a10.7 10.7 0 00-.72-1.69l-.71.27a15.07 15.07 0 01.66 1.73zM65.87 11.94a12.26 12.26 0 01.68 1.65l.74-.29a9.31 9.31 0 00-.73-1.67zM77.12 11.76A13 13 0 0174 14.44a20.76 20.76 0 01-5.42 2.24l.73 1.18a19.74 19.74 0 004.29-1.8v5.72h1.5v-.05a8.62 8.62 0 01-.08-1.4v-5a17.15 17.15 0 003.21-2.64zM84.63 15.9l1-1.06a21.65 21.65 0 00-3.13-2.51l-.87 1a28.26 28.26 0 013 2.54zM86 18.67a13.65 13.65 0 01-4.73 1.74l.82 1.26a13.23 13.23 0 004.61-1.79 12.09 12.09 0 004.22-4.4l-.8-1.3A11.38 11.38 0 0186 18.67zM101.62 21h-1.54c-.46 0-.52 0-.52-.37V18.5h2.07v-6.91h-7.67v6.91h1.51c-.23 1.41-.81 2.27-3.27 2.81a3.37 3.37 0 01.63 1c2.86-.65 3.58-1.89 3.82-3.77h1.68v2.17c0 1.17.36 1.51 1.61 1.51h1.78c1.11 0 1.43-.47 1.53-2.32a6.34 6.34 0 01-1.09-.42c-.04 1.44-.16 1.52-.54 1.52zM95 12.67h5.34v1h-5.38zm0 1.92h5.34v1h-5.38zm0 2.93v-1h5.34v1zM111 14.83h4v-1.17h-4.6V11.2h-1.22v2.38h-4.63v1.17l3.88-.06a11.64 11.64 0 01-4.33 4.76 9.64 9.64 0 01.84.93 11.49 11.49 0 004.16-4.67v3.15h-2.23v1.17h2.15v2.16h1.22v-2.12h2.18V18.9h-2.1l-.08-3.18a11.26 11.26 0 004.32 4.61 8.08 8.08 0 01.82-1 11 11 0 01-4.38-4.5zM120.56 13.41h-1.53v-2.24h-1v2.16h-1.59v6.38h.87v-5.3h.68v7.84h1v-7.8h.71v4.24a3.38 3.38 0 00-.59 0 3.94 3.94 0 01.32 1 1.42 1.42 0 00.93-.2 1.06 1.06 0 00.29-.89zM125.43 19.8a12.69 12.69 0 001.78-1.41l-.8-.67c-.46.48-1.2 1-1.44 1.26-.22-.45-.39-.92-.57-1.4h2.78v-1h-4.55v-.74h3.76v-.88h-3.68v-.73h3.76v-.89h-3.68v-.7h4.15v-1h-5.21v4.87h-.83v1h.74v3.38l-.62.09-.51.12.28 1c1-.16 2.27-.39 3.53-.61l.48-.13-.12-1a4.84 4.84 0 002.13 1.84 7.25 7.25 0 01.7-1 4.6 4.6 0 01-2.08-1.4zm-2.36.88l-.5.13v-3.23h.86a9 9 0 001.13 2.88zM133.41 10.74l.04 12.04h.56l-.04-12.08-.56.04zM150 20.21V14v-1h-8.43v1.32H148.52v5.31h-7.17v1.4c.35 0 .95-.05 1.44-.05h5.64v.69h1.41v-.05c.16-.41.16-1 .16-1.41zM161.63 11.45a1.42 1.42 0 00-1.42 1.42 1.17 1.17 0 00.42.93 7.59 7.59 0 01-1.14.58 42.77 42.77 0 01-4.32 1.44V13.3v-1.12l-1.44.05a6.93 6.93 0 01.08 1.07v6.57c0 1 .5 1.51 1.56 1.71a13.19 13.19 0 002 .12 29.71 29.71 0 004.24-.28l-.05-1.42a19.45 19.45 0 01-4.11.39 9.4 9.4 0 01-1.49-.08c-.56-.12-.79-.25-.79-.8V17.1a45.94 45.94 0 004.83-1.52l.82-.32.47-.24-.57-1.12a1.42 1.42 0 101-2.45zm0 2.12a.7.7 0 01-.7-.7.71.71 0 11.7.7zM172.16 16.75a27.29 27.29 0 00-2.47-2.46 1.86 1.86 0 00-1.13-.55 1.45 1.45 0 00-1.07.66c-.26.3-.54.64-.82 1-.56.69-1.15 1.4-1.52 1.78l-.18.17c-.26.25-.47.45-.73.73l1.17 1.13.72-1 .67-.87c.46-.6 1-1.28 1.33-1.71.2-.24.34-.35.47-.35s.27.08.5.27c.5.43 1.54 1.57 2.28 2.41s1.83 2.12 2.64 3.16l1-1.17c-.8-.93-1.9-2.12-2.71-3zM173.08 15.57a1.54 1.54 0 10-1.54-1.57 1.54 1.54 0 001.54 1.57zm0-2.32a.79.79 0 11-.79.79.8.8 0 01.79-.79zM187.09 13.18v-1.16H176.4v1.16h8v7.55c0 .23-.06.29-.31.3h-2.23a4.87 4.87 0 01.46 1.19 8.18 8.18 0 002.57-.21c.5-.17.71-.55.71-1.3v-7.54z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    d: "M182.55 19.26v-4.55h-5v5.48h1.12v-.93zm-3.86-3.42h2.68v2.36h-2.72z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    d: "M187.05 13.18h-1.43v7.58c0 .72-.18 1.09-.68 1.26a8.36 8.36 0 01-2.56.21 5.14 5.14 0 00-.47-1.2h2.2c.29 0 .35-.08.35-.34v-7.51h-8.06v-1.12h10.65zm-8.4 6.08v.93h-1.08v-5.44h4.94v4.51zm0-3.46v2.4h2.76v-2.4z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("rect", {
    x: 0.5,
    y: 0.5,
    width: 215.61,
    height: 31.82,
    rx: 2,
    fill: "none",
    stroke: "#1e2327",
    strokeMiterlimit: 10
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    d: "M203.37 18.06h-1v-4.49h-4.29v-1h5.29v5.49z"
  }), /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-template-button_svg__cls-1",
    transform: "rotate(-45 198.257 17.69)",
    d: "M191.71 17.19h13.07v1h-13.07z"
  }))));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBpZD0iamluci10ZW1wbGF0ZS1idXR0b25fc3ZnIiB2aWV3Qm94PSIwIDAgMjE2LjYxIDMyLjgyIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzFlMjMyNzt9LmNscy0ye2ZpbGw6bm9uZTtzdHJva2U6IzFlMjMyNztzdHJva2UtbWl0ZXJsaW1pdDoxMDt9PC9zdHlsZT48L2RlZnM+PGcgaWQ9IuODrOOCpOODpOODvF84IiBkYXRhLW5hbWU9IuODrOOCpOODpOODvCA4Ij48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xMC41MiwyMGwxLS43MWExLjU2LDEuNTYsMCwwLDAsMS40MywxYy44OSwwLDEuMzMtLjQ4LDEuMzMtMS43N3YtNmgxLjM5VjE4LjZjMCwxLjU4LS43NiwyLjg1LTIuNTYsMi44NUEyLjcxLDIuNzEsMCwwLDEsMTAuNTIsMjBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTcuOTIsMTIuNDdoMS40VjIxLjNoLTEuNFoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yMS42MywxMi40N2gxLjQzTDI2LDE3LjY1bC45MiwxLjg3SDI3Yy0uMDctLjkxLS4xOC0yLS4xOC0yLjk0VjEyLjQ3aDEuMzJWMjEuM0gyNi42OGwtMi45Mi01LjIxLS45My0xLjg0aC0uMDZjLjA3LjkxLjE4LDEuOTMuMTgsMi44OVYyMS4zSDIxLjYzWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTMwLjE0LDE1Ljc4YS45My45MywwLDEsMSwxLjg1LDAsLjkzLjkzLDAsMSwxLTEuODUsMFptMCw0LjcxYS45My45MywwLDEsMSwxLjg1LDAsLjkzLjkzLDAsMSwxLTEuODUsMFoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zOC44NCwyMS4zbC0yLTMuNTZIMzUuNDFWMjEuM0gzNFYxMi40N2gyLjg5YzEuODIsMCwzLjE5LjY1LDMuMTksMi41NmEyLjQ2LDIuNDYsMCwwLDEtMS44NSwyLjUzbDIuMTYsMy43NFptLTMuNDMtNC42OGgxLjMzYzEuMjgsMCwyLS41MywyLTEuNTlzLS43LTEuNDQtMi0xLjQ0SDM1LjQxWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTUzLjYsMTUuNWE4LjkyLDguOTIsMCwwLDAsMS0uMDV2MS4yM2wtMSwwSDUwLjUxYTcuMjIsNy4yMiwwLDAsMS0uNzQsMy4xOSw1LjkyLDUuOTIsMCwwLDEtMi4zNywyLjI0bC0xLjEyLS44MmE1LDUsMCwwLDAsMi4yMi0xLjc4LDUuNTksNS41OSwwLDAsMCwuNzItMi44M0g0NS43NWMtLjM2LDAtLjc1LDAtMS4wOSwwVjE1LjQ1Yy4zNSwwLC43Mi4wNSwxLjA5LjA1Wm0tNi4zNS0xLjljLS40MSwwLS44NSwwLTEuMTcuMDVWMTIuNDFhOC44Miw4LjgyLDAsMCwwLDEuMTYuMDdoNGE5LjY2LDkuNjYsMCwwLDAsMS4yLS4wN3YxLjI0Yy0uMzgsMC0uODEtLjA1LTEuMi0uMDVabTYuMDgtLjEyYTEzLjg2LDEzLjg2LDAsMCwwLS45NS0xLjY2bC43Ny0uMzJhMTYuODIsMTYuODIsMCwwLDEsMSwxLjY0Wk01NC41MSwxMWExMi4yMywxMi4yMywwLDAsMSwxLDEuNjNsLS43OC4zM2ExMC43NywxMC43NywwLDAsMC0xLTEuNjRaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNjUuNCwxNC41MWE4Ljg3LDguODcsMCwwLDAsMS4yLS4wN3YxLjI3YTEwLjExLDEwLjExLDAsMCwwLTEuMTgsMEg2NC4yOXYuNDFjMCwzLjA5LS43MSw0LjgxLTMuNTEsNi4wNmwtMS0xYzIuMjQtLjgyLDMuMjktMS44NSwzLjI5LTV2LS40OEg1OS45djEuOGMwLC40OCwwLDEsLjA1LDEuMTdINTguNjJjMC0uMTcuMDYtLjY4LjA2LTEuMTd2LTEuOEg1Ny41Yy0uNTUsMC0xLDAtMS4yNSwwdi0xLjNhOC4xNSw4LjE1LDAsMCwwLDEuMjUuMWgxLjE4VjEzLjEzYzAtLjQyLDAtLjgtLjA2LTFINjBhOC4yMyw4LjIzLDAsMCwwLS4wNiwxdjEuMzhoMy4xNVYxMy4xMmE3LjEsNy4xLDAsMCwwLS4wNi0xaDEuMzZjMCwuMTctLjA2LjU2LS4wNiwxdjEuMzlabTAtLjU1YTE0LjUsMTQuNSwwLDAsMC0uNjYtMS42N2wuNjgtLjIxYTEzLjc1LDEzLjc1LDAsMCwxLC42NywxLjY0Wm0xLjIzLS4zOWExNC41NywxNC41NywwLDAsMC0uNjgtMS42NWwuNjgtLjIyYTE0LDE0LDAsMCwxLC42OSwxLjY1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTc1LDIwLjMzYTksOSwwLDAsMCwuMDgsMS40MUg3My41N2MwLS4yNi4wNy0uOTIuMDctMS40MVYxNi4wNmEyMy4zMSwyMy4zMSwwLDAsMS00LjM0LDEuNzZsLS42OS0xLjE2QTE4LjgzLDE4LjgzLDAsMCwwLDc0LDE0LjQ3YTEzLjA1LDEzLjA1LDAsMCwwLDMuMTMtMi42OGwxLC45MkEyMCwyMCwwLDAsMSw3NSwxNS4yOVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04NiwxOC43MWExMS40NiwxMS40NiwwLDAsMCw0LjE2LTQuNTJsLjczLDEuM2ExMi4zLDEyLjMsMCwwLDEtNC4yMSw0LjM0LDEzLDEzLDAsMCwxLTQuNTksMS43OWwtLjgxLTEuMjNBMTIuNjQsMTIuNjQsMCwwLDAsODYsMTguNzFabS0uNDEtMy44NC0xLDFhMjYuMSwyNi4xLDAsMCwwLTMtMi41NGwuODgtLjk0QTI0LjQ3LDI0LjQ3LDAsMCwxLDg1LjU4LDE0Ljg3WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTEwMS42MiwyMS4wOGMuNDcsMCwuNTQtLjE5LjU5LTEuNjRhMy4xMywzLjEzLDAsMCwwLDEsLjQ1Yy0uMTMsMS44LS40NCwyLjI1LTEuNTIsMi4yNUgxMDBjLTEuMjYsMC0xLjU3LS4zNC0xLjU3LTEuNDdWMTguNUg5Ni42NmMtLjI4LDEuOTEtMSwzLjEzLTMuODMsMy43N2EzLjMyLDMuMzIsMCwwLDAtLjY0LTFjMi40Ni0uNDgsMy0xLjM2LDMuMjgtMi43OUg5My45MlYxMS42M2g3LjYzVjE4LjVoLTJ2Mi4xN2MwLC4zNi4wOS40MS41Ni40MVpNOTUsMTMuNjNoNS40MnYtMUg5NVptMCwxLjk0aDUuNDJ2LTFIOTVabTAsMS45NWg1LjQydi0xSDk1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTExMSwxNC43OWExMC42MiwxMC42MiwwLDAsMCw0LjQsNC42MSw1LjMxLDUuMzEsMCwwLDAtLjg0LDEsMTEuNzIsMTEuNzIsMCwwLDEtNC4yNC00LjYxVjE5aDIuMTR2MS4xM2gtMi4xNHYyLjEyaC0xLjE4VjIwLjExaC0yLjE5VjE5aDIuMTlWMTUuNzlhMTIuMSwxMi4xLDAsMCwxLTQuMjIsNC42Myw2Ljg2LDYuODYsMCwwLDAtLjc5LS45MiwxMS4xMSwxMS4xMSwwLDAsMCw0LjM0LTQuNzFoLTMuOTJWMTMuNjZoNC41OVYxMS4yNGgxLjE4djIuNDJoNC42NHYxLjEzWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTEyMC41NiwxOC42MmExLDEsMCwwLDEtLjI4Ljg1LDEuMzcsMS4zNywwLDAsMS0uOS4yLDIuNzksMi43OSwwLDAsMC0uMjgtMWguNTVjLjA3LDAsLjA5LDAsLjA5LS4xM1YxNC40NUgxMTl2Ny44aC0xdi03LjhoLS43MnY1LjM0aC0uODNWMTMuNDVIMTE4di0yLjJoMXYyLjJoMS41N1ptNi42Mi0uMmExNS4zNCwxNS4zNCwwLDAsMS0xLjc4LDEuMzQsNC4yNiw0LjI2LDAsMCwwLDIsMS41Myw0LjQ2LDQuNDYsMCwwLDAtLjcyLDFjLTEuNzgtLjgxLTIuNzItMi40Ni0zLjIzLTQuNzFoLS45djMuMjdsMi0uMzQuMDcuOTRjLTEuNC4yNS0yLjg3LjUxLTQsLjY5bC0uMjMtMSwxLjA5LS4xNlYxNy41NGgtLjc4di0uOTJoLjc5VjExLjcxaDUuMTd2LjkzaC00LjExdi43NGgzLjcydi44NWgtMy43MlYxNWgzLjcydi44NGgtMy43MnYuNzhoNC41OXYuOTJIMTI0LjRhNy44Nyw3Ljg3LDAsMCwwLC41NCwxLjQ2LDE1LjQ5LDE1LjQ5LDAsMCwwLDEuNS0xLjI1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTEzNCwxMC43NHYxMmgtLjUydi0xMloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xNDguNjYsMjEuNDhjMC0uMTcsMC0uNCwwLS42NUgxNDNjLS40OSwwLTEuMDksMC0xLjQ0LjA1VjE5LjUyYy4zNSwwLC44Ny4wNiwxLjM5LjA2aDUuNzRWMTQuMjNoLTUuNmMtLjQ2LDAtMS4wOCwwLTEuMzksMFYxM2MuNDIsMCwxLC4wNywxLjM5LjA3aDZsMSwwYzAsLjI2LDAsLjY5LDAsMXY2LjJjMCwuNDIsMCwxLC4wNSwxLjI3WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTE1NS4xMywxNS44MmEzMS43MywzMS43MywwLDAsMCw0LjM4LTEuNDEsNi43NCw2Ljc0LDAsMCwwLDEuMTQtLjU3LDEuMzgsMS4zOCwwLDAsMSwxLTIuMzUsMS4zOCwxLjM4LDAsMSwxLDAsMi43NiwxLjM3LDEuMzcsMCwwLDEtLjkzLS4zOGwuNSwxLjE3Yy0uNC4xNS0uODcuMzctMS4yNi41YTQzLjg5LDQzLjg5LDAsMCwxLTQuODEsMS41MnYyLjQ1YzAsLjU4LjI1LjcyLjgyLjg0YTEwLjM5LDEwLjM5LDAsMCwwLDEuNS4wOCwyMCwyMCwwLDAsMCw0LjEyLS4zOXYxLjM4YTM2LjA2LDM2LjA2LDAsMCwxLTQuMi4yNCwxMy41MSwxMy41MSwwLDAsMS0yLS4xMmMtMS0uMTgtMS41My0uNjYtMS41My0xLjY3VjEzLjNhNi43OSw2Ljc5LDAsMCwwLS4wOC0xLjA4aDEuNGE5LjMzLDkuMzMsMCwwLDAtLjA3LDEuMDhabTcuMjYtM2EuNzcuNzcsMCwwLDAtLjc2LS43Ni43Ni43NiwwLDAsMC0uNzQuNzYuNzQuNzQsMCwwLDAsLjc0Ljc0QS43Ni43NiwwLDAsMCwxNjIuMzksMTIuODdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTY1LjE4LDE3LjE4Yy41NS0uNTYsMS41NC0xLjgyLDIuMzQtMi43NXMxLjIzLS44OCwyLjE0LS4xMWEyNiwyNiwwLDAsMSwyLjQ3LDIuNDZjLjgxLjg2LDIuMDUsMi4xOSwyLjkyLDMuMjFsLTEsMS4wOGMtLjgtMS0xLjg5LTIuMy0yLjY0LTMuMTdhMzIuMDcsMzIuMDcsMCwwLDAtMi4yOS0yLjQxYy0uNDUtLjM4LS42NC0uMzgtMSwuMDktLjU0LjY2LTEuNDgsMS45Mi0yLDIuNThsLS43MiwxTDE2NC4yNywxOEMxNjQuNTksMTcuNzYsMTY0LjgzLDE3LjUyLDE2NS4xOCwxNy4xOFptNy45LTQuNjVhMS41LDEuNSwwLDEsMS0xLjUsMS41MUExLjUsMS41LDAsMCwxLDE3My4wOCwxMi41M1ptMCwyLjM0YS44My44MywwLDEsMC0uODMtLjgzQS44My44MywwLDAsMCwxNzMuMDgsMTQuODdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTQuMjEsMTIuNDd2NmMwLDEuMjEtLjM4LDEuNzMtMS4yOSwxLjczYTEuNjYsMS42NiwwLDAsMS0xLjQ1LS45NWwtMSwuNzZhMi43NCwyLjc0LDAsMCwwLDIuNTksMS40OGMxLjYzLDAsMi42LTEuMDgsMi42LTIuODlsMC02LjE3WiIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMSIgcG9pbnRzPSIxNy44OSAxMi40NyAxNy45MyAyMS4zNCAxOS4zNiAyMS4zNCAxOS4zMiAxMi40MyAxNy44OSAxMi40NyIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI2Ljc1LDEyLjQ3djQuMTFjMCwuNzguMDcsMS42NC4xMywyLjRsLjA3LjUyTDI2LDE3LjYzbC0zLTUuMi0xLjQ3LDAsMCw4Ljg3LDEuMzYsMFYxNy4xNGMwLS43Ny0uMDctMS41Ni0uMTMtMi4zM2wtLjA2LS41NS45MiwxLjg1LDMsNS4yM2gxLjQ3bDAtOC45MVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0zMS4wNiwxNC43NmExLDEsMCwwLDAtMSwxLDEsMSwwLDEsMCwxLjkzLDBBMSwxLDAsMCwwLDMxLjA2LDE0Ljc2WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTMxLjA2LDE5LjQ3YTEsMSwwLDAsMC0xLDEsMSwxLDAsMSwwLDEuOTMsMEExLDEsMCwwLDAsMzEuMDYsMTkuNDdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDAuMTQsMTVjMC0xLjczLTEuMDktMi42LTMuMjMtMi42bC0yLjkzLDAsMCw4Ljg3LDEuNDMsMCwwLTMuNTIsMS4zOSwwLDIsMy41OWgxLjY0bC0yLjIyLTMuNzVBMi40OCwyLjQ4LDAsMCwwLDQwLjE0LDE1Wm0tMy40LDEuNTUtMS4yOSwwdi0zaDEuMjljMS4zNiwwLDEuOTQuNDEsMS45NCwxLjRTMzgsMTYuNTgsMzYuNzQsMTYuNThaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDcuMjUsMTMuNjRoNGMuMzksMCwuODIsMCwxLjIsMGgwbDAtMS4zMmE5LDksMCwwLDEtMS4yLjA3aC00bC0xLjIsMCwwLDEuMjhDNDYuNCwxMy42Niw0Ni44NCwxMy42NCw0Ny4yNSwxMy42NFoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik01My42LDE1LjQ2aC05bDAsMS4yOGMuMzQsMCwuNzMsMCwxLjA5LDBsMy40MywwYTUuMjUsNS4yNSwwLDAsMS0uNzIsMi44MSw1LjY2LDUuNjYsMCwwLDEtMi4yLDEuODRsMS4xMy44MywwLDBhNiw2LDAsMCwwLDIuNC0yLjI1LDYuODgsNi44OCwwLDAsMCwuNy0zLjE3aDMuNTdhNS4wNiw1LjA2LDAsMCwwLC41NiwwbDAtMS4yN0E4LjE3LDguMTcsMCwwLDEsNTMuNiwxNS40NloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik01My4zMSwxMy41M2wuODUtLjQxYTEzLjUxLDEzLjUxLDAsMCwwLTEtMS42NmwtLjc5LjM5YTE0LjM0LDE0LjM0LDAsMCwxLC45NSwxLjY1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTUzLjcxLDExLjM0YTEyLjI0LDEyLjI0LDAsMCwxLDEsMS42NHYwbC44NC0uNGE5LjYyLDkuNjIsMCwwLDAtMS0xLjY1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTY1LjQsMTQuNDdsLTEuMDcsMFYxMy4xMmMwLS4zNiwwLS42NywwLS44OGwwLS4yLTEuNCwwYTcsNywwLDAsMSwuMDYsMWwwLDEuMzUtMy4xMSwwVjEzLjEzYzAtLjQxLDAtLjc2LDAtMWwtMS4zOCwwdi4xNmE3LjkzLDcuOTMsMCwwLDEsMCwuODFsMCwxLjM0SDU3LjVjLS41MSwwLTEtLjA2LTEuMjEtLjA2aC0uMDhsMCwxLjM0Yy4yLDAsLjY5LDAsMS4yNCwwbDEuMTQsMHYxLjhjMCwuNDgsMCwxLDAsMS4yMUw2MCwxOC42M2MwLS4xNy0uMDUtLjY4LS4wNS0xLjE2bDAtMS43NiwzLjExLDB2LjQ4YzAsMy4yMS0xLjEsNC4yLTMuMjgsNS4wNmwxLDFoMGMzLTEuMzIsMy41NC0zLjE2LDMuNTQtNi4wOWwwLS4zN2gyLjM1bDAtMS4zMUE4LjM4LDguMzgsMCwwLDEsNjUuNCwxNC40N1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik02NS4zMywxNGwuNzYtLjMxQTEwLjcsMTAuNywwLDAsMCw2NS4zNywxMmwtLjcxLjI3QTE1LjA3LDE1LjA3LDAsMCwxLDY1LjMyLDE0WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTY1Ljg3LDExLjk0YTEyLjI2LDEyLjI2LDAsMCwxLC42OCwxLjY1bDAsMCwuNzQtLjI5YTkuMzEsOS4zMSwwLDAsMC0uNzMtMS42N1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik03Ny4xMiwxMS43NkExMywxMywwLDAsMSw3NCwxNC40NGEyMC43NiwyMC43NiwwLDAsMS01LjQyLDIuMjRsLjczLDEuMThhMTkuNzQsMTkuNzQsMCwwLDAsNC4yOS0xLjh2NC4yN2MwLC41LDAsMS4xNiwwLDEuNDVINzUuMXYtLjA1YTguNjIsOC42MiwwLDAsMS0uMDgtMS40bDAtNWExNy4xNSwxNy4xNSwwLDAsMCwzLjIxLTIuNjRaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODQuNjMsMTUuOWwxLTEuMDZhMjEuNjUsMjEuNjUsMCwwLDAtMy4xMy0yLjUxbC0uODcsMWEyOC4yNiwyOC4yNiwwLDAsMSwzLDIuNTRaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODYsMTguNjdhMTMuNjUsMTMuNjUsMCwwLDEtNC43MywxLjc0bC44MiwxLjI2aDBhMTMuMjMsMTMuMjMsMCwwLDAsNC42MS0xLjc5LDEyLjA5LDEyLjA5LDAsMCwwLDQuMjItNC40bC0uOC0xLjNBMTEuMzgsMTEuMzgsMCwwLDEsODYsMTguNjdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTAxLjYyLDIxaC0xLjU0Yy0uNDYsMC0uNTIsMC0uNTItLjM3bDAtMi4xMywyLjA3LDAsMC02LjkxLTcuNjcsMCwwLDYuOTEsMS41MSwwYy0uMjMsMS40MS0uODEsMi4yNy0zLjI3LDIuODFhMy4zNywzLjM3LDAsMCwxLC42MywxdjBoMGMyLjg2LS42NSwzLjU4LTEuODksMy44Mi0zLjc3bDEuNjgsMHYyLjE3YzAsMS4xNy4zNiwxLjUxLDEuNjEsMS41MWgxLjc4YzEuMTEsMCwxLjQzLS40NywxLjUzLTIuMzJhNi4zNCw2LjM0LDAsMCwxLTEuMDktLjQyQzEwMi4xMiwyMC45MiwxMDIsMjEsMTAxLjYyLDIxWk05NSwxMi42N2w1LjM0LDAsMCwxLTUuMzgsMFptMCwxLjkyLDUuMzQsMCwwLDEtNS4zOCwwWm0wLDIuOTN2LTFsNS4zNCwwLDAsMVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xMTEsMTQuODNsNCwwLDAtMS4xNy00LjYsMCwwLTIuNDYtMS4yMiwwLDAsMi4zOC00LjYzLDAsMCwxLjE3LDMuODgtLjA2YTExLjY0LDExLjY0LDAsMCwxLTQuMzMsNC43Niw5LjY0LDkuNjQsMCwwLDEsLjg0LjkzLDExLjQ5LDExLjQ5LDAsMCwwLDQuMTYtNC42N2wwLDMuMTUtMi4yMywwLDAsMS4xNywyLjE1LDAsMCwyLjE2aDEuMjJsMC0yLjEyLDIuMTgsMCwwLTEuMTctMi4xLDAtLjA4LTMuMThhMTEuMjYsMTEuMjYsMCwwLDAsNC4zMiw0LjYxLDguMDgsOC4wOCwwLDAsMSwuODItMUExMSwxMSwwLDAsMSwxMTEsMTQuODNaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTIwLjU2LDEzLjQxbC0xLjUzLDAsMC0yLjI0LTEsMCwwLDIuMTYtMS41OSwwLDAsNi4zOC44NywwLDAtNS4zLjY4LDAsMCw3Ljg0aDFsMC03LjguNzEsMFYxOC42YzAsLjA4LDAsLjA4LDAsLjA5YTMuMzgsMy4zOCwwLDAsMC0uNTksMCwzLjk0LDMuOTQsMCwwLDEsLjMyLDEsMS40MiwxLjQyLDAsMCwwLC45My0uMiwxLjA2LDEuMDYsMCwwLDAsLjI5LS44OVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xMjUuNDMsMTkuOGExMi42OSwxMi42OSwwLDAsMCwxLjc4LTEuNDFsLS44LS42N2MtLjQ2LjQ4LTEuMiwxLTEuNDQsMS4yNi0uMjItLjQ1LS4zOS0uOTItLjU3LTEuNGwyLjc4LDAsMC0xLTQuNTUsMCwwLS43NCwzLjc2LDAsMC0uODgtMy42OCwwLDAtLjczLDMuNzYsMCwwLS44OS0zLjY4LDAsMC0uNyw0LjE1LDAsMC0xLTUuMjEsMCwwLDQuODctLjgzLDAsMCwxLC43NCwwLDAsMy4zOC0uNjIuMDktLjUxLjEyLjI4LDFjMS0uMTYsMi4yNy0uMzksMy41My0uNjFsLjQ4LS4xMy0uMTItMWE0Ljg0LDQuODQsMCwwLDAsMi4xMywxLjg0bDAsMCwwLDBhNy4yNSw3LjI1LDAsMCwxLC43LTFBNC42LDQuNiwwLDAsMSwxMjUuNDMsMTkuOFptLTIuMzYuODgtLjUuMTMsMC0zLjIzLjg2LDBhOSw5LDAsMCwwLDEuMTMsMi44OFoiLz48cG9seWdvbiBjbGFzcz0iY2xzLTEiIHBvaW50cz0iMTMzLjQxIDEwLjc0IDEzMy40NSAyMi43OCAxMzQuMDEgMjIuNzggMTMzLjk3IDEwLjcgMTMzLjQxIDEwLjc0Ii8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTUwLDIwLjIxVjE0YzAtLjMxLDAtLjc1LDAtMWwtMSwwaC02bC0xLjM2LDBoLS4wN3YxLjMybC4wNywwaDBjLjMzLDAsLjg5LDAsMS4zMiwwbDUuNTYsMCwwLDUuMzFoLTUuNzRsLTEuMjEsMGgtLjIybDAsMS40Yy4zNSwwLC45NS0uMDUsMS40NC0uMDVsNS42NCwwdi4zOWwwLC4zaDEuNDF2LS4wNUMxNTAsMjEuMjEsMTUwLDIwLjYyLDE1MCwyMC4yMVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xNjEuNjMsMTEuNDVhMS40MiwxLjQyLDAsMCwwLTEuNDIsMS40MiwxLjE3LDEuMTcsMCwwLDAsLjQyLjkzLDcuNTksNy41OSwwLDAsMS0xLjE0LjU4LDQyLjc3LDQyLjc3LDAsMCwxLTQuMzIsMS40NFYxMy4zYzAtLjM3LDAtLjc5LDAtMS4xMmwtMS40NC4wNWE2LjkzLDYuOTMsMCwwLDEsLjA4LDEuMDd2Ni41N2MwLDEsLjUsMS41MSwxLjU2LDEuNzFhMTMuMTksMTMuMTksMCwwLDAsMiwuMTIsMjkuNzEsMjkuNzEsMCwwLDAsNC4yNC0uMjhMMTYxLjU2LDIwYTE5LjQ1LDE5LjQ1LDAsMCwxLTQuMTEuMzksOS40LDkuNCwwLDAsMS0xLjQ5LS4wOGMtLjU2LS4xMi0uNzktLjI1LS43OS0uOGwwLTIuNDFBNDUuOTQsNDUuOTQsMCwwLDAsMTYwLDE1LjU4bC44Mi0uMzIuNDctLjI0LS41Ny0xLjEyYTEuNDIsMS40MiwwLDEsMCwxLTIuNDVabTAsMi4xMmEuNy43LDAsMCwxLS43LS43LjcxLjcxLDAsMSwxLC43LjdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTcyLjE2LDE2Ljc1YTI3LjI5LDI3LjI5LDAsMCwwLTIuNDctMi40NiwxLjg2LDEuODYsMCwwLDAtMS4xMy0uNTUsMS40NSwxLjQ1LDAsMCwwLTEuMDcuNjZjLS4yNi4zLS41NC42NC0uODIsMS0uNTYuNjktMS4xNSwxLjQtMS41MiwxLjc4bC0uMTguMTdjLS4yNi4yNS0uNDcuNDUtLjczLjczbDEuMTcsMS4xMy43Mi0xLC42Ny0uODdjLjQ2LS42LDEtMS4yOCwxLjMzLTEuNzEuMi0uMjQuMzQtLjM1LjQ3LS4zNXMuMjcuMDguNS4yN2MuNS40MywxLjU0LDEuNTcsMi4yOCwyLjQxczEuODMsMi4xMiwyLjY0LDMuMTZsMCwwLDEtMS4xN2MtLjgtLjkzLTEuOS0yLjEyLTIuNzEtM1oiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xNzMuMDgsMTUuNTdBMS41NCwxLjU0LDAsMSwwLDE3MS41NCwxNCwxLjU0LDEuNTQsMCwwLDAsMTczLjA4LDE1LjU3Wm0wLTIuMzJhLjc5Ljc5LDAsMSwxLS43OS43OUEuOC44LDAsMCwxLDE3My4wOCwxMy4yNVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xODcuMDksMTMuMThsMC0xLjE2LTEwLjY5LDAsMCwxLjE2LDgsMHY3LjU1YzAsLjIzLS4wNi4yOS0uMzEuM2gtLjljLS4zOSwwLS44NiwwLTEuMzMsMGE0Ljg3LDQuODcsMCwwLDEsLjQ2LDEuMTl2MGgwYTguMTgsOC4xOCwwLDAsMCwyLjU3LS4yMWMuNS0uMTcuNzEtLjU1LjcxLTEuM2wwLTcuNTRaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTgyLjU1LDE5LjI2bDAtNC41NS01LDAsMCw1LjQ4aDEuMTJsMC0uOTNabS0zLjg2LTMuNDIsMi42OCwwLDAsMi4zNi0yLjcyLDBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTg3LjA1LDEzLjE4aC0xLjQzdjcuNThjMCwuNzItLjE4LDEuMDktLjY4LDEuMjZhOC4zNiw4LjM2LDAsMCwxLTIuNTYuMjEsNS4xNCw1LjE0LDAsMCwwLS40Ny0xLjJjLjkyLDAsMS45MSwwLDIuMiwwcy4zNS0uMDguMzUtLjM0VjEzLjE4SDE3Ni40VjEyLjA2aDEwLjY1Wm0tOC40LDYuMDh2LjkzaC0xLjA4VjE0Ljc1aDQuOTR2NC41MVptMC0zLjQ2djIuNGgyLjc2VjE1LjhaIi8+PHJlY3QgY2xhc3M9ImNscy0yIiB4PSIwLjUiIHk9IjAuNSIgd2lkdGg9IjIxNS42MSIgaGVpZ2h0PSIzMS44MiIgcng9IjIiLz48cG9seWdvbiBjbGFzcz0iY2xzLTEiIHBvaW50cz0iMjAzLjM3IDE4LjA2IDIwMi4zNyAxOC4wNiAyMDIuMzcgMTMuNTcgMTk4LjA4IDEzLjU3IDE5OC4wOCAxMi41NyAyMDMuMzcgMTIuNTcgMjAzLjM3IDE4LjA2Ii8+PHJlY3QgY2xhc3M9ImNscy0xIiB4PSIxOTEuNzEiIHk9IjE3LjE5IiB3aWR0aD0iMTMuMDciIGhlaWdodD0iMSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNDUuNTYgMTQ1LjM3KSByb3RhdGUoLTQ1KSIvPjwvZz48L3N2Zz4=");


/***/ }),

/***/ "./src/icons/jinr-timeline.svg":
/*!*************************************!*\
  !*** ./src/icons/jinr-timeline.svg ***!
  \*************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrTimeline; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrTimeline(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr-timeline_svg__icon",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr-timeline_svg__cls-1{fill:#407fed}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr-timeline_svg__cls-1",
    d: "M29 19a10 10 0 10-12.5 9.67v11.66a10 10 0 000 19.34v11.66a10 10 0 105 0V59.67a10 10 0 000-19.34V28.67A10 10 0 0029 19zm-15 0a5 5 0 115 5 5 5 0 01-5-5zm10 62a5 5 0 11-5-5 5 5 0 015 5zm0-31a5 5 0 11-5-5 5 5 0 015 5zM86.5 71.5h-46A4.51 4.51 0 0036 76v10a4.51 4.51 0 004.5 4.5h46A4.51 4.51 0 0091 86V76a4.51 4.51 0 00-4.5-4.5zm-.5 14H41v-9h45zM86.5 40.5h-46A4.51 4.51 0 0036 45v10a4.51 4.51 0 004.5 4.5h46A4.51 4.51 0 0091 55V45a4.51 4.51 0 00-4.5-4.5zm-.5 14H41v-9h45zM86.5 9.5h-46A4.51 4.51 0 0036 14v10a4.51 4.51 0 004.5 4.5h46A4.51 4.51 0 0091 24V14a4.51 4.51 0 00-4.5-4.5zm-.5 14H41v-9h45z"
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PHN2ZyBpZD0iaWNvbiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMTAwIDEwMCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiM0MDdmZWQ7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTI5LDE5YTEwLDEwLDAsMSwwLTEyLjUsOS42N1Y0MC4zM2ExMCwxMCwwLDAsMCwwLDE5LjM0VjcxLjMzYTEwLDEwLDAsMSwwLDUsMFY1OS42N2ExMCwxMCwwLDAsMCwwLTE5LjM0VjI4LjY3QTEwLDEwLDAsMCwwLDI5LDE5Wk0xNCwxOWE1LDUsMCwxLDEsNSw1QTUsNSwwLDAsMSwxNCwxOVpNMjQsODFhNSw1LDAsMSwxLTUtNUE1LDUsMCwwLDEsMjQsODFabTAtMzFhNSw1LDAsMSwxLTUtNUE1LDUsMCwwLDEsMjQsNTBaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNODYuNSw3MS41aC00NkE0LjUxLDQuNTEsMCwwLDAsMzYsNzZWODZhNC41MSw0LjUxLDAsMCwwLDQuNSw0LjVoNDZBNC41MSw0LjUxLDAsMCwwLDkxLDg2Vjc2QTQuNTEsNC41MSwwLDAsMCw4Ni41LDcxLjVabS0uNSwxNEg0MXYtOUg4NloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04Ni41LDQwLjVoLTQ2QTQuNTEsNC41MSwwLDAsMCwzNiw0NVY1NWE0LjUxLDQuNTEsMCwwLDAsNC41LDQuNWg0NkE0LjUxLDQuNTEsMCwwLDAsOTEsNTVWNDVBNC41MSw0LjUxLDAsMCwwLDg2LjUsNDAuNVptLS41LDE0SDQxdi05SDg2WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTg2LjUsOS41aC00NkE0LjUxLDQuNTEsMCwwLDAsMzYsMTRWMjRhNC41MSw0LjUxLDAsMCwwLDQuNSw0LjVoNDZBNC41MSw0LjUxLDAsMCwwLDkxLDI0VjE0QTQuNTEsNC41MSwwLDAsMCw4Ni41LDkuNVptLS41LDE0SDQxdi05SDg2WiIvPjwvc3ZnPg==");


/***/ }),

/***/ "./src/icons/jinr_gb_compare.svg":
/*!***************************************!*\
  !*** ./src/icons/jinr_gb_compare.svg ***!
  \***************************************/
/*! exports provided: default, ReactComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ReactComponent", function() { return SvgJinrGbCompare; });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
var _defs, _path, _rect, _path2, _rect2;
function _extends() { return _extends = Object.assign ? Object.assign.bind() : function (n) { for (var e = 1; e < arguments.length; e++) { var t = arguments[e]; for (var r in t) ({}).hasOwnProperty.call(t, r) && (n[r] = t[r]); } return n; }, _extends.apply(null, arguments); }

function SvgJinrGbCompare(props) {
  return /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("svg", _extends({
    id: "jinr_gb_compare_svg___\\u30EC\\u30A4\\u30E4\\u30FC_1",
    xmlns: "http://www.w3.org/2000/svg",
    viewBox: "0 0 100 100"
  }, props), _defs || (_defs = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("defs", null, /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("style", null, ".jinr_gb_compare_svg__cls-1{fill:#407fed;stroke-width:0}"))), _path || (_path = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr_gb_compare_svg__cls-1",
    d: "M8.86 10.22h19.46c.55 0 1 .45 1 1v5.51H7.86v-5.51c0-.55.45-1 1-1z"
  })), _rect || (_rect = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("rect", {
    className: "jinr_gb_compare_svg__cls-1",
    x: 12.14,
    y: 70.26,
    width: 27.4,
    height: 9.57,
    rx: 1,
    ry: 1
  })), _path2 || (_path2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("path", {
    className: "jinr_gb_compare_svg__cls-1",
    d: "M45.63 16.72H5.8c-1.24 0-2.25 1.01-2.25 2.25v68.87c0 1.24 1.01 2.25 2.25 2.25h39.83c1.24 0 2.25-1.01 2.25-2.25V18.97c0-1.24-1.01-2.25-2.25-2.25zm-2.25 4.5v18.6H8.05v-18.6h35.33zm0 22.6v16.45H8.05V43.82h35.33zM8.05 85.59V64.26h35.33v21.33H8.05zM93.94 16.72H54.11c-1.24 0-2.25 1.01-2.25 2.25v68.87c0 1.24 1.01 2.25 2.25 2.25h39.83c1.24 0 2.25-1.01 2.25-2.25V18.97c0-1.24-1.01-2.25-2.25-2.25zm-2.25 4.5v18.84H56.36V21.22h35.33zm0 22.84v16.45H56.36V44.06h35.33zM56.36 85.6V64.51h35.33V85.6H56.36z"
  })), _rect2 || (_rect2 = /*#__PURE__*/react__WEBPACK_IMPORTED_MODULE_0__["createElement"]("rect", {
    className: "jinr_gb_compare_svg__cls-1",
    x: 60.45,
    y: 70.26,
    width: 27.4,
    height: 9.57,
    rx: 1,
    ry: 1
  })));
}
/* harmony default export */ __webpack_exports__["default"] = ("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz48c3ZnIGlkPSJf44Os44Kk44Ok44O8XzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDEwMCAxMDAiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojNDA3ZmVkO3N0cm9rZS13aWR0aDowcHg7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0ibTguODYsMTAuMjJoMTkuNDZjLjU1LDAsMSwuNDUsMSwxdjUuNTFINy44NnYtNS41MWMwLS41NS40NS0xLDEtMVoiLz48cmVjdCBjbGFzcz0iY2xzLTEiIHg9IjEyLjE0IiB5PSI3MC4yNiIgd2lkdGg9IjI3LjQiIGhlaWdodD0iOS41NyIgcng9IjEiIHJ5PSIxIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJtNDUuNjMsMTYuNzJINS44Yy0xLjI0LDAtMi4yNSwxLjAxLTIuMjUsMi4yNXY2OC44N2MwLDEuMjQsMS4wMSwyLjI1LDIuMjUsMi4yNWgzOS44M2MxLjI0LDAsMi4yNS0xLjAxLDIuMjUtMi4yNVYxOC45N2MwLTEuMjQtMS4wMS0yLjI1LTIuMjUtMi4yNVptLTIuMjUsNC41djE4LjZIOC4wNXYtMTguNmgzNS4zM1ptMCwyMi42djE2LjQ1SDguMDV2LTE2LjQ1aDM1LjMzWk04LjA1LDg1LjU5di0yMS4zM2gzNS4zM3YyMS4zM0g4LjA1WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0ibTkzLjk0LDE2LjcyaC0zOS44M2MtMS4yNCwwLTIuMjUsMS4wMS0yLjI1LDIuMjV2NjguODdjMCwxLjI0LDEuMDEsMi4yNSwyLjI1LDIuMjVoMzkuODNjMS4yNCwwLDIuMjUtMS4wMSwyLjI1LTIuMjVWMTguOTdjMC0xLjI0LTEuMDEtMi4yNS0yLjI1LTIuMjVabS0yLjI1LDQuNXYxOC44NGgtMzUuMzN2LTE4Ljg0aDM1LjMzWm0wLDIyLjg0djE2LjQ1aC0zNS4zM3YtMTYuNDVoMzUuMzNabS0zNS4zMyw0MS41NHYtMjEuMDloMzUuMzN2MjEuMDloLTM1LjMzWiIvPjxyZWN0IGNsYXNzPSJjbHMtMSIgeD0iNjAuNDUiIHk9IjcwLjI2IiB3aWR0aD0iMjcuNCIgaGVpZ2h0PSI5LjU3IiByeD0iMSIgcnk9IjEiLz48L3N2Zz4=");


/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _blocks_postlist__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./blocks/postlist */ "./src/blocks/postlist.js");
/* harmony import */ var _blocks_designtitle__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./blocks/designtitle */ "./src/blocks/designtitle.js");
/* harmony import */ var _blocks_button__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./blocks/button */ "./src/blocks/button.js");
/* harmony import */ var _blocks_box__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./blocks/box */ "./src/blocks/box.js");
/* harmony import */ var _blocks_iconbox__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./blocks/iconbox */ "./src/blocks/iconbox.js");
/* harmony import */ var _blocks_richmenu__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./blocks/richmenu */ "./src/blocks/richmenu.js");
/* harmony import */ var _blocks_richmenuchild__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./blocks/richmenuchild */ "./src/blocks/richmenuchild.js");
/* harmony import */ var _blocks_designborder__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./blocks/designborder */ "./src/blocks/designborder.js");
/* harmony import */ var _blocks_fukidashi__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./blocks/fukidashi */ "./src/blocks/fukidashi.js");
/* harmony import */ var _blocks_fullwidth__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./blocks/fullwidth */ "./src/blocks/fullwidth.js");
/* harmony import */ var _blocks_blogcard__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./blocks/blogcard */ "./src/blocks/blogcard.js");
/* harmony import */ var _blocks_accordion__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./blocks/accordion */ "./src/blocks/accordion.js");
/* harmony import */ var _blocks_accordionchild__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./blocks/accordionchild */ "./src/blocks/accordionchild.js");
/* harmony import */ var _blocks_timeline__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./blocks/timeline */ "./src/blocks/timeline.js");
/* harmony import */ var _blocks_timelinechild__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./blocks/timelinechild */ "./src/blocks/timelinechild.js");
/* harmony import */ var _blocks_syntaxhl__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./blocks/syntaxhl */ "./src/blocks/syntaxhl.js");
/* harmony import */ var _blocks_background__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./blocks/background */ "./src/blocks/background.js");
/* harmony import */ var _blocks_profile__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./blocks/profile */ "./src/blocks/profile.js");
/* harmony import */ var _blocks_compare__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./blocks/compare */ "./src/blocks/compare.js");
/* harmony import */ var _blocks_comparechild__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./blocks/comparechild */ "./src/blocks/comparechild.js");
/* harmony import */ var _format__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./format */ "./src/format.js");
/* harmony import */ var _Document__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./Document */ "./src/Document.js");
/* harmony import */ var _toolbar__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./toolbar */ "./src/toolbar.js");
/* harmony import */ var _DeviceDisplay__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./DeviceDisplay */ "./src/DeviceDisplay.js");
/* harmony import */ var _DetailSettings__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./DetailSettings */ "./src/DetailSettings.js");
/* harmony import */ var _blocks__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./blocks */ "./src/blocks.js");
/* harmony import */ var _blocks_category__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./blocks/category */ "./src/blocks/category.js");
/* harmony import */ var _blocks_paidpost__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./blocks/paidpost */ "./src/blocks/paidpost.js");
/* harmony import */ var _blocks_tab__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./blocks/tab */ "./src/blocks/tab.js");
/* harmony import */ var _blocks_tabchild__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ./blocks/tabchild */ "./src/blocks/tabchild.js");
/* harmony import */ var _PatternBlock__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! ./PatternBlock */ "./src/PatternBlock.js");
































/***/ }),

/***/ "./src/toolbar.js":
/*!************************!*\
  !*** ./src/toolbar.js ***!
  \************************/
/*! exports provided: JinrToolbar */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "JinrToolbar", function() { return JinrToolbar; });
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/slicedToArray */ "./node_modules/@babel/runtime/helpers/slicedToArray.js");
/* harmony import */ var _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _icons_jinr_marker_svg__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./icons/jinr-marker.svg */ "./src/icons/jinr-marker.svg");
/* harmony import */ var _icons_jinr_fontsize_svg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./icons/jinr-fontsize.svg */ "./src/icons/jinr-fontsize.svg");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @wordpress/rich-text */ "@wordpress/rich-text");
/* harmony import */ var _wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! classnames */ "./node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_7__);











var JinrToolbar = function JinrToolbar(props) {
  var dropdownPosition = props.dropdownPosition,
    formatTypeName = props.formatTypeName,
    formatTitle = props.formatTitle,
    formatClass = props.formatClass,
    tagName = props.tagName,
    toolbarButtonId = props.toolbarButtonId,
    toolbarButtonClass = props.toolbarButtonClass,
    toolbarButtonIcon = props.toolbarButtonIcon,
    toolbarButtonLabel = props.toolbarButtonLabel,
    tooltipLabel = props.tooltipLabel,
    isMultiSelect = props.isMultiSelect,
    childButtons = props.childButtons;
  var createApplyFormat = function createApplyFormat(formatTypeName, className, activeClasses, value, isMultiSelect) {
    var arrActiveClasses;
    var insertClasses = className;
    function generateStarIcons(fullStars) {
      var halfStars = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
      var fullStarHtml = '<span class="jin-icons in--p jin-ifont-evaluation">&#xe92b;</span>';
      var halfStarHtml = '<span class="jin-icons in--p jin-ifont-evaluation">&#xe92a;</span>';
      var blankStarHtml = '<span class="jin-icons in--p jin-ifont-evaluation">&#xe929;</span>';
      return fullStarHtml.repeat(fullStars) + halfStarHtml.repeat(halfStars) + blankStarHtml.repeat(5 - fullStars - halfStars);
    }
    switch (className) {
      case 'a--star-icon jinr-star-icon0':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(0)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon-0half':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(0, 1)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon1':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(1)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon1-half':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(1, 1)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon2':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(2)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon2-half':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(2, 1)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon3':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(3)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon3-half':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(3, 1)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon4':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(4)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon4-half':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(4, 1)
        }), value.end, value.end);
      case 'a--star-icon jinr-star-icon5':
        return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["insert"])(value, Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["create"])({
          html: generateStarIcons(5)
        }), value.end, value.end);
    }
    if (!className || insertClasses == activeClasses) {
      return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["removeFormat"])(value, formatTypeName);
    }
    if (isMultiSelect && typeof activeClasses === 'string') {
      arrActiveClasses = activeClasses.split(' ');
      if (Array.isArray(arrActiveClasses)) {
        if (arrActiveClasses.includes(insertClasses)) {
          insertClasses = undefined;
          activeClasses = arrActiveClasses.filter(function (val) {
            return val != className;
          });
        }
      }
    }
    var classes = classnames__WEBPACK_IMPORTED_MODULE_7___default()([insertClasses, isMultiSelect && activeClasses]);
    return Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["applyFormat"])(value, {
      type: formatTypeName,
      attributes: {
        class: classes
      }
    });
  };
  var JinrDropdown = function JinrDropdown(props) {
    var activeAttributes = props.activeAttributes,
      isActive = props.isActive,
      onChange = props.onChange,
      value = props.value;
    var className = classnames__WEBPACK_IMPORTED_MODULE_7___default()(['components-icon-button', 'components-toolbar__control', toolbarButtonClass], {
      'is-pressed': isActive
    });
    var _useState = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["useState"])(false),
      _useState2 = _babel_runtime_helpers_slicedToArray__WEBPACK_IMPORTED_MODULE_0___default()(_useState, 2),
      isOpen = _useState2[0],
      setIsOpen = _useState2[1];
    var popoverEl = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["useRef"])(null);
    var clickPopoverCloseListener = Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["useCallback"])(function (event) {
      if (isOpen) {
        if (event.target.closest('.components-dropdown-menu__menu-item') || !event.target.closest("#".concat(popoverEl.current.id)) && !event.target.closest('.components-popover')) {
          setIsOpen(false);
        }
      }
    });
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["useEffect"])(function () {
      document.body.addEventListener('click', clickPopoverCloseListener);
      return function () {
        return document.body.removeEventListener('click', clickPopoverCloseListener);
      };
    }, [clickPopoverCloseListener]);
    var containActiveClass = false;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_4__["BlockFormatControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Toolbar"], {
      label: toolbarButtonLabel
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["ToolbarButton"], {
      id: toolbarButtonId,
      className: className,
      icon: toolbarButtonIcon,
      "aria-haspopup": "true",
      "aria-label": toolbarButtonLabel,
      label: tooltipLabel,
      tooltip: tooltipLabel,
      ref: popoverEl,
      onClick: function onClick() {
        return setIsOpen(!isOpen);
      }
    }), isOpen && Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Popover"], {
      position: dropdownPosition,
      className: classnames__WEBPACK_IMPORTED_MODULE_7___default()(["components-dropdown__content", "components-dropdown-menu__popover", "jinr-components-dropdown-menu"]),
      focusOnMount: "container",
      useRef: popoverEl
    }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("div", {
      role: "menu",
      "aria-orientation": "vertical",
      "aria-label": toolbarButtonLabel,
      className: "components-dropdown-menu__menu"
    }, childButtons.map(function (current) {
      if (isMultiSelect) {
        if (typeof activeAttributes.class === 'string') {
          containActiveClass = activeAttributes.class.split(' ').includes(current.class);
        }
      } else {
        containActiveClass = activeAttributes.class == current.class ? true : false;
      }
      return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_6__["Button"], {
        label: current.title,
        onClick: function onClick() {
          onChange(createApplyFormat(formatTypeName, current.class, activeAttributes.class, value, isMultiSelect));
        },
        className: classnames__WEBPACK_IMPORTED_MODULE_7___default()('components-dropdown-menu__menu-item', {
          'is-active': isActive && containActiveClass
        }),
        icon: current.icon
      }, current.class === 'a--star-icon jinr-star-icon0' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon-0half' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92A"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon1' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon1-half' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92A"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon2' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon2-half' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92A"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon3' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon3-half' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92A"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon4' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE929")) : current.class === 'a--star-icon jinr-star-icon4-half' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92A")) : current.class === 'a--star-icon jinr-star-icon5' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B"), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        class: "jin-icons in--p jin-ifont-evaluation"
      }, "\uE92B")) : Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])("span", {
        className: classnames__WEBPACK_IMPORTED_MODULE_7___default()(['dropdown-item-title', current.class])
      }, current.title));
    })))));
  };

  // フォーマットを登録
  Object(_wordpress_rich_text__WEBPACK_IMPORTED_MODULE_5__["registerFormatType"])(formatTypeName, {
    title: formatTitle,
    tagName: tagName,
    className: formatClass,
    edit: JinrDropdown,
    attributes: {
      class: 'class',
      style: 'style'
    }
  });
};

// デフォルト値
JinrToolbar.defaultProps = {
  formatTypeName: '',
  formatTitle: '',
  formatClass: '',
  tagName: 'span',
  toolbarButtonId: '',
  toolbarButtonClass: '',
  toolbarButtonIcon: '',
  toolbarButtonLabel: '',
  tooltipLabel: '',
  dropdownPosition: 'center bottom',
  isMultiSelect: false,
  childButtons: []
};

// 登録するドロップダウンメニューアイテム
var marker = [];
var fontsize = [];
var customHtml = [];
customHtml.push({
  tag: '<span class="aa">aaaa</span>',
  class: 'a--star-icon jinr-star-icon0',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon-0half',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon1',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon1-half',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon2',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon2-half',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon3',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon3-half',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon4',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon4-half',
  title: '',
  icon: ''
});
customHtml.push({
  tag: 'span',
  class: 'a--star-icon jinr-star-icon5',
  title: '',
  icon: ''
});
marker.push({
  tag: 'span',
  class: 'd--marker1 d--bold',
  title: 'マーカー１太字',
  icon: 'admin-appearance'
});
marker.push({
  tag: "span",
  class: "d--marker2 d--bold",
  title: 'マーカー２太字',
  icon: "admin-appearance"
});
marker.push({
  tag: "span",
  class: "d--marker1",
  title: 'マーカー１',
  icon: "admin-appearance"
});
marker.push({
  tag: "span",
  class: "d--marker2",
  title: 'マーカー２',
  icon: "admin-appearance"
});
marker.push({
  tag: "span",
  class: "d--user-color1 d--bold",
  title: 'カラーテキスト１太字',
  icon: "editor-textcolor"
});
marker.push({
  tag: "span",
  class: "d--user-color2 d--bold",
  title: 'カラーテキスト２太字',
  icon: "editor-textcolor"
});
marker.push({
  tag: "span",
  class: "d--user-color1",
  title: 'カラーテキスト１',
  icon: "editor-textcolor"
});
marker.push({
  tag: "span",
  class: "d--user-color2",
  title: 'カラーテキスト２',
  icon: "editor-textcolor"
});
marker.push({
  tag: "span",
  class: "d--keyboard",
  title: 'キーボード',
  icon: "button"
});
fontsize.push({
  tag: 'span',
  class: 'd--fontsize-11px',
  title: 'サンプル文字（11px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-13px",
  title: 'サンプル文字（13px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-15px",
  title: 'サンプル文字（15px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-18px",
  title: 'サンプル文字（18px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-21px",
  title: 'サンプル文字（21px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-24px",
  title: 'サンプル文字（24px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-27px",
  title: 'サンプル文字（27px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-30px",
  title: 'サンプル文字（30px）',
  icon: "editor-textcolor"
});
fontsize.push({
  tag: "span",
  class: "d--fontsize-36px",
  title: 'サンプル文字（36px）',
  icon: "editor-textcolor"
});

/**
 * オリジナルツールバーボタンとドロップダウンメニューの組み込み
 */
JinrToolbar({
  formatTypeName: 'jinr-editor-tools/jinr-star-icon',
  formatTitle: 'JIN:R評価アイコン',
  formatClass: 'jinr-d--srat-icon',
  tagName: 'span',
  toolbarButtonId: 'jinr-star-icon',
  toolbarButtonClass: 'srat-icon',
  toolbarButtonIcon: 'star-filled',
  // 独自のアイコンコンポーネントを設定
  toolbarButtonLabel: 'jinr-star-icon',
  tooltipLabel: 'JIN:R評価アイコン',
  dropdownPosition: 'bottom center',
  childButtons: customHtml
});
JinrToolbar({
  formatTypeName: 'jinr-editor-tools/jinr-text-color',
  formatTitle: '文字装飾',
  formatClass: 'jinr-d--text-color',
  tagName: 'span',
  toolbarButtonId: 'jinr-text-color',
  toolbarButtonClass: 'text-color',
  toolbarButtonIcon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_marker_svg__WEBPACK_IMPORTED_MODULE_2__["ReactComponent"], null),
  toolbarButtonLabel: 'jinr-text-color',
  tooltipLabel: '文字装飾',
  dropdownPosition: 'bottom center',
  childButtons: marker
});
JinrToolbar({
  formatTypeName: 'jinr-editor-tools/jinr-font-size',
  formatTitle: 'フォントサイズ',
  formatClass: 'jinr-d--font-size',
  tagName: 'span',
  toolbarButtonId: 'jinr-font-size',
  toolbarButtonClass: 'font-size',
  toolbarButtonIcon: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__["createElement"])(_icons_jinr_fontsize_svg__WEBPACK_IMPORTED_MODULE_3__["ReactComponent"], null),
  toolbarButtonLabel: 'jinr-font-size',
  tooltipLabel: 'フォントサイズ',
  dropdownPosition: 'bottom center',
  childButtons: fontsize
});

/***/ }),

/***/ "@wordpress/api-fetch":
/*!**********************************!*\
  !*** external ["wp","apiFetch"] ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["apiFetch"]; }());

/***/ }),

/***/ "@wordpress/block-editor":
/*!*************************************!*\
  !*** external ["wp","blockEditor"] ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["blockEditor"]; }());

/***/ }),

/***/ "@wordpress/blocks":
/*!********************************!*\
  !*** external ["wp","blocks"] ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["blocks"]; }());

/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["components"]; }());

/***/ }),

/***/ "@wordpress/compose":
/*!*********************************!*\
  !*** external ["wp","compose"] ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["compose"]; }());

/***/ }),

/***/ "@wordpress/data":
/*!******************************!*\
  !*** external ["wp","data"] ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["data"]; }());

/***/ }),

/***/ "@wordpress/date":
/*!******************************!*\
  !*** external ["wp","date"] ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["date"]; }());

/***/ }),

/***/ "@wordpress/edit-post":
/*!**********************************!*\
  !*** external ["wp","editPost"] ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["editPost"]; }());

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["element"]; }());

/***/ }),

/***/ "@wordpress/hooks":
/*!*******************************!*\
  !*** external ["wp","hooks"] ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["hooks"]; }());

/***/ }),

/***/ "@wordpress/i18n":
/*!******************************!*\
  !*** external ["wp","i18n"] ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["i18n"]; }());

/***/ }),

/***/ "@wordpress/plugins":
/*!*********************************!*\
  !*** external ["wp","plugins"] ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["plugins"]; }());

/***/ }),

/***/ "@wordpress/rich-text":
/*!**********************************!*\
  !*** external ["wp","richText"] ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["wp"]["richText"]; }());

/***/ }),

/***/ "lodash":
/*!*************************!*\
  !*** external "lodash" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["lodash"]; }());

/***/ }),

/***/ "react":
/*!************************!*\
  !*** external "React" ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = window["React"]; }());

/***/ })

/******/ });
//# sourceMappingURL=index.js.map