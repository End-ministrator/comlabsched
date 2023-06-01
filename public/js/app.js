/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

var userTheme = localStorage.getItem("theme");
var systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches;
// initial Theme check
var themeCheck = function themeCheck() {
  if (userTheme === "dark" || !userTheme && systemTheme) {
    document.documentElement.classList.add('dark');
    return;
  } else {
    document.documentElement.classList.remove('dark');
    return;
  }
};

// manual Theme Switch
var themeSwitch = function themeSwitch() {
  if (document.documentElement.classList.contains("dark")) {
    document.documentElement.classList.remove("dark");
    localStorage.setItem("theme", "light");
    return;
  }
  document.documentElement.classList.add("dark");
  localStorage.setItem("theme", "dark");
};
themeCheck();

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nSyntaxError: Unexpected token, expected \"(\" (43:14)\n    at unexpected (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\util.js:99:15)\n    at expect (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\util.js:86:5)\n    at parseFunctionParams (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\statement.js:649:16)\n    at parseMethod (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:924:34)\n    at parseObjectMethod (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:840:5)\n    at parseObjPropValue (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:890:21)\n    at parseObj (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:808:5)\n    at parseExprAtom (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:553:7)\n    at parseExprSubscripts (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:276:20)\n    at parseMaybeUnary (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\sucrase\\dist\\parser\\traverser\\expression.js:257:20)\n    at processResult (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\webpack\\lib\\NormalModule.js:758:19)\n    at C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\webpack\\lib\\NormalModule.js:860:5\n    at C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\Users\\DELL\\Desktop\\thesis\\node_modules\\postcss-loader\\dist\\index.js:142:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/css/app.css"]();
/******/ 	
/******/ })()
;