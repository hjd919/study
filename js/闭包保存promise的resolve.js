var getData = (function () {
    var _promise = null;
    return function () {
        if (!_promise) {
            console.log('zhixing1' + (new Date).valueOf())
            _promise = new Promise(function (resolve, reject) {
                console.log('zhixing2' + (new Date).valueOf())
                setTimeout(function () {
                    console.log('setTimeout');
                    resolve((new Date).valueOf());
                }, 1000);
            });
        }
        return _promise;
    }
})();
getData().then(function (res) { console.log('resovle1' + res) })
getData().then(function (res) { console.log('resovle2' + res) })
getData().then(function (res) { console.log('resovle3' + res) })

//2 
var qu = [];
var request = false;
var getData = function () {
    return new Promise(resolve => {
        if (request) {
            qu.push(resolve) // 缓存resolve
        } else {
            request = true
            new Promise(resolve => {
                setTimeout(() => {
                    console.log('请求url')
                    resolve(1)
                }, 1000);
            }).then(res => {
                qu.map(q => q(res))
            })
        }
    })
};
getData().then(function (res) { console.log('resovle1' + res) })
getData().then(function (res) { console.log('resovle2' + res) })
getData().then(function (res) { console.log('resovle3' + res) })
