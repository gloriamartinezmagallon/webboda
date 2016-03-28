var end = new Date('09/10/2016 00:30 PM');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById('countdown').innerHTML = (days < 10 ? "0"+days : days) + ' días ';
        document.getElementById('countdown').innerHTML += (hours < 10 ? "0"+hours : hours) + ':';
        document.getElementById('countdown').innerHTML += (minutes < 10 ? "0"+minutes : minutes) + ':';
        document.getElementById('countdown').innerHTML += (seconds < 10 ? "0"+seconds : seconds) ;
    }

    timer = setInterval(showRemaining, 1000);