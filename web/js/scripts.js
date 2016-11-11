function clickImg(src) {
                /*var elmMax = document.getElementById('ImgMax');
                elmMax.src = src;*/
                var elmMax = document.getElementById('maxImg');
                elmMax.style.background = 'url(' + src + ') no-repeat center top fixed';
            }
            window.onscroll = function () {
                var menu = document.getElementById('menu');
                if (document.body.scrollTop > 500) {
                    menu.style.top = '0px';
                    menu.style.position = 'fixed';
                }
                else {
                    menu.style.position = 'fixed';
                    menu.style.top = (500 - document.body.scrollTop) + 'px';
                }
            }
            window.onload = function () {
                var arr = [];
                arr[0] = [1, 2, 3, 4, 5, 6];
                arr[1] = [7, 8, 9, 10, 11, 12];
                arr[2] = [13, 14, 15, 16, 17, 18];
                arrS0 = arr[0];
                for (var i = 0; i < arrS0.length; i++) {
                    var elm = document.getElementById('Img' + (i + 1));
                    elm.src = "/img/" + arrS0[i] + ".png";
                }
                var elmMax = document.getElementById('maxImg');
                elmMax.style.background = 'url(/img/' + arrS0[0] + '.png) no-repeat center top fixed';
            }