var eee = '111'
var getData = (function () {
    eee = '222' // 不声明var，会被全局搞混的
    var a = (new Date).valueOf();
    return function () {
        return eee;
    }
})();
var a = getData()
var b = getData()
var c = getData()
// eee='444'
console.log(a, b, c, eee)
setTimeout(function () {
    // console.log('www' + (new Date).valueOf());
    var d = getData()
    console.log(d)
}, 1000)