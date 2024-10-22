/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/***/ (() => {

eval("var navbar = document.querySelector(\".navbar\");\nvar welcome = document.querySelector(\".welcome\");\nvar navbarToggle = document.querySelector(\"#navbarSupportedContent\");\nvar resizeBackgroundImg = function resizeBackgroundImg() {\n  var height = window.innerHeight - navbar.clientHeight;\n  welcome.style.height = \"\".concat(height, \"px\");\n};\nnavbarToggle.ontransitionend = resizeBackgroundImg;\nnavbarToggle.ontransitionstart = resizeBackgroundImg;\nwindow.onresize = resizeBackgroundImg;\nwindow.onload = resizeBackgroundImg;\ndocument.querySelector('main').classList.remove('py-4');//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcyIsIm5hbWVzIjpbIm5hdmJhciIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsIndlbGNvbWUiLCJuYXZiYXJUb2dnbGUiLCJyZXNpemVCYWNrZ3JvdW5kSW1nIiwiaGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzdHlsZSIsImNvbmNhdCIsIm9udHJhbnNpdGlvbmVuZCIsIm9udHJhbnNpdGlvbnN0YXJ0Iiwib25yZXNpemUiLCJvbmxvYWQiLCJjbGFzc0xpc3QiLCJyZW1vdmUiXSwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy93ZWxjb21lLmpzPzI2ZDIiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgbmF2YmFyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZiYXJcIik7XHJcbmNvbnN0IHdlbGNvbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLndlbGNvbWVcIik7XHJcbmNvbnN0IG5hdmJhclRvZ2dsZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbmF2YmFyU3VwcG9ydGVkQ29udGVudFwiKTtcclxuXHJcbmNvbnN0IHJlc2l6ZUJhY2tncm91bmRJbWcgPSAoKSA9PiB7XHJcbiAgICBjb25zdCBoZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQgLSBuYXZiYXIuY2xpZW50SGVpZ2h0O1xyXG4gICAgd2VsY29tZS5zdHlsZS5oZWlnaHQgPSBgJHtoZWlnaHR9cHhgO1xyXG59O1xyXG5cclxubmF2YmFyVG9nZ2xlLm9udHJhbnNpdGlvbmVuZCA9IHJlc2l6ZUJhY2tncm91bmRJbWc7XHJcbm5hdmJhclRvZ2dsZS5vbnRyYW5zaXRpb25zdGFydCA9IHJlc2l6ZUJhY2tncm91bmRJbWc7XHJcbndpbmRvdy5vbnJlc2l6ZSA9IHJlc2l6ZUJhY2tncm91bmRJbWc7XHJcbndpbmRvdy5vbmxvYWQgPSByZXNpemVCYWNrZ3JvdW5kSW1nO1xyXG5kb2N1bWVudC5xdWVyeVNlbGVjdG9yKCdtYWluJykuY2xhc3NMaXN0LnJlbW92ZSgncHktNCcpO1xyXG4iXSwibWFwcGluZ3MiOiJBQUFBLElBQU1BLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsU0FBUyxDQUFDO0FBQ2hELElBQU1DLE9BQU8sR0FBR0YsUUFBUSxDQUFDQyxhQUFhLENBQUMsVUFBVSxDQUFDO0FBQ2xELElBQU1FLFlBQVksR0FBR0gsUUFBUSxDQUFDQyxhQUFhLENBQUMseUJBQXlCLENBQUM7QUFFdEUsSUFBTUcsbUJBQW1CLEdBQUcsU0FBdEJBLG1CQUFtQkEsQ0FBQSxFQUFTO0VBQzlCLElBQU1DLE1BQU0sR0FBR0MsTUFBTSxDQUFDQyxXQUFXLEdBQUdSLE1BQU0sQ0FBQ1MsWUFBWTtFQUN2RE4sT0FBTyxDQUFDTyxLQUFLLENBQUNKLE1BQU0sTUFBQUssTUFBQSxDQUFNTCxNQUFNLE9BQUk7QUFDeEMsQ0FBQztBQUVERixZQUFZLENBQUNRLGVBQWUsR0FBR1AsbUJBQW1CO0FBQ2xERCxZQUFZLENBQUNTLGlCQUFpQixHQUFHUixtQkFBbUI7QUFDcERFLE1BQU0sQ0FBQ08sUUFBUSxHQUFHVCxtQkFBbUI7QUFDckNFLE1BQU0sQ0FBQ1EsTUFBTSxHQUFHVixtQkFBbUI7QUFDbkNKLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLE1BQU0sQ0FBQyxDQUFDYyxTQUFTLENBQUNDLE1BQU0sQ0FBQyxNQUFNLENBQUMiLCJpZ25vcmVMaXN0IjpbXX0=\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/welcome.js"]();
/******/ 	
/******/ })()
;